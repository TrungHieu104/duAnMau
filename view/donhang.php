


   <!-- Page Header Start -->
   <div class="container-fluid bg-secondary mb-5">
       <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
           <h1 class="font-weight-semi-bold text-uppercase mb-3">Reciept Shopping</h1>
           <div class="d-inline-flex">
               <p class="m-0"><a href="">Home</a></p>
               <p class="m-0 px-2">-</p>
               <p class="m-0">My Order</p>
           </div>
       </div>
   </div>
   <!-- Page Header End -->


   <!-- Cart Start -->
   <div class="container-fluid pt-5">
       <div class="row px-xl-5">
           <div class="col-lg-8 table-responsive mb-5">
               
                    <?php
                    // echo var_dump($_SESSION['giohang']);
                    if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                        $getshowcart=getshowcart($_SESSION['iddh']);
                            if((isset($getshowcart))&&(count($getshowcart)>0)){
                                echo '
                                <table class="table table-bordered text-center mb-0">
                                    <thead class="bg-secondary text-dark">
                                        <tr>
                                            <th>Number</th>
                                            <th colspan="2">Products</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>';
                                    $i=0;
                                    $tong=0;
                                    foreach ($getshowcart as $item) {
                                        $tt=$item['soluong'] * $item['dongia'];
                                        $tong+=$tt;
                                        echo '
                                        <tbody class="align-middle">
                                            <tr>
                                                <th>'.($i+1).'</th>
                                                <td class="align-middle"> '.$item['name_product'].'</td>
                                                <td class="align-middle"><img src="./upload/'.$item['img_product'].'" alt="" style="width: 50px;"></td>
                                                <td class="align-middle">'.$item['dongia'].'</td>
                                                <td class="align-middle">
                                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                                        
                                                        <input  class="form-control form-control-sm bg-secondary text-center" value="'.$item['soluong'].'">
                                                        
                                                    </div>
                                                </td>
                                                <td class="align-middle">'.$tt.'</td>
                                                
                                            </tr>
                                        </tbody>
                                        ';
                                        $i++;
                                    }
                                    echo '</table>';

                            }
                    }else{
                        echo 'Cart is empty!! <a href="index.php">Keep Ordering</a>';
                    }
                    ?>
           </div>
           <div class="col-lg-4">
               <form class="mb-5" action="">
                   <div class="input-group">
                       <input type="text" class="form-control p-4" placeholder="Coupon Code">
                       <div class="input-group-append">
                           <button class="btn btn-primary">Apply Coupon</button>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!-- Cart End -->
                    
       <input type="hidden" name="tongdonhang" value="<?=$total?>">
   <div class="container-fluid pt-5">
       <div class="row px-xl-5">
           <div class="col-lg-8">
               <div class="mb-4">
                <?php
                    if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                        $orderinfo=getorderinfo($_SESSION['iddh']);
                        if(count($orderinfo)>0){
                ?>
                        <h3> ID:<?=$orderinfo[0]['code_order'];?> </h3>
                        <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First & Last Name: </label> <?=$orderinfo[0]['name'];?>
                                <!-- <input class="form-control" name="name" type="text" placeholder="Hieu"> -->

                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label> <?=$orderinfo[0]['email'];?>
                                <!-- <input class="form-control" name="email" type="text" placeholder="example@email.com"> -->
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1: </label><?=$orderinfo[0]['address'];?>
                                <!-- <input class="form-control" name="address" type="text" placeholder="123 Street"> -->
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No: </label> <?=$orderinfo[0]['tel'];?>
                                <!-- <input class="form-control" name="tel" type="text" placeholder="+84 456 789 123"> -->
                            </div>
                            
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
           </div>
           <div class="col-lg-4">
               <div class="card border-secondary mb-5">
                   <div class="card-header bg-secondary border-0">
             
                       <h4 class="font-weight-semi-bold m-0">Order Total</h4>
           
                    </div>
                    <?php
                        
                        $ship=10;
                        $total=$tong+$ship;
                            
                                echo '
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3 pt-1">
                                        <h6 class="font-weight-medium">Subtotal</h6>
                                        <h6 class="font-weight-medium">'.$tong.'</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-medium">Shipping</h6>
                                        <h6 class="font-weight-medium">'.$ship.'</h6>
                                    </div>
                                </div>
                                <div class="card-footer border-secondary bg-transparent">
                                    <div class="d-flex justify-content-between mt-2">
                                        <h5 class="font-weight-bold">Total</h5>
                                        <h5 class="font-weight-bold">'.$total.'</h5>
                                    </div>
                                </div>
                                ';
                            
                            ?>
               </div>
               <div class="card border-secondary mb-5">
                   <div class="card-header bg-secondary border-0">
                       <h4 class="font-weight-semi-bold m-0">Payment: </h4>
                   </div>
                   <div class="card-body">
                        <?php
                            switch ($orderinfo[0]['pttt']) {
                                case '1':
                                    $payment='Paypal';
                                    break;
                                case '2':
                                    $payment='Direct Check';
                                    break;
                                case '3':
                                    $payment='Bank Transfer';
                                    break;
                                
                                default:
                                    $payment="Haven't selected a payment method yet";
                                    break;
                            }
                            echo '<p>'.$payment.'</p>';
                        ?>
                       <!-- <div class="form-group">
                           <div class="custom-control custom-radio">
                               <input type="radio" value="1" class="custom-control-input" name="payment" id="paypal">
                               <label  class="custom-control-label" for="paypal">Paypal</label>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="custom-control custom-radio">
                               <input type="radio" value="2" class="custom-control-input" name="payment" id="directcheck">
                               <label  class="custom-control-label" for="directcheck">Direct Check</label>
                           </div>
                       </div>
                       <div class="">
                           <div class="custom-control custom-radio">
                               <input type="radio" value="3" class="custom-control-input" name="payment" id="banktransfer">
                               <label  class="custom-control-label" for="banktransfer">Bank Transfer</label>
                           </div>
                       </div> -->
                   </div>
                  
               </div>
           </div>
        </div>
    </div>
   <!-- Checkout End -->