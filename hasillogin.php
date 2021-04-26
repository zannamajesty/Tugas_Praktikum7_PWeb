<?php 
session_start(); //mengaktifkan session pada php
include 'koneksi.php'; //menghubungkan dengan file koneksi.php
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi,"select * from admin where nama='$username' and kata_sandi='$password'"); //seleksi data admin
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:tampilkontak.php");
}else{
	header("location:index.php");
}
?>