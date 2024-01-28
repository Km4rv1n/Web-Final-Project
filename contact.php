<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant Contact Information</title>
  <link rel="stylesheet" href="assets/styles/contact.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/styles/nav.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/styles/style.css?v=<?php echo time(); ?>">

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

  <div class="container">
    <h1>Contact Information</h1>
    <div class="contact-info">
      <h2>The Ivy Restaurant</h2>
      <p><b>Address:</b> 123 Main Street, City, Country</p>
      <p><b>Phone:</b> +1234567890</p>
      <p><b>Email:</b> info@ivyrestaurant.com</p>

      <div id="socialMedia">
            <a href="https://www.instagram.com/"><img src="assets/images/instagramLogo.png" class="contactImage" alt="instagram"></a>
            <a href="https://www.facebook.com/"><img src="assets/images/facebookLogo.png" class="contactImage" alt="facebook"></a>
            <a href="https://www.linkedin.com/"><img src="assets/images/LinkedIn_logo_initials.png" class="contactImage" alt="linkedin"></a>

      </div>
    </div>
  </div>
</div>

<footer>
        <p>&copy; <span id="currentYear"></span> The Ivy Restaurant. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
   $("#currentYear").html(new Date().getFullYear());
</script>

</body>
</html>