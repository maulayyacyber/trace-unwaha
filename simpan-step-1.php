<?php
/* set session */
session_start();
$_SESSION['nama'] 		= $_POST['nama'];
$_SESSION['prodi']		= $_POST['prodi'];
$_SESSION['lulus']		= $_POST['tahunlulus'];
$_SESSION['nim']		= $_POST['nim'];
$_SESSION['alamat']		= $_POST['alamat'];
$_SESSION['hp']			= $_POST['phoneHP'];
$_SESSION['email']		= $_POST['email'];
$_SESSION['kerja']		= $_POST['kerja'];
	//checking instansi
	if($_POST['kerja'] == 'a')
	{

		//redirect
		header("location:step-2A");

	}elseif($_POST['kerja'] == 'b'){
		
		//redirect
		header("location:step-2B");

	}else{
		
		//redirect
		header("location:umpan-balik");
	}

?>