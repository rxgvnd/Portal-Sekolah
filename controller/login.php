<?php 
session_start();
include '../include/db_config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysqli_query($db,"SELECT  *  from user JOIN role on role.role_id = user.role_id where user_id= '$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	$nama = $data['first_name'];
	$terakhir = $data['last_name'];
	$uts =$data['nilai_uts'];
	$uas =$data['nilai_uas'];
	$tugas =$data['nilai_tugas'];

	if($data['role_name']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['role_name'] = "admin";
		header("location:../view/admin.php");
 
	}else if($data['role_name']=="guru"){
		$_SESSION['username'] = $username;
		$_SESSION['role_name'] = "guru";
		$_SESSION['first_name']=$nama;
		header("location:../view/guru.php");
 
	}else if($data['role_name']=="murid"){
		$_SESSION['username'] = $username;
		$_SESSION['role_name'] = "murid";
		$_SESSION['first_name']= $nama;
		$_SESSION['lastname']= $terakhir;
		$_SESSION['nilai_uts']=$uts;
		$_SESSION['nilai_uas']=$uas;
		$_SESSION['nilai_tugas']=$tugas;


		header("location:../view/murid.php");
	}else {
		header("location:../index.php?pesan=gagal");
	}	
}else{
	header("location:../index.php?pesan=gagal");
}
?>
