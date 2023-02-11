# Yegara HOST SMS Gateway api Ethiopia ( FREE )
Send OTP and more to Ethiopia From your websites and apps using <a href="https://yegara.com">Yegara HOST </a> FREE <a href="https://yegara.com/sms">SMS API Gateway.

The SMS GATEWAY is provided for FREE with all your domains.
If your domain is not registered with yegara.com, you can simply verify your ownership and start sending

 > Get your Token from <a href="https://yegara.com/sms">yegara.com/sms</a>
 
How to Use
-------

##### Simple Usage
 
```php
<?php
 include('yegaraSMS-api.php');

 $to ='0960171717';
 $message = '1234';
 $template_id = 'otp';  

 echo sendSMS($to, $message, $template_id); 
?>
```

SMS Template Ids
-------
 
Template ID	 | Parameter | SMS Content
--- | --- | ---
 `otp` | 	*4-6 digit Number* | Your [Webiste Name] OTP is: [OTP]
 `otp_1` | 	*4-6 digit Number* | Use  [OTP]  for 2FA on  [Webiste Name]

 
 
 
 Note
-------
 You will have to send the reqests from your domain name or subdomain . 
