
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

    <title>Show Sub Category</title>
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

                     <li class="list-group-item list-group-item-action  active">
                       <a href="<?php echo base_url().'index.php/SubCatCtrl/SubcatShow';?>">Show SUB CATEGORY</a>
                    </li>

                    
                    <li class="list-group-item list-group-item-action ">
                       <a href="<?php echo base_url().'index.php/ShowCtrl/showproduct';?>">SHOW PRODUCT</a>
                    </li>

                    <li class="list-group-item list-group-item-action ">
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
                   <div class="col-sm-12">
                        <div class="col-sm-12 mt-5">
                          <center> <h2 class=""> See Your Added Sub  Category</h2></center>
                         <table class="table table-success table-striped mt-4">
                      <tr>
                        <th scope="col"> ID</th>
                        <th scope="col"> Name</th>
                         <th scope="col"> CAT ID</th>
                        <th scope="col"> Created</th>
                        <th scope="col"> Updated</th>
                      </tr>   
                       <?php if(!empty($sub_category))  {foreach($sub_category as    $subcat) { ?>
                     
                      <tr>
                        <td scope="row"> <?php echo $subcat['sabcat_id'] ?></td>
                        <td> <?php echo $subcat['subcat_name'] ?></td>
                        <td> <?php echo $subcat['cat_id'] ?></td>
                         <td> <?php echo $subcat['created_at'] ?></td>
                          <td> <?php echo $subcat['updated_at'] ?></td>
                       
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
          </div>

      </div>
</div>


                                          <!-- //main -->
    