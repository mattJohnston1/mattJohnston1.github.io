<?php 
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
// Allow from any origin
// if(isset($_SERVER["HTTP_ORIGIN"]))
// {
//     // You can decide if the origin in $_SERVER['HTTP_ORIGIN'] is something you want to allow, or as we do here, just allow all
//     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
// }
// else
// {
//     //No HTTP_ORIGIN set, so we allow any. You can disallow if needed here
//     header("Access-Control-Allow-Origin: *");
// }

header("Access-Control-Allow-Credentials: true");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message \n Phone: $phone";
$recipient = "emollientspy1@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "sent";
?>