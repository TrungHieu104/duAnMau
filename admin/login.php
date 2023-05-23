<?php
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/taikhoan.php";
    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $role=checkuser($user,$pass);
        $_SESSION['role']=$role;
        if($role==1) header('location: index2222.php');
        else{
            $txt_error="Tài khoản hoặc mật khẩu không đúng";
        } //header('location: login.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="view/style.css">
</head>
<body>
<div class="main">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h2>Login</h2>
        <input type="text" name="user"><br><br>
        <input type="text" name="pass"><br><br>
        <input type="submit" name="dangnhap" value="Đăng nhập"><br><br>
        <?php
            if(isset($txt_error)&&($txt_error!="")){
                echo "<font color='red'>".$txt_error."</font>";
            }
        ?>

    </form>
</div>
</body>
</html>