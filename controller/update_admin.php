<?php
        include '../include/db_config.php';
        $id = $_POST['user_id'];
        $pass =$_POST['password'];
        $fnama =$_POST['first_name'];
        $lnama = $_POST['last_name'];
        $role= $_POST['role_id'];
        $address =$_POST['address'];

        $query= "UPDATE user SET 
        user_id ='$id', 
        password='$pass', 
        first_name ='$fnama', 
        last_name ='$lnama', 
        role_id ='$role', 
        address = '$address'
        
        where user_id ='$id'or 
        password='$pass'or 
        first_name ='$fnama'or 
        last_name ='$lnama'or
        role_id ='$role'or 
        address = '$address'";
       
        mysqli_query($db, $query);
        header("location:../view/admin.php");
?>
