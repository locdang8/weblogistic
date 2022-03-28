<!-- <div>
    <button>
        <a href="../controller/them_ycbg.php">Thêm hình thức</a>
    </button>
</div> -->

<table class="styled-table">
    <thead>
        <tr>
            <th>Mã đơn </th>
            <th>Nội dung</th>
            <th>Ngày lập</th>
            <th>Hình thức</th>
            <th>Khách hàng</th>
            <th>Dịch vụ</th>
            <th>Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $table = "ttdonbaogia";

            $row = showDatabase($pdo, $table);

            foreach ($row as $value) {
                # code...

        ?>

            <tr>
                <td><?php echo $value['madon'];?></td>
                <td><?php echo $value['noidung'];?></td>
                <td><?php echo $value['ngaylap'];?></td>
                <td><?php 
                    $hinhthuc = showDatabaseWithId($pdo, "hinhthuc", "mahinhthuc" , $value["mahinhthuc"]);
                    foreach ($hinhthuc as  $infor_hinhthuc) {
                        # code...
                        echo $infor_hinhthuc['tenhinhthuc'];
                    }
                ?></td>
                <td><?php 
                    $khachhang = showDatabaseWithId($pdo, "khachhang", "makh" , $value["makh"]);
                    foreach ($khachhang as  $infor_khachhang) {
                        # code...
                        echo $infor_khachhang['tenkhachhang'];
                    }
                ?></td>
                <td><?php 
                    $dichvu = showDatabaseWithId($pdo, "dichvu", "madv" , $value["madv"]);
                    foreach ($dichvu as  $infor_dv) {
                        # code...
                        echo $infor_dv['tendv'];
                    }
                ?></td>
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