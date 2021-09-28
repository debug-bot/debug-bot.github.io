<?php
//get data from form  
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "aqsahafeez316@gmail.com";
$txt ="Name : ". $name . "\r\n  Email : " . $email . "\r\n Phone :" . $phone . "\r\n Message :" . $message;
$headers = "From: http://debug-bot.github.io" . "\r\n" .
"CC: reebaafaq21@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>