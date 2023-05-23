    <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#form_register").validate({
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
                    "repassword": {
                        required: true,
                        maxlength: 50,
                        equalTo: "#password",
                    },
                    "gmail": {
                        required: true,
                        maxlength: 40,
                        minlength: 5,
						email: true,
                    },
                    "sdt": {
                        required: true,
                        maxlength: 11,
                        minlength: 10,
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
                    "repassword": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 50 ký tự",
                        equalTo: "Mật khẩu không trùng",
                    },
                    "gmail": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 40 ký tự",
                        minlength: "Hãy nhập tối thiểu 5 ký tự",
                        email: "Sai định dạng email",
                        
                    },
                    "sdt": {
                        required: "Không được bỏ trống",
                        maxlength: "Hãy nhập tối đa 11 ký tự",
                        minlength: "Hãy nhập tối thiểu 10 ký tự",
                        
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
    </style> -->
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Register</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Register</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Create a new account</span></h2>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- <div class="col-lg-8"> -->
            <div class="mb-4">
                <!-- <h4 class="font-weight-semi-bold mb-4"></h4> -->
                <div class="row">
                    <form class="row" action="index.php?act=register" id="form_register" method="post">
                        <div class="col-md-6 form-group">
                            <label>First & Last Name</label>
                            <input class="form-control" name="tentk" type="text" placeholder="Tran Trung Hieu">
                            <!-- <small style="color:red;" class="error"></small> -->
                            <small style="color:red ;">
                                <?php
                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }
                                ?>
                            </small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Account Name</label>
                            <input class="form-control" id="account" name="account" type="text" placeholder="trunghieutran">
                            <!-- <small style="color:red;" class="error"></small> -->
                            <small style="color:red ;">
                                <?php
                                if(isset($thongbaoaccount)&&($thongbaoaccount!="")){
                                    echo $thongbaoaccount;
                                }
                                ?>
                            </small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" id="gmail" name="gmail" type="email" placeholder="example@email.com">
                            <!-- <small style="color:red;" class="error"></small> -->
                            <small style="color:red ;">
                                <?php
                                if(isset($thongbaogmail)&&($thongbaogmail!="")){
                                    echo $thongbaogmail;
                                }
                                ?>
                            </small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" id="password" type="password" placeholder="123456">
                            <!-- <small style="color:red;" class="error"></small> -->
                            <small style="color:red ;">
                                <?php
                                if(isset($thongbaopassword)&&($thongbaopassword!="")){
                                    echo $thongbaopassword;
                                }
                                ?>
                            </small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Phone Number</label>
                            <input class="form-control" name="sdt" type="text" placeholder="+84 456 789 123">
                            <!-- <small style="color:red;" class="error"></small> -->
                            <small style="color:red ;">
                                <?php
                                if(isset($thongbaosdt)&&($thongbaosdt!="")){
                                    echo $thongbaosdt;
                                }
                                ?>
                            </small>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Re-Password</label>
                            <input class="form-control" name="repassword" id="repassword" type="password" placeholder="123456">
                            <!-- <small style="color:red;" class="error"></small> -->
                            <small style="color:red ;">
                                <?php
                                if(isset($thongbaorepassword)&&($thongbaorepassword!="")){
                                    echo $thongbaorepassword;
                                }
                                ?>
                            </small>
                        </div>
                        <div style="display: flex;">
                            <!-- <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">I agree to the policies and terms set forth</label>
                            </div>
                        </div> -->
                            <div class="card-footer border-secondary bg-transparent">
                                <input name="dangky" type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Register">
                                <!-- <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Register</button> -->
                                <?php
                                if(isset($finishRGT)&&($finishRGT!="")){
                                    echo $finishRGT;
                                }
                                ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Contact End -->

    <!-- <script>
        const form_register = document.getElementById('form_register');
        const account = document.getElementById('account');
        const gmail = document.getElementById('gmail');
        const password = document.getElementById('password');
        const repassword = document.getElementById('repassword');

        form_register.addEventListener('submit', e => {
            e.preventDefault();

            validateInputs();
        });

        const setError = (element, message) => {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            errorDisplay.innerText = message;
            inputControl.classList.add('error');
            // inputControl.classList.remove('success')
        }

        const setSuccess = element => {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            errorDisplay.innerText = '';
            // inputControl.classList.add('success');
            inputControl.classList.remove('error');
        };

        const isValidgmail = gmail => {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(gmail).toLowerCase());
        }

        const validateInputs = () => {
            const accountValue = account.value.trim();
            const gmailValue = gmail.value.trim();
            const passwordValue = password.value.trim();
            const repasswordValue = repassword.value.trim();

            if (accountValue === '') {
                setError(account, 'account is required');
            } else {
                setSuccess(account);
            }

            if (gmailValue === '') {
                setError(gmail, 'gmail is required');
            } else if (!isValidgmail(gmailValue)) {
                setError(gmail, 'Provide a valid gmail address');
            } else {
                setSuccess(gmail);
            }

            if (passwordValue === '') {
                setError(password, 'Password is required');
            } else if (passwordValue.length < 2) {
                setError(password, 'Password must be at least 2 character.')
            } else {
                setSuccess(password);
            }

            if (repasswordValue === '') {
                setError(repassword, 'Please confirm your password');
            } else if (repasswordValue !== passwordValue) {
                setError(repassword, "Passwords doesn't match");
            } else {
                setSuccess(repassword);
            }

        };
    </script> -->