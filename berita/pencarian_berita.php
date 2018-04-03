<?php include("nav_top2.php") ?>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">BERITA</h1>
							<div class="page-subhead-line">
								<div  align="right">
									<form method="GET" action="pencarian_berita.php" enctype="multipart/form-data">
										<input class="search" type="text" name="search">&nbsp;&nbsp;<input type="submit" value="Search" />
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
						  <h3 class="box-title" align="center">DATA BERITA</h3>
						</div>
						<div class="box-body">
						  <table class="table table-bordered table-striped">
							<thead bgcolor=" #007BB6" align="center">
							<tr>
							  <th>No</th>
							  <th>Judul </th>
							  <th>Deskripsi </th>
							  <th>Tanggal Post</th>
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
											$hasil = mysql_query("SELECT * FROM berita WHERE JUDUL LIKE '%$search%' limit $start,$batas");
											$i = $start+0;
											$cek = mysql_num_rows ($hasil);
												if($cek <1 ){
												?>
												<tr>
													<td colspan=6><h1>Hasil Tidak Ditemukan</h1></td>
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
												<td><?php echo $tampil['JUDUL']; ?></td>
												<td><?php echo substr($tampil['ISI'],0,250); ?></td>
												<td><?php echo $tampil['TANGGAL']; ?></td>
												<td><a href="edit_berita.php?id=<?php echo $tampil['ID_BERITA']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i></a></td>
												<td><a href="hapus_berita.php?id=<?php echo $tampil['ID_BERITA']; ?>" onclick="return confirm('anda yakin akan menghapus data ini');" class="ask"><button class="btn btn-danger btn-xs" type=""><i class="fa fa-trash-o" title="Hapus"> </i></button></a></td>
												
											</tr> 
										<?php }; 
												}
										?>  
							</tbody>
						  </table>
						  <div align="right">
						  <?php
							$query = "SELECT COUNT(*) AS jumData FROM berita WHERE JUDUL LIKE '%$search%'";
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
						<a href="tambah_berita.php" class="bt_green"><button><font color="black">Tambahkan Berita</font></button></a>
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
