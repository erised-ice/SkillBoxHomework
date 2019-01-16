<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List</title>
  <link rel="stylesheet" href="css/reset.css">
</head>
<body>
<?php
  $dsn = 'mysql:host=localhost;dbname=leonzemaim';
  $username = 'leonzemaim';
  $password = 'leonzemaim';
  $options = array(
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  ); 
  $pdo = new PDO($dsn, $username, $password, $options);
  $stmt = $pdo->prepare('SELECT name, phone, date FROM Orders ORDER BY name');
  $stmt->execute();
?>



<div class="orders">
  <h1>Список заявок</h1>
  <table>
    <tr>
      <th>Имя</th>
      <th>Телефон</th>
      <th>Дата</th>
    </tr>
    <?php
      foreach ($stmt as $row) {
        echo '<tr>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['phone'].'</td>';
        echo '<td>'.$row['date'].'</td>';
        echo '</tr>';
      }
    ?>
  </table>
</div>

<style>
  .orders {
    padding: 20px;
  }
  h1 {
    font-size: 28px;
    margin-bottom: 30px;
  }
  td, th {
    border-bottom: 1px solid #e8e8e8;
    border-right: 1px solid #e8e8e8;
  }
</style>
  
</body>
</html>