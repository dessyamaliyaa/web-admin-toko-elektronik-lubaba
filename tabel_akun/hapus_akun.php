<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: ../index.php');
        exit();
    }
?>
<?php
include('../koneksi.php');
  $id = $_GET['id'];
  $query = 'DELETE FROM tb_login WHERE id_login="'.$id.'"';
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='../logout.php';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='data_akun.php';</script>";
  }
?>