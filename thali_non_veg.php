<?php

$servername="localhost";
$username="gauri";
$password="";
$dbname="flavours_of_maharashtra";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
else
{
   $sql="select count(*) from cart";
   
   $result=mysqli_query($conn,$sql) or die("Query failed:".mysqli_error());
  
   $row=mysqli_fetch_row($result);
  
   $cart_count=$row[0];
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Thali_Non_Veg</title>
<link rel="stylesheet" type="text/css" href="menu.css" />
</head>

<body>
<nav>
<ul>
<li><a href="main.php">Home</a></li>
<li><a href="snacks.php">Snacks</a></li>
<li class="dropdown">Thali
  <ul class="dropdown-content">
    <li><a href="thali_veg.php">Veg</a></li><br>
	<li><a href="thali_non_veg.php">Non-Veg</a></li><br>
	<li><a href="breads.php">Breads</a></li><br>
	<li><a href="salad_papad_pickle_chatni.php">Salads/Papads/Pickles/Chatni</a></li>
  </ul>
</li>
<li><a href="beverages.php">Beverages</a></li>
<li><a href="sweets.php">Sweets</a></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li><a href="php/view_cart.php">View Cart: </a><div style="display:inline-block; color:white; font-family:century gothic; font-style:italic; width:40px; height:25px; background-color:#c5c52e;text-align:center"><?php echo $cart_count; ?></div></li>
</ul>
</nav>

<div class="label">
Curries- Sea-food
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/bangdyache_kalvan.php"><img src="source/thali_non_veg/curries/bangdyache_kalvan.jpg"></a>
<figcaption>Bangda Kalvan</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/bombil_kalvan.php"><img src="source/thali_non_veg/curries/bombil_kalvan.jpg"></a>
<figcaption>Bombil Kalvan</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/ekshippi.php"><img src="source/thali_non_veg/curries/ekshippi.jpg"></a>
<figcaption>Ekshippi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/khekda_kalvan.php"><img src="source/thali_non_veg/curries/khekda_kalvan.jpg"></a>
<figcaption>Khekada Kalvan</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/kolim_suka.php"><img src="source/thali_non_veg/curries/kolim_suka.jpg"></a>
<figcaption>Kolim Masala</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/kolumbi_masala.php"><img src="source/thali_non_veg/curries/kolumbi_masala.jpg"></a>
<figcaption>Kolumbi Masala</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/kolumbi_masala_green.php"><img src="source/thali_non_veg/curries/kolumbi_masala_green.jpg"></a>
<figcaption>Hirva Kolumbi Masala</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/poplet_kalvan.php"><img src="source/thali_non_veg/curries/poplet_kalvan.jpg"></a>
<figcaption>Poplet Kalvan</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/rawas.php"><img src="source/thali_non_veg/curries/rawas.jpg"></a>
<figcaption>Rawas Kalvan</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/shevanache_kalvan.php"><img src="source/thali_non_veg/curries/shevanache_kalvan.jpg"></a>
<figcaption>Shevanache Kalvan</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/sukka_bombil.php"><img src="source/thali_non_veg/curries/sukka_bombil.jpg"></a>
<figcaption>Suka Bombil Masala</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/surmai_kalvan.php"><img src="source/thali_non_veg/curries/surmai_kalvan.jpg"></a>
<figcaption>Surmai Kalvan</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Curries- Chicken/Mutton/Egg
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/sukka_chicken.php"><img src="source/thali_non_veg/curries/sukka_chicken.jpg"></a>
<figcaption>Suka Chicken Masala</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/varhadi_chicken.php"><img src="source/thali_non_veg/curries/varhadi_chicken.jpg"></a>
<figcaption>Varhadi Chicken</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/tambda_pandhara_rassa.php"><img src="source/thali_non_veg/curries/tambda_pandhara_rassa.jpg"></a>
<figcaption>Kolhapuri Tambada Pandhara Rassa</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/sukka_mutton.php"><img src="source/thali_non_veg/curries/sukka_mutton.jpg"></a>
<figcaption>Suka Mutton Masala</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/mutton_rassa.php"><img src="source/thali_non_veg/curries/mutton_rassa.jpg"></a>
<figcaption>Mutton Rassa</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/curries/anda_kalvan.php"><img src="source/thali_non_veg/curries/anda_kalvan.jpg"></a>
<figcaption>Anda Kalvan</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Fried delights
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/fry/anda.php"><img src="source/thali_non_veg/fry/anda.jpg"></a>
<figcaption>Anda Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/fry/bangda.php"><img src="source/thali_non_veg/fry/bangda.jpg"></a>
<figcaption>Bangda Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/fry/bombil.php"><img src="source/thali_non_veg/fry/bombil.jpg"></a>
<figcaption>Bombil Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/fry/kolumbi.php"><img src="source/thali_non_veg/fry/kolumbi.jpg"></a>
<figcaption>Kolumbi Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/fry/poplet.php"><img src="source/thali_non_veg/fry/poplet.jpg"></a>
<figcaption>Poplet Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/fry/rawas.php"><img src="source/thali_non_veg/fry/rawas.jpg"></a>
<figcaption>Rawas Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/fry/surmai.php"><img src="source/thali_non_veg/fry/surmai.jpg"></a>
<figcaption>Surmai Fry</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Rice
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/rice/chicken_bhaat.php"><img src="source/thali_non_veg/rice/chicken_bhaat.jpg"></a>
<figcaption>Chicken Bhaat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/rice/chicken_biryani.php"><img src="source/thali_non_veg/rice/chicken_biryani.jpg"></a>
<figcaption>Chicken Biryani</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/rice/egg_biryani.php"><img src="source/thali_non_veg/rice/egg_biryani.jpg"></a>
<figcaption>Anda Biryani</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/rice/kolumbi_bhaat.php"><img src="source/thali_non_veg/rice/kolumbi_bhaat.jpg"></a>
<figcaption>Kolumbi Bhaat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/rice/mutton_bhaat.php"><img src="source/thali_non_veg/rice/mutton_bhaat.jpg"></a>
<figcaption>Mutton Bhaat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_non_veg/rice/mutton_biryani.php"><img src="source/thali_non_veg/rice/mutton_biryani.jpg"></a>
<figcaption>Mutton Biryani</figcaption>
</figure>
</div>

</body>
</html>