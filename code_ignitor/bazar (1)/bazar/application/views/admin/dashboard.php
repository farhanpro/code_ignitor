
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

    <title>Dashboard</title>
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
           <div class="col-sm-3" id="dashLinkList" >
            <ul class="list-group" id="dashLink"  >
               <li class="list-group-item list-group-item-action py-4 " aria-current="true" >
                      <a href="<?php echo base_url().'index.php/AdminCtrl/dashboard';?>"></a>
                    </li>
                    <li class="list-group-item list-group-item-action active" aria-current="true" >
                      <a href="<?php echo base_url().'index.php/AdminCtrl/dashboard';?>">DASHBOARD</a>
                    </li>

                   
                    

                     <li class="list-group-item list-group-item-action  "   >
                       <a href="<?php echo base_url().'index.php/CategoryCtrl/CategoryAdd';?>">ADD CATEGORY</a>
                    </li>

                     <li class="list-group-item list-group-item-action  ">
                       <a href="<?php echo base_url().'index.php/CategoryCtrl/CatShow';?>">SHOW CATEGORY</a>
                    </li>

                    <li class="list-group-item list-group-item-action  ">
                       <a href="<?php echo base_url().'index.php/SubCatCtrl/SubCategoryAdd';?>">ADD SUB CATEGORY</a>
                    </li>

                     <li class="list-group-item list-group-item-action  ">
                       <a href="<?php echo base_url().'index.php/SubCatCtrl/SubcatShow';?>">SHOW SUB CATEGORY</a>
                    </li>

                    <li class="list-group-item list-group-item-action">
                       <a href="<?php echo base_url().'index.php/ProductCtrl/Addproduct';?>">ADD PRODUCT</a>
                    </li> 

                    <li class="list-group-item list-group-item-action ">
                       <a href="<?php echo base_url().'index.php/ProductCtrl/Addproduct';?>">SHOW PRODUCT</a>
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
           <div class="col-sm-9" >
                  <div class="row mt-5 justify-content-around">
                  	   <div class="col-sm-3" style="border: 2px solid #CAD5E2;height:130px;">
                  	        <div class="row">
                  	         	<div class="col-sm-5" style="background: #242B2E">
                  	   	             <i class="fal fa-users-crown my-4" style="font-size: 80px;color:white;"></i></div>
                                <div class="col-sm-7">
                                     <center><h2>Admin</h2></center><hr>
                                   <center>  <h2>01</h2></center>
                                </div>
                  	         </div>
                  	   </div>
                       
                  	   <div class="col-sm-3" style="border: 2px solid #CAD5E2;">
                  	   	     <div class="row">
                  	         	<div class="col-sm-5" style="background: #242B2E">
                  	   	             <i class="fas fa-shopping-cart my-4" style="font-size: 80px;color:white;"></i></div>
                                <div class="col-sm-7">
                                     <center><h2>Proudct</h2></center><hr>
                                        <center>  <h2>15</h2></center>
                                </div>
                  	         </div>
                  	   </div>
   
                  	   <div class="col-sm-3" style="border: 2px solid #CAD5E2;">
                  	        <div class="row">
                  	         	<div class="col-sm-5" style="background:#242B2E">
                  	   	             <i class="fas fa-users my-4" style="font-size: 80px;color:white;"></i></div>
                                <div class="col-sm-7">
                                     <center><h2>Users</h2></center><hr>
                                        <center>  <h2>08</h2></center>
                                </div>
                  	         </div>
                       </div>
           </div>
           
           <div class="row mt-5">
             <div class="col-sm-12" style="border: 1px solid maroon;">
                    
             </div>
           </div>

      </div>
</div>


                                          <!-- //main -->
                  



                                          
    <?php include('footer.php'); ?>