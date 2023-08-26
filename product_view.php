<?php
$pageTitle = "Product";
session_start();
$sessionUser = $_SESSION["Email"];
require ('db.php');
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/dist/main.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style type="text/css" media="all">
    img {
      width: 200px;
    }
  </style>
</head>
<body>

  <?php
  include('includes/nav.php');
  $post_id = $_GET['id'];
  $postQuery = "SELECT * FROM products WHERE id=$post_id";
  $runPQ = mysqli_query($db, $postQuery);
  $post = mysqli_fetch_assoc($runPQ);
  $imageData = $post['image'];
  $imageDataUri = "data:image/jpeg;base64," .base64_encode($imageData);
  $d_charge = 16;
  $total = $post['price'] + $d_charge;

  ?>

  <section class="w-full mb-20" id="product-details">
    <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
      <div class="w-full lg:w-1/2">
        <div class="lg:max-w-lg">
          <h1 class="text-2xl font-bold text-gray-800 lg:text-3xl mb-1"><?=$post['name'] ?></h1>
          <p class="leading-4 text-sm">
            <?=$post['description'] ?>
          </p>
        </div>
      </div>

      <div class="flex items-center justify-center w-full h-48 lg:w-1/2">
        <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl bg-gray-800" src="<?=$imageDataUri ?>" alt="<?=$post['name'] ?>">
      </div>


      <!-- buttons and price -->
      <div class="w-full mx-auto flex flex-row">
        <div class="">
          <div class="flex flex-row">
            <button class="h-10 w-12 border border-gray-700 text-center focus:outline-none rounded-l-full text-xl"><</button>
              <input class="h-10 w-12 border-t border-b border-gray-700 text-center focus:outline-none text-xl" readonly type="text" name="" id="" value="1">
              <button class="h-10 w-12 border border-gray-700 text-center focus:outline-none rounded-r-full text-xl">></button>
            </div>
          </div>
          <div class="ml-auto my-auto">
            <h2 class="my-auto text-right text-3xl font-medium tracking-wide">₹ <?=$post['price'] ?>

            </h2>
          </div>
        </div>


        <!-- order details -->
        <div class="w-full mx-auto border border-gray-600 rounded-md px-3 py-1 text-xs">
          <table class="w-full">
            <tr class="border-b border-gray-600">
              <th class="text-left">Order details</th>
            </tr>
            <tr class="">
              <td class="text-left">Items :</td>
              <td class="text-right">₹ <?=$post['price'] ?></td>
            </tr>
            <tr>
              <td class="text-left">Delevery :</td>
              <td class="text-right">₹ <?=$d_charge ?></td>
            </tr>
            <tr>
              <td class="text-left">Total amount :</td>
              <td class="text-right font-bold">₹ <?=$total; ?></td>
            </tr>
          </table>
        </div>

        <!-- delever to -->
        <div class="w-full mx-auto text-sm">

          <div class="flex mx-auto rounded-md border border-gray-700 ">
            <span class="mr-2 h-10 w-10 bg-gray-800 flex flex-wrap rounded-l-md text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt mx-auto my-auto" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg>
            </span>
            <h3 class="my-auto mr-auto">Delever to :
              <strong><?=$name ?></strong>
              <br />
            <span class="text-gray-600 text-xs"><?=$address ?> <?=$pin ?></span>
          </h3>

          <button class=" text-gray-700 h-10 w-10 px-3 text-sm my-auto py-1 text-center border-l border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square mx-auto my-auto" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg></button>
        </div>
      </div>


      <!-- payment method -->
      <div class="mx-auto w-full flex flex-row text-sm">
        <div class="flex flex-wrap py-2 bg-gray-800 rounded-full text-gray-50 px-4 mr-auto">
          <input checked type="radio" name="payment" id="paymentcod" value="cash on delivery"><label for="paymentcod" class="ml-3 inline-block align-top">Cash on delivery</label>
        </div>

        <div class="flex flex-wrap py-2 border border-gray-800 rounded-full px-4 ml-auto">
          <input disabled type="radio" name="payment" id="paymentop" value="cash on delivery"><label for="paymentop" class="ml-3 inline-block align-top">Online payment</label>
        </div>
      </div>

    </div>

    <!-- submit button -->
    <div class="text-white fixed w-full bottom-0 backdrop-blur-sm py-5">
      <div class="w-full container mx-auto px-6">
        <form action="process_payment.php" method="post">
          <!-- Add a form to submit payment details -->
          <input type="hidden" name="product_name" value="<?=$post['name'] ?>">
          <input type="hidden" name="product_price" value="<?=$total ?>">
          <input type="hidden" name="user_name" value="<?=$name ?>">
          <input type="hidden" name="user_mobile" value="<?=$mobile ?>">
          <input type="hidden" name="user_email" value="<?=$email ?>">
          <button type="submit" class="w-full mx-auto text-center bg-gray-800 rounded-full text-gray-50 py-3 text-lg">Buy Now</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>