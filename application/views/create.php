<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD - CodeI</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar bg-light">
            <div class="container">
                <span class="navbar-brand mb-0 h1">CRUD - CodeIgniter</span>
            </div>
        </nav>
        <!-- MAIN CONTENT -->
        <div class="container">
            <div class="mt-4 border border-3">
                <form class="m-4" name="createUser" method="post" action="<?php echo base_url().'index.php/user/create'; ?>">
                    <h3 class="mb-4">Create User</h3>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control rounded-0" id="exampleInputName" aria-describedby="emailHelp">
                        <?php echo form_error('name'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email address</label>
                        <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control rounded-0" id="exampleInputEmail">
                        <?php echo form_error('email'); ?>
                    </div>
                    <button class="btn btn-primary rounded-0">Submit</button>
                    <a href="<?php echo base_url().'index.php/user/index/'?>" class="btn btn-danger rounded-0 text-white text-decoration-none">Back to User List</a>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>