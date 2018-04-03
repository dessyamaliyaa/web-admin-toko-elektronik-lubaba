<?php
include '../../koneksi.php';

	$id_tours = $_POST['id'];
	$tujuan	= $_POST['tujuan'];
	$alamat= $_POST['alamat'];
	$des_tempat=$_POST['des_tempat'];
$file        = $_FILES['gambar']['tmp_name'];
$nama_file   = $_FILES['gambar']['name'];
$destination = "../../images/". $nama_file;
if(empty($nama_file)){
	$update_tours = "UPDATE tb_tours SET tujuan='$tujuan', alamat='$alamat', des_tempat='$des_tempat' WHERE id_tours='$id_tours'" or die ("gagal update ");
	mysql_query($update_tours);
	echo "<script>document.location='data_tours.php' </script> ";
}else if(!empty($nama_file)){
	$update_tours = "UPDATE tb_tours SET gambar='$nama_file', tujuan='$tujuan', alamat='$alamat', des_tempat='$des_tempat' WHERE id_tours='$id_tours'";
	mysql_query($update_tours);
	move_uploaded_file($file, $destination);
	echo "<script>document.location='data_tours.php' </script> "; 
}

?>
