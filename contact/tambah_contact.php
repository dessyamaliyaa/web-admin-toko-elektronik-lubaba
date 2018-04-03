<?php include 'nav_top1.php';?>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">Contact</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-info">
                        <div class="panel-heading">
                           Tambah Contact
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="proses_tambah_contact.php" enctype="multipart/form-data">
								<div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name="email" required="required">
                                </div>
								<div class="form-group">
                                    <label>No.Hp</label>
                                    <input class="form-control" type="text" name="no_hp" required="required">
                                </div>
								<div align="center">
								<button type="submit" class="btn btn-success">Simpan </button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
								</div>
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_contact.php" class="bt_green"><strong>Kembali ke data Contact...</strong></a></div>
                    </div>
				</div>
			</div>
    </div>
    <?php include 'bottom.php';?>