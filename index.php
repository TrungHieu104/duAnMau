<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    include "model/connectdb.php";
    include "model/taikhoan.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/donhang.php";
    $dsdm=getall_dm();
    $sphome1=getall_sp(0,"");
    include "view/header.php";
    if(isset($_GET['act'])){
    switch ( $_GET['act']){
        case 'home':
            
            include "view/home.php";
            break;
        case 'allproduct':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                
            }
            $dssp=getall_sp("","");
            include "view/shop.php";
            break;
        case 'shop':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                
            }

            $dssp=getall_sp($id,"");
            include "view/shop.php";
            break;
        case 'detail':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $kq=getonesp($id);
            }
            $dssp=getall_sp("","");
            include "view/detail.php";
            break;
        case 'login':
            include "view/login.php";
            break;
        case 'dangnhap':
            if(isset($_POST['login'])&&($_POST['login'])){
                
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $kq=getuserinfo($user,$pass);
                $role=$kq[0]['role'];
                if($role == 1 ){
                    $_SESSION['role']=$role;
                    header('location: admin/index2222.php');
                }else {
                    $_SESSION['role']=$role;
                    $_SESSION['iduser']=$kq[0]['id_user'];
                    $_SESSION['username']=$kq[0]['name_user'];
                    header('location:index.php');
                    break;
                }
                // $userdtb=$kq[0]['account_user'];
                // $passdtb=$kq[0]['password_user'];
                // if($user===$userdtb){
                //     if($pass===$passdtb){
                //         if($role == 1 ){
                //             $_SESSION['role']=$role;
                //             header('location: admin/index2222.php');
                //         }else {
                //             $_SESSION['role']=$role;
                //             $_SESSION['iduser']=$kq[0]['id_user'];
                //             $_SESSION['username']=$kq[0]['name_user'];
                //             header('location:index.php');
                //             break;
                //         }
                //     }else{
                //         $thongbao1="Mat khau sai";
                //     }
                // }else{
                //     $thongbao1="Tai khoan khong ton tai";
                // }
                
                // echo $role;
                
            }
            break;
        

        case 'logout':
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['username']);
            header('location: index.php');
            break;
        case 'edittk':
            $_SESSION['user']=getoneuserinfo($_SESSION['iduser']);
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tentk=$_POST['tentk'];
                $gmail=$_POST['gmail'];
                $password=$_POST['password'];
                $account=$_POST['account'];
                $sdt=$_POST['sdt'];
                $id=$_POST['id'];
                
                updatetk($id,$tentk,$sdt,$gmail,$account,$password,0);
                
                // $_SESSION['user']=checkuser($user,$pass);
                header('location: index.php?act=edittk');
                
            }
            
            include "view/edittk.php";
            break;
        case 'register':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(empty($_POST["tentk"])) {
                        $thongbao="Can't be left blank";
                    } else {
                        $tentk = $_POST['tentk'];
                    }
                    if(empty($_POST["sdt"])) {
                        $thongbaosdt="Can't be left blank";
                    } else {
                        $sdt = $_POST['sdt'];
                    }
                    if(empty($_POST["gmail"])) {
                        $thongbaogmail="Can't be left blank";
                    } else {
                        $gmail = $_POST['gmail'];
                    }
                    if(empty($_POST["account"])) {
                        $thongbaoaccount="Can't be left blank";
                    } else {
                        $account = $_POST['account'];
                    }
                    if(empty($_POST["password"])) {
                        $thongbaopassword="Can't be left blank";
                    } else {
                        $password = $_POST['password'];
                    }
                    if(empty($_POST["repassword"])) {
                        $thongbaorepassword="Can't be left blank";
                    }else if($_POST["password"] != $_POST["repassword"]){
                        $thongbaorepassword = "Password does not match";
                    }
                    if(!empty($_POST["tentk"]) && !empty($_POST["sdt"]) && !empty($_POST["gmail"]) && !empty($_POST["account"]) && !empty($_POST["password"]) && !empty($_POST["password"] && ($_POST["password"] == $_POST["repassword"]))){
                        add_tk($tentk,$sdt,$gmail,$account,$password,0);
                        $finishRGT="Register Success!";
                    }
                }
                    // $tentk = $_POST['tentk'];
                    // $sdt = $_POST['sdt'];
                    // $gmail = $_POST['gmail'];
                    // $account = $_POST['account'];
                    // $password = $_POST['password'];
                    // if($tentk==""){
                    //     $thongbao1="Can't be left blank";
                    // }else{
                        
                    // }
            }
            include "view/register.php";
            break;
        case 'cart':
            
            include "view/cart.php";
            break;
        case 'addcart':
            //lấy dữ liệu từ form để lưu vào giỏ hàng
            if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                $id=$_POST['id'];
                $tensp=$_POST['tensp'];
                $img=$_POST['img'];
                $giasp=$_POST['giasp'];
                if(isset($_POST['sl'])&&($_POST['sl']>0)){
                    $sl=$_POST['sl'];
                }else{
                    $sl=1;
                }
                $fg=0;
                $i=0;
                foreach ($_SESSION['giohang'] as $item) {
                    if($item[1]===$tensp){
                        $slnew=$sl+$item[4];
                        $_SESSION['giohang'][$i][4]=$slnew;
                        $fg=1;
                        break;
                    }
                    $i++;
                }

                if($fg==0){
                    //khởi tạo 1 mảng con trc khi đưa vào giỏ hàng
                    $item=array($id,$tensp,$img,$giasp,$sl);
                    $_SESSION['giohang'][]=$item;
                }
                header('location: index.php?act=cart');
            }
            break;
        case 'delcart':
            if(isset($_GET['i'])&&($_GET['i']>0)){
                if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0))
                array_splice($_SESSION['giohang'],$_GET['i'],1);

            }else{
                if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }
            if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){

                header('location: index.php?act=cart');
            }else{
                header('location: index.php');
            }
            break;
        case 'thanhtoan':
            if((isset($_POST['thanhtoan']))&&(isset($_POST['thanhtoan']))){
                //lấy dữ liệu
                $tongdonhang=$_POST['tongdonhang'];
                $name=$_POST['name'];
                $address=$_POST['address'];
                $email=$_POST['email'];
                $tel=$_POST['tel'];
                
                $payment=$_POST['payment'];
                $iduser=$_SESSION['iduser'];
                $code=rand(0,999999);
                $ngaydathang=date('h:i:sa d/m/Y');
                //tạo don hàng
                //và trả về 1 id don hang
                $iddh=create_donhang($code,$tongdonhang,$payment,$iduser,$name,$address,$email,$tel,$ngaydathang);
                $_SESSION['iddh']=$iddh;
                if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                    foreach ($_SESSION['giohang'] as $item) {
                        addtocart($iddh,$item[0],$item[1],$item[2],$item[3],$item[4]);
                    }
                    unset($_SESSION['giohang']);

                }
                
            }
            include "view/donhang.php";
            break;
        case 'myorder':
            $listorder=getall_order($_SESSION['iduser']);
            include "view/myorder.php";
            break;

        case 'checkout':
            if(isset($_SESSION['iduser'])){
                $_SESSION['user']=getoneuserinfo($_SESSION['iduser']);
            }
            include "view/checkout.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;

        default:
            
            include "view/home.php";
            break;
    }
}else {
    include "view/home.php";
}

    include "view/footer.php";
