<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: ../index.php');
        exit();
    }
?>
<?php
include('../koneksi.php');
if(isset($_POST['submit'])){
	$id_login = $_POST['id'];
	
	$pass= md5($_POST['password']);
	
	
	$sql	= 'update tb_login set password="'.$pass.'" where id_login="'.$id_login.'"';
	$query	= mysql_query($sql);
	

	if ($query == true) {
		header('Location: data_akun.php');
	} else {
		header('Location: edit_akun.php');
	}
}
?>