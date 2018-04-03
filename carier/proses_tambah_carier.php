<?php
session_start();
// ... jika belum login, alihkan ke halaman login

include '../koneksi.php';
$jabatan = $_POST['jabatan'];
$requirement  = $_POST['des_carier'];
$akhir_req = $_POST['akhir_req'];
$gaji  = $_POST['gaji'];
$jenjang = $_POST['jenjang'];
$tgl_post = $_POST['tanggal'];

$simpan = mysql_query("INSERT INTO carier(JABATAN, REQUIREMENT, AKHIR_REQ, GAJI,JENJANG ,DATE_POST) VALUES ('$jabatan', '$requirement', '$akhir_req', '$gaji', '$jenjang', '$tgl_post')");
  //echo $query;

  if ($simpan == true) {
    echo"<script>window.alert('Simpan Berhasil..!')</script>";
    echo"<script>document.location='data_carier.php';</script>"; 
  } else {
    echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='tambah_carier.php';</script>";
  }
?>