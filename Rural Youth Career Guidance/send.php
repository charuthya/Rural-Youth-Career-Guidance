<?php
if(!empty($_POST["submit"]))
{
$username = $_POST["username"];
$email = $_POST["email"];
$message = $_POST["message"];
$toEmail = "santhiyakanniyappan2004@gmail.com";

$mailHeaders = "Name:" . $username . "\r\n Email: " . $email . 

"\r\n message: " . $message . "\r\n";

if(mail($toEmail, $username, $mailHeaders))
{

$mess = "Your Information is Received Successfully";

}
else
echo "connected Successfully";


}

?>