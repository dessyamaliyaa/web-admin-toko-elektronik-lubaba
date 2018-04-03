<?php
 error_reporting( ~E_NOTICE ); // avoid notice
 require_once 'koneksi.php';
 
 if(isset($_POST['submit']))
 {
  $id = $_POST['id'];// user name
  $nama = $_POST['nama'];// user email
  $kategori = $_POST['kategori'];
  $spek = $_POST['spek'];
  $harga = $_POST['harga'];
  $imgFile = $_FILES['gambar']['name'];
  $tmp_dir = $_FILES['gambar']['tmp_name'];
  $imgSize = $_FILES['gambar']['size'];
  
  
  
   $upload_dir = '../../images/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
  
  
  
  // if no error occured, continue ....
  if(!isset($errMSG))
  {
   $stmt = $DB_con->prepare('INSERT INTO produk(id,nama,kategori,gambar,spek,harga) VALUES(:vnama, :vktg, :vgambar, :vspek, :vharga)');
   
   $stmt->bindParam(':vnama',$nama);
   $stmt->bindParam(':vktg',$kategori);
   $stmt->bindParam(':vgambar',$userpic);
   $stmt->bindParam(':vspek',$spek);
   $stmt->bindParam(':vharga',$harga);
   
   if($stmt->execute())
   {
    $successMSG = "new record succesfully inserted ...";
    header("refresh:5;data_produk.php"); // redirects image view page after 5 seconds.
   }
   else
   {
    $errMSG = "error while inserting....";
   }
  }
 }
?>