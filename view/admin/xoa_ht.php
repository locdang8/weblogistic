<?php 

$table = "hinhthuc";
$key = "mahinhthuc";
$id = $_GET[$key];
deleteData($pdo, $table, $key, $id);
?>