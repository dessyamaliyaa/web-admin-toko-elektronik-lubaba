

        <!-- NAV TOP AND HEADER -->
        <?php include("nav_top.php") ?>

			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">Karir</h1>
							<div class="page-subhead-line">
								<div  align="right">
									<form method="GET" action="pencarian_carier.php" enctype="multipart/form-data">
										<input class="search" type="text" name="search">&nbsp;&nbsp;<input type="submit" value="Search" />
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
						  <h3 class="box-title" align="center">DATA KARIR</h3>
						</div>
						<div class="box-body">
						  <table class="table table-bordered table-striped">
							<thead bgcolor=" #007BB6" align="center">
							<tr>
							  <th>No</th>
							  <th>Jabatan </th>
							  <th>Requerement </th>
							  <th>Akhir Pendaftaran</th>
							  <th>Gaji</th>
							  <th>Jenjang</th>
							  <th>Tanggal Post</th>
							  <th colspan=2>Aksi</th>
							</tr>
							</thead>
							<tbody>
										<?php
											include '../koneksi.php';
											$batas = 2;
											if(isset($_GET['page']))
												{
												$halaman = $_GET['page'];
												}
												else $halaman = 1;
												$start = ($halaman - 1) * $batas;
														
											$i = $start+0;
											$query = "select * from carier order by ID_CARIER desc limit $start, $batas";
											$hasil = mysql_query($query);
											while ($tampil = mysql_fetch_array($hasil)) {
												$i++;
										?>
						<!-- This Value Table -->				
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $tampil['JABATAN']; ?></td>
												<td><?php echo $tampil['REQUIREMENT']; ?></td>
												<td><?php echo $tampil['AKHIR_REQ']; ?></td>
												<td><?php echo "Rp ", rupiah($tampil["GAJI"], 2);?></td>
												<td><?php echo $tampil['JENJANG']; ?></td>
												<td><?php echo $tampil['DATE_POST']; ?></td>
												<td><a href="edit_carier.php?id=<?php echo $tampil['ID_CARIER']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i></a></td>
												<td><a href="hapus_carier.php?id=<?php echo $tampil['ID_CARIER']; ?>" onclick="return confirm('anda yakin akan menghapus data ini');" class="ask"><button class="btn btn-danger btn-xs" type=""><i class="fa fa-trash-o" title="Hapus"> </i></button></a></td>
												
											</tr> 
										<?php }; ?>  
							</tbody>
						  </table>
						  <div align="right">

						  <!-- This Pagination -->
						  <?php // ini pagination
							$query = "select count(*) as jumData from carier order by ID_CARIER desc";
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
						<a href="tambah_carier.php" class="bt_green"><button><font color="black">Tambahkan Carier</font></button></a>
					 </div>
				</div>
			</div>
    </div>
            <!-- FOOTER -->
        <?php include("../footer.php") ?>