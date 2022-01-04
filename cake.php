<?php
include("header.php");


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cakes</title>
        <link rel="stylesheet" href="style.css">
        
    </head>

    <style>
.cake-container{
    background:#F8E2CB;
    width:45%;
    padding-top:25px;
    padding-left:25px;
    padding-bottom:25px;
    border-radius:20px;
    margin:auto;
    
    
}

.cake-flavor{
  color: #3E293D;
  text-align:center;
}

.card{
    width:230px;
    height: 250px;
    margin: 2px;
}
.add-to-cart{
background:#3E293D;
color:#fff;
font-size: 10px;
margin-top:-30px;
}
.card-text{
    font-size:10px;
}

    </style>

    <body>
        
        <div class="cake-container">
        <h1 class="cake-flavor">Flavor</h1>
            <div class="row row-cols-2">
             
                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="assets/food-chocolate-brown-bakery-background.jpg" class="card-img-top" >
                        <div class="card-body">
                            <h6 class="card-title">Chocolate Cake </h6>
                            <p class="card-text">Price:$8.80</p>
                            <button type="submit" name="Add_To_Cart"class=" add-to-cart btn btn-sm">ADD TO CARD</button>
                            <input type="hidden" name="Item_Name" value="Chocolate Cake">
                            <input type="hidden" name="Price" value="8.80">
                        </div>
                    </div>
                 </form>
                </div>

                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="assets/red-velvet-cake.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Red Velvet Cake</h6>
                            <p class="card-text">Price:$9.70</p>
                            <button type="submit" name="Add_To_Cart"class="add-to-cart btn ">ADD TO CARD</button>
                            <input type="hidden" name="Item_Name" value="Red Velvet Cake">
                            <input type="hidden" name="Price" value="9.70">
                        </div>
                    </div>
                 </form>
                </div>

                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="assets/slices-homemade-new-york-cheesecake.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">NY Cheese Cake </h6>
                            <p class="card-text">Price:$10.00</p>
                            <button type="submit" name="Add_To_Cart"class="add-to-cart btn ">ADD TO CARD</button>
                            <input type="hidden" name="Item_Name" value="NY Cheese Cake">
                            <input type="hidden" name="Price" value="10.00">
                            <input type ='hidden' name='quantity' value='$value[Quantity]' min='1' max='10'>
                        </div>
                    </div>
                 </form>
                </div>


                <div class="col">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="assets/chocolate-coffee-vanilla-gluten-free-marble-cake-homemade-pound-cake.jpg" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">Marble Cake </h6>
                            <p class="card-text">Price:$9.67</p>
                            <button type="submit" name="Add_To_Cart"class="add-to-cart btn">ADD TO CARD</button>
                            <input type="hidden" name="Item_Name" value="Marble">
                            <input type="hidden" name="Price" value="9.67">
                        </div>
                    </div>
                 </form>
                </div>
            </div>

        </div>


        <!-- footer -->
        <footer class="container">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase footer-content-h ft-nav-title">Subscribe and Save</h5>
            <p class="footer-content-b">Subscribe to our Newsletter and receive <br> offers difrectly to you inbox.</p>
            <form class="form-inline">
              <div class="form-group form-footer mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Your Email</label>
                <input type="password" class="form-control form-footer" id="inputPassword2" placeholder="Your Email">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </form>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">

          <div class="col-md-6 mb-md-0 mb-3">

            <h5 class="text-uppercase ft-nav-title">Navigation</h5>

            <ul class="list-unstyled">
              <li>
                <a href="index.html" class="ft-nav-item">Home</a>
              </li>
              <li>
                <a href="about.html" class="ft-nav-item">About</a>
              </li>
              <li>
                <a href="contact.html" class="ft-nav-item">Contact Us</a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </footer>
    </body>

</html>