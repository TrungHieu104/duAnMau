<?php
function add_dm($tendm,$uutien,$hienthi){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_category (name_category,prioritized_category,hide_category)
    VALUES ('".$tendm."','".$uutien."','".$hienthi."')";
    // use exec() because no results are returned
    $conn->exec($sql); 
}

function updatedm($id,$tendm,$uutien,$hienthi){
    $conn=connectdb();

    $sql = "UPDATE tbl_category SET name_category='".$tendm."', prioritized_category='".$uutien."',hide_category='".$hienthi."'  WHERE id_category=".$id;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}

function getonedm($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_category WHERE id_category=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function deldm($id){
    $conn=connectdb();
    $sql = "DELETE FROM tbl_category WHERE id_category=".$id;

    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_dm(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_category");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

?>