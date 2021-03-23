<?php $page = "menu";?>
<?php 

require_once 'queryDb.php'; 

$products = getProducts();
?>
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
    <title>Menu | Bluestone Bar and Grill</title>
  </head>
  <body>
  <?php include 'navigation.php' ?>
  <div class="menu">
  <h1>Bistro Menu</h1>
  <table>       
                <?php   
                    foreach ($products as $product )      
                    {
                        echo "<tbody>";
                            echo "<tr>";
                                echo "<td>" .$product["PRODUCTNAME"], "</td>";
                                echo "<td>" .$product["PRICE"], "</td>";
                            echo "</tr>";
                        echo "</tbody>";
                    }
                ?>
            </table>
                </div>
  <?php include 'footer.php' ?>
  </body>
</html>