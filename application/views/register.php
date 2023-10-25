<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ;?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ;?>">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
            <div class="card mt-3">
            <?php if ($this->session->flashdata('msg')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
        <?php endif; ?>
                <div class="card-header">
                    <h5 class="card-title">Register Here</h5>
                </div>
                <form enctype="multipart/form-data" name="registerFrm" id="registerFrm" method="post" action="<?php echo base_url('Auth/register') ;?>">
                    <div class="card-body register">
                        <p class="card-text">Please fill with your details</p>
                        <div class="form-group">
                            <label for="first_name" class="pb-1">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control <?php echo (form_error('first_name') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('first_name') ;?>" placeholder="First Name">
                            <?php echo form_error('first_name');?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="last_name" class="pb-1">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control <?php echo (form_error('last_name') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('last_name') ;?>" placeholder="Last Name">
                            <?php echo form_error('last_name');?>   
                        </div>
                        <div class="form-group mt-2">
                            <label for="email" class="pb-1">Email</label>
                            <input type="text" name="email" id="email" class="form-control <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('email') ;?>" placeholder="Email">
                            <?php echo form_error('email');?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="phone" class="pb-1">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('phone') ;?>" placeholder="Phone">
                            <?php echo form_error('phone');?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="password" class="pb-1">Password</label>
                            <input type="password" name="password" id="password" class="form-control <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('password') ;?>" placeholder="Password">
                            <?php echo form_error('password');?>
                        </div><br>

                        <div class="form-group pb-5">
                            <button type="submit" class="btn btn-primary btn-lg btn-block form-control">Register Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>