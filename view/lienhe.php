<?php include"header.php"?>
<?php include "../model/thuvien.php" ?>


<link rel="stylesheet" href="../view/css/base.css">
<div class="contact container" style="margin-top: 100px;">
            <div class="map container-fluid">
            <iframe class="container-fluid my-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7456.307310302173!2d106.7012796722077!3d20.865856069581927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7b49c5391b37%3A0x50f047241657608!2zQ8O0bmcgdHkgVE5ISCBE4buLY2ggduG7pSBMb2dpc3RpY3MgJiBUaMawxqFuZyBt4bqhaSBIb8OgbmcgTWluaA!5e0!3m2!1svi!2s!4v1646367082915!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
			<div class="contact-item">
				<p>Liên hệ đặt dịch vụ và tư vấn với chúng tôi</p>
			</div>
			<div class="contact-item">
				<p>Cảm ơn Quý khách đã quan tâm tới dịch vụ vận chuyển hàng hóa, bưu kiện, thư tín trong nước và quốc tế của chúng tôi. Thông tin của Quý khách rất quan trọng đối với chúng tôi. Trong trường hợp Quý khách gửi thông tin nhưng không nhận được phản hồi do hệ thống trục trặc hoặc có sự cố ngoài mong muốn. Xin vui lòng liên hệ với số HOTLINE và các văn phòng chuyển phát trên toàn quốc của chúng tôi.</p>
			</div>
			<div class="contact-item">
				<li class="contact-item-list ">Văn phòng Hải phòng: <span> Số 1 Hoàng Ngọc Phách, Láng Hạ, Đống Đa, Hà Nội</span></li>
				<li class="contact-item-list">Văn Phòng Thanh Hóa: <span> Số 1 Hoàng Ngọc Phách, Láng Hạ, Đống Đa, Thanh hóa</span></li>
				<li class="contact-item-list">Hotline: <span></span></li>
				<li class="contact-item-list">Hỗ trợ tư vấn: <span></span></li>
			</div>
			<div class="contact-item">
				<li class="contact-item-list">Email: <span></span></li>
				<li class="contact-item-list">Website: <span></span></li>
			</div>
			<div class="contact-item mt-5">
				<form action="post">
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Địa chỉ</label>
				    <input type="text" class="form-control" id="inputAddress2">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">City</label>
				      <input type="text" class="form-control" id="inputCity">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputService">Chọn dịch vụ</label>
				      <select id="inputService" class="form-control">
				        <option selected>Choose...</option>
				        <!-- xuất các dịch vụ từ database -->
						<?php 
							$element = showDichvu($pdo);
							// echo $element[1]["tendv"];
							foreach ($element as $value) {
								// code...
						?>
						<option value="$value['tendv']"><?php echo $value["tendv"]?></option>
						<?php }?>
				      </select>
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputZip">Zip</label>
				      <input type="text" class="form-control" id="inputZip">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        Check me out
				      </label>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary btn-sm|btn-lg">Gửi liên hệ</button>
				</form>
			</div>
		</div>
		<?php  $pdo = null;?>