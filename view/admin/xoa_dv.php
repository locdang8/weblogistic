<?php 

$table = "dichvu";
$key = "madv";
$id = $_GET['madv'];
deleteData($pdo, $table, $key, $id);
?>