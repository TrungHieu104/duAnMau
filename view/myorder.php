<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">My Order</h1>
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
           <div class=" table-responsive mb-5">
               
                    <?php
                    // echo var_dump($_SESSION['giohang']);
                        if(is_array($listorder)){
                            echo '
                                     <table class="table table-bordered text-center mb-0">
                                        <thead class="bg-secondary text-dark">
                                            <tr>
                                                <th>Code Order</th>
                                                <th>Time Order</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Tel</th>
                                                <th>Total</th>
                                                <th>Payment Method</th>
                                            </tr>
                                        </thead>
                                 ';
                                
                                foreach ($listorder as $order) {
                          
                                       $pttt =$order['pttt'];
                                       if($pttt==1){
                                            $pttt="Paypal";
                                       }else if($pttt==2){
                                            $pttt="COD";
                                       }else if($pttt==3){
                                            $pttt="Bank Transfer";
                                       }else{
                                            $pttt="";
                                       }
                                    
                                    echo '
                                      <tbody class="align-middle">
                                          <tr>
                                            
                                              <td class="align-middle"> ' . $order['code_order'] . '</td>
                                              <td class="align-middle"> ' . $order['ngaydathang'] . '</td>
                                              <td class="align-middle">' . $order['name'] . '</td>
                                              <td class="align-middle">' . $order['address'] . '</td>
                                              <td class="align-middle">' . $order['email'] . '</td>
                                              <td class="align-middle">' . $order['tel'] . '</td>
                                              <td class="align-middle">' . $order['total'] . '</td>
                                              <td class="align-middle">' . $pttt . '</td>
                                            
                                          </tr>
                                      </tbody>
                                    ';
                                }
                                echo '</table>';

                        }
                    ?>
                    
           </div>
           <!-- <div class="col-lg-4">
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
                       
                   </div>
               </div>
           </div> -->
       </div>
   </div>
   <!-- Cart End -->
