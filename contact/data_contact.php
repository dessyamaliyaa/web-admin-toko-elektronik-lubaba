<?php include 'nav_top1.php';?>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="box">
						<div class="box-header">
						  <h3 class="box-title" align="center">Kontak</h3>
						</div>
						<div class="box-body">
						  <table class="table table-bordered table-striped">
							<thead bgcolor=" #007BB6" align="center">
							<tr>
							  <th>NO</th>
							  <th>LOKASI</th>
							  <th>EMAIL</th>
							  <th>NO.HP<th>
							  <th colspan='2'>AKSI</th>
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
											$query = "SELECT * FROM contact order by id_contact desc LIMIT $start, $batas";
											$hasil = mysql_query($query);
											while ($tampil = mysql_fetch_array($hasil)) {
												$i++;
										?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $tampil['lokasi']; ?></td>
												<td><?php echo $tampil['email']; ?></td>
												<td><?php echo $tampil['no_hp']; ?></td>
												<td><a href="edit_contact.php?id=<?php echo $tampil['id_contact']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i></a></td>
												<td><a href="hapus_contact.php?id=<?php echo $tampil['id_contact']; ?>" onclick="return confirm('anda yakin akan menghapus data ini');" class="ask"><button class="btn btn-danger btn-xs" type=""><i class="fa fa-trash-o" title="Hapus"> </i></button></a></td>
												
											</tr> 
										<?php }; ?>  
							</body>
						  </table>
						  <div align="right">
						  
						</div>
						</div>
						<a href="tambah_contact.php" class="bt_green"><button><font color="black">Tambahkan Kontak</font></button></a>
					 </div>
				</div>
			</div>
    </div>
    <?php include 'bottom.php'?>
