<?php
include('../koneksi.php');
  $id = $_GET['id'];
  $query = "DELETE FROM bukutamu WHERE id_bukutamu=$id";
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='data_bukutamu.php';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='data_bukutamu.php';</script>";
  }
?>