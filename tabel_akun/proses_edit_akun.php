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
	$nama	= $_POST['nama'];
	$email	= $_POST['email'];
	$username= $_POST['username'];
	
	
	
	$sql	= 'update tb_login set nama="'.$nama.'", email="'.$email.'", username="'.$username.'" where id_login="'.$id_login.'"';
	$query	= mysql_query($sql);
	

	if ($query == true) {
		header('Location: data_akun.php');
	} else {
		header('Location: edit_akun.php');
	}
}
?>