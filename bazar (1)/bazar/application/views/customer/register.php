<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Registration </title>
  </head>
  <body>
  <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-sm-8">
             <?php
       $msg = $this->session->flashdata('msg');
       if($msg != "")
       {
        echo "<div class='alert alert-success'>'.$msg.' </div>";
       }
    ?>
    <div class="card" >
  <div class="card-header">
<center><h4>Registration Form</h4></center>
  </div>
  <form action="<?php echo base_url().'index.php/Auth/register'?>" method="post" name="registerForm" id="registerForm">
  <div class="card-body" style="background: #ECF0F1;">
    <p class="card-text ">Please Fill Your Details.</p>
           <div class="row">
              <div class="col-sm-6">
              <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" name="first_name" id="first_name" placeholder="first name" value="" class="form-control">
              <p><?php echo form_error('first_name');?></p>
          </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" id="last_name" placeholder="last name" value="" class="form-control">
              <p><?php echo form_error('last_name');?></p>
          </div>
           </div>
         </div>

          <div class="row">
              <div class="col-sm-6">
             <div class="form-group">
              <label for="phone">Phone No </label>
              <input type="text" name="phone" id="phone" placeholder="Phone Number" value="" class="form-control">
              <p><?php echo form_error('phone');?></p>
            </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
              <label for="area">Area</label>
              <input type="text" name="area" id="area" placeholder="area" value="" class="form-control">
              <p><?php echo form_error('phone');?></p>
           </div>
           </div>
        </div>

         <div class="row">
              <div class="col-sm-6">
             <div class="form-group">
              <label for="city">City </label>
              <input type="text" name="city" id="city" placeholder="city" value="" class="form-control">
              <p><?php echo form_error('city');?></p>
          </div>
            </div>
           <div class="col-sm-6">
           <div class="form-group">
              <label for="state">State </label>
              <input type="text" name="state" id="state" placeholder="state" value="" class="form-control">
              <p><?php echo form_error('state');?></p>
          </div>
        </div>
      </div>

        <div class="row">
              <div class="col-sm-6">
             <div class="form-group">
              <label for="pin_code">PIN Code </label>
              <input type="text" name="pin_code" id="pin_code" placeholder="pin code" value="" class="form-control">
              <p><?php echo form_error('pin_code');?></p>
          </div>
            </div>
           <div class="col-sm-6">
           <div class="form-group">
              <label for="email">email</label>
              <input type="text" name="email" id="email" placeholder="Email" value="" class="form-control">
              <p><?php echo form_error('email');?></p>
          </div>
        </div>
      </div>


      <div class="row">
              <div class="col-sm-6">
              <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" placeholder="Username" value="" class="form-control">
              <p><?php echo form_error('username');?></p>
          </div>
            </div>
           <div class="col-sm-6">
           <div class="form-group">
              <label for="password">password</label>
              <input type="password" name="password" id="password" placeholder="Password" value="" class="form-control">
              <p><?php echo form_error('password');?></p>
          </div>
        </div>
        <center>
           <div class="form-group " >
             <button class="btn  btn-block btn-default bg-dark  " style=" width: 300px; color: wheat; font-size: 1.2rem;">REGISTER NOW</button>
          </div>
        </center>

      </div>      
 </div>
   
   <center>
    <p style="margin-top: 20px; font-size: 1.1rem; color: maroon;">Already Have an account ! &nbsp<a href="<?php echo base_url().'index.php/welcome/index'; ?>" style="color: black; text-decoration: none;text-decoration: underline;">SIGNIN</a></p>
  </center>
  </form>
</div>

      </div>
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
