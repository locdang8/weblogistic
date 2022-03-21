<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=hinhthuc">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" class="modal__form">
            <label for="">
                Mã hình thức
            </label>
            <div>
                <input type="text" name="maht" id="maht" required>
            </div>
            <label for="">
            Tên hình thức
            </label>
            <div>
                <input type="text" name="tenht" id="tenht" required>
            </div>
            <div>
                <input type="submit" name="submit" value="Lưu" id="submit">
            </div>
        </form>
    </div>
</div>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(isset($_POST['maht']) && isset($_POST['tenht'])) {
        $myData = [
            "mahinhthuc" => $_POST['maht'],
            "tenhinhthuc" => $_POST['tenht']
        ];    
        insertHinhThuc($pdo,$myData);

    } 

}
?>