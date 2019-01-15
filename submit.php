<?php

$servername = "localhost";
$username = "leonzemaim";
$password = "leonzemaim";
$dbname = "leonzemaim";
$link = mysqli_connect($servername, $username, $password, $dbname);

$name = $_POST['name'];
$phone = $_POST['phone'];
$date = date('Y-m-d H:i:s');


if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "INSERT INTO `orders` (`id`, `name`, `phone`) VALUES ($name, $phone)";



if (mysqli_query($link, $sql)) {
  mysqli_close($link);
  header("Location: /");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
  mysqli_close($link);
}

