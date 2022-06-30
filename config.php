<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'aplikasi_toko';

$db_connect = mysqli_connect($server, $user, $password, $database);

if(!$db_connect){
	die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}

?>