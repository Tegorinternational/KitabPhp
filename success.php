<?php
require_once('config.php');
session_start();
require_once('db.php');
$name = $email = $mobile = $address = $pin = "";
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  $user_data = $_SESSION['user_data'];
  $name = $user_data['Name'];
  $email = $user_data['Email'];
  $mobile = $user_data['Mobile'];
  $address = $user_data['Address'];
  $pin = $user_data['AreaPin'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/dist/main.css" rel="stylesheet">
  <title>Payment Successful</title>

</head>

<body>

  <section class="w-screen h-screen mx-auto my-auto flex flex-col px-10">
    <div class="w-full mx-auto">
      <h1 class="mx-auto text-center text-2xl font-bold py-10">Congratulations! Your Order Has Been Confirmed</h1>
    </div>
    <div class="w-44 h-44 p-5 mx-auto bg-green-50 rounded-full ">
      <div class="w-full h-full p-5 mx-auto my-auto bg-green-100 rounded-full">
        <div class="w-full h-full p-6 mx-auto my-auto bg-green-200 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-circle w-full h-full text-green-600" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
          </svg>
        </div>
      </div>
    </div>
    <div class="w-full mx-auto">
      <p class="mx-auto text-center text-base my-10 leading-5">
        Thanks for choosing us, <strong><?=$name ?> |<?=$email ?> </strong> !<br /> We've received your order and will do our best to make your shopping experience a great one.
    </p>

    <table class="w-full">
      <tr>
        <th class="text-left">Order details</th>
      </tr>
      <tr>
        <td class="text-left">Category :</td>
        <td class="text-right">[Category]</td>
      </tr>
      <tr>
        <td class="text-left">Items :</td>
        <td class="text-right">[Product Name]</td>
      </tr>
      <tr>
        <td class="text-left">Price :</td>
        <td class="text-right">[Price]</td>
      </tr>
      <tr>
        <td class="text-left">Total amount :</td>
        <td class="text-right">₹ [Total amount]</td>
      </tr>
    </table>

    <div class="mx-auto py-10">
      <button class="py-3 w-full text-white bg-gray-800 rounded-full mb-5" onclick="window.location.href='https://tegorinternational.github.io/app/'">Track Your Order</button>
      <button class="py-3 w-full text-gray-800 bg-white rounded-full border border-gray-800" onclick="window.location.href='/'">Go back to home</button>
      <h3 class="w-full mx-auto text-center text-sm font-medium text-gray-500 mt-10">customer support & help?</h3>
    </div>
  </div>
</section>
</body>
</html>