<?php 
session_start();
include 'koneksi.php';
$name = $_POST['username'];
$pass = $_POST['password'];
$data = mysqli_query($koneksi,"select * from admin where username='$name' and password='$pass'");
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['username'] = $name;
	$_SESSION['status'] = "login";	header("location:home.php");
}else{
	header("location:index.html?pesan=gagal");
}
?>