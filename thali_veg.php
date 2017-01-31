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
<title>Thali_Veg</title>
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
Vegetables
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/bharit.php"><img src="source/thali_veg/vegetables/bharit.jpg"></a>
<figcaption>Vangyacha Bharit</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/athla.php"><img src="source/thali_veg/vegetables/athla.jpg"></a>
<figcaption>Athlyachi Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/bharla_tomato.php"><img src="source/thali_veg/vegetables/bharla_tomato.jpg"></a>
<figcaption>Bharla Tomato</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/bhendi_masala.php"><img src="source/thali_veg/vegetables/bhendi_masala.jpg"></a>
<figcaption>Bhendi Masala</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/bharla_vanga.php"><img src="source/thali_veg/vegetables/bharla_vanga.jpg"></a>
<figcaption>Bharla Vanga</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/fanas.php"><img src="source/thali_veg/vegetables/fanas.jpg"></a>
<figcaption>Fansachi Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/bharli_bhendi.php"><img src="source/thali_veg/vegetables/bharli_bhendi.jpg"></a>
<figcaption>Bharli Bhendi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/gawar_masala.php"><img src="source/thali_veg/vegetables/gawar_masala.jpg"></a>
<figcaption>Gawar Masala</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/bharli_dhobli_mirchi.php"><img src="source/thali_veg/vegetables/bharli_dhobli_mirchi.jpg"></a>
<figcaption>Bharli Dhobli Mirchi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/karla.php"><img src="source/thali_veg/vegetables/karla.jpg"></a>
<figcaption>Karla</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/bharli_mirchi.php"><img src="source/thali_veg/vegetables/bharli_mirchi.jpg"></a>
<figcaption>Bharli Mirchi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/kelful.php"><img src="source/thali_veg/vegetables/kelful.jpg"></a>
<figcaption>Kelfulachi Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/kobi.php"><img src="source/thali_veg/vegetables/kobi.jpg"></a>
<figcaption>Suka Kobi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/kurma.php"><img src="source/thali_veg/vegetables/kurma.jpg"></a>
<figcaption>Kurma</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/pavta.php"><img src="source/thali_veg/vegetables/pavta.jpg"></a>
<figcaption>Pavtyacha Rassa</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/sandga.php"><img src="source/thali_veg/vegetables/sandga.jpg"></a>
<figcaption>Sandgyachi Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/shev_bhaji.php"><img src="source/thali_veg/vegetables/shev_bhaji.jpg"></a>
<figcaption>Shevechi Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/zunka.php"><img src="source/thali_veg/vegetables/zunka.jpg"></a>
<figcaption>Zunka</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/solbatata.php"><img src="source/thali_veg/vegetables/solbatata.jpg"></a>
<figcaption>Solbatata</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/tomato_batata_rassa.php"><img src="source/thali_veg/vegetables/tomato_batata_rassa.jpg"></a>
<figcaption>Tomato Batata Rassa</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/vanga_batata_pavta.php"><img src="source/thali_veg/vegetables/vanga_batata_pavta.jpg"></a>
<figcaption>Vanga Batata Pavta Rassa</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/vegetables/watli_dal.php"><img src="source/thali_veg/vegetables/watli_dal.jpg"></a>
<figcaption>Watli Dal</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Leafy Vegetables
</div>

<div class="item">
<figure>
<a href="source/thali_veg/leafy_vegs/alu.php"><img src="source/thali_veg/leafy_vegs/alu.jpg"></a>
<figcaption>Aluchi Pattal Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/leafy_vegs/methi.php"><img src="source/thali_veg/leafy_vegs/methi.jpg"></a>
<figcaption>Methi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/leafy_vegs/palak_gravy.php"><img src="source/thali_veg/leafy_vegs/palak_gravy.jpg"></a>
<figcaption>Palakchi Pattal Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/leafy_vegs/palak.php"><img src="source/thali_veg/leafy_vegs/palak.jpg"></a>
<figcaption>Suka Palak</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/leafy_vegs/shepu.php"><img src="source/thali_veg/leafy_vegs/shepu.jpg"></a>
<figcaption>Shepu</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Usals (Gravies)
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/chana.php"><img src="source/thali_veg/gravies/chana.jpg"></a>
<figcaption>Chanyachi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/chavli.php"><img src="source/thali_veg/gravies/chavli.jpg"></a>
<figcaption>Chavlichi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/kadve.php"><img src="source/thali_veg/gravies/kadve.jpg"></a>
<figcaption>Kadvyachi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/kajugar.php"><img src="source/thali_veg/gravies/kajugar.jpg"></a>
<figcaption>Kajugarachi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/kala_watana.php"><img src="source/thali_veg/gravies/kala_watana.jpg"></a>
<figcaption>Kala Watanyachi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/masoor.php"><img src="source/thali_veg/gravies/masoor.jpg"></a>
<figcaption>Masoorachi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/matar.php"><img src="source/thali_veg/gravies/matar.jpg"></a>
<figcaption>Matarchi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/matki.php"><img src="source/thali_veg/gravies/matki.jpg"></a>
<figcaption>Matkichi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/moog.php"><img src="source/thali_veg/gravies/moog.jpg"></a>
<figcaption>Moogachi Usal</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/gravies/pandhra_watana.php"><img src="source/thali_veg/gravies/pandhra_watana.jpg"></a>
<figcaption>Pandharya Watanyachi Usal</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Vegetables Fry
</div>

<div class="item">
<figure>
<a href="source/thali_veg/fry/batata.php"><img src="source/thali_veg/fry/batata.jpg"></a>
<figcaption>Batatyachi Kapa</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/fry/dambe.php"><img src="source/thali_veg/fry/dambe.jpg"></a>
<figcaption>Dambe Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/fry/suran.php"><img src="source/thali_veg/fry/suran.jpg"></a>
<figcaption>Suran Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/fry/tondli_fry.php"><img src="source/thali_veg/fry/tondli_fry.jpg"></a>
<figcaption>Tondli Fry</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/fry/vanga.php"><img src="source/thali_veg/fry/vanga.jpg"></a>
<figcaption>Vangyachi Kapa</figcaption>
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
<a href="source/thali_veg/rice/dal_khichadi.php"><img src="source/thali_veg/rice/dal_khichadi.jpg"></a>
<figcaption>Dal Khichadi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/rice/fodnicha_bhaat.php"><img src="source/thali_veg/rice/fodnicha_bhaat.jpg"></a>
<figcaption>Fodnicha Bhaat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/rice/masala_khichadi.php"><img src="source/thali_veg/rice/masala_khichadi.jpg"></a>
<figcaption>Masala Khichadi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/rice/masale_bhaat.php"><img src="source/thali_veg/rice/masale_bhaat.jpg"></a>
<figcaption>Masale Bhaat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/rice/tondli_bhaat.php"><img src="source/thali_veg/rice/tondli_bhaat.jpg"></a>
<figcaption>Tondli Bhaat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/rice/sadha_bhaat.php"><img src="source/thali_veg/rice/sadha_bhaat.jpg"></a>
<figcaption>Sadha Bhaat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/rice/vangi_bhaat.php"><img src="source/thali_veg/rice/vangi_bhaat.jpg"></a>
<figcaption>Vangi Bhaat</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/rice/veg_biryani.php"><img src="source/thali_veg/rice/veg_biryani.jpg"></a>
<figcaption>Veg Biryani</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/rice/veg_pulao.php"><img src="source/thali_veg/rice/veg_pulao.jpg"></a>
<figcaption>Veg Pulao</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Curries
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/batata_sambar.php"><img src="source/thali_veg/curries/batata_sambar.jpg"></a>
<figcaption>Batata Sambar</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/chanyachi_amti.php"><img src="source/thali_veg/curries/chanyachi_amti.jpg"></a>
<figcaption>Chanyachi Amti</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/godi_amti.php"><img src="source/thali_veg/curries/godi_amti.jpg"></a>
<figcaption>Godi Amti</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/kadhi.php"><img src="source/thali_veg/curries/kadhi.jpg"></a>
<figcaption>Takachi Kadhi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/katachi_amti.php"><img src="source/thali_veg/curries/katachi_amti.jpg"></a>
<figcaption>Katachi Amti</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/kulith_pitla.php"><img src="source/thali_veg/curries/kulith_pitla.jpg"></a>
<figcaption>Kulthacha Pithla</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/patwadi_rassa.php"><img src="source/thali_veg/curries/patwadi_rassa.jpg"></a>
<figcaption>Patwadi Rassa</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/pivli_amti.php"><img src="source/thali_veg/curries/pivli_amti.jpg"></a>
<figcaption>Pivli Amti</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/sadha_varan.php"><img src="source/thali_veg/curries/sadha_varan.jpg"></a>
<figcaption>Sadha Varan</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/curries/tomato_sambar.php"><img src="source/thali_veg/curries/tomato_sambar.jpg"></a>
<figcaption>Tomato Sambar</figcaption>
</figure>
</div>

<br style="clear: both;">
<br style="clear: both;">
<br style="clear: both;">
<hr>
<div class="label">
Add-Ons
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/surali_vadi.php"><img src="source/thali_veg/addons/surali_vadi.jpg"></a>
<figcaption>Surali Wadi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/paat_wadi.php"><img src="source/thali_veg/addons/paat_wadi.jpg"></a>
<figcaption>Paat Wadi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/maas_wadi.php"><img src="source/thali_veg/addons/maas_wadi.jpg"></a>
<figcaption>Maas Wadi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/alu_wadi.php"><img src="source/thali_veg/addons/alu_wadi.jpg"></a>
<figcaption>Alu Wadi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/kanda_bhaji.php"><img src="source/thali_veg/addons/kanda_bhaji.jpg"></a>
<figcaption>Kanda Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/kothimbir_wadi.php"><img src="source/thali_veg/addons/kothimbir_wadi.jpg"></a>
<figcaption>Kothimbir Wadi</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/mirchi_bhaji.php"><img src="source/thali_veg/addons/mirchi_bhaji.jpg"></a>
<figcaption>Mirchi Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/batata_bhaji.php"><img src="source/thali_veg/addons/batata_bhaji.jpg"></a>
<figcaption>Batata Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/palak_bhaji.php"><img src="source/thali_veg/addons/palak_bhaji.jpg"></a>
<figcaption>Palak Bhaji</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/moog_wada.php"><img src="source/thali_veg/addons/moog_wada.jpg"></a>
<figcaption>Moog Wada</figcaption>
</figure>
</div>

<div class="item">
<figure>
<a href="source/thali_veg/addons/udid_wada.php"><img src="source/thali_veg/addons/udid_wada.jpg"></a>
<figcaption>Udid Wada</figcaption>
</figure>
</div>

</body>
</html>