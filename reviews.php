<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hotel Reviews Page</title>
  <link rel="stylesheet" href="assets/styles/reviews.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="assets/styles/nav.css?v=<?php echo time(); ?>">

   <style>

    h2{
      text-align:center;
      font-size: 30px;
    font-family: Georgia, serif;
    color: #ffcc00;  
    text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;
    }
    .background-image{
      background-image: url('assets/images/Restaurant.jpg'); 

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
    <div class="review-form">
      <h2>Add a Review</h2>
      <form id="reviewForm">
        <label for="username">Your Name:</label>
        <input type="text" id="username" name="username" required placeholder="Full Name">

        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
          <option value="0">0 - Terrible</option>
          <option value="1">1 - Bad</option>
          <option value="2">2 - Poor</option>
          <option value="3">3 - Average</option>
          <option value="4">4 - Good</option>
          <option value="5">5 - Excellent</option>
        </select>


        <label for="comment">Your Review:</label>
        <textarea id="comment" name="comment" rows="4" required placeholder="Describe your experience:"></textarea><br><br>

        <button id="submitBtn" type="submit">Submit Review</button>
      </form>
    </div>

    <div id="reviewsDiv">
      <h2>Top Reviews</h2>
      
      <div>
      <h3>Guest 1</h3>
      <h4>5/5</h4>
      <p id="paragraph1">Dining at this restaurant was an exquisite experience that tantalized my taste buds and elevated the art of culinary craftsmanship. From the moment I stepped inside, the ambiance exuded sophistication, setting the stage for an evening of unparalleled gastronomic delight. The expertly curated menu, featuring a fusion of flavors and impeccably presented dishes, showcased the chef's mastery and left a lasting impression, making it a must-visit for discerning food enthusiasts.</p>
      <button id="hideBtn1">Hide text</button>
      <button id="showBtn1">Show text</button>
      </div>
    

      <div>
        <h3>Guest 2</h3>
        <h4>5/5</h4>
        <p id="paragraph2">A culinary haven, this restaurant seamlessly blends innovation with tradition, delivering a gastronomic journey that transcends expectations. The ambiance is a harmonious marriage of chic modernity and warm hospitality, creating an inviting atmosphere. Each dish, a symphony of flavors and textures, is a testament to the chef's skill, leaving patrons with a memorable and indulgent dining experience that lingers long after the last bite.</p>
        <button id="hideBtn2">Hide text</button>
        <button id="showBtn2">Show text</button>
      </div>

      <h2>Latest Review</h2>
      <div>
        <h3 id="nameHeader"></h3>
        <h4 id="ratingHeader"></h4>
        <p id="reviewText"></p>
        <button id="hideBtn3" hidden="true">Hide text</button>
        <button id="showBtn3" hidden="true">Show text</button>
      </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="assets/scripts/reviews.js"></script>
</body>
</html>
