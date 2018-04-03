<?php
session_start();
// ... jika belum login, alihkan ke halaman login

include '../koneksi.php';
$judul = $_POST['JUDUL'];
$deskripsi  = $_POST['ISI'];
$gambar = $_FILES['GAMBAR']['name'];
$tmp = $_FILES['GAMBAR']['tmp_name'];
$tgl_post = $_POST['TANGGAL'];

$path = "../../images/".$gambar;

if(move_uploaded_file($tmp, $path)){

$simpan = mysql_query("INSERT INTO berita (JUDUL, ISI,GAMBAR ,TANGGAL) VALUES ('$judul','$deskripsi','$gambar','$tgl_post')");
  //echo $query;
}
  if ($simpan == true) {
    echo"<script>window.alert('Simpan Berhasil..!')</script>";
    echo"<script>document.location='data_berita.php';</script>"; 
  } else {
    echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='tambah_berita.php';</script>";
  }
?>