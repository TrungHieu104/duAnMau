<div class="main">
    <form action="index2222.php?act=adddm" id="form_dm" method="post">
        <h2>Danh Mục</h2>
        <input type="text" name="tendm" placeholder="Nhập danh mục ...">
        <select name="uutien" id="" >
            <option value="2" selected >Chọn quyền ưu tiên</option>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select>
        <select name="hienthi" id="" >
            <option value="2" selected >Chọn quyền hiển thị</option>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select>
        <br><input id="submit" type="submit" name="themmoi" value="Thêm">
    </form>
    <br>
    <table class="content-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Danh Mục</th>
                <th>Ưu tiên</th>
                <th>Hiển thị</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <?php
        // var_dump($kq);
        ?>
        <?php
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $dm) {
                $hthi=$dm['hide_category'];
                    if($hthi==1){
                        $hthi="Có";
                    }else if($hthi==0){
                        $hthi="Không";
                    }
                $uutien=$dm['prioritized_category'];
                    if($uutien==1){
                        $uutien="Có";
                    }else if($uutien==0){
                        $uutien="Không";
                    }
                echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $dm['name_category'] . '</td>
                            <td>' . $uutien . '</td>
                            <td>' . $hthi . '</td>
                            <td>
                                <a id="sua" href="index2222.php?act=updatedmform&id=' . $dm['id_category'] . '">Sửa</a> |
                                <a id="xoa" href="index2222.php?act=deldm&id=' . $dm['id_category'] . '">Xóa</a>
                            </td>
                        </tr>';
                $i++;
            }
        }
        ?>

    </table>
</div>