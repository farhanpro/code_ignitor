<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Cascading Style Sheet-->
    <link rel="stylesheet" href="<?php echo  base_url('assets\CSS/worldofdresses.css');?>">

    <title>Add Product</title>
  </head>
  <style>
  
    </style>
  <body>
 
    

      
         <!-- Product Add form -->
         <div class="row  ">
         <div class="col-sm-4"></div>
             <div class="col-sm-6">
             <div class="card">
              <div class="card-header" style="background-color:white;">
                 <center><h4>Add Product</h4></center>
              </div>
              <div class="card-body">
            <form action="<?php echo base_url().'index.php/AddPrdctCtrl/Addproduct'?>" method="post" name="registerForm" id="registerForm">          
              
              <div class="form-group">
                <label for="product_name">Product Name </label>
                <input type="text" name="product_name" id="product_name" placeholder="Insert a Product Name " value="" class="form-control">
                <p><?php echo form_error('product_name');?></p>
              </div>

              <div class="form-group">
                <label for="cat_name"> Category Name</label>
                <input type="text" name="cat_name" id="cat_name" placeholder="Insert a Which Category " value="" class="form-control">
                <p><?php echo form_error('cat_name');?></p>
              </div>

              <div class="form-group">
                <label for="product_quantity">Product Quantity </label>
                <input type="text" name="product_quantity" id="product_quantity" placeholder="Insert a Product Quantity " value="" class="form-control">
                <p><?php echo form_error('product_quantity');?></p>
              </div>

              <div class="form-group">
                <label for="product_unit_price">Product Price </label>
                <input type="text" name="product_unit_price" id="product_unit_price" placeholder="Insert a Product Unit Price " value="" class="form-control">
                <p><?php echo form_error('product_unit_price');?></p>
              </div>

              <div class="form-group">
                <label for="product_image">Product Image </label>
                <input type="file" name="product_image" id="product_image" placeholder="Insert a Product Image  " value="" class="form-control">
                <p><?php echo form_error('product_image');?></p>
              </div>

              <center> <div class="form-group " >
              <button class="btn  btn-block btn-default bg-dark register-btn " >ADD NOW</button>
               </div></center> 

            </form>
             </div>
           </div>
             </div>
         </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>