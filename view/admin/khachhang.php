<div>
    <button>
        <a href="../controller/them_ht.php">Thêm hình thức</a>
    </button>
</div>

<table class="styled-table">
    <thead>
        <tr>
            <th>Mã hình thức</th>
            <th>Tên hình thức</th>
            <th>Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $table = "khachhang";

            $row = showDatabase($pdo, $table);

            foreach ($row as $value) {
                # code...

        ?>

            <tr>
                <td><?php echo $value['tenkhachhang'];?></td>
                <td><?php echo $value['tenhinhthuc'];?></td>
                <td class="option">
                    <a class="update" href="../controller/sua_ht.php?mahinhthuc=<?php echo $value['mahinhthuc'];?>" value="">
                        <img src="../view/images/icon/update.svg" title="<?php echo $value['mahinhthuc'];?>" alt="Cập nhật">
                    </a>
                    <a href="../controller/xoa_ht.php?mahinhthuc=<?php echo $value['mahinhthuc'];?>">
                        <img src="../view/images/icon/delete.svg" title="Xóa" alt="Xóa">
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>