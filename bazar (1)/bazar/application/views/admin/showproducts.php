
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

    <title>Show Products</title>
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
      <div class="row justify-content-around">
           
           <div class="col-sm-3" id="dashLinkList">
               
                <ul class="list-group " id="dashLink">

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
                       <a href="<?php echo base_url().'index.php/CategoryCtrl/CategoryAdd';?>">ADD SUB CATEGORY</a>
                    </li>

                     <li class="list-group-item list-group-item-action  ">
                       <a href="<?php echo base_url().'index.php/SubCatCtrl/SubcatShow';?>">Show SUB CATEGORY</a>
                    </li>

                    
                     <li class="list-group-item list-group-item-action ">
                       <a href="<?php echo base_url().'index.php/ProductCtrl/Addproduct';?>">ADD PRODUCT</a>
                    </li> 

                    <li class="list-group-item list-group-item-action active">
                       <a href="<?php echo base_url().'index.php/ShowCtrl/showproduct';?>">SHOW PRODUCT</a>
                    </li>

                    <li class="list-group-item list-group-item-action">
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

           <div class="col-sm-9">
               <div class="" style="text-align: end; font-size: 1.2rem;">
                 <a class="btn" style=" font-size: 1.2rem; text-decoration: underline; color: red;" href="<?php echo base_url().'index.php/ProductCtrl/Addproduct'; ?>"><b>ADD PRODUCT NOW</b></a>
               </div>
                     <?php
                      $success = $this->session->userdata('success');
       if($success != ""){
        ?>
       <div class="alert alert-success"><?php echo $success; ?></div>
         <?php 
          }
          ?>
          <?php
          $failure = $this->session->userdata('failure');
          if ($failure != "") {
             ?>
             <div class="alert alert-success"> <?php echo $failure; ?></div>
             <?php
                }
                ?> 
           <div class="col-sm-12" id="table">
           <center> <h2> See Your Added Product</h2></center>
               <table class="table table-striped mt-4">
                      <tr>
                        <th> ID</th>
                        <th> Name</th>
                        <th>SUBCAT ID</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Unit Price</th>
                        <th>Action</th>
                      </tr>

                 <?php if(!empty($products))  {foreach($products as    $prdct) { ?>
                     
                      <tr>
                        <td> <?php echo $prdct['prod_id'] ?></td>
                        <td> <?php echo $prdct['prod_name'] ?></td>
                        <td> <?php echo $prdct['subcat_id'] ?></td>
                        <td> <?php echo $prdct['prod_quantity'] ?></td>
                         <td> <?php echo $prdct['prod_image'] ?></td>
                        <td> <?php echo $prdct['prod_unitPrice'] ?></td>
                         <td> <a href="<?php echo base_url().'index.php/productCtrl/EditProd/'.$prdct['prod_id'];?>">EDIT</a> &nbsp/&nbsp <a href="<?php echo base_url().'index.php/ProductCtrl/DeleteProd/'.$prdct['prod_id'];?>">DELETE</a> </td>
                      </tr>
              
                 <?php } } else {?>
                      <tr>
                        <td colspan="5"> Record not found</td>
                      </tr>
                <?php } ?>
                </table>
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
