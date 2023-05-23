<div class="main">
    <h2>Cập Nhật Danh Mục</h2>
    <?php
    // echo var_dump($kqone);
    ?>
    <form action="index2222.php?act=updatedmform" method="post">
        <input type="text" name="tendm" value="<?= $kqone[0]['name_category'] ?>">
        <input type="hidden" name="id" value="<?= $kqone[0]['id_category'] ?>">
        <?php
            $utdmcur = $kqone[0]['prioritized_category'];
            if (isset($utdmcur)&&($utdmcur == 0)) {
                echo '<select name="uutien" id="" value="" >
                            <option value="2">Chọn quyền ưu tiên</option>
                            <option value="1">Có</option>
                            <option value="0" selected>Không</option>
                
                        </select>';
                
                
            }else{
                echo '<select name="uutien" id="" value="" >
                            <option value="2">Chọn quyền ưu tiên</option>
                            <option value="1" selected>Có</option>
                            <option value="0" >Không</option>
                
                        </select>';
            } 
            
            $htdmcur = $kqone[0]['hide_category'];
            if (isset($htdmcur)&&($htdmcur == 0)) {
                echo '<select name="hienthi" id="" value="" >
                            <option value="2">Chọn quyền ưu tiên</option>
                            <option value="1">Có</option>
                            <option value="0" selected>Không</option>
                
                        </select>';
                
                
            }else{
                echo '<select name="hienthi" id="" value="" >
                            <option value="2">Chọn quyền ưu tiên</option>
                            <option value="1" selected>Có</option>
                            <option value="0" >Không</option>
                
                        </select>';
            }

        ?>
        <br>
        <input id="submit" type="submit" name="capnhat" value="Cập nhật">
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