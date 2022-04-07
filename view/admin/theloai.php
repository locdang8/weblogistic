<div>
    <button>
        <a href="../controller/them_dm.php">Thêm thể loại</a>
    </button>
</div>

<table class="styled-table">
    <thead>
        <tr>
            <th>Mã thể loại</th>
            <th>Tên thể loại</th>
            <th>Ghi chú</th>
            <th>Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $table = "theloai";

            $row = showDatabase($pdo, $table);

            foreach ($row as $value) {
                # code...

        ?>

            <tr>
                <td><?php echo $value['matheloai'];?></td>
                <td><?php echo $value['tentheloai'];?></td>
                <td><?php echo $value['ghichu'];?></td>
                <td class="option">
                    <a class="update" href="../controller/sua_dm.php?matheloai=<?php echo $value['matheloai'];?>" value="">
                        <img src="../view/images/icon/update.svg" title="<?php echo $value['matheloai'];?>" alt="Cập nhật">
                    </a>
                    <a href="../controller/xoa_dm.php?matheloai=<?php echo $value['matheloai'];?>">
                        <img src="../view/images/icon/delete.svg" title="Xóa" alt="Xóa">
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>