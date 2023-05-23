<?php
    function create_donhang($code,$tongdonhang,$payment,$iduser,$name,$address,$email,$tel,$ngaydathang){
        $conn=connectdb();
        $sql = "INSERT INTO tbl_order (code_order,total,pttt,id_user,name,address,email,tel,ngaydathang)
        VALUES ('".$code."','".$tongdonhang."','".$payment."','".$iduser."','".$name."','".$address."','".$email."','".$tel."','".$ngaydathang."')";
        // use exec() because no results are returned
        $conn->exec($sql); 
        $last_id = $conn->lastInsertId();
        return $last_id;
    }
    function addtocart($iddh,$id_product,$name_product,$img_product,$dongia,$soluong){
        $conn=connectdb();
        $sql = "INSERT INTO tbl_cart (iddh,id_product,name_product,img_product,dongia,soluong)
        VALUES ('".$iddh."','".$id_product."','".$name_product."','".$img_product."','".$dongia."','".$soluong."')";
        // use exec() because no results are returned
        $conn->exec($sql); 
    }
    function getshowcart($iddh){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_cart WHERE iddh=".$iddh);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function getorderinfo($iddh){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE id_order=".$iddh);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function getall_order($iduser){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE id_user=".$iduser);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    
    function get_all_order($kw="",$iduser=0){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE 1 AND code_order like '%".$kw."%'");
        // if($kyw!="") $stmt.=" AND code_order like '%".$kyw."%'";
        // if($iduser>0) $stmt.=" AND id_user='".$iduser."' order by id_order desc";
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $listorder=$stmt->fetchAll();
        return $listorder;
    }
    function deldh($id){
        $conn=connectdb();
        $sql = "DELETE FROM tbl_order WHERE id_order=".$id;
    
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getall_thongke(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT tbl_category.id_category as iddm, tbl_category.name_category as tendm, count(tbl_product.id_product) as countsp,min(tbl_product.price_product) as minprice,max(tbl_product.price_product) as maxprice,round(avg(tbl_product.price_product),1) as avgprice  FROM tbl_product left join tbl_category on tbl_category.id_category=tbl_product.id_category group by tbl_category.id_category order by tbl_category.id_category desc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>