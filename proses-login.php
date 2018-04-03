<?php
session_start();

include ('koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
//deklarasi queery
$query = "SELECT * FROM tb_login where username='$username'";
//memasukan query ke varibel $data
$data = mysql_query($query);
$tampil = mysql_fetch_array($data);
 
if ($tampil != null) {

    // ... jika hasil tidak null berarti user ketemu,
    // ... lanjut periksa password

    if ($password==$tampil['password']) {
		$_SESSION['user'] = $tampil;
		echo "<script>window.alert('Login Berhasil')</script>";
		echo "<script>window.location='home.php';</script>";
	} 
	else {
		echo "<script>window.alert('Login Gagal')</script>";
		echo "<script>window.location='index.php';</script>";
	}
}	
else {
    echo "<script>window.alert('Login Gagal')</script>";
		echo "<script>window.location='index.php';</script>";
}
?>
