<div class="main">
    <form action="index2222.php?act=donhang"  method="post">
        <h2>Quản lí đơn hàng</h2>
        <input type="text" name="kw" placeholder="Nhập mã đơn hàng ...">
        <br><input id="submit" type="submit" name="check" value="Tìm kiếm">
    </form>
    <br>
    <table class="content-table">
        <thead>
            <tr>
                <!-- <th>Check Box</th> -->
                <th>Mã đơn hàng</th>
                <th>Thời gian đặt hàng</th>
                <th>Tên Khách hàng</th>
                <th>Giá trị đơn hàng</th>
                <!-- <th>Tình trạng đơn hàng</th> -->
                <th>Phương thức thanh toán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <?php
        foreach ($listorder as $lo) {
            $pttt = $lo['pttt'];
            if ($pttt == 1) {
                $pttt = "Paypal";
            } else if ($pttt == 2) {
                $pttt = "COD";
            } else if ($pttt == 3) {
                $pttt = "Bank Transfer";
            } else {
                $pttt = "";
            }
            $kh = $lo["name"] . '
            <br>' . $lo["email"] . '
            <br>' . $lo["address"] . '
            <br>' . $lo["tel"];
            // <td><input type="checkbox"name="" id=""></td>
            echo '
            <tbody>
                <tr>
                    <td>' . $lo['code_order'] . '</td>
                    <td>' . $lo['ngaydathang'] . '</td>
                    <td>' . $kh . '
                    </td>
                    <td>' . $lo['total'] . '</td>
               
                    <td>'.$pttt.'</td>
                    <td>
                        <a id="sua" href="index2222.php?act=updatedhform&id=' . $lo['id_order'] . '">Xác nhận đơn</a> |
                        <a id="xoa" href="index2222.php?act=deldh&id=' . $lo['id_order'] . '">Xóa</a>
                    </td>
                </tr>
            </tbody>
            ';
        }
        ?>



    </table>
</div>