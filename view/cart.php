


   <!-- Page Header Start -->
   <div class="container-fluid bg-secondary mb-5">
       <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
           <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
           <div class="d-inline-flex">
               <p class="m-0"><a href="">Home</a></p>
               <p class="m-0 px-2">-</p>
               <p class="m-0">Shopping Cart</p>
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
                        if((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0)){
                            echo '
                            <table class="table table-bordered text-center mb-0">
                                <thead class="bg-secondary text-dark">
                                    <tr>
                                        <th>Number</th>
                                        <th colspan="2">Products</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>';
                                $i=0;
                                $total=0;
                                $tong=0;
                                foreach ($_SESSION['giohang'] as $item) {
                                    $tt=$item[3] * $item[4];
                                    $tong+=$tt;
                                    echo '
                                    <tbody class="align-middle">
                                        <tr>
                                            <th>'.($i+1).'</th>
                                            <td class="align-middle"> '.$item[1].'</td>
                                            <td class="align-middle"><img src="./upload/'.$item[2].'" alt="" style="width: 50px;"></td>
                                            <td class="align-middle">'.$item[3].'</td>
                                            <td class="align-middle">
                                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                                    
                                                    <input  class="form-control form-control-sm bg-secondary text-center" value="'.$item[4].'">
                                                    
                                                </div>
                                            </td>
                                            <td class="align-middle">'.$tt.'</td>
                                            <td class="align-middle"><a href="index.php?act=delcart&i='.$i.'" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    </tbody>
                                    ';
                                    $i++;
                                }
                                echo '</table>';

                        }else{
                            
                            echo '
                                    <h2>Empty shopping cart</h2><br>
                                ';
                        }
                    ?>
                    
                    <a href="index.php">Keep Buying</a> |
                    <a href="index.php?act=delcart">Delete Cart</a>
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
               <div class="card border-secondary mb-5">
                   <div class="card-header bg-secondary border-0">
                       <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                   </div>
                   <div class="card-body">
                        <?php
                            if(!isset($tong)){
                                $tong=0;
                                $ship=0;
                                // echo '
                                // <span>Empty shopping cart</span>
                                // ';
                            } else{

                            $ship=10;
                            $total=$tong+$ship;
                            echo '
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
               
                                <a href="index.php?act=checkout " class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                            </div>
                            
                            ';
                        }

                        ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Cart End -->