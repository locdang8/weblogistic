<table class="styled-table">
    <thead>
        <tr>
            <th>Mã tin tức</th>
            <th>Tên tin tức</th>
            <th>Nội dung</th>
            <th>Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $table = "tintuc";

            $row = showDatabase($pdo, $table);

            foreach ($row as $value) {
                # code...

        ?>

            <tr>
                <td><?php echo $value['madv'];?></td>
                <td><?php echo $value['tendv'];?></td>
                <td><?php echo $value['noidung'];?></td>
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