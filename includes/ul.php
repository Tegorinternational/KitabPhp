<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$servername = "0.0.0.0:3306";
$dbusername = "root";
$dbpassword = "root";
$dbname = "kitab";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";

$result = mysqli_query($conn, $query);
if ($result) {
  if (mysqli_num_rows($result) == 1) {
    $user_data = mysqli_fetch_assoc($result);

    $_SESSION["logged_in"] = true;
    $_SESSION['Email'] = $email;
    $_SESSION["user_data"] = $user_data; // Store all user data

    header("Location: /");
  } else {
    echo "Wrong username or password";
  }
} else {
  echo "Query execution failed: " . mysqli_error($conn);
}
mysqli_close($conn);
?>