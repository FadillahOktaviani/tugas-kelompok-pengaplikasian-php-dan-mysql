<?php
session_start();
include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "select * from user where email='$email' and password='$password'";
$query = mysqli_query($db_connect, $sql);
$data = mysqli_fetch_array($query);

if(mysqli_num_rows($query)>0){
	$_SESSION['id'] = $data["kode_user"];
	$_SESSION['nama'] = $data["nama"];
	$_SESSION['email'] = $data["email"];
	$_SESSION['telp'] = $data["telp"];
	$_SESSION['password'] = $data["password"];
	if($data["peran"]=="admin"){
		header("location:list-data-admin.php");
	}else{
		header("location:list-data-user.php");
	}
}else{
	header("location:index.php?status=gagal-login");
}

?>

