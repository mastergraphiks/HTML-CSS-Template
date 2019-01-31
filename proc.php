<?php
$to = "ask@worldwebsmart.com";
$from    = $_POST['email'];
$name    = $_POST['name'];
$continue = "thanks.html";
if ($_SERVER['REQUEST_METHOD'] != "POST"){exit;}
$message = "";
while(list($key,$value) = each($_POST)){if(!(empty($value))){$set=1;}$message = $message . "$key: $value\n\n";} if($set!==1){header("location: $_SERVER[HTTP_REFERER]");exit;}
$message = $message;
$message = stripslashes($message);
$subject = "Worldwebsmart.com";
$headers = "Return-Path: $from\r\n"; 
$headers .= "From: $name <$from>\r\n";
mail($to,$subject,$message,$headers);
?>
<?php header("location: thanks.html"); ?>