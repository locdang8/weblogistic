<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=baiviet">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="modal__form">
            <?php 
                $key = "mabaiviet";
                $id_bv = $_GET[$key];
                $table = "baiviet";
                $result = showDatabaseWithId($pdo, $table, $key, $id_bv);
                foreach ($result as  $value) {
                    # code...
            ?>
            <label for="">
                Mã bài viết
            </label>
            <div>
                <input type="text" name="mabv" id="mabv" disabled value="<?php echo $value['mabaiviet'];?>">
            </div>
            <label for="">
            Tiêu đề
            </label>
            <div>
                <input type="text" name="tieude" id="tieude" value="<?php echo $value['tieude'];?>">
            </div>
            <label for="">
            Nội dung
            </label>
            <div>
                <input type="text" name="noidung" id="noidung" value="<?php echo $value['noidung'];?>"> 
            </div>
            <label for="">
            Ngày đăng
            </label>
            <div>
                <input type="text" value="<?php echo $value['ngaydang'];?>" disabled>
                <br>
                <br>
                <input type="datetime-local" name="ngaydang" id="ngaydang"> 
            </div>
            <div class="show__image">
                <p>Ảnh upload: </p>
                <img src="../view/uploads/<?php echo $value['hinhanh'];?>" alt="">
            </div>
            <label for="">
            Hình ảnh
            </label>
            <div>
                <input type="file" name="hinhanh" id="hinhanh" required >
            </div>
            <label for="">
            Tên danh mục
            </label>
            <div>
                <input type="text" disabled
                value="<?php 
                    $table = 'danhmuc';
                    $key = 'madanhmuc';
                    $id = $value['madanhmuc'];
                    $myValue = showDatabaseWithId($pdo, $table, $key, $id);
                    foreach ($myValue as $item) {
                        # code...
                    }
                    echo $item['tendanhmuc'];?>"
                >
            </div>
            <div>
                
                <select name="danhmuc" id="">
                
                    <optgroup>
                    <?php 
                    $result = showDatabase($pdo, "danhmuc");
                    foreach ($result as  $value) {
                        # code...
                    ?>
                        <option value="<?php echo $value['madanhmuc']?>">
                        <?php echo $value['tendanhmuc']?>
                        </option>
                        <?php }?>

                    </optgroup>

                </select>
                
            </div>
            <?php }?>
            <div>
                <input type="submit" name="submit" value="Lưu" id="submit">
            </div>
        </form>
    </div>
</div>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $targetDir = "../view/uploads/";
    $fileName = basename($_FILES["hinhanh"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(!empty($_FILES["hinhanh"]['name'])) {

        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        
        if(in_array($fileType, $allowTypes)) {
            
            if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $targetFilePath))
            
            $myData = [
                "mabv" => $id_bv,
                "tieude" => $_POST['tieude'],
                "noidung" => $_POST['noidung'],
                "ngaydang" => $_POST['ngaydang'],
                "hinhanh" => $fileName,
                "danhmuc" => $_POST['danhmuc']
            ];    
            updateBaiViet($pdo, $myData);
        }
    }
}
?>