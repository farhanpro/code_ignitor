
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <!-- Style Sheet CSS -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css/shopingBazar.css'); ?>">

    <title>Admin Registration</title>
     <style type="text/css">

   
    
       
    </style>
  </head>
  <body>
                               <!-- Header -->
     <div class="container-fluid bg-dark">
         <div class="row " id="dash-nav">
              <div class="col-sm-3 nameDiv" >
                    <h4 >WELCOME</h4>
                    <h3 class="">User name</h3>
              </div>
              <div class="col-sm-7 " >
                   <h2 class="" style="color:white;padding-top: 40px; ">SHOPING BAZAR <span>DASHBOARD</span></h2>
              </div>
              <div class="col-sm-2 ">     
                     <a style="" class="btn logoutBtn" href="<?php echo base_url().'index.php/AdminCtrl/adminLogin'; ?>" >LOGOUT</a>
              </div>
              </div> 
                     
        </div>
     </div> 

                                          <!-- main -->
<div class="container-fluid " >
      <div class="row justify-content-between" >
           
           <div class="col-sm-3"id="dashLinkList">
               
                <ul class="list-group " id="dashLink">

                   <li class="list-group-item list-group-item-action py-4 " aria-current="true" >
                      <a href="<?php echo base_url().'index.php/AdminCtrl/dashboard';?>"></a>
                    </li>

                    <li class="list-group-item list-group-item-action " aria-current="true">
                      <a href="<?php echo base_url().'index.php/AdminCtrl/dashboard';?>">DASHBOARD</a>
                    </li>
                   
                    <li class="list-group-item list-group-item-action">
                       <a href="<?php echo base_url().'index.php/ProductCtrl/Addproduct';?>">ADD PRODUCT</a>
                    </li>

                      <li class="list-group-item list-group-item-action  ">
                       <a href="<?php echo base_url().'index.php/CategoryCtrl/CategoryAdd';?>">ADD CATEGORY</a>
                    </li>

                    <li class="list-group-item list-group-item-action  ">
                       <a href="<?php echo base_url().'index.php/CategoryCtrl/CatShow';?>">SHOW CATEGORY</a>
                    </li>

                    <li class="list-group-item list-group-item-action  ">
                       <a href="<?php echo base_url().'index.php/SubCatCtrl/SubCategoryAdd';?>">ADD SUB CATEGORY</a>
                    </li>

                     <li class="list-group-item list-group-item-action  ">
                       <a href="<?php echo base_url().'index.php/SubCatCtrl/SubcatShow';?>">Show SUB CATEGORY</a>
                    </li>

                    
                    <li class="list-group-item list-group-item-action ">
                       <a href="<?php echo base_url().'index.php/ShowCtrl/showproduct';?>">SHOW PRODUCT</a>
                    </li>

                    <li class="list-group-item list-group-item-action active">
                      <a href="<?php echo base_url().'index.php/AdminAuth/adminsignup';?>">ADMIN REGISTRATION</a>
                    </li>

                    <li class="list-group-item list-group-item-action">
                      <a href="<?php echo base_url().'index.php/AdminCtrl/userList';?>">USER LIST</a>
                    </li>

                    <li class="list-group-item list-group-item-action">
                      <a href="<?php echo base_url().'index.php/AdminCtrl/adminList';?>">ADMIN LIST</a>
                    </li>
                </ul>
           </div>

           <div class="col-sm-9 " >
               <div class="row justify-content-center">
                   <div class="col-sm-8">
                       <!-- <?php
       $msg = $this->session->flashdata('msg');
       if($msg != "")
       {
        echo "<div class='alert alert-success'>'.$msg.' </div>";
       }
    ?> -->
    <div class="card"  >
  <div class="card-header" >
<center><h4>Admin Registration Form</h4></center>
  </div>
  <form action="<?php echo base_url().'index.php/AdminAuth/adminsignup'?>" method="post" name="adminregisterForm" id="adminregisterForm">
  <div class="card-body" style="background: #ffff;">
    <p class="card-text ">Please Fill Your Details.</p>
          <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" name="first_name" id="first_name" placeholder="first name" value="" class="form-control">
              <p><?php echo form_error('first_name');?></p>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" id="last_name" placeholder="last name" value="" class="form-control">
              <p><?php echo form_error('last_name');?></p>
          </div>
           <div class="form-group">
              <label for="email">email</label>
              <input type="text" name="email" id="email" placeholder="Email" value="" class="form-control">
              <p><?php echo form_error('email');?></p>
          </div>
           <div class="form-group">
              <label for="phone">Phone No </label>
              <input type="text" name="phone" id="phone" placeholder="Phone Number" value="" class="form-control">
              <p><?php echo form_error('phone');?></p>
          </div>
           <div class="form-group">
              <label for="password">password</label>
              <input type="password" name="password" id="password" placeholder="Password" value="" class="form-control">
              <p><?php echo form_error('password');?></p>
          </div>
          
           <center>
            <div class="form-group " >
             <button class="btn  btn-block btn-primary " style="width: 300px;">REGISTER NOW</button>
          </div>
        </center>

  </div>
   <center><p style="margin-top: 20px; font-size: 1.1rem; color: maroon;">You Have all ready account Then Go To  ! &nbsp<a href="<?php echo base_url().'index.php/AdminCtrl/adminLogin'; ?>" style="color: black; text-decoration: none; text-decoration: underline;">SIGNIN</a></p></center>
  </form>
</div>
                   </div>
               </div>

           </div>

      </div>
</div>


                                          <!-- //main -->
    