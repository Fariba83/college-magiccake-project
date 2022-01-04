<?php include 'includes/header.php'; 



?>


       <!-- /* Alternative: isset($_POST['name']) 
        if(count($_POST) > 0) {
          if(!filter_input(INPUT_POST,"name")){
            echo 'Full Name is mandatory', '<br>';
          }
          if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            echo 'Wrong email format entered', '<br>';          
          }
        } 
      -->            
    <main>
      <h2 class="title-contact">Contact Us</h2>
      <form action="contact.php" method="POST" class="form-contact needs-validation" id="form" novalidate>
        <div class="form-row">
          <div class="form-grup contact-us col-md-10">
            <label class="form-label" for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullname" placeholder="John Doe" required>
          </div>
          <div class="form-grup contact-us col-md-10">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="johndoe@jd.com" required>
          </div>
          <div class="form-grup contact-us col-md-10">
            <label class="form-label" for="question">Your Question</label>
            <textarea required class="form-control" id="question" name="question" placeholder="Do you guys do cakes for corporate parties?">  
          </textarea>
        </div>
        <button class="btn btn-primary btn-contact" name="submit" type="submit">Submit</button>
      </form>
      <?php
    
    if(isset($_POST['submit'])){
      $name=$db -> real_escape_string($_POST['fullname']);
      $email= $db -> real_escape_string($_POST['email']);
      $question=$db -> real_escape_string($_POST['question']);

      
      $sql_connection  = mysqli_connect('localhost', 'root', '', 'magiccake');
     
      $data = "INSERT INTO contact (fullname, email, question) VALUES ('$name', '$email', '$question')";
      $conn = mysqli_query($sql_connection , $data);
      if($conn){
          echo "<p class='comm'>Thanks for your comments</p>";
      }else{
          echo "some error Occured";
      }
  }
        
      
      ?>
</main>
    <?php include 'includes/footer.php'; ?>


    <script>
      const name = document.getElementById('fullname');
      const email = document.getElementById('email');
      const question = document.getElementById('question');
      const form = document.getElementById('form');

      form.addEventListener('submit', (e) => {
        e.preventDefault();
      });

    </script>