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
<title>logout</title>
<script src="Scripts/jquery-1.7.1.js"></script>
<script>
var uname=localStorage.getItem("user");
var password=localStorage.getItem("password");

if(uname!=null && password!=null )
{
	
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
	$sql="delete from cart"; //empty cart even if user logs out without checking out or doing payment
	if(mysqli_query($conn,$sql))
    {
       $total=0;
	}
    else 
        {
	      die("Query failed:".mysqli_error());
	    }
}
mysqli_close($conn);

?>
document.write("<h1>Logged out successfully</h1><br><br><a href='login_copy.php'>Back to Login</a>");
localStorage.clear();
}

</script>
</head>
<body>
</body>
</html>