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
                           <h4>Form Edit Akun</h4>
                        </div>
						<?php
					include ('../koneksi.php');
					$id_login = $_GET['id'];
					$sql = "SELECT * FROM tb_login WHERE id_login = '$id_login'";
					$hasil = mysql_query($sql);
					$post = mysql_fetch_array($hasil)			
				  ?>
                        <div class="panel-body" align="center">
                            <form role="form" action="proses_edit_akun.php" method="post" class="">
                                <div class="form-group">
									<label class="control-label col-md-4">Nama</label>
									<div class="col-md-7">
									<input type="hidden" name="id" value="<?php echo $id_login; ?>">
									  <input type="text" name="nama" placeholder="Masukkan Nama Anda" value="<?php echo $post['nama'];?>" class="form-control" >
									</div>
								</div><br><br>
								<div class="form-group">
									<label class="control-label col-md-4">Email</label>
									<div class="col-md-7">
									  <input type="text" name="email" placeholder="Masukkan Email" value="<?php echo $post['email'];?>" class="form-control">
									</div>
								</div><br><br>
								<div class="form-group">
									<label class="control-label col-md-4">Username</label>
									<div class="col-md-7">
									  <input type="text" name="username" placeholder="Masukkan Username" value="<?php echo $post['username'];?>" class="form-control">
									</div>
								</div><br><br>
								
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
							</form>
							<div align="right"><a href="edit_password.php?id=<?php echo $_SESSION['user']['id_login']; ?>" >Ganti password</a></div>
                        </div>
                    </div>
					<div align="right"><a href="data_akun.php" class="bt_green"><strong>Kembali ke tabel akun...</strong></a></div>
                </div>
		</div>
	</div>
    </div>
   <?php include("../footer"); ?>