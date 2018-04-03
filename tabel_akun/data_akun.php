<?php include("nav_top.php") ?>


					<div id="page-wrapper">
						<div id="page-inner">
							<div class="row">
								<div class="col-md-12">
									<h1 class="page-head-line">DATA AKUN</h1>
								</div>
							</div>
							<div class="box">
								<div class="box-body">
									<table class="table table-bordered table-striped">
										<thead bgcolor=" #007BB6">
                                        <tr align="center">
											<th scope="col" >No</th>
											<th scope="col" >Nama</th>
											<th scope="col" >Email</th>
											<th scope="col" >Username</th>
											<th scope="col"colspan = "2">Aksi</th>
										</tr>
										</thead>
										<tbody>
										<?php
											include('../koneksi.php');
											$i = 0;
											$query = "SELECT * FROM tb_login";
											$data = mysql_query($query);
											while ($tampil = mysql_fetch_array($data)) {
												$i++;
										?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $tampil['nama']; ?></td>
												<td><?php echo $tampil['email']; ?></td>
												<td><?php echo $tampil['username']; ?></td>
												<td><a href="edit_akun.php?id=<?php echo $_SESSION['user']['id_login']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i></a></td>
												<td><a href="hapus_akun.php?id=<?php echo $_SESSION['user']['id_login']; ?>" class="ask" onclick="return confirm('anda yakin akan menghapus data <?php echo $_SESSION['user']['nama']; ?>?');"><button class="btn btn-danger btn-xs" > <i class="fa fa-trash-o" title="Hapus"></i></button></a></td>
												
											</tr> 
											<?php }; ?>  
										</tbody>
									</table>
								</div>
							</div>
							<a href="tambah_akun.php"><button><font color="black">Tambahkan Akun</font></button></a>
						</div>
					</div>


    </div>
    <?php include("../footer"); ?>  