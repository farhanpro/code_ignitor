<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     
    <!-- Cascading Style Sheet-->
    <link rel="stylesheet" href="<?php echo  base_url('assets\CSS/worldofdresses.css');?>">
    
    <title>Document</title>
   
</head>
<body>
    
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sm-3 my-4 ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item" style="font-size:1.2rem;"><a href="<?php echo base_url('index.php');?>">Add Product</a></li>
    <li class="breadcrumb-item active" style="font-size:1.2rem;" aria-current="page">Add Products</li>
  </ol>
</nav>
        </div>
      </div>
    </div>

           <div class="col-sm-12">
              
                    
           <div class="col-sm-12" id="table">
           <center> <h2> See Your Added Product</h2></center>
               <table class="table table-hover mt-4">
                      <tr>
                        <th> ID</th>
                        <th> Name</th>
                        <th>CAT Name</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Unit Price</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>

                 <?php if(!empty($products))  {foreach($products as    $prdct) { ?>
                     
                      <tr>
                        <td> <?php echo $prdct['product_id'] ?></td>
                        <td> <?php echo $prdct['product_name'] ?></td>
                        <td> <?php echo $prdct['cat_name'] ?></td>
                        <td> <?php echo $prdct['product_quantity'] ?></td>
                         <td> <?php echo $prdct['product_image'] ?></td>
                        <td> <?php echo $prdct['product_unit_price'] ?></td>
                         <td> <a class="btn btn-info" href="<?php echo base_url().'index.php/AddPrdctCtrl/EditProd/'.$prdct['product_id'];?>">EDIT</a></td>
                          <td><a class="btn btn-danger" href="<?php echo base_url().'index.php/AddPrdctCtrl/DeleteProd/'.$prdct['product_id'];?>">DELETE</a></td>
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
