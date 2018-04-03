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
    <title>Data Charter</title>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <link href="../../assets/css/custom.css" rel="stylesheet" />
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
                        <a class="" href="../../home.php"><i class="fa fa-dashboard "></i>Home</a>
                    </li>
					<li>
                        <a class="" href="../../berita/data_berita.php"><i class="fa fa-desktop "></i>Berita dan Event</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-flash "></i>Tabel Akun <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="" href="../../tabel_akun/data_akun.php"><i class="fa fa-toggle-on"></i>Data Akun</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="active-menu-top"><i class="fa fa-yelp "></i>Services <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="../travel/data_travel.php"><i class="fa fa-eyedropper"></i>Travel</a></li>
                            <li><a href="../tours/data_tours.php"><i class="fa fa-eyedropper "></i>Tours</a></li>
                            <li><a class="active-menu" href="data_charter.php"><i class="fa fa-eyedropper"></i>Charter</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../guestbook/data_bukutamu.php"><i class="fa fa-recycle "></i>Buku Tamu </a>
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
            <div class="row">
				 <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading" align="center"><h3>DATA CHARTER</h3></div>
							<div class="panel-body">
								<p>
										<?php
											include('../../koneksi.php');
											$query = "SELECT * FROM tb_charter";
											$data = mysql_query($query);
											while ($tampil = mysql_fetch_array($data)) {
										?>
											<tr>
												<td><?php echo $tampil['des_charter']; ?></td>
											</tr> 
										<?php }; ?>  							
								</p>
							</div>
                        <div class="panel-footer" align="right">
                            <td><a href="edit_charter.php?id='1'" class="btn btn-primary">Edit</a></td>
                        </div>
                    </div>
                </div>
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
</body>
</html>
