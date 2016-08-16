<?php
//session start
session_start();
	
/* get session angket 2A */
	$_SESSION['lamanunggukerja'] 		= $_POST['menunggukerja'];
	$_SESSION['namaperusahaan']			= $_POST['namaperusahaan'];
	$_SESSION['bentukperusahaan']		= $_POST['bentukperusahaan'];
	$_SESSION['bidangpekerjaanIT']		= $_POST['perusbidangIT'];
	$_SESSION['bidangpekerjaannonIT']	= $_POST['perusbidangnonIT'];
	$_SESSION['jabatan']				= $_POST['jabatanpertama'];
	$_SESSION['income']					= $_POST['income'];

	header("location:umpan-balik");

?>