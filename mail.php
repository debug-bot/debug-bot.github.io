<?php
//get data from form  
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$subject = "Mail From website";
$to = "adnan.newton@gmail.com";
$txt ="Name : ". $fullname . "\r\n  Email : " . $email . "\r\n Phone :" . $phone . "\r\n Message :" . $message;
$headers = "From: info@ecaretec.com" . "\r\n" .
"CC: reebaafaq21@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>
