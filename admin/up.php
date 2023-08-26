<?php
require('../db.php');
mysqli_select_db($db, 'kitab');

$category = $_POST['category'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$image = $_FILES['file']['tmp_name'];
$imageContent = addslashes(file_get_contents($image));

$query = "INSERT INTO `products` (`id`, `category`, `name`, `price`, `image`, `description`)
          VALUES (NULL, '$category', '$name', '$price', '$imageContent', '$description')";

mysqli_query($db, $query);
echo "<script>window.location.href='dashboard.php';</script>";
exit;
?>