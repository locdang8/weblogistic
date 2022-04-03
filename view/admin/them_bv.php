<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=baiviet">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="modal__form">
            <label for="">
                Mã bài viết
            </label>
            <div>
                <input type="text" name="mabv" id="mabv" >
            </div>
            <label for="">
            Tiêu đề
            </label>
            <div>
                <input type="text" name="tieude" id="tieude" >
            </div>
            <label for="">
            Nội dung
            </label>
            <div>
                <input type="text" name="noidung" id="noidung" > 
            </div>
            <label for="">
            Ngày đăng
            </label>
            <div>
                <input type="datetime-local" name="ngaydang" id="ngaydang" > 
            </div>
            <label for="">
            Hình ảnh
            </label>
            <div>
                <!-- <input type="file" name="hinhanh" id="hinhanh">  -->
                <input type="file" name="hinhanh" id="hinhanh" required>
            </div>
            <label for="">
            Tên danh mục
            </label>
            <div>
                
                <select name="theloai" id="">
                
                    <optgroup>
                    <?php 
                    $result = showDatabase($pdo, "theloai");
                    foreach ($result as  $value) {
                        # code...
                    ?>
                        <option value="<?php echo $value['matheloai']?>">
                        <?php echo $value['tentheloai']?>
                        </option>
                        <?php }?>

                    </optgroup>

                </select>
                
            </div>
            <div>
                <input type="submit" name="submit" value="Lưu" id="submit">
            </div>
        </form>
    </div>
</div>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {

    // if(isset($_POST['mabv']) && isset($_POST['tieude']) && isset($_POST['noidung']) && isset($_POST['ngaydang'])
    // && isset($_POST['hinhanh']) && isset($_POST['theloai']) ) {

    //     //upload image
    //     $target_dir = "../view/uploads/";
    //     $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
        

    //     $myData = [
    //         "mabv" => $_POST['mabv'],
    //         "tieude" => $_POST['tieude'],
    //         "noidung" => $_POST['noidung'],
    //         "ngaydang" => $_POST['ngaydang'],
    //         "hinhanh" => $_POST['hinhanh'],
    //         "theloai" => $_POST['theloai']
    //     ];    
    //     // inserttheloai($pdo,$myData);
    //     $sql = "INSERT INTO baiviet (mabaiviet, tieude, noidung, ngaydang, hinhanh, theloai)
    //     VALUES (:mabaiviet, :tieude, :noidung, :ngaydang, :hinhanh, :theloai)";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->bindValue(":mabaiviet", $myData["mabv"]);
    //     $stmt->bindValue(":tieude", $myData["tieude"]);
    //     $stmt->bindValue(":noidung", $myData["noidung"]);
    //     $stmt->bindValue(":ngaydang", $myData["ngaydang"]);
    //     $stmt->bindValue(":hinhanh", $myData["hinhanh"]);
    //     $stmt->bindValue(":theloai", $myData["theloai"]);
    //     if($stmt->execute()) {
    //         echo "ok";
    //     }
    //     else {
    //         echo "ko";

    //     }
    // } else {
    //     echo "loi";
    // }
    $targetDir = "../view/uploads/";
    $fileName = basename($_FILES["hinhanh"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(!empty($_FILES["hinhanh"]['name'])) {

        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        
        if(in_array($fileType, $allowTypes)) {
            
            if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $targetFilePath))
            
            $myData = [
                "mabv" => $_POST['mabv'],
                "tieude" => $_POST['tieude'],
                "noidung" => $_POST['noidung'],
                "ngaydang" => $_POST['ngaydang'],
                "hinhanh" => $fileName,
                "theloai" => $_POST['theloai']
            ];    
            // insert sql
            // $sql = "INSERT INTO baiviet (mabaiviet, tieude, noidung, ngaydang, hinhanh, matheloai)
            // VALUES (:mabaiviet, :tieude, :noidung, :ngaydang, :hinhanh, :matheloai)";

            // $stmt = $pdo->prepare($sql);
            // $stmt->bindValue(":mabaiviet", $myData["mabv"]);
            // $stmt->bindValue(":tieude", $myData["tieude"]);
            // $stmt->bindValue(":noidung", $myData["noidung"]);
            // $stmt->bindValue(":ngaydang", $myData["ngaydang"]);
            // $stmt->bindValue(":hinhanh", $myData["hinhanh"]);
            // $stmt->bindValue(":matheloai", $myData["theloai"]);         
            // if($stmt->execute()) {
            //     echo '<script language="javascript">';
            //     echo 'alert("Thêm thành công")';
            //     echo '</script>';
            // } else {
            //     echo '<script language="javascript">';
            //     echo 'alert("Thêm thất bại")';
            //     echo '</script>';
            // }
            // $pdo = null;

            insertBaiViet($pdo, $myData);
        }
    }
}
?>