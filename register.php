<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <link rel="stylesheet" href="assets/styles/style.css">
   <link rel="stylesheet" href="assets/styles/nav.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="assets/styles/home.css?v=<?php echo time(); ?>">

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
   <form name="registrationForm" action="" method="post" onsubmit="return validateForm()">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter username" class="box">
      <span id="nameError" style="color: red; display: none;">Please enter your username</span>

      <input type="email" name="email" required placeholder="enter email" class="box">
      <span id="emailError" style="color: red; display: none;">Please enter your email</span>

      <input type="password" name="password" required placeholder="enter password" class="box">
      <span id="passwordError" style="color: red; display: none;">Please enter your password</span>

      <input type="password" name="cpassword" required placeholder="confirm password" class="box">
      <span id="cpasswordError" style="color: red; display: none;">Please confirm your password</span>

      <input type="submit" name="submit" class="btn" value="register now" >
      <p>already have an account? <a href="login.php">login now</a></p>
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
      function validateForm() {
         var name = document.forms["registrationForm"]["name"].value;
         var email = document.forms["registrationForm"]["email"].value;
         var password = document.forms["registrationForm"]["password"].value;
         var cpassword = document.forms["registrationForm"]["cpassword"].value;

         // Reset error messages
         document.getElementById("nameError").style.display = "none";
         document.getElementById("emailError").style.display = "none";
         document.getElementById("passwordError").style.display = "none";
         document.getElementById("cpasswordError").style.display = "none";

         

       if(name.length < 3 || !email.endsWith("@gmail.com") || password.length < 7 || password != cpassword){
      if (name.length < 3) {
      document.getElementById("nameError").innerText = "Name must be at least 3 characters long";
      document.getElementById("nameError").style.display = "block";
      }

      if (!email.endsWith("@gmail.com")) {
         document.getElementById("emailError").innerText = "Email must end with @gmail.com";
         document.getElementById("emailError").style.display = "block";
      }

      if (password.length < 7) {
         document.getElementById("passwordError").innerText = "Password must be at least 7 characters long";
         document.getElementById("passwordError").style.display = "block";
      }

      if (password != cpassword) {
         document.getElementById("cpasswordError").innerText = "Passwords do not match";
         document.getElementById("cpasswordError").style.display = "block";
      }
      return false;
   }
}
   </script>
</body>
</html>
