<?php
$to = "pramodarjunan472@gmail.com";
$subject = "";
$txt = "Name:".$_POST['name']." Email".$_POST['email']." Subject".$_POST['subject']." Message".$_POST['message'];
$headers = "From: ".$_POST['email'];
mail($to,$subject,$txt,$headers);
header("Location: contact-us.html");
?>