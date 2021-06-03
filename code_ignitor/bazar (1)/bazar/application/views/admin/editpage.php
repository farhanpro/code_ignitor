
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
                   <form action="<?php echo base_url().'index.php/ProductCtrl/EditProd/'.$prod['prod_id'];?>" method="post" name="registerForm" id="registerForm">
                <div class="card-body" style="background: #ECF0F1;">         
                      <div class="form-group">
                      <label for="prod_name">Product Name</label>
                      <input type="text" name="prod_name" id="prod_name" value="<?php echo set_value('prod_name',$prod['prod_name']); ?>" placeholder="Enter a Product Name" value="" class="form-control">
                      <p><?php echo form_error('prod_name');?></p>
                </div>

                <div class="form-group">
                      <label for="subcat_id">Sub Category ID</label>
                      <input type="text" name="subcat_id" id="subcat_id" placeholder="Enter a sub Category ID" class="form-control" value="<?php echo set_value('subcat_id',$prod['subcat_id']); ?>">
                      <p><?php echo form_error('subcat_id');?></p>
                </div>
                <div class="form-group">
                       <label for="prod_quantity">Product Quantity</label>
                       <input type="text" name="prod_quantity" id="prod_quantity" placeholder="Enter a product quantity" class="form-control" value="<?php echo set_value('prod_quantity',$prod['prod_quantity']); ?>">
                       <p><?php echo form_error('prod_quantity');?></p>
                </div>
                <div class="form-group">
                       <label for="">product Image </label>
                       <input type="file" name="prod_image" id="prod_image" value="<?php echo set_value('prod_image',$prod['prod_image']); ?>" class="form-control">
                       <p><?php echo form_error('product_image');?></p>
                </div>
                <div class="form-group">
                       <label for="prod_unitPrice">product Unit price </label>
                       <input type="text" name="prod_unitPrice" id="product Unit price" placeholder="Enter a product_price" value="<?php echo set_value('prod_unitPrice',$prod['prod_unitPrice']); ?>"class="form-control">
                       <p><?php echo form_error('prod_unitPrice');?></p>
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


