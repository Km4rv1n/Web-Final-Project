<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="assets/styles/gallery.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/styles/nav.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets/styles/home.css?v=<?php echo time(); ?>">

  <style>
    h1{
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

<div class="container">
    <h1>Gallery</h1>

    <div class="gallery">
      <div class="image">
        <img src="assets/images/hoteli2.jpg" alt="Image 1">
      </div>
      <div class="image">
        <img src="assets/images/hoteli3.jpeg" alt="Image 2">
      </div>
      <div class="image">
        <img src="assets/images/hoteli4.jpeg" alt="Image 3">
      </div>
      
      <div class="image">
        <img src="assets/images/hoteli5.jpg" alt="Image 4">
      </div>
      <div class="image">
        <img src="assets/images/hoteli6.jpg" alt="Image 5">
      </div>
      <div class="image">
        <img src="assets/images/hoteli7.jpg" alt="Image 6">
      </div>

      <div class="image">
        <img src="assets/images/hoteli8.jpg" alt="Image 7">
      </div>
      <div class="image">
        <img src="assets/images/hoteli9.jpeg" alt="Image 8">
      </div>
      <div class="image">
        <img src="assets/images/hoteli10.jpg" alt="Image 9">
      </div>
    </div>

    <div class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="modal-image">
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
  <script src="assets/scripts/gallery.js"></script>
</body>
</html>
