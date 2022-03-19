<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=danhmuc">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="modal__form">
            <label for="">
                Mã bài viết
            </label>
            <div>
                <input type="text" name="mabv" id="mabv" required>
            </div>
            <label for="">
            Tiêu đề
            </label>
            <div>
                <input type="text" name="tieude" id="tieude" required>
            </div>
            <label for="">
            Nội dung
            </label>
            <div>
                <input type="text" name="noidung" id="noidung"> 
            </div>
            <label for="">
            Ngày đăng
            </label>
            <div>
                <input type="datetime-local" name="ngaydang" id="ngaydang"> 
            </div>
            <label for="">
            Hình ảnh
            </label>
            <div>
                <input type="file" name="hinhanh" id="hinhanh"> 
            </div>
            <label for="">
            Tên danh mục
            </label>
            <div>
                <select name="danhmuc" id="">
                    <optgroup>
                        <option value="">
                            
                        </option>
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