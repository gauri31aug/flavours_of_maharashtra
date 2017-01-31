<?php

$servername="localhost";
$username="gauri";
$password="";
$dbname="flavours_of_maharashtra";

$uname=$_POST["pname"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$email=$_POST["email"];

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
else
{
	  $sql2="select uname from user_register where uname='$uname'";
	  $result2=mysqli_query($conn,$sql2) or die("Query failed:".mysqli_error());
	  $row2=mysqli_fetch_row($result2); //check if new username exists in database
	  
	  $sql="select pass1 from user_register where pass1='$pass1'";
	  $result=mysqli_query($conn,$sql) or die("Query failed:".mysqli_error());
	  $row=mysqli_fetch_row($result); //check if new password exists in database
	  
	  if("$uname"=="$row2[0]")
	  {
?>

<script>
alert("Username already in use. Please choose another name!");
window.location.assign("register.html");
</script>
	  
<?php
      }
	  elseif("$pass1"=="$row[0]")
	  {
?>

<script>
alert("Password already in use. Please choose another password!");
window.location.assign("register.html");
</script>

<?php
      }
      else
	  {
	  	$sql1="insert into user_register(uname, pass1, pass2, address, contact, email) values('$uname', '$pass1', '$pass2', '$address', '$contact', '$email')";  
		if(mysqli_query($conn,$sql1))
		{
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
<h1>Thankyou for registering with "Flavours of Maharashtra"!</h1><br><br>
<a href="login_copy.php">Click here to login</a>
</body>
</html>

<?php	
		}
		else
		{
			die("Query failed:".mysqli_error());
		}
	  }
	   mysqli_free_result($result);  
	   mysqli_free_result($result2);
}
mysqli_close($conn);
?>