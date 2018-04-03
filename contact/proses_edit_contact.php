<?php
include('../koneksi.php');
if(isset($_POST['submit'])){
	$id_contact = $_POST['id'];
	$lokasi = $_POST['lokasi'];
	$email	= $_POST['email'];
	$no_hp	= $_POST['no_hp'];
	
	$sql	= 'update contact set lokasi="'.$lokasi.'", email="'.$email.'", no_hp="'.$no_hp.'" ' .' where id_contact="'.$id_contact.'"';
	$query	= mysql_query($sql);
	

	if ($query == true) {
		header('Location: data_contact.php');
	} else {
		header('Location: edit_contact.php');
	}
}
?>