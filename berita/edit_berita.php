<?php include("nav_top2.php") ?>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">BERITA</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-success">
                        <div class="panel-heading" align="center">
                          <h4>Ubah Berita</h4>
                        </div>
						<?php
					include ('../koneksi.php');
					$id_berita = $_GET['id'];
					$sql = "SELECT * FROM berita WHERE ID_BERITA='$id_berita'";
					$hasil = mysql_query($sql);
					while ($post = mysql_fetch_array($hasil)){			
				  ?>
                        <div class="panel-body">
                            <form role="form" method="post" action="proses_edit_berita.php" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label>Judul</label>
									<input type="hidden" name="id" value="<?php echo $id_berita; ?>">
                                    <input class="form-control" type="text" name="JUDUL" value="<?php echo $post['JUDUL'];?>" required="required">
                                </div>
								<div class="form-group">
                                    <label>Deskripsi Berita</label>
                                    <textarea class="form-control" rows="5" name="ISI" required="required"><?php echo $post['ISI'];?></textarea>
                                </div>
								<div class="form-group">
                                    <label>Gambar</label>
                                    <img style="width:250px;height:150px" <?php  echo '<img src="../../images/'. $post['GAMBAR'] .'">';?>
                                    <input class="form-control" type="file" name="gambar" style="width:30%">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Post</label>
                                    <input class="form-control" type="date" name="TANGGAL" value="<?php echo $post['TANGGAL'];?>" required="required">
                                </div>
								<div align="center">
								<button type="submit" name="submit" class="btn btn-success">Simpan</button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
								</div>
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_berita.php" class="bt_green"><strong>Kembali ke data berita...</strong></a></div>
						<?php } ?>
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
	<script src="../assets/js/bootstrap-fileupload.js"></script>
</body>
</html>
