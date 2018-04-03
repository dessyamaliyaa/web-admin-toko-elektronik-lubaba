<?php include 'nav_top3.php';?>
        </nav>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">About</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-success">
                        <div class="panel-heading" align="center">
                          <h4>Ubah Tentang</h4>
                        </div>
						<?php
					include ('../koneksi.php');
					$id = $_GET['id'];
					$sql = "SELECT * FROM about WHERE id_about='$id'";
					$hasil = mysql_query($sql);
					$post = mysql_fetch_array($hasil);		
						?>
                        <div class="panel-body">
                            <form role="form" method="post" action="proses_edit_about.php" enctype="multipart/form-data">
								<div class="form-group">
                                    <label>Logo</label>
									<input type="hidden" name="id" value="<?php echo $id_about; ?>">
                                    <input class="form-control" type="text" name="logo" value="<?php echo $post['logo'];?>" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Sejarah</label>
                                    <textarea style="height: 200px;"class="form-control" type="text" name="sejarah" required="required"><?php echo $post['sejarah_lubaba'];?> </textarea>
                               </div>
                            <div class="form-group">
                                    <label>Visi</label>
                                    <textarea class="form-control" type="text" name="visi" required="required"><?php echo $post['visi_lubaba'];?> </textarea>
                               </div>
                            <div class="form-group">
                                    <label>Misi</label>
                                    <textarea class="form-control" type="text" name="misi" required="required"><?php echo $post['misi_lubaba'];?> </textarea>
                               </div>
								<div align="center">
								<button type="submit" name="submit" class="btn btn-success">Simpan</button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
								</div>
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_about.php" class="bt_green"><strong>Kembali ke data Tentang...</strong></a></div>
                    </div>
				</div>
			</div>
    </div>
    <?php include 'bottom.php';?>