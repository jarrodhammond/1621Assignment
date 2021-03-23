<?php $page = "about";?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="author" content="Jarrod Currie-Hammond">
  <meta name="description" content="Website for 1621ICT">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
<link rel="manifest" href="assets/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    <title>About Us | Bluestone Bar and Grill</title>
  </head>
  <body>
  <?php include 'navigation.php' ?>
  <div class="body">
    <div class="row">
    <div class="column">
  <h1>About Us</h1>
  <p>
  Bluestone Bar and Grill is a exotic restaurant and bar situated in the heart of Brisbane. We pride ourselves on a relaxed, yet elegant dining experience.
  </p>
  <p>
  Our modern menu which combines traditional Australian grub with international cuisine offers a wide range of options for our patrons. Check it out by clicking the button below.
  </p>
  <br>
  <a href="menu.php"><button class="about">Discover our Menu</button></a>
</div>
<div class="column">
<img class="about" src="assets/about.jpg" alt="Image of Restaurant interior">
</div>
</div>
</div>
  <?php include 'footer.php' ?>
  </body>
</html>