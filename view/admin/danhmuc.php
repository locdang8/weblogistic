<div>
    <button>
        <a href="../controller/them_dm.php">Thêm danh mục</a>
    </button>
</div>

<table class="styled-table">
    <thead>
        <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Ghi chú</th>
            <th>Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $table = "danhmuc";

            $row = showDatabase($pdo, $table);

            foreach ($row as $value) {
                # code...

        ?>

            <tr>
                <td><?php echo $value['madanhmuc'];?></td>
                <td><?php echo $value['tendanhmuc'];?></td>
                <td><?php echo $value['ghichu'];?></td>
                <td class="option">
                    <a class="update" href="../controller/sua_dm.php?madanhmuc=<?php echo $value['madanhmuc'];?>" value="">
                        <img src="../view/images/icon/update.svg" title="<?php echo $value['madanhmuc'];?>" alt="Cập nhật">
                    </a>
                    <a href="../controller/xoa_dm.php?madanhmuc=<?php echo $value['madanhmuc'];?>">
                        <img src="../view/images/icon/delete.svg" title="Xóa" alt="Xóa">
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>