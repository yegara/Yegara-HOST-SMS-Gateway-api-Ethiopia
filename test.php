<?php
 include('yegaraSMS-api.php');

 $to ='09xxxxxxxx';
 $message = '1234';
 $template_id = 'otp';  

 echo sendSMS($to, $message, $template_id); 
 
?>
