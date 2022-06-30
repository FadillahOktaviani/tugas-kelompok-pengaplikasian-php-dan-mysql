<?php
include('config.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$password = $_POST['password'];
$sql = "insert into user (nama, email, telp, password, peran) values ('$nama', '$email', '$telp', '$password', 'user')";
$query = mysqli_query($db_connect, $sql);

if($query){
	header("location:index.php?status=sukses-daftar");
}else{
	header("location:index.php?status=gagal-daftar");
}

?>

