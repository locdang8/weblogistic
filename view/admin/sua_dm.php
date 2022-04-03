<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=danhmuc">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" class="modal__form">
            <?php 
                $table = "theloai";
                $key = "matheloai";
                $id_matheloai = $_GET['matheloai'];
                $result = showDatabaseWithId($pdo, $table, $key, $id_matheloai);
                foreach ($result as  $value) {
                    # code...
                ?>
            <label for="">
                Mã thể loại
            </label>
            <div>
                <input type="text" name="matl" id="matl" disabled value="<?php echo $value['matheloai'];?>">
            </div>
            <label for="">
            Tên thể loại
            </label>
            <div>
                <input type="text" name="tentl" id="tentl" required value="<?php echo $value['tentheloai'];?>">
            </div>
            <label for="">
            Ghi chú (<small style="color:red">Tùy chọn!!</small>)
            </label>
            <div>
                <input type="text" name="ghichu" id="ghichu" value="<?php echo $value['ghichu'];?>"> 
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

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        if(isset($_POST['tentl']) && isset($_POST['ghichu'])) {
            $myData = [
                "matheloai" => $id_matheloai,
                "tentheloai" => $_POST['tentl'],
                "ghichu" => $_POST['ghichu']
            ];
            updateTheLoai($pdo,$myData);
        }
        else {
            echo "Lỗi con mẹ mày rồi ";
        }
    }
}
?>