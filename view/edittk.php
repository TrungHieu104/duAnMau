<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Information</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Information</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- <div class="col-lg-8"> -->
        <div class="mb-4">
            <!-- <h4 class="font-weight-semi-bold mb-4"></h4> -->
            <div class="row">
                <?php
                    // if(isset($_SESSION['user']))
                    // echo var_dump($_SESSION['user']);
                    // 
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        // extract($_SESSION['user']);
                    }
                    $kqone=$_SESSION['user'];
                ?>
                <form class="row" action="index.php?act=edittk" method="post">
                    <div class="col-md-6 form-group">
                        <label>First & Last Name</label>
                        <input class="form-control" name="tentk" type="text" value="<?=$kqone[0]['name_user']?>">                   
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Account Name</label>
                        <input class="form-control" name="account" type="text" value="<?=$kqone[0]['account_user']?>">                 
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" name="gmail" type="text" value="<?=$kqone[0]['gmail_user']?>">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" type="password" value="<?=$kqone[0]['password_user']?>">          
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Phone Number</label>
                        <input class="form-control" name="sdt" type="text" value="<?=$kqone[0]['phoneNumber_user']?>">                   
                    </div>
                    <!-- <div class="col-md-6 form-group">
                        <label>Re-Password</label>
                        <input class="form-control" name="repassword" type="password" >          
                    </div> -->
                    <div style="display: flex;">
                        <div class="card-footer border-secondary bg-transparent">
                            <input type="hidden" name="id" value="<?=$kqone[0]['id_user']?>">
                            <input name="capnhat" type="submit"class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Update">
                            <!-- <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Register</button> -->
                        </div>
                    </div>
                </form>
                <!-- <h5 style="color:red ;">

                    <?php
                // if(isset($thongbao)&&($thongbao!="")){
                //     echo $thongbao;
                // }
                ?>
                </h5> -->
            </div>
        </div>
    </div>
</div>
</div>
</div>