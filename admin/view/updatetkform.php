<div class="main">
    <h2>Cập Nhật Tài Khoản</h2>
    <?php
        // echo var_dump($kqone);
    ?>
    <form action="index2222.php?act=updatetkform" method="post">
        <input type="text" name="tentk" placeholder="Tên người dùng" value="<?=$kqone[0]['name_user']?>">
        <input type="hidden" name="id" value="<?=$kqone[0]['id_user']?>">
        <input type="text" name="sdt" placeholder="Số điện thoại" value="<?=$kqone[0]['phoneNumber_user']?>">
        <input type="hidden" name="id" value="<?=$kqone[0]['id_user']?>">
        <input type="text" name="gmail" placeholder="Gmail" value="<?=$kqone[0]['gmail_user']?>">
        <input type="hidden" name="id" value="<?=$kqone[0]['id_user']?>">
        <input type="text" name="account" placeholder="Account" value="<?=$kqone[0]['account_user']?>">
        <input type="hidden" name="id" value="<?=$kqone[0]['id_user']?>">
        <input type="text" name="password" placeholder="Password" value="<?=$kqone[0]['password_user']?>">
        <input type="hidden" name="id" value="<?=$kqone[0]['id_user']?>">
        <!-- <select name="role" id="" value="<?=$kqone[0]['role']?>" >
            <option value="2" selected >Chọn quyền truy cập</option> -->
            <!-- <option value="1">Admin</option>
            <option value="0">User</option> -->
            <?php
            $qtccur = $kqone[0]['role'];
            if (isset($qtccur)&&($qtccur == 0)) {
                echo '<select name="role" id="" value="" >
                            <option value="2">Chọn quyền ưu tiên</option>
                            <option value="1">Admin</option>
                            <option value="0" selected>User</option>
                
                        </select>';
                
                
            }else{
                echo '<select name="role" id="" value="" >
                            <option value="2">Chọn quyền ưu tiên</option>
                            <option value="1" selected>Admin</option>
                            <option value="0" >User</option>
                
                        </select>';
            } 
            ?>
        </select>
        <br><input id="submit" type="submit" name="capnhat" value="Cập nhật">
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
            // var_dump($kq);
        ?>  
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
            }
        ?>
        
    </table>
</div>