<?php
include('../koneksi.php');

	
	$logo = $_POST['logo'];
	$sejarah  = $_POST['sejarah'];
	$visi = $_POST['visi'];
	$misi  = $_POST['misi'];
	
	$sql	= 'update about set logo ="'.$logo.'", sejarah_lubaba="'.$sejarah.'", visi_lubaba="'.$visi.'", misi_lubaba="'.$misi.'" ' . ' where id_about="1"';
	$query	= mysql_query($sql);
	

	if ($query == true) {
		header('Location: data_about.php');
	} else {
		header('Location: edit_about.php');
	}

?>