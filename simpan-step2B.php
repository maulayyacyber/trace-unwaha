<?php 
session_start();

/* get session angket 2B */
	$_SESSION['jenisperusahaan'] 	= $_POST['jenisusaha'];
	$_SESSION['bidangperusahaan']	= $_POST['bidangusaha'];
	$_SESSION['mendirikanusaha']	= $_POST['mendirikanusaha'];
	$_SESSION['jumlahkaryawan']		= $_POST['jumlahkaryawan'];
	$_SESSION['aset']				= $_POST['aset'];
	
	header("location:umpan-balik");
 ?>