<?php
function add_tk($tentk,$sdt,$gmail,$account,$password,$role){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_user (name_user,phoneNumber_user,gmail_user,account_user,password_user,role)
    VALUES ('".$tentk."','".$sdt."','".$gmail."','".$account."','".$password."','".$role."')";
    // use exec() because no results are returned
    $conn->exec($sql); 
}

function updatetk($id,$tentk,$sdt,$gmail,$account,$password,$role){
    $conn=connectdb();

    $sql = "UPDATE tbl_user SET name_user='".$tentk."',phoneNumber_user='".$sdt."',gmail_user='".$gmail."',account_user='".$account."',password_user='".$password."', role='".$role."' WHERE id_user=".$id;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}

function getonetk($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE id_user=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function deltk($id){
    $conn=connectdb();
    $sql = "DELETE FROM tbl_user WHERE id_user=".$id;

    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_tk(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function checkuser($user,$pass){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE account_user='".$user."' AND password_user='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 0;
    
}
function getuserinfo($user,$pass){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE account_user='".$user."' AND password_user='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
    
}
function getoneuserinfo($iduser){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE id_user='".$iduser."' ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
    
}

?>