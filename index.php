<?php include 'includes/header.php'; ?>


    <!-- previous arrow button -->
    <div class="main">
      <button id="prev-btn" class="arrow">
        <i class="fas fa-arrow-circle-left"></i>
      </button>


      <!-- book -->
      <div id="book">
        <!-- paper1 -->
        <div id="p1" class="paper">
          <!-- front page -->
          <div class="front">
            <div id="f1" class="front-content">
              <img src="Assets/cookie.jpg" class="cookie-img" alt="Cookie image" >
              <a  id="start-btn" href="#p2">start here</a>
            </div>

          </div>
          <!-- back page -->
          <div class="back">
            <div id="b1" class="back-content">
              <a href="#"><img class="" src="Assets/bakery.png" width="350px" height="auto" alt=""></a>

            </div>

          </div>

        </div>



        <!-- paper2 -->
        <div id="p2" class="paper">
          <!-- front page -->
          <div class="front">
            <div id="f2" class="front-content">
              <h2 class="home-head">What would you like today?</h2>
              <img id="home-cookies" class="option-img" src="Assets/cookies.jpg" alt="" width="150px" height="120px">
              <img  id="home-cake"class="option-img" src="Assets/cakes.jpg" alt="" width="150px" height="120px">
              <a  id="cookie-btn" class="refer-btn" href="cookie.php">Cookies</a>
              <a  id="cake-btn" class="refer-btn"href="cake.php">Cakes</a>


            </div>

          </div>
          <!-- back page -->
          <div class="back">
            <div id="b2" class="back-content">
              <a href=""><img class="logo" src="Assets/logo_cake.png" width="230px" height="200px" alt=""></a>

            </div>

          </div>

        </div>

      </div>

      <!-- next button -->
      <button id="next-btn" class="arrow">
        <i class="fas fa-arrow-circle-right"></i>

      </button>
    </div>
    <script src="menu.js"></script>

<?php include 'includes/footer.php'; ?>