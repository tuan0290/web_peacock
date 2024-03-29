<?= $this->extend('admin/_Layout') ?>
<?= $this->section('content_Admin') ?>
<?php if ($message == "success") : ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Admin</h5>
                <h6 class="card-subtitle">all projects Admin</h6>
                <div class="table-responsive">
                    <table id="example23" class="table table-striped">
                        <?php
                        session_start();
                        ?>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($user as $row) : ?>
                                <tr class="obj-item">
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['username'] ?></td>
                                    <td><?= $row['fullname'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['birthday'] ?></td>
                                    <td><?= $row['phone_number'] ?></td>
                                    <td><?php if ($row['role_id'] == '1') {
                                            echo 'Admin';
                                        } else if ($row['role_id'] == '3') {
                                            echo 'Employee';
                                        } else {
                                            echo 'User' ;
                                        }

                                    ?></td>
                                    <td>
                                        <div class="obj-action">
                                            <div class="ac">

                                                <a href="<?php echo base_url() . '/admin/profile?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                            <div class="ac">
                                                <a href="<?php echo base_url() . '/admin/admin/edit?id=' . $row['id'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="far fa-edit"></i> </a>
                                            </div>
                                            <div class="ac">
                                                <a href="<?php echo base_url() . '/admin/admin/delete?username=' . $row['username'] ?>" data-toggle="tooltip" data-placement="bottom" onclick="return confirm('Are you sure?');" id="sa-confirm" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php elseif ($message == "fail") : ?>
    <div class="alert alert-danger">
        <strong>Bạn không có quyền!</strong> 
    </div>
<?php endif; ?>


<!-- ============================================================== -->
<!-- End Page Content -->
<?= $this->endSection() ?>