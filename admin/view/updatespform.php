<div class="main">
    <form action="index2222.php?act=sanpham_update" method="post" enctype="multipart/form-data">
        <h2>Cập nhật Sản Phẩm</h2>
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            $iddmcur = $spct[0]['id_category'];
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    if ($dm['id_category'] == $iddmcur)
                        echo '<option value="' . $dm['id_category'] . '"selected>' . $dm['name_category'] . '</option>';
                    else
                        echo '<option value="' . $dm['id_category'] . '">' . $dm['name_category'] . '</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="tensp" placeholder="Tên sản phẩm" value="<?= $spct[0]['name_product'] ?>">
        <input type="file" name="hinh">
        <img src="<?= $spct[0]['img_product'] ?>" width="80px" alt="">
        <?php
        if (isset($uploadOk) && ($uploadOk == 0)) {
            echo '<p style="color:red">Hình ảnh không hợp lệ</p>';
        }

        ?>
        <input type="text" name="giasp" placeholder=" Giá" value="<?= $spct[0]['price_product'] ?>">
        <input type="text" name="giacusp" placeholder=" Giá Cũ" value="<?= $spct[0]['oldprice_product'] ?>">
        <input type="hidden" name="id" value="<?= $spct[0]['id_product'] ?>">
        <br>
        <input id="submit" type="submit" name="capnhat" value="Cập nhật">
    </form>
    <br>
    <table class="content-table">
        <thead>

            <tr>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình</th>
                <th>Giá</th>
                <th>Giá cũ</th>
                <th>Hành động</th>
            </tr>
        </thead>

        <?php
        // var_dump($kq);
        ?>
        <?php
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $item) {
                echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $item['name_product'] . '</td>
                            <td><img src="' . $item['img_product'] . '" width="80px" ></td>
                            <td>' . $item['price_product'] . '</td> 
                            <td>' . $item['oldprice_product'] . '</td> 
                            <td>
                               <a id="sua" href="index2222.php?act=updatespform&id=' . $item['id_product'] . '">Sửa</a> |
                                <a id="xoa" href="index2222.php?act=delsp&id=' . $item['id_product'] . '">Xóa</a>
                            </td>
                        </tr>';
                $i++;
            }
        }
        ?>

    </table>
</div>