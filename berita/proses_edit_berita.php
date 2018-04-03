<?php
include('../koneksi.php');
if(isset($_POST['submit'])){
	$id_berita = $_POST['id'];
	$judul	= $_POST['JUDUL'];
	$des	= $_POST['ISI'];
	$gambar = $_FILES['GAMBAR']['name'];
	$tmp = $_FILES['GAMBAR']['tmp_name'];
	$tglpost	= $_POST['TANGGAL'];
	
	$path = "../../images/".$gambar;

if(move_uploaded_file($tmp, $path)){
	
	$sql	= 'update berita set JUDUL="'.$judul.'", ISI="'.$des.'", GAMBAR="'.$gambar.'", TANGGAL="'.$tglpost.'" where ID_BERITA="'.$id_berita.'"';
	$query	= mysql_query($sql);
	}

	if ($query == true) {
		header('Location: data_berita.php');
	} else {
		header('Location: edit_berita.php');
	}
}
?>