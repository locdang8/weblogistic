<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=hinhthuc">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" class="modal__form">
            <?php 
                $mahinhthuc = 'mahinhthuc';
                $mahinhthuc_value = $_GET[$mahinhthuc];
                $table = "hinhthuc";
                $result = showDatabaseWithId($pdo, $table, $mahinhthuc, $mahinhthuc_value);
                foreach ($result as $value) {
            ?>
            <label for="">
                Mã hình thức
            </label>
            <div>
                <input type="text" name="maht" id="maht" disabled value="<?php echo $value['mahinhthuc'];?>">
            </div>
            <label for="">
            Tên hình thức
            </label>
            <div>
                <input type="text" name="tenht" id="tenht" required value="<?php echo $value['tenhinhthuc'];?>">
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

    if(isset($_POST['tenht'])) {
        $myData = [
            "mahinhthuc" => $mahinhthuc_value,
            "tenhinhthuc" => $_POST['tenht'],
        ];    
        updateHinhThuc($pdo, $myData);
    } 

}
?>

<script>
    // const btnSubmit = document.querySelector("#submit");
    // btnSubmit.addEventListener("click", function() {
    //     document.getElementById("madv").value = "";
    //     document.getElementById("tendv").value = "";
    //     document.getElementById("noidung").value = "";
    // });
</script>