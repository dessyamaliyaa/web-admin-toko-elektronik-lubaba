<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: ../../index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Tours</title>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <link href="../../assets/css/custom.css" rel="stylesheet" />
	<link href="../../assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">RAJAWALI SAKTI</a>
            </div>

            <div class="header-right">
                <a href="../../logout.php" onclick="return confirm('anda yakin akan keluar?')" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="../../images/icon-profil.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['user']['nama']; ?>
                           
                            </div>
							<?php 
							$month= date ("m"); 
							$year=date("Y"); 
							$day=date("d"); 
							//menampilkan hari ini  
							  ?>
							<div class="inner-text"><?php echo date("d F Y ",mktime(0,0,0,$month,$day,$year)); ?></div>
							 <?php
							//cek tanggal 1 hari sekarang 
							$s=date ("w", mktime (0,0,0,$month,1,$year)); 
							for ($ds=1;$ds<=$s;$ds++) { 
							echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\"> 
							</td>";} 
							?>
                        </div>
                    </li>
                    <li>
                        <a class="" href="../../home.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-dashboard "></i>Home</a>
                    </li>
					<li>
                        <a class="" href="../../berita/data_berita.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-desktop "></i>Berita dan Event</a>
                    </li>
                    <li>
                        <a href="" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-flash "></i>Tabel Akun<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="../../tabel_akun/data_akun.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-toggle-on"></i>Data Akun</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="active-menu-top" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-yelp "></i>Services <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="../travel/data_travel.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-eyedropper"></i>Travel</a></li>
                            <li><a class="active-menu" href="data_tours.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-eyedropper "></i>Tours</a></li>
                            <li><a href="../charter/data_charter.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-eyedropper"></i>Charter</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../guestbook/data_bukutamu.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-recycle "></i>Buku Tamu </a>
                    </li>
                </ul>

            </div>

        </nav>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">SERVICES</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-info">
                        <div class="panel-heading">
                           Tambah Tours
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="proses_tambah_tours1.php" enctype="multipart/form-data">
								<div class="form-group">
                                      <label for="exampleInputFile">Gambar</label>
                                      <input type="file" name="gambar" id="exampleInputFile" witdh="200px" height="200" required="required">
                                      <p class="help-block">Pilih Gambar</p>
                                </div>
                                <div class="form-group">
                                    <label>Tujuan Wisata</label>
                                    <input class="form-control" type="text" name="tujuan" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" type="text" name="alamat" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Tempat Wisata</label>
                                    <textarea class="form-control" rows="5" name="des_tempat" required="required"></textarea>
                                </div>
								<div align="center">
								<button type="submit" name="simpan" class="btn btn-success">Simpan </button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
								</div>
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_tours.php" class="bt_green"><strong>Kembali ke tabel tours...</strong></a></div>
                    </div>
				</div>
			</div>
    </div>
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/jquery.metisMenu.js"></script>
    <script src="../../assets/js/custom.js"></script>
	<script src="../../assets/js/bootstrap-fileupload.js"></script>
</body>
</html>
