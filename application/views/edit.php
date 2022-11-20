<!-- MAIN CONTENT -->
<div class="container">
    <div class="mt-4 border border-3">
        <form class="m-4" name="createUser" method="post" action="<?php echo base_url() . 'index.php/user/edit/' . $user['user_id']; ?>">
            <h3 class="mb-4">Update User</h3>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name="name" value="<?php echo set_value('name', $user['name']); ?>" class="form-control rounded-0" id="exampleInputName" aria-describedby="emailHelp">
                <?php echo form_error('name'); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email address</label>
                <input type="email" name="email" value="<?php echo set_value('email', $user['email']); ?>" class="form-control rounded-0" id="exampleInputEmail">
                <?php echo form_error('email'); ?>
            </div>
            <button class="btn btn-primary rounded-0">Update</button>
            <a href="<?php echo base_url() . 'index.php/user/index/' ?>" class="btn btn-danger rounded-0 text-white text-decoration-none">Back to User List</a>
        </form>
    </div>
</div>