<?php $page = "home";?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="author" content="Jarrod Currie-Hammond">
  <meta name="description" content="Website for 1621ICT">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" >
<link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
<link rel="manifest" href="assets/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script src="js/slider.js"></script>
    <title>Bluestone Bar and Grill</title>
  </head>
  <body>
  <?php include 'navigation.php' ?>
  <div class="row">
      <div class="column">
  <h2>Our Mission Statement</h2>
  <p>At Bluestone Bar and Grill, our mission is simple. We thrive to provide a quality dining experience at an affordable price.</p>
  <p>You can learn more at our <a href="about.php">About Us</a> page.</p>
</div>
    <div class="column">
    <div class="bxslider">
    <div class="slide"><img src="./assets/slider1.jpg" alt="Slider image 1"></div>
    <div class="slide"><img src="./assets/slider2.jpg" alt="Slider image 2"></div>
    <div class="slide"><img src="./assets/slider3.jpg" alt="Slider image 3"></div>
  </div>
</div>
  <?php include 'footer.php' ?>
  </body>
</html>