
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


                          
   <div class="container-fluid " >
      <div class="row justify-content-between" >
           
           <div class="col-sm-3" id="dashLinkList">
               
                <ul class="list-group  " id="dashLink">

                   <li class="list-group-item list-group-item-action py-4 " aria-current="true" >
                      <a href="<?php echo base_url().'index.php/AdminCtrl/dashboard';?>"></a>
                    </li>
                    
                    <li class="list-group-item list-group-item-action " aria-current="true">
                      <a href="<?php echo base_url().'index.php/AdminCtrl/dashboard';?>">DASHBOARD</a>
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
                    
                    <li class="list-group-item list-group-item-action">
                       <a href="<?php echo base_url().'index.php/ProductCtrl/Addproduct';?>">ADD PRODUCT</a>
                    </li> 

                    <li class="list-group-item list-group-item-action ">
                       <a href="<?php echo base_url().'index.php/ShowCtrl/showproduct';?>">SHOW PRODUCT</a>
                    </li>


                    <li class="list-group-item list-group-item-action">
                      <a href="<?php echo base_url().'index.php/AdminAuth/adminsignup';?>">ADMIN REGISTRATION</a>
                    </li>

                    <li class="list-group-item list-group-item-action">
                      <a href="<?php echo base_url().'index.php/AdminCtrl/userList';?>">USER LIST</a>
                    </li>

                    <li class="list-group-item list-group-item-action active">
                      <a href="<?php echo base_url().'index.php/AdminCtrl/adminList';?>">ADMIN LIST</a>
                    </li>
                </ul>
           </div>

           <div class="col-sm-9 " >
                   <div class="row justify-content-end mt-5 mx-5">
                         <div class="col-sm-7"> 
            <div class="card" >
          <div class="card-header">
         <center><h3>ADD SUB CATEGORY</h3></center>
      <center> <hr  style="width: 70%"></center>
  </div>
            <form action="<?php echo base_url().'index.php/SubCatCtrl/SubCategoryAdd'?>" method="post" name="subcatForm" id="subcatForm">
           <div class="card-body" style="background: #fff;">         
          <div class="form-group my-4">
              <!-- <label for="subcat_name">Sub Category Name</label> -->
              <input type="text" name="subcat_name" id="subcat_name" placeholder="Enter a Sub Category Name" value="" class="form-control">
              <p><?php echo form_error('subcat_name');?></p>
          </div>
              <div class="form-group ">
                <SELECT name="category" class="form-control " id="category">
              <option value="0">Select  Category<span> <i class="fas fa-sort-down"></i></span></option>
              <?php
              foreach ($cat as $c) {
                echo '<option value="'.$c['cat_id'].'">'.$c['cat_id']." ".$c['cat_name'].'</option>';
              }
            ?>
          </SELECT>

              <center>
             <div class="form-group my-4" >
                 <button class="btn  btn-block btn-primary "style=" width: 300px;">ADD NOW</button>
            </div>
          </center>
          
      </div>
   </form>
</div>

          </div>

                </div>
                        </div>
            
         </div>
      </div>
</div>


                                          <!-- //main -->
    
  
    
    
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
