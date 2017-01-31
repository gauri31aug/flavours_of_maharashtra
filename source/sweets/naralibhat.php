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
<title>naralibhat</title>
<link rel="stylesheet" href="../../menu_item.css" type="text/css">
<script src="../../Scripts/jquery-1.7.1.js"></script>
<script>
$(document).ready(function(){
	$("#descp").hide();
	$("#hide_descp").hide();
	$("#show_descp").click(function(){
		$(this).hide();
		$("#hide_descp").show();
		$("#descp").show();
	});
	$("#hide_descp").click(function(){
		$(this).hide();
		$("#show_descp").show();
		$("#descp").hide();
	});
});
</script>
</head>
<body>
<form action="../../php/addtocart.php" method="post">
<nav>
<ul>
<li><a href="../../main.php">Home</a></li>
<li><a href="../../snacks.php">Snacks</a></li>
<li class="dropdown">Thali
  <ul class="dropdown-content">
    <li><a href="../../thali_veg.php">Veg</a></li><br>
	<li><a href="../../thali_non_veg.php">Non-Veg</a></li><br>
	<li><a href="../../breads.php">Breads</a></li><br>
	<li><a href="../../salad_papad_pickle_chatni.php">Salads/Papads/Pickles/Chatni</a></li>
  </ul>
</li>
<li><a href="../../beverages.php">Beverages</a></li>
<li><a href="../../sweets.php">Sweets</a></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li><a href="../../php/view_cart.php">View Cart: </a><div style="display:inline-block; color:white; font-family:century gothic; font-style:italic; width:40px; height:25px; background-color:#c5c52e;text-align:center"><?php echo $cart_count; ?></div></li>
</ul>
</nav>

<br>
<figure>
<img src="naralibhat.jpg" />
<figcaption>Naralibhat</figcaption>
<figcaption>1 plate</figcaption>
<figcaption>Rs.40</figcaption>
</figure><br>
<button name="item_name" value="naralibhat">Add to Cart</button>
<br><br>
<div id="show_descp">What's this?</div>
<div id="hide_descp">Hide</div>
<div id="descp">A tasty rice dish. It is called Narali Bhat in Marathi. 'Naral = Coconut' and 'bhat = rice'. Specially made on 'Narali Pournima' day, a 'Coconut festival day' which falls on a full moon day in the rainy season, mostly in August. It is a festival for the Koli (fishermen) of the western Indian coast, who worship the sea on this day, as the sea provides them their livelihood. Traditionally, made with jaggery(brown sugar), but can be substituted with sugar. Jaggery is healthier than sugar and gives a wonderful taste as well as color. This recipe uses grated fresh coconut.
</div>
</form>
</body>
</html>