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
<title>sweets</title>
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

<br><br>
<div class="item">
<figure>
<a href="source/sweets/amrakhanda.php"><img src="source/sweets/amrakhanda.jpg"></a>
<figcaption>Amrakhanda</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/basundi.php"><img src="source/sweets/basundi.jpg"></a>
<figcaption>Basundi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/bundi_ladoo.php"><img src="source/sweets/bundi_ladoo.jpg"></a>
<figcaption>Bundi Ladoo</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/gulabjaam.php"><img src="source/sweets/gulabjaam.jpg"></a>
<figcaption>Gulabjaam</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/amras.php"><img src="source/sweets/amras.jpg"></a>
<figcaption>Amras</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/gul_poli.php"><img src="source/sweets/gul_poli.jpg"></a>
<figcaption>Gul Poli</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/jilbi.php"><img src="source/sweets/jilbi.jpg"></a>
<figcaption>Jilbi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/lapshi.php"><img src="source/sweets/lapshi.jpg"></a>
<figcaption>Lapshi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/puran_poli.php"><img src="source/sweets/puran_poli.jpg"></a>
<figcaption>Puran Poli</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/sabudana_kheer.php"><img src="source/sweets/sabudana_kheer.jpg"></a>
<figcaption>Sabudana Kheer</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/sheera.php"><img src="source/sweets/sheera.jpg"></a>
<figcaption>Sheera</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/shewaya_kheer.php"><img src="source/sweets/shewaya_kheer.jpg"></a>
<figcaption>Shewaya Kheer</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/sweets/shrikhand.php"><img src="source/sweets/shrikhand.jpg"></a>
<figcaption>Shrikhand</figcaption>
</figure>

<div class="item">
<figure>
<a href="source/sweets/tandalachi_kheer.php"><img src="source/sweets/tandalachi_kheer.jpg"></a>
<figcaption>Tandul Kheer</figcaption>
</figure>

<div class="item">
<figure>
<a href="source/sweets/modak.php"><img src="source/sweets/modak.jpg"></a>
<figcaption>Modak</figcaption>
</figure>

<div class="item">
<figure>
<a href="source/sweets/naralibhat.php"><img src="source/sweets/naralibhat.jpg"></a>
<figcaption>Naralibhat</figcaption>
</figure>

</div>
</body>
</html>