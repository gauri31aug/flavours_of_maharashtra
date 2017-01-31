<?php

$servername="localhost";
$username="gauri";
$password="";
$dbname="flavours_of_maharashtra";
$del_item=$_POST['remove_item'];

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
else
{
  $sql="delete from cart where display='$del_item'";
  if(mysqli_query($conn,$sql))
  {
	header('Location:view_cart.php');
  }
  else
  {
    die("Query failed:".mysqli_error());
  }
}
?>