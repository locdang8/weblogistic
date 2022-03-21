<?php include "header.php";?>
<?php include "../model/thuvien.php"; ?>


<link rel="stylesheet" href="../view/css/base.css">
<div class="contact container mt-5">
    <div class="map container-fluid">
        <iframe class="container-fluid my-5"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7456.307310302173!2d106.7012796722077!3d20.865856069581927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7b49c5391b37%3A0x50f047241657608!2zQ8O0bmcgdHkgVE5ISCBE4buLY2ggduG7pSBMb2dpc3RpY3MgJiBUaMawxqFuZyBt4bqhaSBIb8OgbmcgTWluaA!5e0!3m2!1svi!2s!4v1646367082915!5m2!1svi!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="contact-item">
        <p>Liên hệ đặt dịch vụ và tư vấn với chúng tôi</p>
    </div>
    <div class="contact-item">
        <p>Cảm ơn Quý khách đã quan tâm tới dịch vụ vận chuyển hàng hóa, bưu kiện, thư tín trong nước và quốc tế của
            chúng tôi. Thông tin của Quý khách rất quan trọng đối với chúng tôi. Trong trường hợp Quý khách gửi thông
            tin nhưng không nhận được phản hồi do hệ thống trục trặc hoặc có sự cố ngoài mong muốn. Xin vui lòng liên hệ
            với số HOTLINE và các văn phòng chuyển phát trên toàn quốc của chúng tôi.</p>
    </div>
    <div class="contact-item">
        <li class="contact-item-list ">Văn phòng Hải phòng: <span> Số 1 Hoàng Ngọc Phách, Láng Hạ, Đống Đa, Hà
                Nội</span></li>
        <li class="contact-item-list">Văn Phòng Thanh Hóa: <span> Số 1 Hoàng Ngọc Phách, Láng Hạ, Đống Đa, Thanh
                hóa</span></li>
        <li class="contact-item-list">Hotline: <span></span></li>
        <li class="contact-item-list">Hỗ trợ tư vấn: <span></span></li>
    </div>
    <div class="contact-item">
        <li class="contact-item-list">Email: <span></span></li>
        <li class="contact-item-list">Website: <span></span></li>
    </div>

    <div class="contact-item mt-5">
        <!-- <form> -->
			<div class="contact-item mt-5">
				<form method="POST" action="">
				  <div class="form-row">
				  	<div class="form-group col-md-12">
				      <label for="inputEmail4">Họ tên</label>
				      <input type="text" class="form-control" name="hoten" id="inputHoten" required placeholder="Họ tên">
				    </div>
				    <div class="form-group col-md-12">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" name="email" id="inputEmail4" required placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Nội dung</label>
				    <input type="text" class="form-control" name="noidung" id="inputNoidung" required placeholder="Nội dung">
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Địa chỉ</label>
				    <input type="text" class="form-control" name="diachi" id="inputAddress2" required placeholder="Địa chỉ">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputService">Chọn dịch vụ</label>
				      <select id="inputService" class="form-control" required name="dichvu">
				        <option value="">Choose...</option>
				        <!-- xuất các dịch vụ từ database -->
						<?php 
							$element = showDichvu($pdo);
							foreach ($element as $value) {
								// code...
						?>
						<option value="<?php echo $value['madv'];?>"><?php echo $value["tendv"];?></option>
						<?php }?>
				      </select>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputZip">Số điện thoại:</label>
				      <input type="text" class="form-control" name="sdt" required id="inputZip">
				    </div>
					<div class="form-group col-md-6">
				      <label for="inputService">Chọn hình thức</label>
				      <select id="inputService" class="form-control" required name="hinhthuc">
				        <option value="">Choose...</option>
				        <!-- xuất các dịch vụ từ database -->
						<?php 
							$element = showDatabase($pdo, "hinhthuc");
							foreach ($element as $value) {
								// code...
						?>
						<option value="<?php echo $value['mahinhthuc'];?>"><?php echo $value["tenhinhthuc"];?></option>
						<?php }?>
				      </select>
				    </div>
				  </div>
				  <input type="submit" name="submit" class="btn btn-primary btn-sm|btn-lg" value="Gửi liên hệ">
				</form>
			</div>
		</div>
    </div>
</div>

<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST") {

		if(isset($_POST['hoten']) && isset($_POST['email']) && isset($_POST['noidung']) && isset($_POST['diachi']) && isset($_POST['dichvu'])  
		&& isset($_POST['sdt']) && isset($_POST['hinhthuc']) ) {

			$timeline = date("Y-m-d h:i:s");
			$khachhang = [
				"tenkhachhang" => $_POST['hoten'],
				"diachi" => $_POST['diachi'],
				"email" => $_POST['email']
			];

			insertKhachHangWithoutId($pdo, $khachhang);

			// lấy id khách hàng để đẩy data tới bảng ttdonbaogia
			$table = "khachhang";
			$showIDKH = showDatabseWithName($pdo, $table, "tenkhachhang", $khachhang["tenkhachhang"]);
			foreach ($showIDKH as  $value) {
			}

			$ttdonbaogia = [
				"noidung" => $_POST["noidung"],
				"ngaylap" => $timeline,
				"mahinhthuc" => $_POST['hinhthuc'],
				"makh" => $value['makh'],
				"madv" => $_POST['dichvu'],
			];

			inserTTdonbaogia($pdo, $ttdonbaogia);
		} 

	}
?>

<script>
	// check mục điện thoại có khác số không??
</script>
<?php include "../view/footer.php" ?>