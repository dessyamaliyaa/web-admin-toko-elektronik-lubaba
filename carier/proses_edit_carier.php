<?php
include('../koneksi.php');

	$id_carier = $_POST['id'];
	$jabatan = $_POST['jabatan'];
	$requirement  = $_POST['des_carier'];
	$akhir_req = $_POST['akhir_req'];
	$gaji  = $_POST['gaji'];
	$jenjang = $_POST['jenjang'];
	$tgl_post = $_POST['tanggal'];
	
	$sql	= 'update carier set JABATAN ="'.$jabatan.'", REQUIREMENT="'.$requirement.'", AKHIR_REQ="'.$akhir_req.'", GAJI="'.$gaji.'", JENJANG="'.$jenjang.'", DATE_POST="'.$tgl_post.'" ' .' where ID_CARIER="'.$id_carier.'"';
	$query	= mysql_query($sql);
	

	if ($query == true) {
		header('Location: data_carier.php');
	} else {
		header('Location: edit_carier.php');
	}

?>