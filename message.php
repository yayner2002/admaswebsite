<?php
$name = $_POST['name'];
$guestEmail = $_POST['email'];
$subject = $_POST['subject'];
$guestMessage = $_POST['message'];
$emailFrom = 'info@admasuniversity.com';
$emailSubject = 'New Form Submitted From Guest';
$emailBody = "User Name : $name.\n".
             "User Email : $guestEmail.\n".
             "Subject : $subject.\n".
             "User Message : $guestMessage.\n";
$to = 'yayner2002@gmail.com';
$headers = "From : $emailFrom \r\n";
$headers .= "ReplayTo: $guestEmail \r\n";
$retval = mail($to,$subject,$emailBody,$headers);
if($retval == true){
    echo "Message Sent Successfully";
}
else{
    echo "Message Could not be sent";
}
header("Location: contact.html");




?>