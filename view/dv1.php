<?php 

//  dịch vụ vận tải hàng không
// ID = VC02
include "header.php";
include "../model/thuvien.php";

$id_dv = $_GET['madv'];

?>

<link rel="stylesheet" href="../view/css/base.css">
<div class="section__image container mt-5">
    <img src="./images/banner/banner-van-tai.jpg" alt="" class="container-fluid">
</div>
<!-- start introduce -->
<div class="introduce my-5 border-top container">
    <div class="introduce-col1 mt-5 row">
        <?php 
            $table = "dichvu";
            $key = "madv";
            $result = showDatabaseWithId($pdo, $table, $key, $id_dv);
            foreach ($result as $value) {
        ?>
        <div class="col-12 col-md-8">
            <div class="introduce-header text-center">
                <p class="my-3" style="font-size: 20px; color: darkcyan;">
                    <?php echo $value['tendv'];?>
                </p>
                <div data-aos="fade-right">
                    <img src="./images/banner/banner2.jpg" alt="" class="container rounded">
                </div>
            </div>
            <!-- <div class="introduce-bookmark">
                <ul class="introduce-bookmark-shadow pl-3">
                    <li>
                        <a href="#first">Công ty TNHH Dịch vụ Logistics & Thương mại Hoàng Minh</a>
                        <ul>
                            <li><a href="#second">Các dịch vụ công ty</a></li>
                            <li><a href="#three">Những lợi ích khi sử dụng dịch vụ công ty</a></li>
                        </ul>
                    </li>
                </ul>
            </div> -->
            <div id="first" class="introduce-content container">
                <p class="title text-center" data-aos="slide-up">Công ty TNHH Dịch vụ Logistics & Thương mại Hoàng Minh
                </p>
                <span data-aos="fade-left">
                    <?php echo $value['noidung'];?>
                </span>
                <div>
                    <img src="./images/banner/banner3.png" alt="" class="container mt-3" data-aos="zoom-in">
                </div>
            </div>
        </div>
        <?php }?>
        <div class="col-12 col-md-4" data-aos="fade-left">
            <div class="menu">
                <div class="menu-list">
                    <div class="menu-title">
                        <p class="h5">Dịch vụ vận tải hàng không</p>
                    </div>
                    <div class="menu-item">
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                    </div>
                </div>
                <div class="menu-list">
                    <div class="menu-title">
                        <p class="h5">Dịch vụ vận tải hàng không</p>
                    </div>
                    <div class="menu-item">
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                    </div>
                </div>
                <div class="menu-list">
                    <div class="menu-title">
                        <p class="h5">Dịch vụ vận tải hàng không</p>
                    </div>
                    <div class="menu-item">
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                    </div>
                </div>
                <div class="menu-list">
                    <div class="menu-title">
                        <p class="h5">Dịch vụ vận tải hàng không</p>
                    </div>
                    <div class="menu-item">
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                        <li><a href="">Dịch vụ vận tải hàng không đi Brazil giá rẻ</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end introduce -->
<?php include "../view/footer.php" ?>