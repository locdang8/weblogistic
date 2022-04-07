<?php include "header.php"?>
<?php 
    require '../model/thuvien.php';

?>
<link rel="stylesheet" href="../view/css/base.css">
<div class="news container-fluid">
    <!-- image------------- -->
    <div class="news-image text-center mt-5">
        <img class="container mx-0 px-0"
            src="https://file1.dangcongsan.vn/DATA/0/2018/02/logistics-09_13_38_326.jpg" alt="">
    </div>
    <!-- --------------------- -->
    <!-- data -->
    <div class="news-data container mt-2">
        <div class="news-data-title text-center py-4">
            <p class="h5 font-weight-bold border-bottom mb-0">Tin tức</p>
        </div>
        <div class="news-data-grid row mt-10 mx-md-4" data-aos="fade-right">
            <div class="col-md-8">
                <div class="row">
                    <!-- bai viet .......   -->
                    <?php 
                    $table = "baiviet";

            $row = showDatabase($pdo, $table);

            foreach ($row as $value) {
                # code...?>
                        <div class="col-xl-5 col-12 news-data-item">
                            <div class="data-image">
                                <img class="container mx-0 px-0"
                                src="../view/uploads/<?php echo $value['hinhanh']?>"
                                alt="">
                            </div>
                            <div class="data-note text-center">
                                <p><?php echo $value['tieude']?></p>
                            </div>
                            <div class="data-title text-center">
                                <p><?php echo $value['noidung']?></p>
                            </div>
                            <button class="buttonclick btn btn-success py-3 px-4">
                                <a href="" style="color: #000; text-decoration: none; font-size: 14px;">Xem chi tiet</a>
                            </button>
                        </div>
                    <?php }?>
                    <!-- --------------- -->
                </div>
            </div>
            <div class="col-md-4 right-new" data-aos="fade-left">
				<div class="menu">
					<!-- add.js se tao elemet tin ben phai tai day -->
				</div>
                
            </div>
        </div>

        <!-- đoạn này cắm php query vào sẽ có phân trang, tự động sinh ra các số   -->
        <div class="phan-trang container m-5 justify-content-center row">
            <div class="phan-trang-item justify-content-center"><a href="">1</a></div>
            <div class="phan-trang-item justify-content-center"><a href="">2</a></div>
            <div class="phan-trang-item justify-content-center"><a href="">3</a></div>
            <div class="phan-trang-item justify-content-center"><a href="">4</a></div>
            <div class="phan-trang-item justify-content-center"><a href="">5</a></div>
            <div class="phan-trang-item justify-content-center"><a href="">...</a></div>
            <div class="phan-trang-item justify-content-center"><a href="">7</a></div>
            <div class="phan-trang-item justify-content-center"><a href="">8</a></div>
            <div class="phan-trang-item justify-content-center"><a href="">9</a></div>
        </div>
    </div>
    <?php include("box.php")?>
</div>
</body>
<?php include "footer.php"; ?>
</html>