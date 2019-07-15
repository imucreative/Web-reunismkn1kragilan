<?php
	$qAlumniModal = mysql_query("SELECT * FROM alumni");
		while($dAlumniModal = mysql_fetch_array($qAlumniModal)){
			$idAlumniModal			= $dAlumniModal['idAlumni'];
			$namaAlumniModal		= $dAlumniModal['nama'];
			$jurusanAlumniModal		= $dAlumniModal['jurusan'];
			$alamatAlumniModal		= $dAlumniModal['alamat'];
			$telpAlumniModal		= $dAlumniModal['telp'];
			$bbmAlumniModal			= $dAlumniModal['bbm'];
			$facebookAlumniModal	= $dAlumniModal['facebook'];
			$pekerjaanAlumniModal	= $dAlumniModal['pekerjaan'];
			$pesanKesanAlumniModal	= $dAlumniModal['pesanKesan'];
			$fotoAlumniModal		= $dAlumniModal['foto'];
?>
<div class="info-modal modal fade" id="<?php echo $idAlumniModal; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr">
				<div class="rl"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-16">
					<div class="modal-body">
						<h2><?php echo $namaAlumniModal; ?></h2>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<img width="" class="img-responsive img-centered" src="assets/images/member/<?php echo $fotoAlumniModal; ?>" alt="<?php echo $fotoAlumniModal; ?>" />
						</div>
						<p class="item-intro text-muted" align='justify'>
							Nama: <?php echo $namaAlumniModal; ?><br/>
							Jurusan: <?php echo $jurusanAlumniModal; ?><br/>
							Alamat: <?php echo $alamatAlumniModal; ?><br/>
							Pekerjaan: <?php echo $pekerjaanAlumniModal; ?><br/>
							No. Telp: <?php echo $telpAlumniModal; ?><br/>
							Pin BBM: <?php echo $bbmAlumniModal; ?><br/>
							Facebook: <?php echo $facebookAlumniModal; ?><br/>
							Pesan Kesan selama di Sekolah: <?php echo $pesanKesanAlumniModal; ?><br/>
						</p>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
		</div>
	</div>
</div>
<?php
		}
?>