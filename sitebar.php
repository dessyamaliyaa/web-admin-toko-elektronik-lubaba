<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="../index.php">Lubaba <span><font size="1">electronic</font></span></a>
            </div>

            <div class="header-right">
                <a href="logout.php" onclick="return confirm('anda yakin akan keluar?')" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="images/icon-profil.png" class="img-thumbnail" />

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
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard "></i>Home</a>
                    </li>
                    <li>
                        <a class="" href="berita/data_berita.php"><i class="fa fa-desktop "></i>Berita dan Event</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flash "></i>Tabel Akun<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="tabel_akun/data_akun.php"><i class="fa fa-toggle-on"></i>Data Akun</a></li>
                        </ul>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

<div id="page-wrapper">
            <div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-head-line">HOME</h1>
						<div class="page-subhead-line"><h1>Selamat datang, <?php echo $_SESSION['user']['nama']; ?></h1></div>
					</div>
				</div>
				<div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
								<div id="reviews" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
                                        <div class="item active">
											<div class="col-md-10 col-md-offset-1">
                                                <h4><i class="fa fa-quote-left"></i>Luababa electronic toko electronic yang menyediakan berbagai laptop dan gatget berkwalitas dan terjangkau. <i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="images/logo.png" alt="" class="img-u image-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">
                                                <h4><i class="fa fa-quote-left"></i>Hanya di lubaba anda akan dengan mudah mencari barang yang sesuai dengan keinginan anda<i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="images/logo.png" alt="" class="img-u image-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">
                                                <h4><i class="fa fa-quote-left"></i>Lubaba kajen Jl. Mandurorejo Kajen, Nyamok, Kajen, Pekalongan, Jawa Tengah 51161<i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="images/logo.png" alt="" class="img-u image-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>
                                        <li data-target="#reviews" data-slide-to="2"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>