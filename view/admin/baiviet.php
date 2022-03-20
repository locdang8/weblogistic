<div>
    <button>
        <a href="../controller/them_bv.php">Thêm bài viết</a>
    </button>
</div>
<table class="styled-table">
    <thead>
        <tr>
            <th>Mã bài viết</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Ngaỳ đăng</th>
            <th>Hình ảnh</th>
            <th>Tên danh mục</th>
            <th>Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $table = "baiviet";

            $row = showDatabase($pdo, $table);

            foreach ($row as $value) {
                # code...

        ?>

            <tr>
                <td><?php echo $value['mabaiviet'];?></td>
                <td><?php echo $value['tieude'];?></td>
                <td><?php echo $value['noidung'];?></td>
                <td><?php echo $value['ngaydang'];?></td>
                <td>
                    <img class="img__service" src="../view/uploads/<?php echo $value['hinhanh'];?>" alt="">
                </td>
                <td>
                    <?php 
                        echo $value['madanhmuc'];?>
                </td>
                <td class="option">
                    <a class="update" href="../controller/sua_bv.php?mabaiviet=<?php echo $value['mabaiviet'];?>" value="">
                        <img src="../view/images/icon/update.svg" title="<?php echo $value['mabaiviet'];?>" alt="Cập nhật">
                    </a>
                    <a href="../controller/xoa_bv.php?mabaiviet=<?php echo $value['mabaiviet'];?>">
                        <img src="../view/images/icon/delete.svg" title="Xóa" alt="Xóa">
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>