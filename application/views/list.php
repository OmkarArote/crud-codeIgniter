<!-- MAIN CONTENT -->
        <div class="container">
            <div class="mt-4">
                <?php $success = $this->session->userdata('success');
                if($success != ''){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $success; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                <?php } ?>
                <?php $failuer = $this->session->userdata('failuer');
                if($failuer != ''){ ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo $failuer; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                <?php } ?>
                <?php $warning = $this->session->userdata('warning');
                if($warning != ''){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert"><?php echo $warning; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                <?php } ?>
            </div>
            <div class="mt-4 p-4 border border-3">
                <h3 class="mb-4">Users List <span class="badge bg-primary rounded-0"><a class="text-decoration-none text-white" href="<?php echo base_url().'index.php/user/create/'?>">Add User</a></span></h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th consplan="2" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($users)){ foreach($users as $user){ ?>
                        <tr>
                            <th scope="row"><?php echo $user["user_id"]?></th>
                            <td><?php echo $user["name"]?></td>
                            <td><?php echo $user["email"]?></td>
                            <td colspan="2">
                                <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-warning btn-sm">Edit</a>
                                <?php echo ' '?>
                                <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php }} else { ?>
                        <tr>
                            <td colspan="5">Record Not Found</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>