<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

     <!-- Style Sheet CSS -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css/shopingBazar.css'); ?>">

    <title>Admin Login</title>
   
  </head>
  <body>
  <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-sm-4">
              <?php
       $msgs = $this->session->flashdata('msgs');
       if($msgs != "")
       {
        echo "<div class='alert alert-success'>'.$msgs.' </div>";
       }
    ?> 
    <div class="card" id="loginDiv">
  <div class="card-header">
<center><h4>ADMIN LOGIN</h4></center>
  </div>
  <form action="<?php echo base_url().'index.php/AdminCtrl/adminlogin';?>" method="post" name="loginForm" id="loginForm">
  <div class="card-body">
    <p class="card-text">Please LOGIN Here ...!</p>
          
           <div class="form-group">
              <label for="email">email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="" >
              <p><?php echo form_error('email');?></p>
          </div>
          
           <div class="form-group">
              <label for="password">password</label>
              <input type="password" name="password" id="password" placeholder="Password" value="" class="form-control">
              <p><?php echo form_error('password');?></p>
          </div>

           <div class="form-group">
             <center> <button class="btn  btn-primary " style="width:150px;">LOGIN</button></center>
          </div>
  </div>
  <center><p  style="margin-top: 20px; font-size: 1.1rem; color: maroon;">Please registration here   ! &nbsp<a href="<?php echo base_url().'index.php/AdminAuth/adminsignup'; ?>" style="color: black; text-decoration: none; text-decoration: underline;">Sign Up</a></p></center>
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
