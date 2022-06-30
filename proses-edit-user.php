<?php
include('config.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$password = $_POST['password'];
$sql = 
"update user set
nama = '".$nama."',
email = '".$email."',
telp = '".$telp."',
password = '".$password."'
where kode_user = ".$id;

$query = mysqli_query($db_connect, $sql);

if($query){
	header("location:list-data-user.php?status=sukses-edit");
}else{
	header("location:list-data-user.php?status=gagal-edit");
}

?>

