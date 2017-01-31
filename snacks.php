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
<title>snacks</title>
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
Veg
</div>
<div class="item">
<figure>
<a href="source/snacks/veg/chanyacha_pola.php"><img src="source/snacks/veg/chanyacha_pola.jpg"></a>
<figcaption>Chana Pola</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/god_sheera.php"><img src="source/snacks/veg/god_sheera.jpg"></a>
<figcaption>God Sheera</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/kande_pohe.php"><img src="source/snacks/veg/kande_pohe.jpg"></a>
<figcaption>Kande Pohe</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/malida.php"><img src="source/snacks/veg/malida.jpg"></a>
<figcaption>Chapati Malida (Chivda)</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/misal_paav.php"><img src="source/snacks/veg/misal_paav.jpg"></a>
<figcaption>Misal Paav</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/paav_bhaji.php"><img src="source/snacks/veg/paav_bhaji.jpg"></a>
<figcaption>Paav Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/paav_patis.php"><img src="source/snacks/veg/paav_patis.jpg"></a>
<figcaption>Paav Patis</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/sabudana_khichadi.php"><img src="source/snacks/veg/sabudana_khichadi.jpg"></a>
<figcaption>Sabudana Khichadi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/thalipith.php"><img src="source/snacks/veg/thalipith.jpg"></a>
<figcaption>Thalipith</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/sabudana_vada.php"><img src="source/snacks/veg/sabudana_vada.jpg"></a>
<figcaption>Sabudana Wada</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/tikhat_sheera.php"><img src="source/snacks/veg/tikhat_sheera.jpg"></a>
<figcaption>Tikhat Sheera (Sanja)</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/upit.php"><img src="source/snacks/veg/upit.jpg"></a>
<figcaption>Upit</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/tomato_omlet.php"><img src="source/snacks/veg/tomato_omlet.jpg"></a>
<figcaption>Tomato Omlet</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/vada_paav.php"><img src="source/snacks/veg/vada_paav.jpg"></a>
<figcaption>Vada Paav</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/veg/tikhat_shewaya.php"><img src="source/snacks/veg/tikhat_shewaya.jpg"></a>
<figcaption>Tikhat Shewaya Sheera</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Non-Veg
</div>

<div class="item">
<figure>
<a href="source/snacks/non_veg/boiled_egg.php"><img src="source/snacks/non_veg/boiled_egg.jpg"></a>
<figcaption>Boiled Egg</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/non_veg/burji_paav.php"><img src="source/snacks/non_veg/burji_paav.jpg"></a>
<figcaption>Burji Paav</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/non_veg/half_fry.php"><img src="source/snacks/non_veg/half_fry.jpg"></a>
<figcaption>Egg Half Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/snacks/non_veg/omlet_paav.php"><img src="source/snacks/non_veg/omlet_paav.jpg"></a>
<figcaption>Omlet Paav</figcaption>
</figure>
</div>
</body>
</html>