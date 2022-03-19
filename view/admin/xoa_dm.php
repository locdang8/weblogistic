<?php 

$table = "danhmuc";
$key = "madanhmuc";
$id = $_GET['madanhmuc'];
deleteData($pdo, $table, $key, $id);
?>