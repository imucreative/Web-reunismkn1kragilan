<section class="pfblock " id="acara">
	<div class="container">
		<div class="row skills">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Acara Reuni Akbar</h2>
							<div class="pfblock-line"></div>
					</div>
				</div>
			</div><!-- .row -->

			<div class="row">
			<?php
				$qAcara = mysql_query("SELECT * FROM acara");
					while($dAcara = mysql_fetch_array($qAcara)){
						$judulAcara	= $dAcara['judul'];
						$isiAcara	= $dAcara['isi'];
			?>
						<div class="col-sm-3">
							<div class="iconbox wow fadeInUp">
								<div class="iconbox-text">
									<h3 class="iconbox-title"><?php echo $judulAcara; ?></h3>
									<div class="iconbox-desc">
										<?php echo $isiAcara; ?>
									</div>
								</div>
							</div>
						</div>
			<?php
					}
			?>
			</div><!-- .row -->
		</div><!--End row -->
	</div>
</section>