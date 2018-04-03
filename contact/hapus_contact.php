<?php
include('../koneksi.php');
  $id = $_GET['id'];
  $query = "delete from contact where id_contact=$id";
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='data_contact.php';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='data_contact.php';</script>";
  }
?>