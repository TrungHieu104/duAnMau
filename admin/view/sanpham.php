<div class="main">
    <form action="index2222.php?act=sanpham_add" method="post" id="form_sp" enctype="multipart/form-data">
        <h2>Sản Phẩm</h2>
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
                if(isset($dsdm)){
                    foreach ($dsdm as $dm) {
                        echo '<option value="'.$dm['id_category'].'">'.$dm['name_category'].'</option>';
                    } 
                }
            ?>
        </select>
        <input type="text" name="tensp" placeholder="Tên sản phẩm">
        <input type="file" name="hinh">
        <?php
            if(isset($uploadOk)&&($uploadOk==0)){
                echo '<p style="color:red">Hình ảnh không hợp lệ</p>';
            }

        ?>
        <input type="text" name="giasp" placeholder=" Giá">
        <input type="text" name="giacusp" placeholder=" Giá Cũ">
        <br>
        <input type="submit" id="submit" name="themmoi" value="Thêm">
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
            if(isset($kq)&& (count($kq)>0)){
                $i=1;
                foreach ($kq as $item) {
                    echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$item['name_product'].'</td>
                            <td><img src="'.$item['img_product'].'" width="80px" ></td>
                            <td>'.$item['price_product'].'</td>
                            <td>'.$item['oldprice_product'].'</td>
                            <td>
                                <a id="sua" href="index2222.php?act=updatespform&id='.$item['id_product'].'">Sửa</a> |
                                <a id="xoa" href="index2222.php?act=delsp&id='.$item['id_product'].'">Xóa</a>
                            </td>
                        </tr>';
                        $i++;
                }
            }
        ?>
        
    </table>
</div>