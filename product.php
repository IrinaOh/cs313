<?php
  session_start();

  if (count($_SESSION["cart"]) < 1) {
    $_SESSION["cart"] = array();
  }

  $_SESSION["cart"][] = $_POST["product"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <p>Product 1</p>
      <form class="" action="shopping-cart.php" method="post">
        <input type="hidden" name="product1" value="001">
        Quantity: <input type="number" name="qty" min="1" max="10">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <div class="">
      <p>Product 2</p>
      <form class="" action="shopping-cart.php" method="post">
        <input type="hidden" name="product2" value="002">
        Quantity: <input type="number" name="qty" min="1" max="10">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <div class="">
      <p>Product 3</p>
      <form class="" action="shopping-cart.php" method="post">
        <input type="hidden" name="product3" value="003">
        Quantity: <input type="number" name="qty" min="1" max="10">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
  </body>
</html>
