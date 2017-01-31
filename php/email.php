<?php

$servername="localhost";
$username="gauri";
$password="";
$dbname="flavours_of_maharashtra";

$uname=$_POST["uname"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$email=$_POST["email"];

date_default_timezone_set('Asia/Kolkata');

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
else
{
    $query="insert into user_details(uname, address, contact, email) values('$uname', '$address', $contact, '$email')";
	
	if(mysqli_query($conn,$query))
	{

    //save user-order details in order_details
	$fetch_items="select display, count(display) as quantity from cart group by display";
	$items=mysqli_query($conn,$fetch_items) or die("Query failed:".mysqli_error());
	
	while($item=mysqli_fetch_row($items))
	{
		$date_time=date('Y-m-d h:i:sa');
		$insert_order="insert into order_details(date_time, user_name, item_name, quantity, address, contact, email) values('$date_time', '$uname', '$item[0]', '$item[1]', '$address', '$contact', '$email')";	
        mysqli_query($conn,$insert_order) or die ("Query failed:".mysqli_error());
    }
	
	    //empty cart
	$sql="delete from cart";
	if(mysqli_query($conn,$sql))
    {
       $total=0;
	}
    else 
        {
	      die("Query failed:".mysqli_error());
	    }
	}
	else
	{
		 die("Query failed:".mysqli_error());
	}
?>

<!DOCTYPE html>
<html>
<head>
<style>

body 
{     
background-color:ivory;
padding:30px;
font-family:century gothic;
color:darkgreen;
}

a
{
display:inline-block;
background-color:#5eb53c;
height:30px;
width:150px;
color:white;
text-decoration:none;
text-align:center;
}

</style>
</head>
<body>
<h1>Your order has been placed successfully with us!<br><br>It will be delivered to the address mentioned soon!</h1><br><br>
<a href="../main.php">HOME</a>
</body>
</html>

<?php

}
mysqli_free_result($items);
mysqli_close($conn);

?>
