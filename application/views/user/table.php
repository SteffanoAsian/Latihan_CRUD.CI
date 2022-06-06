<?php
if($message != ""){
    echo '<script type="text/javascript">';
    echo ' alert("'.$message.'")';  //not showing an alert box.
    echo '</script>';
}
 ?>
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <a class="nav-link" href="<?= base_url('user/add') ?>">
              <h6 class="m-0 font-weight-bold text-primary">Add Data</h6>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <td></td>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Profile</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <td></td>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Profile</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($data_user as $row) : ?>
                      <tr>
                        <td>
                        <a href="<?= site_url('user/edit/' . $row->user_id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                        <a href="javascript:void(0);" data="<?= $row->user_id ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                        </td>
                        <td><?= $row->user_name ?></td>
                        <td><?= $row->user_username ?></td>
                        <td><?= $row->user_role ?></td>
                        <td><?= $row->user_image ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->