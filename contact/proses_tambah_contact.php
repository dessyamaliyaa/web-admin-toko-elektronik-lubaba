<?php
session_start();
// ... jika belum login, alihkan ke halaman login

include '../koneksi.php';
$email = $_POST['email'];
$no_hp  = $_POST['no_hp'];

$simpan = mysql_query("INSERT INTO contact (email, no_hp) VALUES ('$email','$no_hp')");
  //echo $query;

  if ($simpan == true) {
    echo"<script>window.alert('Simpan Berhasil..!')</script>";
    echo"<script>document.location='data_contact.php';</script>"; 
  } else {
    echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='tambah_contact.php';</script>";
  }
?>