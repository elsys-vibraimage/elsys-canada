<?php
   $to = "aakashsheokand@gmail.com";
   $subject = "Test mail";
   $message = "Hello! This is a simple test email message.";
   $from = "akash@mansaa.io";
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
   echo "Mail Sent.";
?>