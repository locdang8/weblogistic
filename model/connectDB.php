<?php 

$servername = "localhost";

$username = "root";

$password = "";

$pdo = "";

try {
//$pdo là đối tượng kết nối với mysql

  $pdo = new PDO("mysql:host=$servername;dbname=logistics", $username, $password);

  // đặt mode err PDO thành exception

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Connected successfully";

} catch(PDOException $e) {

  echo "Connection failed: " . $e->getMessage();
  
}









?>