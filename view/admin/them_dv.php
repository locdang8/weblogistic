<link rel="stylesheet" href="../view/css/admin.css">
<div class="modal__layout">
    <div>
        <div>
            <button class="btn__close">
                <a href="../controller/admin.php?view=dichvu">Trở về</a>
            </button>
        </div>
        <form action="" method="POST" class="modal__form">
            <label for="">
                Mã dịch vụ
            </label>
            <div>
                <input type="text" name="madv" id="madv" required>
            </div>
            <label for="">
            Tên dịch vụ
            </label>
            <div>
                <input type="text" name="tendv" id="tendv" required>
            </div>
            <label for="">
            Nội dung
            </label>
            <div>
                <input type="text" name="noidung" id="noidung" required> 
            </div>
            <div>
                <input type="submit" name="submit" value="Lưu" id="submit">
            </div>
        </form>
    </div>
</div>

<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(isset($_POST['madv']) && isset($_POST['tendv']) && isset($_POST['noidung'])) {
        $myData = [
            "madv" => $_POST['madv'],
            "tendv" => $_POST['tendv'],
            "noidung" => $_POST['noidung']
        ];    

        // $sql = "INSERT INTO dichvu (madv, tendv, noidung)
        // VALUES (:madv, :tendv, :noidung)";

        // $stmt = $pdo->prepare($sql);

        // $stmt->bindValue(':madv', $myData["madv"]);
        // $stmt->bindValue(':tendv', $myData["tendv"]);
        // $stmt->bindValue(':noidung', $myData["noidung"]);

        // if($stmt->execute()) {
        //     echo '<script language="javascript">';
        //     echo 'alert("Thêm thành công")';
        //     echo '</script>';
        // } else {
        //     echo '<script language="javascript">';
        //     echo 'alert("Thêm thất bại")';
        //     echo '</script>';
        // }

        insertDichVu($pdo, $myData);
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