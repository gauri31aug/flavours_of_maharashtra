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
<title>salad/papad/pickle/chatni</title>
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
Salads
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/salad/tomato_kanda.php"><img src="source/salad_papad_pickle_chatni/salad/tomato_kanda.jpg"></a>
<figcaption>Tomato Kanda Koshimbir</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/salad/batata_raita.php"><img src="source/salad_papad_pickle_chatni/salad/batata_raita.jpg"></a>
<figcaption>Batata Raita</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/salad/kakadi_tomato.php"><img src="source/salad_papad_pickle_chatni/salad/kakadi_tomato.jpg"></a>
<figcaption>Tomato Kakadi Koshimbir</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/salad/boondi_raita.php"><img src="source/salad_papad_pickle_chatni/salad/boondi_raita.jpg"></a>
<figcaption>Bundi Raita</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/salad/dahi_kanda.php"><img src="source/salad_papad_pickle_chatni/salad/dahi_kanda.jpg"></a>
<figcaption>Dahi Kanda</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/salad/lal_bhopla.php"><img src="source/salad_papad_pickle_chatni/salad/lal_bhopla.jpg"></a>
<figcaption>Lal Bhopla Raita</figcaption>
</figure>
</div>


<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Papads
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/papad/udid.php"><img src="source/salad_papad_pickle_chatni/papad/udid.jpg"></a>
<figcaption>Udid Papad</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/papad/kurdai.php"><img src="source/salad_papad_pickle_chatni/papad/kurdai.jpg"></a>
<figcaption>Kurdai</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/papad/tandul.php"><img src="source/salad_papad_pickle_chatni/papad/tandul.jpg"></a>
<figcaption>Tandul Papad</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/papad/nachni.php"><img src="source/salad_papad_pickle_chatni/papad/nachni.jpg"></a>
<figcaption>Nachni Papad</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/papad/poha.php"><img src="source/salad_papad_pickle_chatni/papad/poha.jpg"></a>
<figcaption>Poha Papad</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/papad/batata_papad.php"><img src="source/salad_papad_pickle_chatni/papad/batata_papad.jpg"></a>
<figcaption>Batata Papad</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/papad/sabudana_chakli.php"><img src="source/salad_papad_pickle_chatni/papad/sabudana_chakli.jpg"></a>
<figcaption>Sabudana Chakli</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/papad/sabudana_papad.php"><img src="source/salad_papad_pickle_chatni/papad/sabudana_papad.jpg"></a>
<figcaption>Sabudana Papad</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Pickles
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/awla.php"><img src="source/salad_papad_pickle_chatni/pickle/awla.jpg"></a>
<figcaption>Awla Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/carrot_chilli.php"><img src="source/salad_papad_pickle_chatni/pickle/carrot_chilli.jpg"></a>
<figcaption>Gajar Mirchi Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/gajar.php"><img src="source/salad_papad_pickle_chatni/pickle/gajar.jpg"></a>
<figcaption>Gajar Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/god_kairi.php"><img src="source/salad_papad_pickle_chatni/pickle/god_kairi.jpg"></a>
<figcaption>God Kairi Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/god_limbu.php"><img src="source/salad_papad_pickle_chatni/pickle/god_limbu.jpg"></a>
<figcaption>God Limbu Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/halad.php"><img src="source/salad_papad_pickle_chatni/pickle/halad.jpg"></a>
<figcaption>Halad Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/karvanda.php"><img src="source/salad_papad_pickle_chatni/pickle/karvanda.jpg"></a>
<figcaption>Karvanda Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/karvanda_mirchi.php"><img src="source/salad_papad_pickle_chatni/pickle/karvanda_mirchi.jpg"></a>
<figcaption>Karvanda Mirchi Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/lasun.php"><img src="source/salad_papad_pickle_chatni/pickle/lasun.jpg"></a>
<figcaption>Lasun Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/mirchi.php"><img src="source/salad_papad_pickle_chatni/pickle/mirchi.jpg"></a>
<figcaption>Mirchi Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/mula.php"><img src="source/salad_papad_pickle_chatni/pickle/mula.jpg"></a>
<figcaption>Mula Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/tikhat_kairi.php"><img src="source/salad_papad_pickle_chatni/pickle/tikhat_kairi.jpg"></a>
<figcaption>Tikhat Kairi Loncha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/pickle/tikhat_limbu.php"><img src="source/salad_papad_pickle_chatni/pickle/tikhat_limbu.jpg"></a>
<figcaption>Tikhat Limbu Loncha</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Chatni
</div>


<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/chatni/mirchi_thecha.php"><img src="source/salad_papad_pickle_chatni/chatni/mirchi_thecha.jpg"></a>
<figcaption>Mirchi Thecha</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/chatni/lasun_khobra_chatni.php"><img src="source/salad_papad_pickle_chatni/chatni/lasun_khobra_chatni.jpg"></a>
<figcaption>Lasun Khobra Chatni</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/chatni/jawas.php"><img src="source/salad_papad_pickle_chatni/chatni/jawas.jpg"></a>
<figcaption>Jawas Chatni</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/chatni/karale.php"><img src="source/salad_papad_pickle_chatni/chatni/karale.jpg"></a>
<figcaption>Karale Chatni</figcaption>
</figure>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/chatni/til.php"><img src="source/salad_papad_pickle_chatni/chatni/til.jpg"></a>
<figcaption>Til Chatni</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/salad_papad_pickle_chatni/chatni/shengdana.php"><img src="source/salad_papad_pickle_chatni/chatni/shengdana.jpg"></a>
<figcaption>Shengdana Chatni</figcaption>
</figure>
</div>

</body>
</html>