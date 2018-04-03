<?php include 'top.php'?>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">PRODUK</h1>
							<div class="page-subhead-line">
								<div  align="right">
									<form method="GET" action="pencarian.php" enctype="multipart/form-data">
										<input class="search" type="text" name="search">&nbsp;&nbsp;<input type="submit" value="Search" />
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header">
						  <h3 class="box-title" align="center">DATA PRODUK</h3>
						</div>
						<div class="box-body">
						  <table class="table table-bordered table-striped">
							<thead bgcolor=" #007BB6" align="center">
							<tr>
							  <th>No</th>
							  <th>Gambar</th>
							  <th>Nama </th>
							  <th>Kategori </th>
							  <th>Spesifikasi</th>
							  <th>Harga(Rp.)</th>
							  <th colspan=2></th>
							</tr>
							</thead>
							<tbody>
										<?php
											include('../koneksi.php');
											
											$batas = 5;
											if(isset($_GET['page']))
												{
												$halaman = $_GET['page'];
												}
												else $halaman = 1;
												$start = ($halaman - 1) * $batas;
														
											$i = $start+0;
											$query = "select * from produk a, kategori b "." where a.kategori=b.idkategori order by id desc limit $start, $batas ";
											$hasil = mysql_query($query);
											while ($row = mysql_fetch_array($hasil)) {
												$i++;
										?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo '<img style="width:100px;height:100px" src="../../images/'. $row['gambar'] .'">';?> </td>
												<td><?php echo $row['nama']; ?></td>
												<td><?php echo $row['namakategori']; ?></td>
												<td><?=substr($row['spek'],0,350);?></td>
												<td><?php echo rupiah($row['harga']); ?></td>
												<td><a href='editproduk.php?id=<?php echo $row['id']; ?>' class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i></a></td>
												<td><a href="hapusproduk.php?id=<?php echo $row['id']; ?>" onclick="return confirm('anda yakin akan menghapus data ini ?');" class="ask"><button class="btn btn-danger btn-xs" type=""><i class="fa fa-trash-o" title="Hapus"> </i></button></a></td>
												
											</tr> 
										<?php }; ?>  
							</tbody>
						  </table>
						  <div align="right">
						  <?php
							$query = "SELECT COUNT(*) AS jumData FROM produk order by id desc";
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
						<a href="tambahproduk.php" class="bt_green"><button><font color="black">Tambah Produk</font></button></a>
					 </div>
				</div>
			</div>
    </div>
    <?php include 'bottom.php'?>
