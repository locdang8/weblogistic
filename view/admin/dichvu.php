<div>
    <button>
        <a href="../controller/them_dv.php">Thêm dịch vụ</a>
    </button>
</div>

<table class="styled-table">
    <thead>
        <tr>
            <th>Mã dịch vụ</th>
            <th>Tên dịch vụ</th>
            <th>Nội dung</th>
            <th>Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $table = "dichvu";

            $row = showDatabase($pdo, $table);

            foreach ($row as $value) {
                # code...

        ?>

            <tr>
                <td><?php echo $value['madv'];?></td>
                <td><?php echo $value['tendv'];?></td>
                <td><?php echo $value['noidung'];?></td>
                <td class="option">
                    <a class="update" href="../controller/sua_dv.php?madv=<?php echo $value['madv'];?>" value="">
                        <img src="../view/images/icon/update.svg" title="<?php echo $value['madv'];?>" alt="Cập nhật">
                    </a>
                    <a href="../controller/xoa_dv.php?madv=<?php echo $value['madv'];?>">
                        <img src="../view/images/icon/delete.svg" title="Xóa" alt="Xóa">
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>

<!-- <div class="modal__layout"> -->

<?php 
// ajax
// if(isset($_GET["id"])) {
//     $madv = $_GET["id"];

//     $select = "SELECT * FROM dichvu WHERE madv = '$madv'";
    
//     $stmt = $pdo->prepare($select);
    
//     // $stmt->bindParam(1, $madv);
    
//     $stmt->execute();
    
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
//     foreach ($result as $value) {
        
//     }
    
//     echo "<div>";
//     echo '<div><button class="btn__close">Close</button></div>';
//     echo '<form action="" method="POST" class="modal__form">';
//     echo '<label for="">Mã dịch vụ</label>';
//     echo "<div>";
//     echo '<input type="text" value="'.$value['madv'].'">';
//     echo '</div>';
//     echo '<label for="">Tên dịch vụ</label>';
//     echo '<div>';
//     echo '<input type="text" value="'.$value['tendv'].'">';
//     echo '</div>';
//     echo '<label for="">Nội dung</label>';
//     echo '<div>';
//     echo '<input type="text">';
//     echo '</div>';
//     echo '<div>';
//     echo '<input type="submit" name="submit" value="Lưu">';
//     echo '</div>';
//     echo '</form>';
//     echo  '</div>';
//     echo "</div>";
// } else {
//     echo "Không có";
// }

?>    
    <!-- <div>
        <div><button class="btn__close">Close</button></div>
        <form action="" method="POST" class="modal__form">
            <label for="">
                Mã dịch vụ
            </label>
            <div>
                <input type="text" value="">
            </div>
            <label for="">
            Tên dịch vụ
            </label>
            <div>
                <input type="text" value="">
            </div>
            <label for="">
            Nội dung
            </label>
            <div>
                <input type="text">
            </div>
            <div>
                <input type="submit" name="submit" value="Lưu">
            </div>
        </form>
    </div>
</div> -->
