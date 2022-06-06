<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            "User_model" => "User"
        ]); //load model
    }

    public function index(){
        $data["title"] = "List Data User";
        $data["data_user"] = $this->User->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('content', $data);
    }

    public function add($message = ""){

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('User/form_add',["message" => $message]);
        $this->load->view('templates/footer');

    }

    public function action(){
        // ambil data dari form dan masukkan ke variable $data
        $data=$this->input->post();

        $opr = false;
        $message = "";

        $dataIns = array(
            "user_name" => $data['Nama'],
            "user_username" => $data['Username'],
            "user_role" => $data['Role'],
        );

        // upload foto
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        $this->load->library('upload', $config);

        // jika salah
        if ( ! $this->upload->do_upload('photo'))
        {
                $error = $this->upload->display_errors();
                $message = strip_tags($error);
        }else
        {
            $file = $this->upload->data();
            $dataIns['user_image'] = $file['file_name'];
        }

        $validation = $this->form_validation;
        $validation->set_rules($this->User->rules());
        if($validation->run() && $message == ""){
            $opr = $this->User->save($dataIns);
            if($opr == true){
                $message = "Data berhasil diinput";
            }else{
                $message = "Data gagal diinput";
            }
        }

        if($opr){
            $this->table($message);
        }else{
            $this->add($message);
        }
    }
    
    public function table($message = ""){
        $data["title"] = "List Data User";
        $data["data_user"] = $this->User->getAll();
        $data["message"] = $message;
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('user/table', $data);
    }
    
}