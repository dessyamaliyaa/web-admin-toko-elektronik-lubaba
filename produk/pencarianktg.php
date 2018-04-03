
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Kategori</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">Lubaba Shop</a>
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
                        <a class="" href="../home.php"><i class="fa fa-dashboard "></i>Home</a>
                    </li>
					<li>
                        <a class="" href="data_produk.php"><i class="fa fa-desktop "></i>Produk</a>
                    </li>
					<li>
                        <a class="active-menu" href="kategori.php"><i class="fa fa-desktop "></i>Kategori</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-flash "></i>Tabel Akun <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="" href="../tabel_akun/data_akun.php"><i class="fa fa-toggle-on"></i>Data Akun</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">Kategori</h1>
							<div class="page-subhead-line">
								<div  align="right">
									<form method="GET" action="pencarianktg.php" enctype="multipart/form-data">
										<input class="search" type="text" name="search">&nbsp;&nbsp;<input type="submit" value="Search" />
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
						  <h3 class="box-title" align="center">DATA KATEGORI</h3>
						</div>
						<div class="box-body">
						  <table class="table table-bordered table-striped">
							<thead bgcolor=" #007BB6" align="center">
							<tr>
							  <th>No</th>
							  <th>Nama Kategori</th>
							  <th colspan=2>Aksi</th>
							</tr>
							</thead>
							<tbody>
										<?php
										error_reporting (0);
											include('../koneksi.php');
											$batas = 2;
											if(isset($_GET['page']))
												{
												$halaman = $_GET['page'];
												}
												else $halaman = 1;
												$start = ($halaman - 1) * $batas;
	
											$search = $_GET ['search'];
											$hasil = mysql_query("SELECT * FROM kategori WHERE namakategori LIKE '%$search%' limit $start,$batas");
											$i = $start+0;
											$cek = mysql_num_rows ($hasil);
												if($cek <1 ){
												?>
												<tr>
													<td colspan=7><h1>Hasil Tidak Ditemukan</h1></td>
												</tr>
												<?php
												}
												else 
												{
											while ($tampil = mysql_fetch_array($hasil)) {
												$i++;
										?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $tampil['namakategori']; ?></td>
												<td><a href="editktg.php?id=<?php echo $tampil['idkategori']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i></a></td>
												<td><a href="hapusktg.php?id=<?php echo $tampil['idkategori']; ?>" onclick="return confirm('anda yakin akan menghapus data ini ?');" class="ask"><button class="btn btn-danger btn-xs" type=""><i class="fa fa-trash-o" title="Hapus"> </i></button></a></td>
												
											</tr> 
										<?php }; 
												}
										?>  
							</tbody>
						  </table>
						  <div align="right">
						  <?php
							$query = "SELECT COUNT(*) AS jumData FROM kategori WHERE namakategori LIKE '%$search%'";
							$hasil = mysql_query($query);
							$data = mysql_fetch_array($hasil);
							$jumData = $data['jumData'];
							$jumPage = ceil($jumData/$batas);
							if ($halaman > 1) echo  "<a id='page' href='".$_SERVER['PHP_SELF']."?page=".($halaman-1)."'>Previous</a>";
							for($page = 1; $page <= $jumPage; $page++)
							{
								if ((($page >= $halaman - 3) && ($page <= $halaman + 3)) || ($page == 1) || ($page == $jumPage))
								 {
									if (($page != ($jumPage - 1)) && ($page == $jumPage))
									{
										echo "...";
									}
									if ($page == $halaman)
									{
									echo " <b>".$page."</b> ";
									}
									else 
									{
									echo " <a id='page' href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
									}
									
									$page = $page;
								}
							}
							if ($halaman < $jumPage) echo "<a id='page' href='".$_SERVER['PHP_SELF']."?page=".($halaman+1)."'>Next</a>";
						?>
						</div>
						</div>
						<a href="tambahktg.php" class="bt_green"><button><font color="black">Tambahkan Kategori</font></button></a>
					 </div>
				</div>
			</div>
    </div>
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>
