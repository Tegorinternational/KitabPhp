<?php
  session_start();

  $username = $_POST["username"];
  $password = $_POST["password"];

  $servername = "0.0.0.0:3306";
  $dbusername = "root";
  $dbpassword = "root";
  $dbname = "kitab";

  $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    if (mysqli_num_rows($result) == 1) {
      $_SESSION["logged_in"] = true;
      $_SESSION["username"] = $username;
      header("Location: dashboard.php");
    } else {
      echo "Wrong username or password";
    }
  } else {
    echo "Query execution failed: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
