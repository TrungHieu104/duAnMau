  <!-- Page Header Start -->
  <div class="container-fluid bg-secondary mb-5">
      <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
          <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
          <div class="d-inline-flex">
              <p class="m-0"><a href="">Home</a></p>
              <p class="m-0 px-2">-</p>
              <p class="m-0">Checkout</p>
          </div>
      </div>
  </div>
  <!-- Page Header End -->


  <!-- Checkout Start -->
  <form action="index.php?act=thanhtoan" method="post">
      <?php
        if (isset($_SESSION['giohang'])) {
            $ship = 10;
            $tong = 0;
            foreach ($_SESSION['giohang'] as $item) {
                $tt = $item[3] * $item[4];
                $tong += $tt;
            }
            $total = $tong + $ship;
        }
        ?>

      <input type="hidden" name="tongdonhang" value="<?= $total ?>">
      <div class="container-fluid pt-5">
          <div class="row px-xl-5">
              <div class="col-lg-8">
                  <div class="mb-4">
                  <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                      <?php
                        // if(isset($_SESSION['user']))
                        // echo var_dump($_SESSION['user']);
                        // if(isset($_SESSION['role']))
                        // echo var_dump($_SESSION['role']);

                        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                            // extract($_SESSION['user']);
                        }
                        $kqone = $_SESSION['user'];
                        $checkoutName=$kqone[0]['name_user'];
                        $checkoutGmail=$kqone[0]['gmail_user'];
                        $checkoutSdt=$kqone[0]['phoneNumber_user'];
                        if (isset($_SESSION['role']) && ($_SESSION['role'] == 0)) {
                            echo ' <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First & Last Name</label>
                                <input class="form-control" name="name" type="text" placeholder="Hieu" value="'.$checkoutName.'">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" name="email" type="text" placeholder="example@email.com" value="'.$checkoutGmail.'">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" name="address" type="text" placeholder="123 Street" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" name="tel" type="text" placeholder="+84 456 789 123" value="'.$checkoutSdt.'">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newaccount">
                                    <label class="custom-control-label" for="newaccount">I guarantee that the information is correct</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shipto">
                                    <label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">I agree to the terms of the store</label>
                                </div>
                            </div>
                        </div>';
                        }else{
                            echo ' <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First & Last Name</label>
                                <input class="form-control" name="name" type="text" placeholder="Hieu">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" name="email" type="text" placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" name="address" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" name="tel" type="text" placeholder="+84 456 789 123">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newaccount">
                                    <label class="custom-control-label" for="newaccount">I guarantee that the information is correct</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shipto">
                                    <label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">I agree to the terms of the store</label>
                                </div>
                            </div>
                        </div>';
                        }
                        ?>
             


                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="card border-secondary mb-5">
                      <div class="card-header bg-secondary border-0">
                          <a href="index.php?act=cart">
                              <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                          </a>
                      </div>
                      <?php
                        if (isset($_SESSION['giohang'])) {
                            echo '
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3 pt-1">
                                        <h6 class="font-weight-medium">Subtotal</h6>
                                        <h6 class="font-weight-medium">' . $tong . '</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-medium">Shipping</h6>
                                        <h6 class="font-weight-medium">' . $ship . '</h6>
                                    </div>
                                </div>
                                <div class="card-footer border-secondary bg-transparent">
                                    <div class="d-flex justify-content-between mt-2">
                                        <h5 class="font-weight-bold">Total</h5>
                                        <h5 class="font-weight-bold">' . $total . '</h5>
                                    </div>
                                </div>
                                ';
                        }
                        ?>

                  </div>
                  <div class="card border-secondary mb-5">
                      <div class="card-header bg-secondary border-0">
                          <h4 class="font-weight-semi-bold m-0">Payment</h4>
                      </div>
                      <div class="card-body">
                          <div class="form-group">
                              <div class="custom-control custom-radio">
                                  <input type="radio" value="1" class="custom-control-input" name="payment" id="paypal">
                                  <label class="custom-control-label" for="paypal">Paypal</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="custom-control custom-radio">
                                  <input type="radio" value="2" class="custom-control-input" name="payment" id="directcheck" checked>
                                  <label class="custom-control-label" for="directcheck">COD</label>
                              </div>
                          </div>
                          <div class="">
                              <div class="custom-control custom-radio">
                                  <input type="radio" value="3" class="custom-control-input" name="payment" id="banktransfer">
                                  <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                              </div>
                          </div>
                      </div>
                      <div class="card-footer border-secondary bg-transparent">
                          <input type="submit" value="Place Order " name="thanhtoan" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </form>
  <!-- Checkout End -->