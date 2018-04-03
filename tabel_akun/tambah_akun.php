<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: ../index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Akun</title>

    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="../assets/img/logo.png" class="img-circle" width=80 height=80>
				<h3><b>Lubaba</b></h3><h4><span>electronic</font></h4>
            </div>
        </div><br>
		<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
			<div class="panel panel-info">
                <div align="center" class="panel-heading">
                    <b>TAMBAH AKUN</b>
               </div>
                    <div class="panel-body" align="center">
                        <form role="form" form action="simpan_akun.php" method="post" class="">
                                <div class="form-group">
									<label class="control-label col-md-4">Nama</label>
									<div class="col-md-7">
									  <input type="text" name="nama" placeholder="Masukkan Nama Anda" class="form-control" required="required" >
									</div>
								</div><br><br>
								<div class="form-group">
									<label class="control-label col-md-4">Email</label>
									<div class="col-md-7">
									  <input type="text" name="email" placeholder="Masukkan Email" class="form-control" required="required">
									</div>
								</div><br><br>
								<div class="form-group">
									<label class="control-label col-md-4">Username</label>
									<div class="col-md-7">
									  <input type="text" name="username" placeholder="Masukkan Username" class="form-control" required="required">
									</div>
								</div><br><br>
								<div class="form-group">
									<label class="control-label col-md-4">Password</label>
									<div class="col-md-7">
									  <input type="password" name="password" placeholder="Masukkan Password" class="form-control" required="required">
									</div>
								</div><br><br>
                                <button type="submit" class="btn btn-success">Simpan </button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
						</form>
                    </div>
            </div>
			<div align="right"><a href="data_akun.php" class="bt_green"><strong>Kembali ke tabel akun...</strong></a></div>
        </div>
    </div>
</body>
</html>
