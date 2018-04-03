

        <!-- NAV TOP AND HEADER -->
        <?php include("nav_top.php") ?>

        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
            <div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-head-line">HOME</h1>
						<div class="page-subhead-line"><h1>Selamat datang, <?php echo $_SESSION['user']['nama']; ?></h1></div>
					</div>
				</div>
				<div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
								<div id="reviews" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
                                        <div class="item active">
											<div class="col-md-10 col-md-offset-1">
                                                <h4><i class="fa fa-quote-left"></i>Luababa electronic toko electronic yang menyediakan berbagai laptop dan gatget berkwalitas dan terjangkau. <i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="images/logo.png" alt="" class="img-u image-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">
                                                <h4><i class="fa fa-quote-left"></i>Hanya di lubaba anda akan dengan mudah mencari barang yang sesuai dengan keinginan anda<i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="images/logo.png" alt="" class="img-u image-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-10 col-md-offset-1">
                                                <h4><i class="fa fa-quote-left"></i>Lubaba kajen Jl. Mandurorejo Kajen, Nyamok, Kajen, Pekalongan, Jawa Tengah 51161<i class="fa fa-quote-right"></i></h4>
                                                <div class="user-img pull-right">
                                                    <img src="images/logo.png" alt="" class="img-u image-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>
                                        <li data-target="#reviews" data-slide-to="2"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
   

        <!-- FOOTER -->
        <?php include("footer.php") ?>