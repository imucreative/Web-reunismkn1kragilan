<section id="testimonials" class="pfblock pfblock-gray">
	<div class="container">
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="pfblock-header wow fadeInUp">
					<h2 class="pfblock-title">Pesan & Kesan Alumni</h2>
						<div class="pfblock-line"></div>
				</div>
			</div>
		</div><!-- .row -->

		<div class="row">
			<div id="cbp-qtrotator" class="cbp-qtrotator">
				
				<?php
					$qPesan = mysql_query("SELECT * FROM alumni WHERE status_display='1'");
					while($dPesanAlumni = mysql_fetch_array($qPesan)){
						$idAlumni			= $dPesanAlumni['idAlumni'];
						$namaAlumni			= $dPesanAlumni['nama'];
						$jurusanAlumni		= $dPesanAlumni['jurusan'];
						$fotoAlumni			= $dPesanAlumni['foto'];
						$pesanKesanAlumni	= $dPesanAlumni['pesanKesan'];
				?>
				<div class="cbp-qtcontent">
					<img width='100' src="assets/images/member/<?php echo $fotoAlumni; ?>" alt="<?php echo $namaAlumni; ?>" />
					<blockquote>
						<p><?php echo $pesanKesanAlumni;?></p>
						<footer><?php echo $namaAlumni."&nbsp;";?>[<?php echo $jurusanAlumni ;?>]</footer>
					</blockquote>
				</div>
				<?php
					}
				?>
			</div>		
		</div><!-- .row -->

	</div><!-- .row -->
</section>