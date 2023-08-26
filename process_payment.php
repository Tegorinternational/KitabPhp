<?php
require_once('db.php');
require_once('function.php');
require_once('config.php');
require_once('razorpay/razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
$razorpay_key_id = 'YOUR_API_KEY_ID';
$razorpay_key_secret = 'YOUR_API_KEY_SECRET';
$api = new Api($razorpay_key_id, $razorpay_key_secret);


$product_name = sanitizeInput($_POST['product_name']);
$product_price = (int) sanitizeInput($_POST['product_price']);
$user_name = sanitizeInput($_POST['user_name']);
$user_mobile = sanitizeInput($_POST['user_mobile']);
$user_email = sanitizeInput($_POST['user_email']);


$orderData = [
  'receipt' => uniqid(), 
  'amount' => $product_price * 100, 
  'currency' => 'INR',
];
$order = $api->order->create($orderData);


$orderId = $order['id'];
$amount = $order['amount'];
$currency = $order['currency'];
$notes = ['user_name' => $user_name, 'user_mobile' => $user_mobile, 'user_email' => $user_email];

$checkout = [
  'key' => $razorpay_key_id,
  'amount' => $amount,
  'name' => $product_name,
  'description' => 'Payment for ' . $product_name,
  'image' => 'http://0.0.0.0:8080/includes/imgs/banner.png',
  'order_id' => $orderId,
  'callback_url' => BASE_URL . 'payment_callback.php',
  'notes' => $notes,
];

?>
<!-- Display a loading screen while redirection -->
<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
</head>
<body>
  <p>
    Loading...
  </p>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>
    var rzp = new Razorpay(<?php echo json_encode($checkout); ?>);
    rzp.open();
  </script>
</body>
</html>