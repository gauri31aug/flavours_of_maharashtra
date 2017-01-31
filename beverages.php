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
<title>beverages</title>
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
<a href="source/beverages/awla_sarbat.php"><img src="source/beverages/awla_sarbat.jpg"></a>
<figcaption>Awla Sarbat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/beverages/kairi_panha.php"><img src="source/beverages/kairi_panha.jpg"></a>
<figcaption>Kairi Panha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/beverages/kokum_sarbat.php"><img src="source/beverages/kokum_sarbat.jpg"></a>
<figcaption>Kokum Sarbat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/beverages/masala_doodh.php"><img src="source/beverages/masala_doodh.jpg"></a>
<figcaption>Masala Doodh</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/beverages/masala_taak.php"><img src="source/beverages/masala_taak.jpg"></a>
<figcaption>Masala Taak</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/beverages/solkadhi.php"><img src="source/beverages/solkadhi.jpg"></a>
<figcaption>Solkadhi</figcaption>
</figure>
</div>

</body>
</html>