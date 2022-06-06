<?php
if($message != ""){
    echo '<script type="text/javascript">';
    echo ' alert("'.$message.'")';  //not showing an alert box.
    echo '</script>';
}
 ?>

<div class="container pt-5">
    <h3>Input Data User</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>User</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url() ?>index.php/user/action" method="post" autocomplete="off" id="FrmAddUser" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Name" name="Nama" value=" <?= set_value('Nama'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Name') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Username</legend>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Username" name="Username" value=" <?= set_value('Username'); ?>">
                                    <small class="text-danger">
                                        <?php echo form_error('Username') ?>
                                    </small>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('Username') ?>
                                </small>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Role" name="Role" value=" <?= set_value('Role'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Role') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Profile Picture</label>
                        <div class="col-sm-10">
                            <input type="file" accept="image.png, image/jpeg" name="photo">
                            <small class="text-danger">
                                <?php echo form_error('Profile') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>