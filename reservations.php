<?php $page = "reservations";?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Reservations | Bluestone Bar and Grill</title>
  </head>
  <body>
   <?php include 'navigation.php' ?>
  <div class="row">
  <div class="column">
    <h1 class="reservations">Reservations</h1>
    <p>If you'd like to book a table for your next event, be sure to do so by filling out the form or emailing us at <a href="mailto:reservations@bluestonebargrill.com.au">reservations@bluestonebargrill.com.au</a></p>
    <p>For group bookings <b>larger</b> than <b>16 people</b> or if there are any special requests that you may have for your reservation, please don't hesitate to call us at <a href="tel:+61755506922">+61 7 5550 6922</a></p>
  </div>
<div class="column">
  <form method="POST" action="bookingSubmit.php" action="verify.php">
  <fieldset><legend><span style="font-size: 12px;">&nbsp;Book a Table&nbsp;</span></legend>
 <label for="firstname">First name:</label>
<span style="color:red">*</span><input type="text" name="firstname" id="firstname" maxlength="35" tabindex="1" required /><br><br>

<label for="lastname">Last name:</label>
<span style="color:red">*</span><input type="text" name="lastname" id="lastname" maxlength="35" tabindex="2" required /><br><br>

<label for="phone">Phone:</label>
<span style="color:red">*</span><input type="tel" name="phone" id="phone" maxlength="10" tabindex="3" required /><br><br>

<label>Number of People:</label>
<span style="color:red">*</span><select name="people" required>
    <option value="1">1 person</option>
    <option value="2">2 people</option>
    <option value="3">3 people</option>
    <option value="4">4 people</option>
    <option value="5">5 people</option>
    <option value="6">6 people</option>
    <option value="7">7 people</option>
    <option value="8">8 people</option>
    <option value="9">9 people</option>
    <option value="10">10 people</option>
    <option value="11">11 people</option>
    <option value="12">12 people</option>
    <option value="13">13 people</option>
    <option value="14">14 people</option>
    <option value="15">15 people</option>
  </select><br><br>

<label>Time:</label>
<span style="color:red">*</span><select name="time" required>
    <option value="Breakfast">Breakfast</option>
    <option value="Lunch">Lunch</option>
    <option value="Dinner">Dinner</option>
  </select><br><br>
<input type="submit" id="submit" value="Submit" tabindex="8" /><br><br>
</fieldset>
<br>
</form>
</div>
  </div>
  <?php include 'footer.php' ?>
  <script>
  </script>
  </body>
</html>