<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Restaurant Name - Home</title>

   <link rel="stylesheet" href="assets/styles/style.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="assets/styles/home.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="assets/styles/nav.css?v=<?php echo time(); ?>">

  
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
      <h3>Your perfect getaway</h3>
   </div>

    <div class="center-links">
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
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
