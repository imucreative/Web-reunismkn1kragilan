<section id="reviewAlumni" class="pfblock">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="pfblock-header wow fadeInUp">
					<h2 class="pfblock-title">Daftar Alumni</h2>
					<div class="pfblock-line"></div>
					<div class="pfblock-subtitle">
						Berikut Alumni yang sudah mendaftarkan diri untuk mengikuti Reuni Akbar 2016 SMKN 1 Kragilan
					</div>
				</div>
			</div>
		</div><!-- .row -->

		<div class="categories">
			<ul class="cat">
				<li class="pull-right">
					<ol class="type">
						Jurusan: 
						<li><a data-toggle="portfilter" data-target="all">All</a></li>
						<li><a data-toggle="portfilter" data-target="TKJ">TKJ</a></li>
						<li><a data-toggle="portfilter" data-target="Mesin">Mesin</a></li>
						<li><a data-toggle="portfilter" data-target="Otomotif">Otomotif</a></li>
						<li><a data-toggle="portfilter" data-target="Akuntansi">Akuntansi</a></li>
						<li><a data-toggle="portfilter" data-target="APK">APK</a></li>
					</ol>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		
		<div id="lightbox" class="row">
			<?php
				$qAlumni = mysql_query("SELECT * FROM alumni WHERE status_display='1' ORDER BY nama ASC, idAlumni DESC");
					while($dAlumni = mysql_fetch_array($qAlumni)){
						$idAlumni			= $dAlumni['idAlumni'];
						$namaAlumni			= $dAlumni['nama'];
						$jurusanAlumni		= $dAlumni['jurusan'];
						$fotoAlumni			= $dAlumni['foto'];
						
			?>
			<div class="col-xs-12 col-sm-3 col-md-3" data-tag='<?php echo $jurusanAlumni; ?>'>
				<div class="grid wow zoomIn">
					<figure class="effect-bubba">
						<a href="#<?php echo $idAlumni; ?>" class="info-link" data-toggle="modal">
							<img  src="assets/images/member/<?php echo $fotoAlumni; ?>" alt="<?php echo $fotoAlumni; ?>"/>
							<figcaption>
								<h2><span><?php echo $namaAlumni; ?></span></h2>
								<p><?php echo $jurusanAlumni; ?></p>
							</figcaption>
						</a>
					</figure>
				</div>
			</div>
			<?php
					}
			?>
		</div>
		
		
	</div><!-- .contaier -->
</section>