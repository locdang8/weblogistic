<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=theloai">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" class="modal__form">
            <label for="">
                Mã thể loại
            </label>
            <div>
                <input type="text" name="matl" id="matl" required>
            </div>
            <label for="">
            Tên thể loại
            </label>
            <div>
                <input type="text" name="tentl" id="tentl" required>
            </div>
            <label for="">
            Ghi chú (<small style="color:red">Tùy chọn!!</small>)
            </label>
            <div>
                <input type="text" name="ghichu" id="ghichu"> 
            </div>
            <div>
                <input type="submit" name="submit" value="Lưu" id="submit">
            </div>
        </form>
    </div>
</div>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(isset($_POST['madm']) && isset($_POST['tendm']) && isset($_POST['ghichu'])) {
        $myData = [
            "matheloai" => $_POST['matl'],
            "tentheloai" => $_POST['tentl'],
            "ghichu" => $_POST['ghichu']
        ];    
        insertDanhMuc($pdo,$myData);

    } elseif (isset($_POST['matl']) && isset($_POST['tentl'])) {
        $myData = [
            "matheloai" => $_POST['matl'],
            "tentheloai" => $_POST['tentl']
        ];  
        
        insertTheLoai($pdo,$myData);
    }

}
?>