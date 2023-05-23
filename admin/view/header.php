<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#form_dm").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "tendm": {
                        required: true,
                        maxlength: 15,
                    }
                    
                },
                messages: {
                    "tendm": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 15 ký tự"
                    }
                }
            });
            $("#form_sp").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "tensp": {
                        required: true,
                        maxlength: 35,
                    },
                    "giasp": {
                        required: true,
                        maxlength: 15,
                        minlength:3,
                    },


                },
                messages: {
                    "tensp": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 35 ký tự"
                    },
                    "giasp": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 15 ký tự",
                        minlength: "Hãy nhập tối thiểu 3 ký tự",
                    },
                }
            });
            $("#form_tk").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "tentk": {
                        required: true,
                        maxlength: 30,
                        minlength: 5,

                    },
                    "account": {
                        required: true,
                        maxlength: 20,
                    },
                    "password": {
                        required: true,
                        maxlength: 50,
                    },
                    "gmail": {
                        required: true,
                        maxlength: 40,
                        minlength: 5,
						email: true,
                    },


                },
                messages: {
                    "tentk": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 30 ký tự",
                        minlength: "Hãy nhập tối thiểu 5 ký tự"
                    },
                    "account": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 20 ký tự"
                    },
                    "password": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 50 ký tự"
                    },
                    "gmail": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 40 ký tự",
                        minlength: "Hãy nhập tối thiểu 5 ký tự",
                        email: "Sai định dạng email",
                        
                    },
                }
            });
        });
    </script>
    <style>
        .error {
            display: block;
            color: #e74c3c;
            font-size: 12px;
            /* margin: 0px 20px ; */
        }

        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        header nav a {
            text-decoration: none;
            color: black;
            padding: 0px 20px;
        }

        header h1 {
            text-align: center;
        }

        header nav a:hover {
            color: red;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        .border {
            border: 1px solid #EDF1FF !important;
        }

        .text-primary {
            color: #D19C97 !important;
        }

        .px-3 {
            padding: 0.5rem 1rem !important;

            margin-right: 0.25rem !important;
        }

        #right{
            padding-left: 30%;
        }
        /* .active{
            color: red;
            background-color: #e74c3c;
        } */
       
    </style>
</head>

<body>
    <header style="background-color:#e7e7e7">
        <h1  class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1> 
        <br>
        <nav>
            <a href="index2222.php">Trang chủ</a>
            <a href="index2222.php?act=danhmuc">Danh mục</a>
            <a href="index2222.php?act=sanpham">Sản phẩm</a>
            <a href="index2222.php?act=taikhoan">Tài khoản</a>
            <a href="index2222.php?act=donhang">Đơn hàng</a>
            <a href="index2222.php?act=binhluan">Bình luận</a>
            <a href="index2222.php?act=thongke">Thống kê</a>
            <a href="index2222.php?act=thoat" id="right" style="color:darkcyan">Đăng xuất </a>
        </nav>
        
    </header>