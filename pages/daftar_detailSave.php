<?php
	include"../assets/config/conn.php";
	include"../assets/config/library.php";
	
	ini_set("display_errors","Off");
	$nama		= addslashes(trim(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
	$jurusan	= $_POST['jurusan'];
	$alamat		= addslashes(trim(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
	$pekerjaan	= addslashes(trim(htmlspecialchars($_POST['pekerjaan'], ENT_QUOTES)));
	$telp		= addslashes(trim(htmlspecialchars($_POST['telp'], ENT_QUOTES)));
	$bbm		= addslashes(trim(htmlspecialchars($_POST['bbm'], ENT_QUOTES)));
	$facebook	= addslashes(trim(htmlspecialchars($_POST['facebook'], ENT_QUOTES)));
	$pesanKesan	= addslashes(trim(htmlspecialchars($_POST['pesanKesan'], ENT_QUOTES)));
	
	if($jurusan=='TKJ'){
		$foto	= 'jurusanTkj.png';
	}else if($jurusan=='Mesin'){
		$foto	= 'jurusanMesin.png';
	}else if($jurusan=='Otomotif'){
		$foto	= 'jurusanOtomotif.png';
	}else if($jurusan=='Akuntansi'){
		$foto	= 'jurusanAkuntansi.png';
	}else if($jurusan=='APK'){
		$foto	= 'jurusanApk.png';
	}
	
	mysql_query("INSERT INTO alumni (idAlumni, nama, jurusan, alamat, telp, bbm, facebook, pekerjaan, pesanKesan, foto)
		VALUES ('', '$nama', '$jurusan', '$alamat', '$telp', '$bbm', '$facebook', '$pekerjaan', '$pesanKesan', '$foto')");
?>