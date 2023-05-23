<?php
session_start();
ob_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    include "../model/donhang.php";
    //  connectdb();
    include "view/header.php";
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
                //.............. Danh muc ................
            case 'danhmuc':
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendm = $_POST['tendm'];
                    $uutien = $_POST['uutien'];
                    $hienthi = $_POST['hienthi'];
                    add_dm($tendm,$uutien,$hienthi);
                }
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
            case 'deldm':
                //ktra ton tai va co phai so hay ko
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = $_GET['id'];
                    deldm($id);
                }
                $kq = getall_dm();
                include "view/danhmuc.php";
                break;
      
            case 'updatedmform':
                $dsdm = getall_dm();
                //lấy 1 record đúng với id truyền vào
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = getonedm($id);
                    $kq = getall_dm();
                    include "view/updatedmform.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    $uutien = $_POST['uutien'];
                    $hienthi = $_POST['hienthi'];
                    updatedm($id, $tendm,$uutien,$hienthi);
                    $kq = getall_dm();
                    include "view/danhmuc.php";
                }

                break;
                //.............. END DM ................

                //.............. San Pham ................
            case 'sanpham':
                $dsdm = getall_dm();
                $kq = getall_sp();
                include "view/sanpham.php";
                break;
            case 'updatespform':
                $dsdm = getall_dm();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $spct = getonesp($_GET['id']);
                }
                $kq = getall_sp();
                include "view/updatespform.php";
                break;

            case 'delsp':
                //ktra ton tai va co phai so hay ko
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = $_GET['id'];
                    delsp($id);
                }
                $dsdm = getall_dm();
                $kq = getall_sp();
                include "view/sanpham.php";
                break;
            case 'sanpham_update':
                $dsdm = getall_dm();
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $giacusp = $_POST['giacusp'];
                    $id = $_POST['id'];
                    if ($_FILES["hinh"]["name"] != "") {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        $img = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                        // Allow certain file formats
                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 1) {
                            // add_sp($iddm,$tensp,$giasp,$img);
                            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        }
                    } else {
                        $img = "";
                    }
                    updatesp($id, $tensp, $img, $giasp, $giacusp, $iddm);
                }

                $kq = getall_sp();
                include "view/sanpham.php";
                break;
            case 'sanpham_add':
                if ((isset($_POST['themmoi'])) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $giacusp = $_POST['giacusp'];

                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    // Allow certain file formats
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 1) {
                        add_sp($iddm, $tensp, $giasp, $giacusp, $img);
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    }
                }
                $dsdm = getall_dm();
                $kq = getall_sp();

                include "view/sanpham.php";
                break;


                //.............. END SP ................

                // ........... Tai khoan ................
            case 'taikhoan':
                $kq = getall_tk();
                include "view/taikhoan.php";
                break;
            case 'addtk':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tentk = $_POST['tentk'];
                    $sdt = $_POST['sdt'];
                    $gmail = $_POST['gmail'];
                    $account = $_POST['account'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];
                    add_tk($tentk,$sdt,$gmail, $account, $password, $role);
                }
                $kq = getall_tk();
                include "view/taikhoan.php";
                break;
            case 'deltk':
                //ktra ton tai va co phai so hay ko
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = $_GET['id'];
                    deltk($id);
                }
                $kq = getall_tk();
                include "view/taikhoan.php";
                break;
                break;
            case 'updatetkform':
                //lấy 1 record đúng với id truyền vào
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = getonetk($id);
                    $kq = getall_tk();
                    include "view/updatetkform.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $tentk = $_POST['tentk'];
                    $sdt = $_POST['sdt'];
                    $gmail = $_POST['gmail'];
                    $account = $_POST['account'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];
                    updatetk($id, $tentk,$sdt,$gmail, $account, $password, $role);
                    $kq = getall_tk();
                    include "view/taikhoan.php";
                }

                break;
                //.............. END TK ................
            case 'dangnhap':
                if (isset($_POST['login']) && ($_POST['login'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $kq = getuserinfo($user, $pass);
                    $role = $kq[0]['role'];
                    // echo $role;
                    if ($role == 1) {
                        $_SESSION['role'] = $role;
                        header('location:../admin/login.php');
                    } else {
                        $_SESSION['role'] = $role;
                        $_SESSION['iduser'] = $kq[0]['id_user'];
                        $_SESSION['username'] = $kq[0]['account_user'];
                        header('location:index.php');
                        break;
                    }
                }
                break;
            case 'donhang':
                if(isset($_POST['kw'])&&($_POST['kw']!="")){
                    $kw=$_POST['kw'];
                }else{
                    $kw="";
                };
                $listorder=get_all_order($kw,0);
                include "view/donhang.php";
                break;
            case 'deldh':
                if(isset($_POST['kw'])&&($_POST['kw']!="")){
                    $kw=$_POST['kw'];
                }else{
                    $kw="";
                }
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deldh($id);
                }
                $listorder = get_all_order($kw,0);
                include "view/donhang.php";
                break;
            case 'binhluan':
                $listbinhluan=getall_bluan(0);
                include "view/binhluan.php";
                break;
            case 'delbl':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delbl($id);
                }
                $listbinhluan = getall_bluan(0);
                include "view/binhluan.php";
                break;
            case 'thongke':

                $listthongke=getall_thongke();
                include "view/thongke.php";

                break;
            case 'bieudo':

                $listthongke=getall_thongke();
                include "view/bieudo.php";

                break;
            case 'thoat':
                if (isset($_SESSION['role'])) unset($_SESSION['role']);
                // header('location: home.php');
                // include "../index.php";
                header('location:../index.php');
            default:
                include "view/trangchu.php";
                break;
        }
    }
    // else{
    //     include "./admin/index2222.php";

    // }
    include "view/footer.php";
} else {
    header('location: login.php');
}
