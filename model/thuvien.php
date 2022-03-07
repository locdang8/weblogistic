<?php 

include "../model/connectDB.php";

// show dichvu
function showDichvu($pdo) {
	$selectDv = "SELECT * FROM dichvu";
	$stmt = $pdo->prepare($selectDv);
	$stmt->execute();

	// feth dữ liệu theo dạng hàng với các mảng liên kết với nhau, để truy cập vào chỉ cần ghi tên cột vào là có thể hiện giá trị
	$element = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $element;

}

$element = showDichvu($pdo);
echo $element[1]["tendv"];


?>