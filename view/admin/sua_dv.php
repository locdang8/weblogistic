<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=dichvu">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" class="modal__form">
            <?php 
                $madv = 'madv';
                $madv_value = $_GET['madv'];
                $table = "dichvu";
                $result = showDatabaseWithId($pdo, $table, $madv, $madv_value);
                foreach ($result as $value) {
            ?>
            <label for="">
                Mã dịch vụ
            </label>
            <div>
                <input type="text" name="madv" id="madv" disabled value="<?php echo $value['madv'];?>">
            </div>
            <label for="">
            Tên dịch vụ
            </label>
            <div>
                <input type="text" name="tendv" id="tendv" required value="<?php echo $value['tendv'];?>">
            </div>
            <label for="">
            Nội dung
            </label>
            <div>
                <input type="text" name="noidung" id="noidung" required value="<?php echo $value['noidung'];?>"> 
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

    if(isset($_POST['tendv']) && isset($_POST['noidung'])) {
        $myData = [
            "madv" => $madv_value,
            "tendv" => $_POST['tendv'],
            "noidung" => $_POST['noidung']
        ];    

        // $sql = "UPDATE dichvu SET tendv = :tendv, noidung = :noidung WHERE madv = :madv";

        // $stmt = $pdo->prepare($sql);

        // $stmt->bindValue(':madv', $myData["madv"]);
        // $stmt->bindValue(':tendv', $myData["tendv"]);
        // $stmt->bindValue(':noidung', $myData["noidung"]);

        // if($stmt->execute()) {
        //     header("location: ../controller/admin.php?view=dichvu");
        // } else {
        //     echo '<script language="javascript">';
        //     echo 'alert("Cập nhật thất bại")';
        //     echo '</script>';
        // }

        updateDichVu($pdo, $myData);
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