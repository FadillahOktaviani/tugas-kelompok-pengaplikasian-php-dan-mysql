<?php
include('config.php');

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
$stok = $_POST['stok'];
$sql = "insert into barang (nama, harga, gambar, jml_stok) values ('$nama', '$harga', '$gambar', '$stok')";
$query = mysqli_query($db_connect, $sql);

if($query){
	header("location:list-data-admin.php?status=sukses-daftar");
}else{
	header("location:list-data-admin.php?status=gagal-daftar");
}

?>

