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
	$pdo = null;
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
	$pdo = null;
}

function deleteData($pdo, $table,$key, $id) {
	$sql = "DELETE FROM $table WHERE $key = :$key";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(":$key", $id);
	$stmt->execute();
	$pdo = null;
	header("location: ../controller/admin.php?view=$table");
}

// table theloai
// insert theloai
function insertTheLoai($pdo, $arr) {
	$sql = "INSERT INTO theloai (matheloai, tentheloai, ghichu)
	VALUES (:matheloai, :tentheloai, :ghichu)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':matheloai', $arr["matheloai"]);
    $stmt->bindValue(':tentheloai', $arr["tentheloai"]);
	if(empty($arr["ghichu"])) {
		$stmt->bindValue(':ghichu', "Không có ghi chú");
	} else {
		$stmt->bindValue(':ghichu', $arr["ghichu"]);
	}
    if($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Thêm thành công")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Thêm thất bại")';
        echo '</script>';
    }
	$pdo = null;
}
// update theloai
function updateTheLoai($pdo, $arr) {
	$sql = "UPDATE theloai set tentheloai = :tentheloai, ghichu = :ghichu WHERE matheloai = :matheloai"; 

	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':matheloai', $arr["matheloai"]);
    $stmt->bindValue(':tentheloai', $arr["tentheloai"]);
	if(empty($arr["ghichu"])) {
		$stmt->bindValue(':ghichu', "Không có ghi chú");
	} else {
		$stmt->bindValue(':ghichu', $arr["ghichu"]);
	}
    if($stmt->execute()) {
		header("location: ../controller/admin.php?view=theloai");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Cập nhật thất bại")';
        echo '</script>';
    }
	$pdo = null;
}

// baiviet
// insert vaibiet
function insertBaiViet($pdo, $arr) {
	$sql = "INSERT INTO baiviet (mabaiviet, tieude, noidung, ngaydang, hinhanh, matheloai)
            VALUES (:mabaiviet, :tieude, :noidung, :ngaydang, :hinhanh, :matheloai)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":mabaiviet", $arr["mabv"]);
    $stmt->bindValue(":tieude", $arr["tieude"]);
    $stmt->bindValue(":noidung", $arr["noidung"]);
    $stmt->bindValue(":ngaydang", $arr["ngaydang"]);
    $stmt->bindValue(":hinhanh", $arr["hinhanh"]);
    $stmt->bindValue(":matheloai", $arr["theloai"]);         
    if($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Thêm thành công")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Thêm thất bại")';
        echo '</script>';
    }
    $pdo = null;
}

// update baiviet
function updateBaiViet($pdo, $arr) {
	$sql = "UPDATE baiviet SET  tieude = :tieude, noidung = :noidung, ngaydang = :ngaydang, hinhanh = :hinhanh, matheloai = :matheloai WHERE mabaiviet = :mabaiviet";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":mabaiviet", $arr["mabv"]);
    $stmt->bindValue(":tieude", $arr["tieude"]);
    $stmt->bindValue(":noidung", $arr["noidung"]);
    $stmt->bindValue(":ngaydang", $arr["ngaydang"]);
    $stmt->bindValue(":hinhanh", $arr["hinhanh"]);
    $stmt->bindValue(":matheloai", $arr["theloai"]);         
    if($stmt->execute()) {
		header("location: ../controller/admin.php?view=baiviet");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Cập nhật thất bại")';
        echo '</script>';
    }
    $pdo = null;
}


// hinhthuc
// insert dichvu
function insertHinhThuc($pdo, $arr) {
	$sql = "INSERT INTO hinhthuc (mahinhthuc, tenhinhthuc)
        VALUES (:mahinhthuc, :tenhinhthuc)";

    $stmt = $pdo->prepare($sql);

	$stmt->bindValue(':mahinhthuc', $arr["mahinhthuc"]);
    $stmt->bindValue(':tenhinhthuc', $arr["tenhinhthuc"]);
    if($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Thêm thành công")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Thêm thất bại")';
        echo '</script>';
    }
	$pdo = null;
}

// udpate dịch vụ 
function updateHinhThuc($pdo, $arr) {
	$sql = "UPDATE hinhthuc SET tenhinhthuc = :tenhinhthuc WHERE mahinhthuc = :mahinhthuc";

    $stmt = $pdo->prepare($sql);

	$stmt->bindValue(':mahinhthuc', $arr["mahinhthuc"]);
    $stmt->bindValue(':tenhinhthuc', $arr["tenhinhthuc"]);
	
    if($stmt->execute()) {
		header("location: ../controller/admin.php?view=hinhthuc");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Cập nhật thất bại")';
        echo '</script>';
    }
	$pdo = null;
}

//insertKhachHang
function insertKhachHangWithoutId($pdo, $arr) {
	$sql = "INSERT INTO khachhang (tenkhachhang, diachi, email)
        VALUES (:tenkhachhang, :diachi, :email)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':tenkhachhang', $arr["tenkhachhang"]);
    $stmt->bindValue(':diachi', $arr["diachi"]);
    $stmt->bindValue(':email', $arr["email"]);
    if($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Thêm thành công")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Thêm thất bại")';
        echo '</script>';
    }
	$pdo = null;
}

function insertKhachHang($pdo, $arr) {
	$sql = "INSERT INTO khachhang (makhachhang,tenkhachhang)
        VALUES (:makhachhang,:tenkhachhang)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':makhachhang', $arr["makhachhang"]);
    $stmt->bindValue(':tenkhachhang', $arr["tenkhachhang"]);
    if($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Thêm thành công")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Thêm thất bại")';
        echo '</script>';
    }
	$pdo = null;
}

// tìm kiếm id bằng tên 
// hoặc
// tìm kiếm khách hàng bằng tên 
function showDatabseWithName($pdo, $table, $searchName, $searchValue) {
	$sql = "SELECT * FROM $table WHERE $searchName = '$searchValue'";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$element = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$pdo = null;
	return $element;
}

// insert TTdonbaogia
function inserTTdonbaogia($pdo, $arr) {
	$sql = "INSERT INTO ttdonbaogia (noidung, ngaylap, mahinhthuc, makh, madv)
        VALUES (:noidung, :ngaylap, :mahinhthuc, :makh, :madv)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':noidung', $arr["noidung"]);
    $stmt->bindValue(':ngaylap', $arr["ngaylap"]);
    $stmt->bindValue(':mahinhthuc', $arr["mahinhthuc"]);
    $stmt->bindValue(':makh', $arr["makh"]);
    $stmt->bindValue(':madv', $arr["madv"]);
    if($stmt->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Xác nhận yêu cầu báo giá thành công")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Thêm thất bại")';
        echo '</script>';
    }
	$pdo = null;
} 
?>