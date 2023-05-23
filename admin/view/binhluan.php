<div class="main">
    <?php
    // echo var_dump($listbinhluan);
    ?>
        <h2>Bình luận</h2>
    <!-- <form action="index2222.php?act=addtk" method="post">
        <input type="text" name="tentk" placeholder="Tên người dùng">
        <input type="text" name="account" placeholder="Account">
        <input type="text" name="password" placeholder="Password">
        <select name="role" id="">
            <option value="2" selected>Chọn quyền truy cập</option>
            <option value="1">Admin</option>
            <option value="0">User</option>
        </select>
        <?php 
        //nếu role truyền vào là 2 thì chọn lại option
        
        
        ?><br>
        <input type="submit" id="submit" name="themmoi" value="Thêm">
    </form> -->
    <br>
    <table class="content-table">
    <thead>

        <tr>
            <th>ID</th>
            <th>ID User</th>
            <th>ID Product</th>
            <th>Nội dung bình luận</th>
            <th>Ngày bình luận</th>
            <th>Hành động</th>
        </tr>
    </thead>
        <?php
            // if(isset($kq)&& (count($kq)>0)){
                // $i=1;
                foreach ($listbinhluan as $lbl) {
                    echo '<tr>
                            <td>'.$lbl['id'].'</td>
                            <td>'.$lbl['id_user'].'</td>
                            <td>'.$lbl['id_product'].'</td>
                            <td>'.$lbl['noidung'].'</td>
                            <td>'.$lbl['ngaybinhluan'].'</td>
 

                            <td>
                                <a id="xoa" href="index2222.php?act=delbl&id='.$lbl['id'].'">Xóa</a>
                                </td>
                            </tr>';
                            // $i++;
                            // <a id="sua" href="index2222.php?act=updateblform&id='.$lbl['id'].'">Sửa</a> |
                        
                        
                }
                // echo ' <div>
                //         <h4>Tổng số tài khoản: '.($i-1).'</h4>
                //     </div>';
            // }
        ?>
        
    </table>
</div>