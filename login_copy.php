<!DOCTYPE html>
<html>
<head>
<title>login</title>
<script src="Scripts/jquery-1.7.1.js"></script>
<script>

$("#slideshow > div:gt(0)").hide();

setInterval(function(){
$('#slideshow > div:first')
.fadeOut(1000)
.next()
.fadeIn(1000)
.end()
.appendTo('#slideshow');
}, 5000);

</script>

<script type="text/javascript">

//Validations for username and password fields on pressing enter for username and password

function check_enter(event)
{
  var kcode=event.keyCode;
  if (kcode==13)
  {
    validate();
  }
}

function validate()
{
var uname=document.getElementById("username").value;
var pass=document.getElementById("password").value;

if(uname==null || uname=="")
{
alert("Username cannot be empty!");
document.getElementById("username").style.border="1px solid red";
return false;
}
else
   {
     document.getElementById("username").style.border="1px solid blue";
   }

if(pass==null || pass=="")
{
alert("Password is required!");
document.getElementById("password").style.border="1px solid red";
return false;
}
 else
     {
	   document.getElementById("password").style.border="1px solid blue";
	 }
}


</script>


<script>

$(document).ready(function(){
	
//hover for buttons

  $("#login").hover(function(){
    $(this).css("background-color", "#689c53")},
	
	function(){
	$(this).css("background-color", "#5eb53c")
	});
	
	$("#register").hover(function(){
    $(this).css("background-color", "#689c53")},
	
	function(){
	$(this).css("background-color", "#5eb53c")
	});
	
//focus and blur for input boxes

	$("#username").focus(function(){
    $(this).css("background-color", "lavender");
	$(this).css("height", "35px");
	$(this).css("width", "200px");
	$(this).css("font-size", "20px");	
	});
	
	$("#username").blur(function(){
    $(this).css("background-color", "white");
	$(this).css("height", "30px");
	$(this).css("width", "170px");
	$(this).css("font-size", "15px");
	});
	
	$("#password").focus(function(){
    $(this).css("background-color", "lavender");
	$(this).css("height", "35px");
	$(this).css("width", "200px");
	$(this).css("font-size", "20px");
	});
	
	$("#password").blur(function(){
    $(this).css("background-color", "white");
	$(this).css("height", "30px");
	$(this).css("width", "170px");
	$(this).css("font-size", "15px");
	});
}); //document.ready
 

</script>
<style>
.main
{
float:left;
height:100%;
width:49%;
display:block;
}

body
{
padding:0px 5px 5px 25px;
background-color:ivory;
}

h1
{
font-family:copperplate gothic light;
font-size:200%;
font-weight:bold;
color:white;
padding:40px 20px 20px 100px;
letter-spacing:0.5em;
font-weight:bold;
}

header 
{   
background-image:url("main/banana_leaf1.jpg");
background-size:contain; 
display:block;
height:150px;
}

input
{
height:30px;
}

label
{
margin-left:180px;
font-family:century gothic;
font-size:20px;
color:darkgreen;
}

#register
{
margin-left:15px;
font-family:century gothic;
cursor:pointer;
width:100px;
height:35px;
background-color:#5eb53c;
color:white;
border-radius:5px;
font-size:17px;
}

#login
{
margin-left:220px;
font-family:century gothic;
cursor:pointer;
width:100px;
background-color:#5eb53c;
color:white;
border-radius:5px;
font-size:17px;
height:35px;
}

#slideshow
{
margin:21px auto;
position:relative;
width:638px;
height:600px;
padding:10px;
}

#slideshow > div
{
position:absolute;
top:0px;
left:0px;
right:0px;
bottom:0px;
}

img
{
width:638px;
height:600px;
}

form
{
display:inline;	
}

</style>

</head>

<body>
<div class="main">

<div id="slideshow">

<div>
<img src="images\amboli.jpg">
</div>

<div>
<img src="images\bharla_tomato.jpg">
</div>

<div>
<img src="images\spices.jpg">
</div>

<div>
<img src="images\amrakhanda.jpg">
</div>

<div>
<img src="images\egg_biryani.jpg">
</div>

<div>
<img src="images\chapati.jpg">
</div>

<div>
<img src="images\bharit.jpg">
</div>

<div>
<img src="images\watli_dal.jpg">
</div>

<div>
<img src="images\god_sheera.jpg">
</div>

<div>
<img src="images\spices1.png">
</div>

<div>
<img src="images\half_fry.jpg">
</div>

<div>
<img src="images\kajugar.jpg">
</div>

<div>
<img src="images\poplet_kalvan.jpg">
</div>

<div>
<img src="images\kairi_panha.jpg">
</div>

<div>
<img src="images\kurma.jpg">
</div>

<div>
<img src="images\lasun_khobra_chatni.jpg">
</div>

<div>
<img src="images\masala_taak.jpg">
</div>

<div>
<img src="images\masale_bhaat.jpg">
</div>

<div>
<img src="images\matar.jpg">
</div>

<div>
<img src="images\kokum_sarbat.jpg">
</div>

<div>
<img src="images\modak.jpg">
</div>

<div>
<img src="images\basundi.jpg">
</div>

<div>
<img src="images\paav_bhaji.jpg">
</div>

<div>
<img src="images\spices2.jpg">
</div>

<div>
<img src="images\puran_poli.jpg">
</div>

<div>
<img src="images\sabudana_vada.jpg">
</div>

<div>
<img src="images\sadha_varan.jpg">
</div>

<div>
<img src="images\shepu.jpg">
</div>

<div>
<img src="images\solkadhi.jpg">
</div>

<div>
<img src="images\surali_vadi.jpg">
</div>

<div>
<img src="images\shrikhand.jpg">
</div>

<div>
<img src="images\thalipith.jpg">
</div>

<div>
<img src="images\tomato_sambar.jpg">
</div>

<div>
<img src="images\vada_paav.jpg">
</div>

<div>
<img src="images\vanga.jpg">
</div>

<div>
<img src="images\batata.jpg">
</div>

</div>

</div>

<div class="main">
<header>
<h1>FLAVOURS OF MAHARASHTRA</h1>
</header>
<br><br><br><br><br><br><br>
<form method="post" action="validate.php" onsubmit="return validate()">
<label>Username:</label>&nbsp;<input type="text" name="uname" id="username" onkeypress="check_enter(event)" /><br><br>
<label>Password:</label>&nbsp;&nbsp;<input type="password" name="pword" id="password" onkeypress="check_enter(event)" /><br><br><br><br>
<input type="submit" name="login" value="Login" id="login" /></form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form method="post" action="register.html"><input type="submit" name="register" value="Register" id="register"/></form>
</div>
</body>
</html>