<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!--Font awesome CDN-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <!-- bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
      </script>
      <!-- css link  -->
      <link rel="stylesheet" href="style.css">
</head>
<style>

.cart-btn{
  border: 2px solid #3E293D;
}
.cart-btn:hover{
  background: #3E293D;
  border-style:none;
  color:#fff;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo" src="Assets/logo_cake.png" alt="Website Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">MENU </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>
            
          </ul>
             <div>
               <?php
               $count =0;
               if(isset($_SESSION['cart'])){
                 $count = count($_SESSION['cart']);
               }
               ?>
               <a href="mycart.php" class="btn cart-btn">My Cart (<?php echo $count;?>)</a>
             </div>
          </div>
        </div>
      </nav>



    
</body>
</html>