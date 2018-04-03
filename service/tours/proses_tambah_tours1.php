<?php
	include '../../koneksi.php';
	if(isset($_POST['simpan'])){
	//mengambil  data dari form Buku tamu
	$tujuan  = $_POST['tujuan'];
	$alamat = $_POST['alamat'];
	$deskripsi = $_POST['des_tempat'];
													 
	// ambil data file yang diupload
	$file        = $_FILES['gambar']['tmp_name'];
	$nama_file   = $_FILES['gambar']['name'];
	$destination = "../../images/" . $nama_file;
	if(empty($tujuan)){
		echo "Gagal ! Nama Product Kosong !<br>";
		}elseif(empty($alamat)){
			echo "Gagal ! Deskripsi Kosong !<br>";
		}elseif(empty($deskripsi)){
			echo "Gagal ! Lokasi Kosong !<br>";
		}elseif(empty($file)){ // kondisi jika password = password2
			echo "Gagal! Foto Kosong !<br>"; //tamplikan password benar
		}else{
			//Query untuk memasukkan data ke tabel buku tamu
			$insert_data  = "insert into tb_tours (gambar,tujuan,alamat,des_tempat) values ('$nama_file','$tujuan','$alamat','$deskripsi')";
			mysql_query($insert_data);
			// Apabila query untuk menginput data benar
			if($insert_data){
			move_uploaded_file($file, $destination);
				echo "<script> window.location='data_tours.php'; </script>"; 
			}
			else {
				echo "Input Data tamu Gagal";
			}
												 
		}
	}
?>