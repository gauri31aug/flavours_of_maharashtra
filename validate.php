<?php

$servername="localhost";
$username="gauri";
$password="";
$dbname="flavours_of_maharashtra";

$uname=$_POST["uname"];
$pword=$_POST["pword"];

$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
else
{
    $sql="select uname, pass1 from user_register where uname='$uname'";
	$result=mysqli_query($conn,$sql) or die("Query failed:".mysqli_error());
	$row=mysqli_fetch_row($result);
	if($row[0]=="$uname" && $row[1]=="$pword") //if user exists in database and correct password
	{
?>

<script>
    var uname = " <?php echo $uname ?> "; 
	var pass = " <?php echo $pword ?> "; 
    localStorage.setItem("user",uname);
	localStorage.setItem("password",pass);
	window.location.assign("main.php");  //redirect to main page
</script>

<?php
	}
	elseif($row[0]=="$uname" && $row[1]!="$pword") //if user exists in database but enters wrong password
	{
?>

<script>
   alert("Invalid password!");
   window.location.assign("login_copy.php"); //redirect to login page
</script>

<?php
    }
	else
	{
?>

<script>
   alert("Not a registered user!");
   window.location.assign("register.html");
</script>

<?php
	}
mysqli_free_result($result);
mysqli_close($conn);
}

?>