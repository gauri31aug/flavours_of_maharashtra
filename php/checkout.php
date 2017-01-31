<?php

session_start();

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


$conn=mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
else
{
  
  //check if cart is empty or contains any items
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
alert("Nothing to checkout! Please continue to order!");
window.location.assign("view_cart.php");
</script>
<head>
</html>

<?php   
   
  }	  
  else
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
font-size:90%;
}

label
{
width:12em;
float:left;
text-align:right;
margin-right:0.5em;
display:block
}

.tbox
{
border-radius:1px;
height:30px;
width:30%;
}

#address
{
border-radius:1px;
height:80px;
width:30%;
}

#address:focus
{
border-radius:5px;
height:85px;
width:35%;
font-size:20px;
opacity:0.6;
}

.tbox:focus
{
border-radius:5px;
height:35px;
width:35%;
font-size:20px;
opacity:0.6;
}

.tbox:hover, textarea:hover
{
background-color:lavender;
color:black;
}

#submit
{
margin-left:150px;
background-color:#5eb53c;
height:70px;
width:15%;
color:white;
font-size:15px;
cursor:pointer;
border-radius:5px;
}

#reset
{
margin-left:50px;
background-color:#5eb53c;
height:70px;
width:15%;
color:white;
font-size:15px;
cursor:pointer;
border-radius:5px;
}


</style>
<script>
function validations()
{
//-------------------------Username Verification-----------------------------------
var pname=document.getElementById("pname").value;
if(pname==null || pname=="")
{
  alert("Name is Required!");
  document.getElementById("pname").style.border="1px solid red";
  return false;
}
else
	{
        document.getElementById("pname").style.border="1px solid green";
    }
	
//-------------------------Address Verification-----------------------------------
var address=document.getElementById("address").value;
if(address==null || address=="")
{
  alert("Please enter the shipping address!");
  document.getElementById("address").style.border="1px solid red";
  return false;
}
else
	{
        document.getElementById("address").style.border="1px solid green";
    }

	
//-------------------Contact details verification-----------------------
var contact=[];
contact=document.getElementById("contact").value;
if(contact==null || contact=="")
{
  alert("Mobile Number must be filled out.");
  document.getElementById("contact").style.border="1px solid red";
  return false;
}
else if(contact.length!=10)
 {
   alert("Please enter a valid mobile number.");
   document.getElementById("contact").style.border="1px solid red";
   return false;
 }
   else
	{
        document.getElementById("contact").style.border="1px solid green";
    }
	
//---------------------Email verification-------------------	
var email=document.getElementById("email").value;
var attherate=email.indexOf("@");
var dot=email.lastIndexOf(".");

if(email==null || email=="")
{
  alert("Email Id is Compulsory!");
  document.getElementById("email").style.border="1px solid red";
  return false;
}
else if(attherate<1 || dot<attherate || dot+2>=email.length)
  {
  alert("Please enter a valid email Id.");
  document.getElementById("email").style.border="1px solid red";
  return false;
  }
  else
	{
        document.getElementById("email").style.border="1px solid green";
    }

}
</script>
</head>
<link rel="stylesheet" type="text/css" href="view_cart.css" />
<body>
<form action="email.php" method="post" onsubmit="return validations()" >	  
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
<br><br><br><br>
<h1>PLEASE ENTER YOUR SHIPPING DETAILS</h1><hr><br><br>
<label>Name:</label><input class="tbox" type="text" name="uname" id="pname" /><br><br>
<label>Shipping Address: </label><textarea name="address" id="address"></textarea><br><br>
<label>Mobile:</label> <input class="tbox" type="text" name="contact" id="contact" /><br><br>
<label>Email:</label> <input class="tbox" type="text" name="email" id="email" /><br><br>
<label>Amount:&nbsp;<b>Rs.&nbsp;</b></label><b><?php echo $_SESSION['total']; ?></b><br><br><br><br>
<input id="submit" type="submit" value="PAY" /><input id="reset" type="reset" value="CLEAR" />
</form>
</body>
</html>
    
<?php
	  }
}

?>