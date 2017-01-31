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
<title>patwadi_rassa</title>
<link rel="stylesheet" href="../../../menu_item.css" type="text/css">
<script src="../../../Scripts/jquery-1.7.1.js"></script>
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
<form action="../../../php/addtocart.php" method="post">
<nav>
<ul>
<li><a href="../../../main.php">Home</a></li>
<li><a href="../../../snacks.php">Snacks</a></li>
<li class="dropdown">Thali
  <ul class="dropdown-content">
    <li><a href="../../../thali_veg.php">Veg</a></li><br>
	<li><a href="../../../thali_non_veg.php">Non-Veg</a></li><br>
	<li><a href="../../../breads.php">Breads</a></li><br>
	<li><a href="../../../salad_papad_pickle_chatni.php">Salads/Papads/Pickles/Chatni</a></li>
  </ul>
</li>
<li><a href="../../../beverages.php">Beverages</a></li>
<li><a href="../../../sweets.php">Sweets</a></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li><a href="../../../php/view_cart.php">View Cart: </a><div style="display:inline-block; color:white; font-family:century gothic; font-style:italic; width:40px; height:25px; background-color:#c5c52e;text-align:center"><?php echo $cart_count; ?></div></li>
</ul>
</nav>

<br>
<figure>
<img src="patwadi_rassa.jpg" />
<figcaption>Patwadi Rassa</figcaption>
<figcaption>1 bowl</figcaption>
<figcaption>Rs.20</figcaption>
</figure><br>
<button name="item_name" value="patwadi_rassa">Add to Cart</button>
<br><br>
<div id="show_descp">What's this?</div>
<div id="hide_descp">Hide</div>
<div id="descp">Dry grated coconut, onions, traditional spices, coriander, ginger, garlic and poppy seeds grinded together to make a spicy curry, tempered with curry leaves, cumin and mustard seeds. "Paat Wadis" made with gram flour, chopped chillies/ red chilli powder, cumin powder, coriander powder, turmeric, some oil, sesame seeds, asafoetida and salt mixture form a dough; later steamed and cut into thin slices, garnished with coriander leaves are added to the rassa or gravy. A very traditional and tasty recipe.
</div>
</form>
</body>
</html>