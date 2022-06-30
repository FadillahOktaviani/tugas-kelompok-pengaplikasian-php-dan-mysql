<?php
include('config.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$password = $_POST['password'];
$peran = $_POST['peran'];
$sql = "insert into user (nama, email, telp, password, peran) values ('$nama', '$email', '$telp', '$password', '$peran')";
$query = mysqli_query($db_connect, $sql);

if($query){
	header("location:list-data-admin.php?status=sukses-daftar");
}else{
	header("location:list-data-admin.php?status=gagal-daftar");
}

?>

