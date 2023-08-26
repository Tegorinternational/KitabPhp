<?php
  session_start();
  if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: signin.php");
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kitab</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/dist/main.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    * {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body>

  <?php
  $pageTitle = "Admin Dashboard";
  
  include('../includes/nav.php');
  include('upload_products.php');
  include('../includes/footer.php');
  ?>

</body>
</html>
