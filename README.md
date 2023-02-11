# Yegara HOST SMS Gateway api Ethiopia ( FREE )
Send OTP and more to Ethiopia From your websites and apps using <a href="https://yegara.com">Yegara HOST </a> FREE <a href="https://yegara.com/sms">SMS API Gateway.

The SMS GATEWAY is provided for FREE with all your domains.
If your domain is not registered with yegara.com, you can simply verify your ownership and start sending

# How To Use
 
  <code>

    include('yegaraSMS-api.php');
    $to ='0960171717';
    $message = '1234';
    $template_id = 'otp';  

    $send = sendSMS($to, $message, $template_id); 

  </code>
