<?php
include('../koneksi.php');
  $id = $_GET['id'];
  $query = "DELETE FROM produk WHERE id=$id";
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='data_produk.php';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='data_produk.php';</script>";
  }
?>