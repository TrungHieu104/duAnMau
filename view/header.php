<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="view/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="view/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="view/css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="index.php?act=cart" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <?php
                    if (isset($_SESSION['giohang'])) {
                        $slcart = count($_SESSION['giohang']);
                        echo '<span class="badge">' . $slcart . '</span>';
                    }
                    ?>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block" style="z-index: 100;">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="z-index: 100;" style="height: 410px">
                        <?php
                        foreach ($dsdm as $dm) {
                            echo ' 
                                    <a href="index.php?act=shop&id=' . $dm['id_category'] . '"style="z-index: 100;" class="nav-item nav-link">' . $dm['name_category'] . '</a>
                                ';
                        }
                        ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="index.php?act=allproduct" class="nav-item nav-link">Shop</a>
                            <!-- <a href="index.php?act=detail" class="nav-item nav-link">Shop Detail</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="index.php?act=cart" class="dropdown-item">Shopping Cart</a>
                                    <a href="index.php?act=checkout" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="index.php?act=contact" class="nav-item nav-link ">Contact</a>

                        </div>
                        <?php
                        if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {

                            // <div class="navbar-nav ml-auto py-0">
                            //     <a href="index.php?act=userinfo" class="nav-item nav-link">Welcome,  '.$_SESSION['username'].'</a>
                            //     <a href="index.php?act=logout" class="nav-item nav-link"> Logout</a>
                            // </div>
                            echo '
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">' . $_SESSION['username'] . '</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="index.php?act=edittk" class="dropdown-item">Information</a>
                                        <a href="index.php?act=myorder" class="dropdown-item">My order</a>
                                        <a href="index.php?act=logout" class="dropdown-item"> Logout</a>
                                    </div>
                                </div>
                                ';
                        } else {


                        ?>
                            <div class="navbar-nav ml-auto py-0">
                                <a href="index.php?act=login" class="nav-item nav-link">Login</a>
                                <a href="index.php?act=register" class="nav-item nav-link">Register</a>
                            </div>
                        <?php } ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->