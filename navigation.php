<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<title>Bluestone Bar and Grill</title>
</head>
    <header>
    <a href="index.php"><img src="assets/logo.png" class="logo" alt="logo"></a>
  <nav>
    <ul>
      <button class="nav-button"> x </button>
  <li><a href="index.php" class="<?php echo ($page == "home" ? "active" : "")?>">HOME</a></li>
  <li><a href="about.php" class="<?php echo ($page == "about" ? "active" : "")?>">ABOUT US</a></li>
  <li><a href="menu.php" class="<?php echo ($page == "menu" ? "active" : "")?>">MENU</a></li>
  <li><a href="promotions.php" class="<?php echo ($page == "promotions" ? "active" : "")?>">PROMOTIONS</a></li>
  <li><a href="contact.php" class="<?php echo ($page == "contact" ? "active" : "")?>">CONTACT US</a></li>
  <li><a href="reservations.php"><button>Book a Table</button></a></li>
</ul>
  </nav>
</header>
</html>