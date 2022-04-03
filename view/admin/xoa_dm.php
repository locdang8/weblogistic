<?php 

$table = "theloai";
$key = "matheloai";
$id = $_GET['matheloai'];
deleteData($pdo, $table, $key, $id);
?>