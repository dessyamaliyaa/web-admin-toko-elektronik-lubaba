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
    <title>Data Carier</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <?php 
            //fungsi kurs rupiah
        function rupiah($nilai, $pecahan = 0 ){
        return number_format($nilai, $pecahan, ',', '.');
        }
         ?>
         
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
                <a class="navbar-brand" href="../home.php">Lubaba <span><font size="1">electronic</font></span></a>
            </div>

            <div class="header-right">
                <a href="../logout.php" onclick="return confirm('anda yakin akan keluar?')" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
<!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="../images/icon-profil.png" class="img-thumbnail" />

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
                        <a class="" href="../home.php"><i class="fa fa-dashboard "></i>Beranda</a>
                    </li>
					
					<li>
                        <a class="" href="../berita/data_berita.php"><i class="fa fa-desktop "></i>Berita</a>
                    </li>

                    <li>
                        <a class="" href="../produk/data_produk.php"><i class="fa fa-desktop "></i>Produk</a>
                    </li>

					<li>
                        <a class="" href="../contact/data_contact.php"><i class="fa fa-desktop "></i>Kontak</a>
                    </li>
					
                    <li>
                        <a class="active-menu" href="../carier/data_carier.php"><i class="fa fa-desktop "></i>Karir</a>
                    </li>

                    <li>
                        <a class="" href="../about/data_about.php"><i class="fa fa-desktop "></i>Tentang</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-flash "></i>Tabel Akun<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="../tabel_akun/data_akun.php"><i class="fa fa-toggle-on"></i>Data Akun</a></li>
                        </ul>
                    </li>
                    
                </ul>

            </div>

        </nav>