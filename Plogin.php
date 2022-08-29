<?php
session_start();
include 'dbh.php';

$email =  $_POST['mail'];
$password =  $_POST['pass'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";

$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
  echo "incorrect username or password";
} else {

  $_SESSION['user_id'] = $row['user_id'];
  header("Location: homepage.php");
}
?>