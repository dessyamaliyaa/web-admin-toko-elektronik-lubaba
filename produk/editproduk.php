
<?php include 'top.php';?>		
<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">PRODUK</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-success">
                        <div class="panel-heading" align="center">
                          <h4>Ubah Produk</h4>
                        </div>
						<?php
					include "../koneksi.php";
					
					$detail=$_GET['id'];
					$query = "select * from produk a, kategori b"." where a.id='".$detail."' and a.kategori=b.idkategori";
					$sql = mysql_query($query); // Eksekusi / Jalankan query dari var query
					while($row = mysql_fetch_array($sql))
							{	
				  ?>
                        <div class="panel-body">
                            <form role="form" method="post" action="proses_edit_produk.php" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label>Nama</label>
									<input type="hidden" name="id" value="<?php  echo $row['id'];?>">
                                    <input class="form-control" type="text" name="nama" value="<?php  echo $row['nama'];?>" required="required">
                                </div>
								<div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" required="required" class="form-control" >
										<option value="<?php echo $row['kategori']?>" /><?php echo $row['kategori'].'-'.$row['namakategori']?>
									<?php
										$sql = mysql_query("select * from kategori")
										or die("Error Query : ".mysql_error());
										while($data = mysql_fetch_array($sql)){
									?>
										<option value="<?php echo $data['idkategori']?>" /><?php echo $data['idkategori'].'-'.$data['namakategori']?>
									
										<?php } ?>
									</select>
                                </div>
								<div class="form-group">
                                    <label>Spesifikasi</label>
                                    <textarea class="form-control" rows="5" name="spek" required="required"><?php  echo $row['spek'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" type="text" name="harga" value="<?php  echo $row['harga'];?>" required="required">
                                </div>
								<div class="form-group">
                                    <label>Gambar</label><br>
									<img style="width:250px;height:150px" <?php  echo '<img src="../../images/'. $row['gambar'] .'">';?>
                                    <input class="form-control" type="file" name="gambar" style="width:30%">
                                </div>
								
								<div align="center">
								<button type="submit" name="submit" class="btn btn-success">Simpan</button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
								</div>
								
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_produk.php" class="bt_green"><strong>Kembali ke data produk...</strong></a></div>
                    <?php
							}
							?>
					</div>
				</div>
			</div>
    </div>
    <?php include 'bottom.php'?>
