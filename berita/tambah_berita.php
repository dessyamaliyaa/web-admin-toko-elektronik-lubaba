<?php include("nav_top2.php") ?>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">BERITA DAN EVENT</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-info">
                        <div class="panel-heading">
                           Tambah Berita
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="proses_tambah_berita.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input class="form-control" type="text" name="JUDUL" required="required">
                                </div>
								<div class="form-group">
                                    <label>Deskripsi Berita</label>
                                    <textarea class="form-control" rows="5" name="ISI" required="required"></textarea>
                                </div>
								<div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="GAMBAR">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Post</label>
                                    <input class="form-control" type="date" name="TANGGAL" required="required">
                                </div>
								<div align="center">
								<button type="submit" class="btn btn-success">Simpan </button> &nbsp
								<button type="reset" class="btn btn-danger">Batal </button>
								</div>
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_berita.php" class="bt_green"><strong>Kembali ke data berita...</strong></a></div>
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
