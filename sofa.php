<!DOCTYPE html>
<html>
<head>
    <title>Sofa Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
<head>

<body>
      <?php include('header.php'); ?>

      <section class="features-product">
      <?php

        include_once('product.php');


        // Show detail of the sofa
        if (isset($_GET['product'])) {
          $product = $_GET['product'];

          $img =  $product_table[$product]["img"];
          echo "<img src=\"$img\" alt=\"sofa\">";

          $name = $product_table[$product]["name"];
          echo "<figcaption>$name</figcaption>";
         
          $price = $product_table[$product]["price"];
          echo "<span>$price EUR</span>";

          $description = $product_table[$product]["description"];
          echo "<span>$description</span>";

        // Show list of all sofas
        } else {
          for ($x = 1; $x <= 5; $x++) { 
            echo "<figure>";
            echo "<a href =\"sofa.php?product=sofa-$x\">";

            $img =  $product_table["sofa-".$x]["img"];
            echo "<img src=\"$img\" alt=\"sofa\">";
            echo "</a>";

            $name = $product_table["sofa-".$x]["name"];
            echo "<figcaption>$name</figcaption>";
            echo "</figure>";
          }
        }
      ?>
      </section>

</body>
<footer>
    123 Main Street,CA · 555-555-555 · blabbla@gmail.com
</footer>


</html>