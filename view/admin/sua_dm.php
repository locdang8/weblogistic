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
                $table = "danhmuc";
                $key = "madanhmuc";
                $id_madanhmuc = $_GET['madanhmuc'];
                $result = showDatabaseWithId($pdo, $table, $key, $id_madanhmuc);
                foreach ($result as  $value) {
                    # code...
                ?>
            <label for="">
                Mã danh mục
            </label>
            <div>
                <input type="text" name="madm" id="madm" disabled value="<?php echo $value['madanhmuc'];?>">
            </div>
            <label for="">
            Tên danh mục
            </label>
            <div>
                <input type="text" name="tendm" id="tendm" required value="<?php echo $value['tendanhmuc'];?>">
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

        if(isset($_POST['tendm']) && isset($_POST['ghichu'])) {
            $myData = [
                "madanhmuc" => $id_madanhmuc,
                "tendanhmuc" => $_POST['tendm'],
                "ghichu" => $_POST['ghichu']
            ];
            updateDanhMuc($pdo,$myData);
            
    
        } 
    
    }
}
?>