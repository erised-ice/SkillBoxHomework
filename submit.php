<?php

$servername = "localhost";
$username = "leonzemaim";
$password = "leonzemaim";
$dbname = "leonzemaim";
$db_table = "Orders";

$name = $_POST['name'];
$phone = $_POST['phone'];
$date = date('Y-m-d H:i:s');


$mysqli = new mysqli($servername, $username, $password, $dbname);
$mysqli->set_charset("utf8");

if ($mysqli->connect_error) {
  die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$result = $mysqli->query("INSERT INTO ".$db_table." (name,phone,date) VALUES ('$name','$phone','$date')");

if ($result == true) {	
  header("Location: /?submit=true");
} else {
	echo "Информация не занесена в базу данных";
}
