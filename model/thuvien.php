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


function showDatabase($pdo, $table) {
	$select = "SELECT * FROM $table";
	$stmt = $pdo->prepare($select);
	$stmt->execute();
	// fetch dữ liệu theo dạng hàng với các mảng liên kết với nhau, để truy cập vào chỉ cần ghi tên cột vào là có thể hiện giá trị
	$element = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$pdo = null;
	return $element;

}

function showDatabaseWithId($pdo, $table, $key, $id) {
	$select = "SELECT * FROM $table WHERE $key = '$id'";
	$stmt = $pdo->prepare($select);
	$stmt->execute();
	$element = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$pdo = null;
	return $element;

}

// insert dichvu
function insertDichVu($pdo, $arr) {
	$sql = "INSERT INTO dichvu (madv, tendv, noidung)
        VALUES (:madv, :tendv, :noidung)";

    $stmt = $pdo->prepare($sql);

	$stmt->bindValue(':madv', $arr["madv"]);
    $stmt->bindValue(':tendv', $arr["tendv"]);
    $stmt->bindValue(':noidung', $arr["noidung"]);
    if($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Thêm thành công")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Thêm thất bại")';
        echo '</script>';
    }
}

// udpate dịch vụ 
function updateDichVu($pdo, $arr) {
	$sql = "UPDATE dichvu SET tendv = :tendv, noidung = :noidung WHERE madv = :madv";

    $stmt = $pdo->prepare($sql);

	$stmt->bindValue(':madv', $arr["madv"]);
    $stmt->bindValue(':tendv', $arr["tendv"]);
    $stmt->bindValue(':noidung', $arr["noidung"]);
	
    if($stmt->execute()) {
		header("location: ../controller/admin.php?view=dichvu");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Cập nhật thất bại")';
        echo '</script>';
    }
}

function deleteData($pdo, $table,$key, $id) {
	$sql = "DELETE FROM $table WHERE $key = :$key";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(":$key", $id);
	$stmt->execute();
	header("location: ../controller/admin.php?view=$table");
}

//hiển thị nội dung bảng ghi khi được ấn update
// 
// update bản ghi
// function then
?>