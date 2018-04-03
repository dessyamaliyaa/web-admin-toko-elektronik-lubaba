<?php
//
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$spek = $_POST['spek'];
$harga = $_POST['harga'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$tipe = $_FILES['gambar']['type'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$gambar;

// Set path folder tempat menyimpan fotonya
$path = "../../images/".$fotobaru;

if($tipe=="image/jpeg" || $tipe=="image/png" || $tipe=="image/jpg"){
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil 

  // Proses simpan ke Database
  $query = "INSERT INTO produk VALUES('".$id."', '".$nama."','".$kategori."', '".$fotobaru."', '".$spek."', '".$harga."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query 

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: data_produk.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo"<script>window.alert('Maaf, Terjadi kesalahan saat menambah ke Database..!')</script>";
    echo"<script>document.location='data_produk.php';</script>"; 
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
    echo"<script>window.alert('Maaf, Gambar gagal di Upload..!')</script>";
    echo"<script>document.location='data_produk.php';</script>"; 
}
}else{
    echo"<script>window.alert('Maaf, Hanya file JPEG/JPG/PNG untuk Gambar..!')</script>";
    echo"<script>document.location='data_produk.php';</script>"; 
}
?>