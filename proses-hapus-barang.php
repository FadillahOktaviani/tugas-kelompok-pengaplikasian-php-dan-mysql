<?php
include('config.php');

if(!isset($_GET['id'])){
	header("location:list-data-admin.php");
}

$id = $_GET['id'];
$sql = "delete from barang where kode_barang = ".$id;
$query = mysqli_query($db_connect, $sql);

if($query){
	header("location:list-data-admin.php?status=sukses-hapus");
}else{
	header("location:list-data-admin.php?status=gagal-hapus");
}

?>

