<table class="styled-table">
    <thead>
        <tr>
            <th>Mã tin tức</th>
            <th>Tên tin tức</th>
            <th>Nội dung</th>
            <th>Ngay dang</th>
            <th>Tuy chinh</th>
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
                <td class="option">
                    <span>
                        <a href=""><img src="../view/images/icon/update.svg" title="Cập nhật" alt="Cập nhật"></a>
                    </span>
                    <span>
                        <a href=""><img src="../view/images/icon/delete.svg" title="Xóa" alt="Xóa"></a>
                    </span>
                </td>
            </tr>

        <?php } ?>
        
            
        

    </tbody>
</table>