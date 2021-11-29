<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>login page</title>
    <style>
    #loginDiv{
      margin-top: 150px;
    }
    </style>
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
<center><h4>LOGIN FORM</h4></center>
  </div>
  <form action="<?php echo base_url().'index.php/Auth/login';?>" method="post" name="loginForm" id="loginForm">
  <div class="card-body" style="background: #ECF0F1;">
    <p class="card-text"> LOGIN To Your Account</p>
          
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

           <center>
             <div class="form-group ">
              <button class="btn  btn-default  bg-dark mt-3 " style=" width: 230px; color: wheat; font-size: 1.2rem;">LOGIN</button>
          </div>
           </center>
  </div></div>
  <center>
    <p style="margin-top: 10px; font-size: 1.1rem; color: maroon;">Haven't created an account  &nbsp<a href="<?php echo base_url().'index.php/Auth/register'; ?>" style="color: black; text-decoration: none;">SIGNUP</a></p>
  </center> <hr>
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
