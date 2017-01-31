<?php

$item_name=$_POST["item_name"];

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
   $sql="show tables from $dbname";
   $result=mysqli_query($conn,$sql) or die("Query failed:".mysqli_error());
   
   //search in which table the item exists
   
   while($row=mysqli_fetch_row($result))
   {
     if($row[0]!="cart" && $row[0]!="user_details" && $row[0]!="user_register" && $row[0]!="order_details")
     {
	   $sql="select * from $row[0] where name='$item_name'";
	   $result1=mysqli_query($conn,$sql) or die("Query failed:".mysqli_error());
	   if(mysqli_num_rows($result1)!=0)
	   {
		$tname=$row[0];
	   }
	 }	
   }
   mysqli_free_result($result);  
   mysqli_free_result($result1); 
}

//table found; insert the item from actual table to cart table
$sql="insert into cart(name, price, display) 
        select name, price, display from $tname where name='$item_name'";
 
if(mysqli_query($conn,$sql))
{	
  //redirect to snacks menu
  if("$item_name"=="upit" || "$item_name"=="tikhat_sheera" || "$item_name"=="sabudana_vada" ||
      "$item_name"=="thalipith" || "$item_name"=="sabudana_khichadi" || "$item_name"=="paav_patis" ||
	  "$item_name"=="paav_bhaji" || "$item_name"=="misal_paav" || "$item_name"=="malida" ||
	  "$item_name"=="kande_pohe" || "$item_name"=="god_sheera"|| "$item_name"=="chanyacha_pola" || 
	  "$item_name"=="tikhat_shewaya" || "$item_name"=="vada_paav" || "$item_name"=="tomato_omlet"||
	  "$item_name"=="boiled_egg" || "$item_name"=="burji_paav" || "$item_name"=="half_fry" || "$item_name"=="omlet_paav")
  
  {header('Location: ../snacks.php');}
  
  //Redirect to sweets menu
  if("$item_name"=="amrakhanda" || "$item_name"=="amras" || "$item_name"=="basundi" ||
      "$item_name"=="bundi_ladoo" || "$item_name"=="gul_poli" || "$item_name"=="gulabjaam" ||
	  "$item_name"=="jilbi" || "$item_name"=="lapshi" || "$item_name"=="modak" ||
	  "$item_name"=="naralibhat" || "$item_name"=="puran_poli"|| "$item_name"=="sabudana_kheer" || 
	  "$item_name"=="sheera" || "$item_name"=="shewaya_kheer" || "$item_name"=="shrikhand" || "$item_name"=="tandalachi_kheer")
  
  {header('Location: ../sweets.php');}
  
  //Redirect to beverages menu
  if("$item_name"=="awla_sarbat" || "$item_name"=="kairi_panha" || "$item_name"=="kokum_sarbat" ||
      "$item_name"=="masala_doodh" || "$item_name"=="masala_taak" || "$item_name"=="solkadhi")
  
  {header('Location: ../beverages.php');}
  
  //Redirect to breads menu
  if("$item_name"=="amboli" || "$item_name"=="bajri_bhakri" || "$item_name"=="chapati" ||
      "$item_name"=="ghavne" || "$item_name"=="jwari_bhakri" || "$item_name"=="nachni_bhakri" ||
	  "$item_name"=="rice_bhakri")
  
  {header('Location: ../breads.php');}
  
  //Redirect to salad/pickle/papad/chatni menu
  if("$item_name"=="jawas" || "$item_name"=="karale" || "$item_name"=="lasun_khobra_chatni" ||
      "$item_name"=="mirchi_thecha" || "$item_name"=="shengdana" || "$item_name"=="til" ||
	  
	  "$item_name"=="batata_papad" || "$item_name"=="kurdai" || "$item_name"=="nachni" ||
	  "$item_name"=="poha" || "$item_name"=="sabudana_chakli"|| "$item_name"=="sabudana_papad" || 
	  "$item_name"=="tandul" || "$item_name"=="udid" || 
	  
	  "$item_name"=="awla" || "$item_name"=="carrot_chilli" || "$item_name"=="gajar" ||
	  "$item_name"=="god_kairi" || "$item_name"=="god_limbu" || "$item_name"=="halad" ||
	  "$item_name"=="karvanda" || "$item_name"=="karvanda_mirchi" ||"$item_name"=="lasun" ||
	  "$item_name"=="mirchi" || "$item_name"=="mula" || "$item_name"=="tikhat_kairi" || "$item_name"=="tikhat_limbu" ||
	  
	  "$item_name"=="batata_raita" || "$item_name"=="boondi_raita" || "$item_name"=="dahi_kanda" ||
	  "$item_name"=="kakadi_tomato" || "$item_name"=="lal_bhopla" || "$item_name"=="tomato_kanda")
  
  {header('Location: ../salad_papad_pickle_chatni.php');}
  
  
  //Redirect to non-veg menu
  if("$item_name"=="anda_kalvan" || "$item_name"=="bangdyache_kalvan" || "$item_name"=="bombil_kalvan" ||
      "$item_name"=="ekshippi" || "$item_name"=="khekda_kalvan" || "$item_name"=="kolim_suka" ||
	  "$item_name"=="kolumbi_masala" || "$item_name"=="kolumbi_masala_green" || "$item_name"=="mutton_rassa" ||
	  "$item_name"=="poplet_kalvan" || "$item_name"=="rawas_kalvan"|| "$item_name"=="shevanache_kalvan" || 
	  "$item_name"=="sukka_bombil" || "$item_name"=="sukka_chicken" || "$item_name"=="sukka_mutton" || 
	  "$item_name"=="surmai_kalvan" || "$item_name"=="tambda_pandhara_rassa" || "$item_name"=="varhadi_chicken" || 
	  
	  "$item_name"=="surmai" || "$item_name"=="rawas" || "$item_name"=="poplet" || "$item_name"=="kolumbi" ||
	  "$item_name"=="bombil" || "$item_name"=="bangda" ||"$item_name"=="anda" ||
	  
	  "$item_name"=="chicken_bhaat" || "$item_name"=="chicken_biryani" || "$item_name"=="egg_biryani" || 
	  "$item_name"=="kolumbi_bhaat" || "$item_name"=="mutton_bhaat" || "$item_name"=="mutton_biryani")
	  
  {header('Location: ../thali_non_veg.php');}
  
    
	//Redirect to veg menu
  if("$item_name"=="alu_wadi" || "$item_name"=="batata_bhaji" || "$item_name"=="kanda_bhaji" ||
      "$item_name"=="kothimbir_wadi" || "$item_name"=="maas_wadi" || "$item_name"=="mirchi_bhaji" ||
	  "$item_name"=="moog_wada" || "$item_name"=="paat_wadi" || "$item_name"=="palak_bhaji" ||
	  "$item_name"=="surali_vadi" || "$item_name"=="udid_wada"|| 
	  
	  "$item_name"=="batata_sambar" || "$item_name"=="chanyachi_amti" || "$item_name"=="godi_amti" || 
	  "$item_name"=="kadhi" || "$item_name"=="katachi_amti" || "$item_name"=="kulith_pitla" || 
	  "$item_name"=="patwadi_rassa" || "$item_name"=="pivli_amti" || "$item_name"=="sadha_varan" || 
	  "$item_name"=="tomato_sambar" ||
	  
	  "$item_name"=="batata" || "$item_name"=="dambe" ||"$item_name"=="suran" || "$item_name"=="tondli_fry" ||
	  "$item_name"=="vanga" || 
	  
	  "$item_name"=="masoor" || "$item_name"=="kala_watana" || "$item_name"=="kajugar" || "$item_name"=="kadve" || 
	  "$item_name"=="chavli" || "$item_name"=="chana" || "$item_name"=="pandhra_watana" || "$item_name"=="moog" || 
	  "$item_name"=="matki" || "$item_name"=="matar" || 
	  
	  "$item_name"=="alu" || "$item_name"=="methi" || "$item_name"=="palak" || "$item_name"=="palak_gravy" || 
	  "$item_name"=="shepu" || 
	  
	  "$item_name"=="dal_khichadi" || "$item_name"=="fodnicha_bhaat" || "$item_name"=="masala_khichadi" || 
	  "$item_name"=="masale_bhaat" || "$item_name"=="sadha_bhaat" || "$item_name"=="tondli_bhaat" || 
	  "$item_name"=="vangi_bhaat" || "$item_name"=="veg_biryani" || "$item_name"=="veg_pulao" || 
	  
	  "$item_name"=="athla" || "$item_name"=="bharit" || "$item_name"=="bharla_tomato" ||
      "$item_name"=="bharla_vanga" || "$item_name"=="bharli_bhendi" || "$item_name"=="bharli_dhobli_mirchi" || 
      "$item_name"=="bharli_mirchi" || "$item_name"=="bhendi_masala" || "$item_name"=="fanas" || 
      "$item_name"=="gawar_masala" || "$item_name"=="karla" || "$item_name"=="kelful" || "$item_name"=="kobi" ||
      "$item_name"=="kurma" || "$item_name"=="pavta" || "$item_name"=="sandga" || "$item_name"=="shev_bhaji" ||  
      "$item_name"=="solbatata" || "$item_name"=="tomato_batata_rassa" || "$item_name"=="vanga_batata_pavta" || 
      "$item_name"=="watli_dal" || "$item_name"=="zunka")	  
	  
	  
  {header('Location: ../thali_veg.php');}
}
else
   {
     echo "Error".mysqli_error();
   }
   
mysqli_close($conn);

?>