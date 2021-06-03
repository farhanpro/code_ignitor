
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

    <title>Edit Page</title>
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

     
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="card" >
               <div class="card-header">
                  <center><h3>Update Product</h3></center> <hr>
               </div>
                   <form action="<?php echo base_url().'index.php/AddPrdctCtrl/EditProd/'.$prod['product_id'];?>" method="post" name="registerForm" id="registerForm">
                <div class="card-body" style="background: #ECF0F1;">         
                      <div class="form-group">
                      <label for="product_name">Product Name</label>
                      <input type="text" name="product_name" id="product_name" value="<?php echo set_value('product_name',$prod['product_name']); ?>" placeholder="Enter a Product Name" value="" class="form-control">
                      <p><?php echo form_error('product_name');?></p>
                </div>

                <div class="form-group">
                      <label for="cat_name">Sub Category ID</label>
                      <input type="text" name="cat_name" id="cat_name" placeholder="Enter a sub Category ID" class="form-control" value="<?php echo set_value('cat_name',$prod['cat_name']); ?>">
                      <p><?php echo form_error('cat_name');?></p>
                </div>
                <div class="form-group">
                       <label for="product_quantity">Product Quantity</label>
                       <input type="text" name="product_quantity" id="product_quantity" placeholder="Enter a product quantity" class="form-control" value="<?php echo set_value('product_quantity',$prod['product_quantity']); ?>">
                       <p><?php echo form_error('product_quantity');?></p>
                </div>
                <div class="form-group">
                       <label for="product_image">product Image </label>
                       <input type="file" name="product_image" id="product_image" value="<?php echo set_value('product_image',$prod['product_image']); ?>" class="form-control">
                       <p><?php echo form_error('product_image');?></p>
                </div>
                <div class="form-group">
                       <label for="product_unit_price">product Unit price </label>
                       <input type="text" name="product_unit_price" id="product Unit price" placeholder="Enter a product_price" value="<?php echo set_value('product_unit_price',$prod['product_unit_price']); ?>"class="form-control">
                       <p><?php echo form_error('product_unit_price');?></p>
                </div>
  
                <center>
                <div class="form-group " >
                      <button class="btn  btn-block btn-primary "style=" width: 300px;">Update NOW</button>
                </div>
                </center>
             </div>
               </form>
           </div>
         </div>
		</div>
	</div>
</div>


