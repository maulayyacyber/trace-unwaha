<?php  
include "../../library/environment.php";
include "../../library/database.php";

$id 	  = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama	  = $_POST['nama'];
$email    = $_POST['email'];

$query = "UPDATE tbl_user SET username = '$username', pass = MD5('$password'), nama = '$nama', email = '$email' WHERE id_user = '$id'";

if ($connect->query($query) === TRUE) {

	session_destroy();
	session_start();

	$_SESSION['id_user']  = $id ;
	$_SESSION['username'] = $username ;
	$_SESSION['password'] = md5($password) ;
	$_SESSION['nama']     = $nama ;
	$_SESSION['email']    = $email ;

	header("location:../media.php?ref=profile");

} else {

	echo "gagal update";
	
}



?>