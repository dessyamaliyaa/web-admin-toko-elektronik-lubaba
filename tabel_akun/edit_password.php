<?php include("nav_top.php") ?>
	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-head-line">DATA AKUN</h1>
				</div>
			</div>
			<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="panel panel-success">
                        <div class="panel-heading" align="center">
                           <h4>Form Edit Password</h4>
                        </div>
						<?php
					include ('../koneksi.php');
					$id_login = $_GET['id'];
					$sql = "SELECT * FROM tb_login WHERE id_login='$id_login'";
					$hasil = mysql_query($sql);
					$post = mysql_fetch_array($hasil)			
				  ?>
                        <div class="panel-body" align="center">
                            <form role="form" action="proses_edit_password.php" method="post" class="">
                                
								<div class="form-group">
									<label class="control-label col-md-4">Password Lama</label>
									<div class="col-md-7">
									<input type="hidden" name="id" value="<?php echo $id_login; ?>">
									  <input type="password" name="password" value="<?php echo $post['password'];?>" class="form-control">
									</div>
								</div><br><br>
								
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
							</form>
                        </div>
                    </div>
					<div align="right"><a href="data_akun.php" class="bt_green"><strong>Kembali ke tabel akun...</strong></a></div>
                </div>
		</div>
	</div>
    </div>
      <?php include("../footer"); ?>