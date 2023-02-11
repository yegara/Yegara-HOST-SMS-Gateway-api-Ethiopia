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
welcome|	your client’s name	|Welcome aboard [Client Name]! We are glad to have you as a part of our community. [Webiste Name]
welcome_1	|your client’s name	|Thank you [Client Name] for registering with [Webiste Name]! Your account has been successfully created.
reminder	|your client’s name, the service you are reminding them about, and datetime|	Hi, [Client Name], We would like to send a friendly reminder about your appointment for [service] on [Date, Time]. [Webiste Name]
reminder_1	|your client’s name, the service you are reminding them about, and datetime	|Hi, [Client Name], We look forward to seeing you tomorrow at [Date, Time] for your [service]. [Webiste Name]
shopping|	order number	|Thank you for your purchase. We have received your payment for [order number]. [Webiste Name]
shopping_1	|order number|	Your order has been successfully placed. Your order number is [order number]. [Webiste Name]
confirmation	|your client’s name	|Confirmation from [Website Name]. Thanks for booking an appointment with us! We look forward to seeing you.
confirmation_1	|your client’s name|	Your reservation has been confirmed! Thank you for taking part. [Webiste Name].
 
 
 
 Note
-------
 You will have to send the reqests from your domain name or subdomain . 
