<div class="main">
    <?php
    // echo var_dump($listbinhluan);
    ?>
        <h2>Thống kê</h2>
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
            <th>ID Danh Mục</th>
            <th>Tên danh mục</th>
            <th>Số lượng sản phẩm</th>
            <th>Giá cao nhất</th>
            <th>Giá thấp nhất</th>
            <th>Giá trung bình</th>
        </tr>
    </thead>
        <?php
            // if(isset($kq)&& (count($kq)>0)){
                // $i=1;
                foreach ($listthongke as $tke) {
                    echo '<tr>
                            <td>'.$tke['iddm'].'</td>
                            <td>'.$tke['tendm'].'</td>
                            <td>'.$tke['countsp'].'</td>
                            <td>'.$tke['maxprice'].'</td>
                            <td>'.$tke['minprice'].'</td>
                            <td>'.$tke['avgprice'].'</td>
 

                           
                            </tr>';
                            // $i++;
                            
                            
                        }
                        // echo ' <div>
                        //         <h4>Tổng số tài khoản: '.($i-1).'</h4>
                        //     </div>';
                        // }
                        ?>
                        <a href="index2222.php?act=bieudo" style="text-decoration: none;">Xem biểu đồ ></a> 
        
    </table>
</div>