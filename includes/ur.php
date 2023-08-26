<?php
require('../db.php');
mysqli_select_db($db, 'kitab');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$pin = $_POST['pin'];
$password = $_POST['password'];

$query = "INSERT INTO `users` (`id`, `Name`, `Mobile`, `Email`, `Address`, `AreaPin`, `Password`)
VALUES (NULL, '$name', '$mobile', '$email', '$address', '$pin', '$password')";

mysqli_query($db, $query);
echo "<script>window.location.href='../user_login.php';</script>";
exit;
?>