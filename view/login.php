<!-- Page Header Start -->

<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Login</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">login</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Login to use full function</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form action="index.php?act=dangnhap" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <h4>Account</h4>
                        <input name="user" type="text" class="form-control" id="name" placeholder="Email or phone number" required="required" data-validation-required-message="Please enter your account" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <h4>Password</h4>
                        <input name="pass" type="password" class="form-control" id="email" placeholder="Your password (8-20 characters)" required="required" data-validation-required-message="Please enter your password" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <p>Do not have an account? <a href="index.php?act=register"> Register now</a></p>
                   
                    <div>
                        <input name="login" class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" value="Login">
                    </div>
                    <h5 style="color:red ;">

                    <?php
                
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                </h5>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Login with another way</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="paypal">
                            <label class="custom-control-label" for="paypal">Facebook</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Google</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Twitter</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->