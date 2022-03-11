<?php 

include "../model/connectDB.php";

// show dichvu
function showDichvu($pdo) {
	$selectDv = "SELECT * FROM dichvu";
	$stmt = $pdo->prepare($selectDv);
	$stmt->execute();

	// fetch dữ liệu theo dạng hàng với các mảng liên kết với nhau, để truy cập vào chỉ cần ghi tên cột vào là có thể hiện giá trị
	$element = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$pdo = null;
	return $element;

}
//hàm này trả để check xem tài khoản và mật khẩu đó có tồn tại không
//trả về số hàng, = 0 => là không có tài khoản đó tồn tại
// = 1 => là có tài khoản 
function showItem($pdo,$nameTable, $username, $password) {
	$select = "SELECT * FROM $nameTable WHERE taikhoan='$username' AND matkhau='$password'";
	$stmt = $pdo->query($select);
	$count = $stmt->rowCount();
	$pdo = null;
	// $element = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $count;
}

?>