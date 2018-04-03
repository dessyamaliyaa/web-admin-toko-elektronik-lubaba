
        <!-- NAV TOP AND HEADER -->
        <?php include("nav_top.php") ?>
        
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">Karir</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-success">
                        <div class="panel-heading" align="center">
                          <h4>Ubah Karir</h4>
                        </div>
						<?php
					include '../koneksi.php';
					$id_carier = $_GET['id'];
					$sql = "SELECT * FROM carier WHERE ID_CARIER='$id_carier'";
					$hasil = mysql_query($sql);
					$post = mysql_fetch_array($hasil)			
				  ?>
                        <div class="panel-body">
                            <form role="form" method="post" action="proses_edit_carier.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="hidden" name="id" value="<?php echo $id_carier; ?>">
                                    <input class="form-control" type="text" name="jabatan" value="<?php  echo $post['JABATAN'];?>" required="required">
                                </div>
								<div class="form-group">
                                    <label>Requirement</label>
                                    <textarea class="form-control" rows="5" name="des_carier" value="" required="required"><?php  echo $post['REQUIREMENT'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Akhir Pendaftaran</label>
                                    <input class="form-control" type="date" name="akhir_req" value="<?php  echo $post['AKHIR_REQ'];?>" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Gaji</label>
                                   <input type="text" class="form-control" name="gaji" value="<?php  echo $post['GAJI'];?>"  required="required">
                                </div>
                                <div class="form-group">
                                    <label>Jenjang</label>
                                    <select class="form-control" name="jenjang" value="" required="required">
                                        <option value="<?php  echo $post['JENJANG'];?>"><?php  echo $post['JENJANG'];?></option>
                                        <option value="s1">S1</option>
                                        <option value="d3">D3</option>
                                        <option value="sma / smk">SMA/SMK</option>
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Post</label>
                                    <input class="form-control" type="date" name="tanggal" value="<?php echo $post['DATE_POST'];?>" required="required">
                                </div>
								<div align="center">
								<button type="submit" class="btn btn-success">Simpan </button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
								</div>
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_carier.php" class="bt_green"><strong>Kembali ke data carier...</strong></a></div>
                    </div>
				</div>
			</div>
    </div>
               <!-- FOOTER -->
        <?php include("../footer.php") ?>