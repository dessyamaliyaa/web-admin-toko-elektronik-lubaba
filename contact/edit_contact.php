<?php include 'top.php';?>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">Kontak</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-success">
                        <div class="panel-heading" align="center">
                          <h4>Ubah Kontak</h4>
                        </div>
						<?php
					include ('../koneksi.php');
					
					$id = $_GET['id'];
					$sql = "SELECT * FROM contact where id_contact='$id'";
					$hasil = mysql_query($sql);
					$post = mysql_fetch_array($hasil);			
						?>
                        <div class="panel-body">
                            <form role="form" method="post" action="proses_edit_contact.php" enctype="multipart/form-data">
								<div class="form-group">
                                    <label>Lokasi</label>
									<input type="hidden" name="id" value="<?php echo $post['id_contact']; ?>">
                                    <textarea class="form-control" type="text" name="lokasi" required="required"><?php echo $post['lokasi'];?> </textarea>
                                </div>
								<div class="form-group">
                                    <label>Email</label>
									<input class="form-control" type="text" name="email" value="<?php echo $post['email'];?>" required="required">
                                </div>
                                 
								<div class="form-group">
                                    <label>No.Hp</label>
                                    <input class="form-control" type="text" name="no_hp" value="<?php echo $post['no_hp'];?>" required="required">
                                </div>
                                
								<div align="center">
								<button type="submit" name="submit" class="btn btn-success">Simpan</button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
								</div>
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_contact.php" class="bt_green"><strong>Kembali ke data Kontak...</strong></a></div>
                    </div>
				</div>
			</div>
    </div>
    <?php include 'bottom.php'?>
