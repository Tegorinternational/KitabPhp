<?php
require_once('function.php');
require_once('config.php');
require_once('razorpay/razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
$razorpay_key_id = 'rzp_test_KZLNqSzQRFC152';
$razorpay_key_secret = 'dFesi3jdOHIFYeMVUojQgU47';
$api = new Api($razorpay_key_id, $razorpay_key_secret);

$orderId = $_POST['razorpay_order_id'];
$paymentId = $_POST['razorpay_payment_id'];
$signature = $_POST['razorpay_signature'];

try {
  $attributes = [
    'razorpay_order_id' => $orderId,
    'razorpay_payment_id' => $paymentId,
    'razorpay_signature' => $signature,
  ];
  $api->utility->verifyPaymentSignature($attributes);
  
  $redirect_url = "success.php?product_id=" . $product_id;
  echo "<script>window.location.href='$redirect_url';</script>";
  exit();
} catch (\Exception $e) {
  echo "Payment verification failed: " . $e->getMessage();
}
?>