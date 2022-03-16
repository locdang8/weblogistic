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
                    <span class="update" value="<?php echo $value['madv'];?>">
                        <img src="../view/images/icon/update.svg" title="<?php echo $value['madv'];?>" alt="Cập nhật">
                    </span>
                    <span>
                        <img src="../view/images/icon/delete.svg" title="Xóa" alt="Xóa">
                    </span>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>

<div class="modal__layout">
    
    <div>
        <div><button class="btn__close">Close</button></div>
        <form action="#" method="POST" class="modal__form">
            <label for="">
                Mã dịch vụ
            </label>
            <div>
                <input type="text" disabled>
            </div>
            <label for="">
            Tên dịch vụ
            </label>
            <div>
                <input type="text">
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
</div>