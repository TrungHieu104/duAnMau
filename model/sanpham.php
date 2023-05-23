<?php
function add_sp($iddm,$tensp,$giasp,$giacusp,$img){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_product (id_category,name_product,price_product,img_product)
    VALUES ('".$iddm."','".$tensp."','".$giasp."','".$img."')";
    // use exec() because no results are returned
    $conn->exec($sql); 
}

function delsp($id){
    $conn=connectdb();
    $sql = "DELETE FROM tbl_product WHERE id_product=".$id;

    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_sp($iddm=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM tbl_product WHERE 1";
    if($iddm>0) $sql.=" AND id_category=".$iddm;
    if($kyw!="") $sql.=" AND name_product like '%".$kyw."%'";
    $sql.=" order by id_product DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getonesp($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_product WHERE id_product=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function updatesp($id,$tensp,$img,$giasp,$giacusp,$iddm){
    $conn=connectdb();
    if($img==""){
        $sql = "UPDATE tbl_product SET name_product='".$tensp."',price_product='".$giasp."',oldprice_product='".$giacusp."',id_category='".$iddm."' WHERE id_product=".$id;
    }else{
        $sql = "UPDATE tbl_product SET name_product='".$tensp."',price_product='".$giasp."',oldprice_product='".$giacusp."',id_category='".$iddm."',img_product='".$img."' WHERE id_product=".$id;

    }
    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
function showproduct($ds){
    foreach ($ds as $sp) {
        if ($sp['price_product'] == 0) {
            $gia = '<div class="d-flex justify-content-center">
                                        <h6>Liên hệ: 0585818504</h6>
                                </div> ';
        } else {
            if ($sp['oldprice_product'] > 0) {
                $gia = '<div class="d-flex justify-content-center">
                                            <h6>' . $sp['price_product'] . '</h6><h6 class="text-muted ml-2"><del>' . $sp['oldprice_product'] . '</del></h6>
                                    </div> ';
            } else {
                $gia = '<div class="d-flex justify-content-center">
                                            <h6>' . $sp['price_product'] . '</h6><h6 class="text-muted ml-2"></h6>
                                    </div> ';
            }
        }

        echo '
                            <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <form action="index.php?act=addcart" method="post">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img class="img-fluid w-100" src="./upload/' . $sp['img_product'] . '" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3">' . $sp['name_product'] . '</h6>
                                            ' . $gia . '
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="index.php?act=detail&id=' . $sp['id_product'] . '" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i><input class="btn btn-sm text-dark p-0" type="submit" name="addtocart" value="Add To Cart"> </a>
                                            
                                        </div>
                                        <input type="hidden" name="id"  value="' . $sp['id_product'] . '">
                                        <input type="hidden" name="tensp"  value="' . $sp['name_product'] . '">
                                        <input type="hidden" name="img"  value="' . $sp['img_product'] . '">
                                        <input type="hidden" name="giasp"  value="' . $sp['price_product'] . '">
                                    </form>
                                </div>
                            </div>
                        ';
    }
}

?>