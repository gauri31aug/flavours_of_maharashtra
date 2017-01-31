<?php

session_start();
$servername="localhost";
$username="gauri";
$password="";
$dbname="flavours_of_maharashtra";

$_SESSION['total']=0;

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
<link rel="stylesheet" type="text/css" href="view_cart.css" />
</head>
<body>
<form action="remove_from_cart.php" method="post">
<nav>
<ul>
<li><a href="../main.php">Home</a></li>
<li><a href="../snacks.php">Snacks</a></li>
<li class="dropdown">Thali
  <ul class="dropdown-content">
    <li><a href="../thali_veg.php">Veg</a></li><br>
	<li><a href="../thali_non_veg.php">Non-Veg</a></li><br>
	<li><a href="../breads.php">Breads</a></li><br>
	<li><a href="../salad_papad_pickle_chatni.php">Salads/Papads/Pickles/Chatni</a></li>
  </ul>
</li>
<li><a href="../beverages.php">Beverages</a></li>
<li><a href="../sweets.php">Sweets</a></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li><a href="../php/view_cart.php">View Cart: </a><div style="display:inline-block; color:white; font-family:century gothic; font-style:italic; width:40px; height:25px; background-color:#c5c52e;text-align:center"><?php echo $cart_count; ?></div></li>
</ul>
</nav>
<br><br>
<?php

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
  
  $count=$row[0];
  
  if($count==0)
  {
	  
?>

<!DOCTYPE html>
<html>
<head>
<script>
alert("You haven't added anything to your cart yet! Please continue ordering for viewing your cart details!");
</script>
</head>
</html>

<?php  
  }
  
  $sql="select display, price, count(display) as quantity, sum(price) as total from cart group by display";
  $result=mysqli_query($conn,$sql) or die("Query failed:".mysqli_error());
?>

<div id="summary">
<h1>YOUR CART DETAILS</h1>
<hr>
<br>
<table>
<tr>
<th>Item</th>
<th></th>
<th>Price</th>
<th>Quantity</th>
<th>Sub Total</th>
</tr>

<?php

while($row=mysqli_fetch_array($result))
{
?>	

  <tr>
  <td><?=$row[0] ?></td>
  <td style="text-align:center;"><button class="remove" name="remove_item" value="<?=$row[0] ?>">Remove</button></td>
  <td style="text-align:right;"><?=$row[1] ?></td>
  <td style="text-align:right;"><?=$row[2] ?></td>
  <td style="text-align:right;"><?=$row[3] ?></td>
  </tr>
  
<?php
$_SESSION['total']+=$row[3];

}//while
}//else
?>

<tr>
<td style="background-color:#5eb53c;height:40px;border-radius:0px 0px 10px 10px;color:white;"></td>
<td style="background-color:#5eb53c;height:40px;border-radius:0px 0px 10px 10px;color:white;"></td>
<td style="background-color:#5eb53c;height:40px;border-radius:0px 0px 10px 10px;color:white;"></td>
<td style="background-color:#5eb53c;height:40px;border-radius:0px 0px 10px 10px;color:white;"></td>
<td style="font-weight:bold;text-align:right;background-color:#5eb53c;height:40px;border-radius:0px 0px 10px 10px;color:white;padding:5px;">Total&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo $_SESSION['total']; ?></td>
</tr>
</table>
<br><br>
<a id="checkout" href="checkout.php">CHECKOUT</a>
<a id="continue" href="../main.php">CONTINUE TO ORDER</a>
</div>
</form>
</body>
</html>

<?php
mysqli_free_result($result); 
mysqli_close($conn);
?>