<section id="undangan" class="pfblock pfblock-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="pfblock-header wow fadeInUp">
					<h2 class="pfblock-title">Undangan Reuni Akbar</h2>
					<div class="pfblock-line"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="pfblock-header wow fadeInUp">
					<div class="pfblock-subtitle">
						Kami panitia reuni mengharapkan kehadiran dan partisipasi teman-teman semua, agar reuni ini dapat berjalan dengan lancar dan sukses. <br/>Atas perhatian dan kerjasamanya, kami ucapkan terima kasih banyak.
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
				$qUndangan = mysql_query("SELECT * FROM undangan");
					while($dUndangan = mysql_fetch_array($qUndangan)){
						$judulUndangan	= $dUndangan['judul'];
						$isiUndangan	= $dUndangan['isi'];
						$iconUndangan	= $dUndangan['icon'];
			?>
						<div class="col-sm-3">
							<div class="iconbox wow fadeInUp">
								<div class="iconbox-icon">
									<span class="<?php echo $iconUndangan; ?>"></span>
								</div>
								<div class="iconbox-text">
									<h3 class="iconbox-title"><?php echo $judulUndangan; ?></h3>
									<div class="iconbox-desc">
										<?php echo $isiUndangan; ?>
									</div>
								</div>
							</div>
						</div>
			<?php
					}
			?>
		</div><!-- .row -->
	</div><!-- .container -->
</section>