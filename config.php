<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamamotor";

//membuat koneksi

$koneksi = mysqli_connect($servername,$username,$password,$dbname);

//cek koneksi

if (!$koneksi) {
	die("koneksi gagal : ". mysqli_connect_error());
} 

?>