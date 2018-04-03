<?php include 'nav_top3.php'?>
										<?php
											include('../koneksi.php');
											$batas = 5;
											if(isset($_GET['page']))
												{
												$halaman = $_GET['page'];
												}
												else $halaman = 1;
												$start = ($halaman - 1) * $batas;
														
											$i = $start+0;
											$query = "SELECT * FROM about order by id_about desc LIMIT $start, $batas";
											$hasil = mysql_query($query);
											while ($tampil = mysql_fetch_array($hasil)) {
												$i++;
										?>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="box">
						<div class="box-header">
						  <h3 class="box-title" align="center">Tentang</h3>
						</div>
						<div class="box-body">
						 
							<thead bgcolor=" #007BB6" align="center">
							<div class="form-group">
							<label>Logo</label><br>
							<?php echo '<img style="width:200px;height:90px" src="../../images/'. $tampil['logo'] .'">';?>
							</div>
							<div class="form-group">
                                    <label>Sejarah</label>
                                    <textarea readonly style="height: 200px;"class="form-control" type="text" name="sejarah" required="required"><?php echo $tampil['sejarah_lubaba'];?> </textarea>
                               </div>
							<div class="form-group">
                                    <label>Visi</label>
                                    <textarea readonly class="form-control" type="text" name="visi" required="required"><?php echo $tampil['visi_lubaba'];?> </textarea>
                               </div>
							<div class="form-group">
                                    <label>Misi</label>
                                    <textarea readonly class="form-control" type="text" name="misi" required="required"><?php echo $tampil['misi_lubaba'];?> </textarea>
                               </div>
							</thead>
							
							<tr>				
							<td><a href="edit_about.php?id=<?php echo $tampil['id_about']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i></a></td>
							</tr> 
										<?php }; ?>
										
							<tbody>
							</body>
						  </table>
						  <div align="right">
						  
						</div>
						</div>
						
					 </div>
				</div>
			</div>
    </div>
    <?php include 'bottom.php';?>