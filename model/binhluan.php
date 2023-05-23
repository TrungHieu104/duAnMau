<?php
function add_bl($noidung,$iduser,$idpro,$ngaybl){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_comment (noidung,id_user,id_product,ngaybinhluan)
    VALUES ('".$noidung."','".$iduser."','".$idpro."','".$ngaybl."')";
    // use exec() because no results are returned
    $conn->exec($sql); 
}
function getall_bl($idpro){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_comment WHERE id_product='".$idpro."' order by id desc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_bluan($idpro){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_comment WHERE 1");
    if($idpro>0) $stmt.=(" AND id_product='".$idpro."' order by id desc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function delbl($id){
    $conn=connectdb();
    $sql = "DELETE FROM tbl_comment WHERE id=".$id;

    // use exec() because no results are returned
    $conn->exec($sql);
}
function getall_binhluan($idpro){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT tbl_user.name_user as nameuser, tbl_comment.ngaybinhluan as ngaybinhluan, tbl_comment.noidung as noidung FROM tbl_user left join tbl_comment on tbl_comment.id_user=tbl_user.id_user WHERE 1 AND tbl_comment.id_product='".$idpro."' order by tbl_user.id_user desc");
    // if($idpro>0) $stmt.=("");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>