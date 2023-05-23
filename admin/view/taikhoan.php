<div class="main">
    <form action="index2222.php?act=addtk" method="post" id="form_tk">
        <h2>Tài khoản</h2>
        <input type="text" name="tentk" placeholder="Tên người dùng">
        <input type="text" name="sdt" placeholder="Số điện thoại">
        <input type="text" name="gmail" placeholder="Gmail">
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
    </form>
    <br>
    <table class="content-table">
    <thead>

        <tr>
            <th>STT</th>
            <th>Tên Người dùng</th>
            <th>SDT</th>
            <th>Gmail</th>
            <th>Acount</th>
            <th>Password</th>
            <th>Quyền truy cập</th>
            <th>Hành động</th>
        </tr>
    </thead>
        <?php
            if(isset($kq)&& (count($kq)>0)){
                $i=1;
                foreach ($kq as $tk) {
                    $qtc=$tk['role'];
                    if($qtc==1){
                        $qtc="Admin";
                    }else if($qtc==0){
                        $qtc="User";
                    }
                    echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$tk['name_user'].'</td>
                            <td>'.$tk['phoneNumber_user'].'</td>
                            <td>'.$tk['gmail_user'].'</td>
                            <td>'.$tk['account_user'].'</td>
                            <td>'.$tk['password_user'].'</td>
                            <td>'.$qtc.'</td>
                            <td>
                                <a id="sua" href="index2222.php?act=updatetkform&id='.$tk['id_user'].'">Sửa</a> |
                                <a id="xoa" href="index2222.php?act=deltk&id='.$tk['id_user'].'">Xóa</a>
                            </td>
                        </tr>';
                        $i++;
                        
                        
                }
                echo ' <div>
                        <h4>Tổng số tài khoản: '.($i-1).'</h4>
                    </div>';
            }
        ?>
        
    </table>
</div>