<?php
include('../../koneksi.php');
if(isset($_POST['submit'])){
	$des	= $_POST['deskripsi_travel'];
	
	$sql	= 'update tb_travel set deskripsi="'.$des.'" where id_travel="1"';
	$query	= mysql_query($sql);
	

	if ($query == true) {
		header('Location: data_travel.php');
	} else {
		header('Location: edit_travel.php');
	}
}
?>