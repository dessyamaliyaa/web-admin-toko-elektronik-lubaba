<?php
include('../../koneksi.php');
if(isset($_POST['submit'])){
	$des	= $_POST['deskripsi_charter'];
	
	$sql	= 'update tb_charter set des_charter="'.$des.'" where id_charter="1"';
	$query	= mysql_query($sql);
	

	if ($query == true) {
		header('Location: data_charter.php');
	} else {
		header('Location: edit_charter.php');
	}
}
?>