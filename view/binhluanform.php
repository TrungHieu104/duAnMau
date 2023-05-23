<?php
session_start();
include "../model/connectdb.php";
include "../model/binhluan.php";
// include "../model/taikhoan.php";

$idpro = $_REQUEST['idpro'];

// $dsbl=getall_bl($idpro);

$kqq=getall_binhluan($idpro);


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <style>
        body{
            margin: 0 !important;
            height: 30% !important;
        }
        .row{
            margin: 0 !important;
        }
    </style>
</head>

<body>
    <?php
    // echo "ND: " . $idpro;
    ?>



    <div class="row">
        <div class="col-md-6">
            <h4 class="mb-4"> review for "Colorful Stylish Shirt"</h4>
            
                <!-- <img src="view/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;"> -->
                <!-- <div class="media-body">
                    <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>

                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                </div> -->
            
                <?php
                // if(isset($_SESSION['username']) && ($_SESSION['username']!="")){
                //     $ten=$_SESSION['username'];
                // }
                foreach ($kqq as $bl) {
                    extract($bl);
                    echo '
                    <div class="media mb-4">
                        <img src="../view/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>'.$nameuser.'<small> - <i>'.$ngaybinhluan.'</i></small></h6>

                            <p>'.$noidung.'</p>
                        </div>
                    </div>
                    ';
                }
                ?>
            
        </div>
        <div class="col-md-6">
            <!-- <form action="index.php?act=add_binhluan" method="post">
                <input type="text" name="msg">
                <input type="submit" name="guibinhluan" value="Gửi">
            </form> -->
            <h4 class="mb-4">Leave a review</h4>
            <small>Your email address will not be published. Required fields are marked *</small>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <!-- <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email *</label>
                    <input type="email" class="form-control" id="email">
                </div> -->
                <div class="form-group">
                    <label for="message">Your Review *</label>
                    <input type="hidden"name="idpro" value="<?=$idpro?>">
                    <input type="text"name="noidung" id="message" class="form-control">
                    <!-- <textarea name="noidung" id="message" cols="30" rows="5" class="form-control"></textarea> -->
                </div>

                <div class="form-group mb-0">
                    <input type="submit" name="guibinhluan" value="Leave Your Review" class="btn btn-primary px-3">
                </div>
            </form>
        </div>
        <?php
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung=$_POST['noidung'];
            $idpro=$_POST['idpro'];
            $iduser=$_SESSION['iduser'];
            $ngaybl=date('h:i:sa d/m/Y');

            add_bl($noidung,$iduser,$idpro,$ngaybl);
            header("location: ".$_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>

</body>

</html>