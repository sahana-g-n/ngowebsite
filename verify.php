<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
    .mycss{
        font-weight:bold;
        text-align:center;
        font-size:300%;
        color:black;
        padding-top:10%;
    }
    .yourcss{
        font-weight:bold;
        text-align:center;
        font-size:200%;
        color:black;
    }
    .button{
    margin-top:0%;
    margin-left:90%;
    
    color:blac;
    font-size:150%;
}
    </style>
</head>
<a href="donate.html" class="button">Back</a>
<body style="background-color:hsl(256, 32%, 75%);">
   
</body>
</html>
<?php

require('config.php');
session_start();
$conn = mysqli_connect("localhost","root","","gothamshop");

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];
    $sql = "INSERT INTO `orders` (`order_id`, `razorpay_payment_id`, `status`, `email`, `price`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$price')";
    if(mysqli_query($conn, $sql)){
        echo "<p class='mycss'> Giving is not just about making a donation. It is about making a difference!!! Thank You</p>";
    }

    $html = "<p class='yourcss'>Your payment was successful <br><br>
            Payment ID: {$_POST['razorpay_payment_id']}</p>";

    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
