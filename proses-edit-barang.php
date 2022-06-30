<?php
include('config.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
$stok = $_POST['stok'];
$sql = 
"update barang set
nama = '".$nama."',
harga = '".$harga."',
gambar = '".$gambar."',
jml_stok = '".$stok."'
where kode_barang = ".$id;

$query = mysqli_query($db_connect, $sql);

if($query){
	header("location:list-data-admin.php?status=sukses-edit");
}else{
	header("location:list-data-admin.php?status=gagal-edit");
}

?>

