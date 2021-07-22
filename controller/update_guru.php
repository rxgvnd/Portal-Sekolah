<?php
        include '../include/db_config.php';
        $id = $_POST['id'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $query= "UPDATE grade SET user_id ='$id', nilai_tugas ='$tugas', nilai_uts='$uts', nilai_uas ='$uas' where user_id ='$id' or nilai_tugas ='$tugas' or nilai_uts='$uts'or nilai_uas ='$uas'";
       
        mysqli_query($db, $query);
        header("location:../view/guru.php");
?>
