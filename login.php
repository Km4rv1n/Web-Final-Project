<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <link rel="stylesheet" href="assets/styles/style.css">
   <link rel="stylesheet" href="assets/styles/home.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="assets/styles/nav.css?v=<?php echo time(); ?>">

   <style>
      
      .header {
         margin-top: 130px; 
         margin-bottom: -100px;
         text-align: center;
      }

      .header h1 {
         font-size: 48px;
         font-family: Georgia, serif;
         color: #ffcc00;           
         text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;
      }

     
   </style>

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="navbar">
   <a href="home.php">Home</a>
   <a href="login.php">Login</a>
   <a href="register.php">Register</a>
   <a href="gallery.php">Gallery</a>
   <a href="reviews.php">Reviews</a>
   <a href="contact.php">Contact</a>
</div>

<div class="background-image">
   <div class="header">
      <h1>The Ivy Restaurant</h1>
   </div>

   <div class="form-container">
      <!-- Your existing form container content -->
      <form name="loginForm" action="" method="post">
         <h3>Login Now</h3>
         <input type="email" name="email" required placeholder="enter email" class="box">
         <span id="emailError" style="color: red; display: none;">Please enter your email</span>

         <input type="password" name="password" required placeholder="enter password" class="box">
         <span id="passwordError" style="color: red; display: none;">Please enter your password</span>

         <input type="submit" name="submit" class="btn" value="login now" onclick="validateLoginForm()">
         <p>Don't have an account? <a href="register.php">Register now</a></p>
      </form>
   </div>
</div>

<footer>
        <p>&copy; <span id="currentYear"></span> The Ivy Restaurant. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
   $("#currentYear").html(new Date().getFullYear());
</script>

<script>
   function validateLoginForm() {
      var email = document.forms["loginForm"]["email"].value;
      var password = document.forms["loginForm"]["password"].value;

      document.getElementById("emailError").style.display = "none";
      document.getElementById("passwordError").style.display = "none";

      if (email === "" || password === "") {
         if (email === "") {
            document.getElementById("emailError").style.display = "block";
            document.getElementById("emailError").innerText = "Please enter your email";
         }

         if (password === "") {
            document.getElementById("passwordError").style.display = "block";
            document.getElementById("passwordError").innerText = "Please enter your password";
         }
         
         return false;
      }
   }
</script>

</body>
</html>
