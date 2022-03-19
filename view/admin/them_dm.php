<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=danhmuc">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" class="modal__form">
            <label for="">
                Mã danh mục
            </label>
            <div>
                <input type="text" name="madm" id="madm" required>
            </div>
            <label for="">
            Tên danh mục
            </label>
            <div>
                <input type="text" name="tendm" id="tendm" required>
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
            "madanhmuc" => $_POST['madm'],
            "tendanhmuc" => $_POST['tendm'],
            "ghichu" => $_POST['ghichu']
        ];    
        insertDanhMuc($pdo,$myData);

    } elseif (isset($_POST['madm']) && isset($_POST['tendm'])) {
        $myData = [
            "madanhmuc" => $_POST['madm'],
            "tendanhmuc" => $_POST['tendm']
        ];  
        
        insertDanhMuc($pdo,$myData);
    }

}
?>