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
<title>main_page</title>
<style type="text/css">

header, nav
{  
display: block;
}    

body 
{     
color:black; 
padding:20px 20px 20px 20px;    
}    


#wrapper 
{     
width:100%; 
height:100%;       
background-color:ivory;
}

header 
{   
background-image:url("main/banana_leaf1.jpg");
background-size:contain; 
}

nav
{    
clear:both;        
background-color:#5eb53c;     
height:60%;
}    

nav ul
{
padding-top:14px;
}

nav li 
{     
display:inline;     
margin-right:30px;
}    
  
.dropdown, .dropdown-content, nav li a
{
color:white;
font-family:century gothic;
font-size:20px;
transition:padding 0.1s;
}

nav li a:hover 
{    
padding:5px 5px 5px 5px;
background-color:#689c53; 
opacity:0.8;
}    

h1
{
font-family:copperplate gothic light;
font-size:300%;
font-weight:bold;
color:white;
padding:40px 20px 40px 315px;
letter-spacing:0.5em;
font-weight:bold;
}

a:link
{
text-decoration:none;
}

.dropdown 
{
cursor:pointer;
position:relative;
display:inline-block;
}

.dropdown-content 
{
display:none;
position:absolute;
background-color:#689c53;
box-shadow:0px 8px 16px 0px #5eb53c;
padding:12px 16px;
opacity:0.8;
z-index:999999;
}

.dropdown:hover .dropdown-content 
{
display:block;
}

#aboutus
{
background-color:#5eb53c;
width:100%;
height:50%;
}

p
{
font-family:century gothic;
font-size:15px;
color:white;
padding-right:20px;
padding-left:20px;
}

h2
{
padding-top:20px;
padding-left:20px;
color:white;
}

img
{
width:60%;
height:60%;
margin:20px auto 20px auto;
}

</style>

<link href="bxslider/jquery.bxslider.css" rel="stylesheet">
<script src="Scripts/jquery-1.7.1.min.js"></script>
<script src="bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('.bxslider').bxSlider({

             auto:true,
             autocontrols:true
 
           });
           
         });
</script>

</head>

<body>
<div id="wrapper">

<header>
<h1>FLAVOURS OF MAHARASHTRA</h1>
</header>

<nav>
<ul>
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
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li><a href="php/view_cart.php">View Cart: </a><div style="display:inline-block; color:white; font-family:century gothic; font-style:italic; width:40px; height:25px; background-color:#c5c52e;text-align:center"><?php echo $cart_count; ?></div></li>
<li><a href="logout.php">Logout</a></li>
</ul>

</nav>

<ul class="bxslider">
  <li><img src="slider\amras_puri.jpg"></li>
  <li><img src="slider\kanda_bhaji.jpg"></li>
  <li><img src="slider\kande_pohe.jpg"></li>
  <li><img src="slider\khekda_kalvan.jpg"></li>
  <li><img src="slider\kolumbi_pulao.jpg"></li>
  <li><img src="slider\kothimbir_wadi.jpg"></li>
  <li><img src="slider\misal_paav.jpg"></li>
  <li><img src="slider\shewaya_kheer.jpg"></li>
  <li><img src="slider\surmai_kalvan.jpg"></li>
  <li><img src="slider\tambda_pandhara_rassa.jpg"></li>
</ul>

<article id="aboutus">
<h2>ABOUT FLAVOURS OF MAHARASHTRA</h2>
<p>
Welcome to <b><i>FLAVOURS OF MAHARASHTRA</i></b>- A <b>wonder<i>FOOD</i>land</b> of the scrumptious tastes of Maharashtrian Recipes. 
</p>
<p>
Maharashtrian (or Marathi) food is the food of Marathi people from the state of Maharashtra in India. Maharashtrian food covers a range from having mild to very spicy dishes. Wheat, rice, jowar, bajri, vegetables, lentils and fruits form staples of the Maharashtrian diet. Peanuts and cashews are often served with vegetables. 
</p>
<p>
Traditionally, Maharashtrians have considered their food to be more austere than that of other regions in India; But Maharashtra's metropolitan cities, such as Mumbai and Pune have influenced the food habits due to urban population. For example, the Udupi dishes idli and dosa are quite popular, as well as Chinese dishes. Nevertheless, distinctly Maharashtrian dishes, such as Ukdiche Modak, Alu Vadi, Wangyache bharit, Kande Pohe, Sabudana Khichadi, Jilbi and yet more varieties remain alltime popular.
</p>
<p>
"Flavours of Maharashtra" is a simple and small attempt to help you in enjoying the sweet, spicy, tangy, refreshing dishes of Maharashtra. Hope you like it and continue visiting for many more varieties. So go ahead and help yourself!!! 
</p>
</article>

</div><!--end wrapper-->
</body>
</html>

