<div>
    <button>
        <a href="../controller/them_ht.php">Thêm hình thức</a>
    </button>
</div>

<table class="styled-table">
    <thead>
        <tr>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Email</th>
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
                <td><?php echo $value['diachi'];?></td>
                <td><?php echo $value['email'];?></td>
                <td class="option">
                    <a class="update" href="../controller/sua_kh.php?makh=<?php echo $value['makh'];?>" value="">
                        <img src="../view/images/icon/update.svg" title="<?php echo $value['makh'];?>" alt="Cập nhật">
                    </a>
                    <a href="../controller/xoa_kh.php?makh=<?php echo $value['makh'];?>">
                        <img src="../view/images/icon/delete.svg" title="Xóa" alt="Xóa">
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>