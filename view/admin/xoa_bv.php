<?php 

$table = "baiviet";
$key = "mabaiviet";
$id = $_GET[$key];
deleteData($pdo, $table, $key, $id);
?>