<?php 
session_start();
if(empty($_SESSION['username'])){

	header("location:/");

}else{

	include("../../library/environment.php");
	include ("../../library/database.php");

	$id = $_GET['id'];

		$s = mysqli_query($connect, "SELECT * FROM tbl_trace WHERE id_register = '$id'");
		
		$row = mysqli_fetch_array($s);
		
		$strhtml .= '<div class="container">';
		$strhtml .= '<div class="col-md-12">';
		$strhtml .= '<div class="col-md-4">nama : <div class="col-md-8">'.$row['nama'].'';
		$strhtml .= '<div class="col-md-4">nim : <div class="col-md-8">'.$row['nim'].'';
		$strhtml .= '</div>';
		$strhtml .= '</div>';


	// Panggil mPdf
	require ("../../library/mpdf60/mpdf.php");

	$stylesheet = file_get_contents(array('../../css/bootstrap.min.css','../../css/custom.css','',''));
	//$fileName = '"'.$row['nama'].'"' . date('d-m-Y') . '-' . date('h.i.s');

	$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->WriteHTML($stylesheet,1);
	$mpdf->WriteHTML($strhtml);
	$mpdf->Output();

	}
?>