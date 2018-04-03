<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: ../index.php');
        exit();
    }
?>
<!--Proses Simpan Data Ke database -->
<?php
  // $nama_variabel = $_Methot['Nama_field_form'];
  include('../koneksi.php'); 

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $pass = md5($password);

  $simpan = mysql_query("INSERT INTO tb_login (nama, email, username, password) VALUES('$nama','$email','$username','$pass')");
  //echo $query;

  if ($simpan) {
    echo"<script>window.alert('Simpan Berhasil..!')</script>";
    echo"<script>document.location='data_akun.php';</script>"; 
  } else {
    echo"<script>window.alert('Simpan Gagal..!')</script>";
    echo"<script>document.location='tambah_akun.php';</script>";
  }
?>