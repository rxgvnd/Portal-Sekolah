<?php 
include "../include/db_config.php";

    $id = $_POST['user_id'];
    $pass =$_POST['password'];
    $fnama =$_POST['first_name'];
    $lnama = $_POST['last_name'];
    $role= $_POST['role_id'];
    $address =$_POST['address'];

    $query = "INSERT INTO user VALUES('$id','".md5($pass)."','$fnama','$lnama','$role','$address');";
    $result =mysqli_query($db, $query);

    header('location:../view/admin.php');

?>