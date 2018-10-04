<?php
  $product1 = $_POST["product1"]["qty"]; //how to transfer product and its quantity?
  $product2 = $_POST["product2"];
  $product3 = $_POST["product3"];
?>

<html>
<body>

<p>Product1: <?=$product1 ?></p><br> 
<p>Product2: <?=$product2 ?></p><br>
<p>Product3: <?=$product3 ?></p><br>

<p>Continents:</br>
	<?php
		$continentsDB = array("na"=>"North America",
							"sa"=>"South America",
							"eu"=>"Europe",
							"as"=>"Asia",
							"au"=>"Australia",
							"af"=>"Africa",
							"an"=>"Antartica");
		foreach ($continents as $c){
			print "$continentsDB[$c] <br />";
		}
	?>
</p>
<a href="product.php">BACK TO SHOPPING</a>
<form class="" action="checkout.php" method="post">
  <input type="submit" name="submit" value="PROCEED TO CHECKOUT">
</form>
</body>
</html>
