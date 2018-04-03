<?php
include '../koneksi.php';
  $id = $_GET['id'];
  $query = "DELETE FROM carier WHERE ID_CARIER = $id";
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='data_carier.php';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='data_carier.php';</script>";
  }
?>