<?php
include '../include/db_config.php';
$id   = $_POST['Delete'];
$query="DELETE from user where user_id='$id'";
mysqli_query($db, $query);
header("location:../view/admin.php");
?>