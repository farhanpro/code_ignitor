<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

     <!-- Style Sheet CSS -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css/shopingBazar.css'); ?>">

   
    <title>Homepage</title>
    
  </head>
  <body>
         
                                 <!-- Head -->


<div class="container-fluid bg-dark " id="head">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-md-5">
          <div class="row">
            <div class="col-sm-4 mt-3 text-center">
            <i class="fas fa-shopping-cart display-3"  ></i>
          </div>
            <div class="col-sm-7 text-center">
                <h3 class="my-3">SHOPING BAZAR</h3>
          </div>
          </div>
        </div>

        <div class="col-md-3 text-center "id="head-icon">
              <i class="fab fa-facebook-square line"></i>
              <i class="fab fa-whatsapp-square line"></i>
                <i class="fas fa-envelope-square line"></i>
              <i class="fab fa-linkedin line line1"></i>
        </div>

      </div>
    </div>
    </div>

                               <!-- //Head -->

                               <!-- Header -->

      <div class="container-fluid  bg-dark">
        <div class="row">
           <div class="col-sm-4">
             <h3 style="color: white ; margin: 14px 0px 0px 100px;">Username</h3>
           </div>
           <div class="col-sm-8">                
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
              <div class="container-fluid">
                   <a class="navbar-brand " href="#"></a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="Homepage">HOME</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contact">CONTACT US</a>
                        </li>
                    </ul>
                    <form class="d-flex logoutDiv">
                      <a  href="<?php echo base_url().'index.php/welcome/index'; ?>">LOGOUT</a></p>
                    </form>
                </div>
              </div>
            </nav>    
           </div>
        </div>
      </div>                         
                                  <!-- //Header -->


    <center><h1>Wlcome to The Shopping Bazar</h1></center>

                                          <!-- main -->
<div class="container" style="height:400px;">
      <div class="row">
           <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"></li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
           </div>
      </div>
</div>


                                          <!-- //main -->
    
    <section class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5 ">
      <div class="container py-lg-4">
        <div class="row footer-top-29 justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 footer-1">
            <h6 class="footer-title-29">Contact Us</h6>
            <ul>
              <li>
                <p><span class="fa fa-map-marker mx-3"></span>Shopping Bazar camp pune.</p>
              </li>
              <li><a href="tel:+7-800-999-800"><span class="fa fa-phone mx-3"></span> +(91)-8446-931-810</a></li>
              <li><a href="mailto:hotels@mail.com" class="mail"><span class="fa fa-envelope-open-o mx-3"></span>
                  shoppingbazar12@mail.com</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">
  
            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Shoping Bazar</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
         
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">SUBSCRIBE HERE </h6>
            <p>Enter your email and receive the latest news from us.
             We'll never share your email address</p>
  
            <form action="#" class="subscribe" method="post">
              <input type="email" name="email" placeholder="Your Email Address" required="">
              <button><span <i class="fas fa-envelope-square"></i></span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="w3l-footer-29-main copyright">
  <div class="container">
    <div class="row bottom-copies">
      <p class="col-lg-8 copy-footer-29 text-center">?? 2020 online Shoping Bazar. All rights reserved </p>

      <div class="col-lg-4 main-social-footer-29 mt-1">
                 <i class="fab fa-facebook-square line"></i>
                <i class="fab fa-whatsapp-square line"></i>
                 <i class="fas fa-envelope-square line"></i>
                 <i class="fab fa-linkedin line line1"></i>
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
