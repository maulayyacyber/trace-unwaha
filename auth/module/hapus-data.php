<?php

include "../library/environment.php";
include "../library/database.php";

$id=$_GET['id'];


$query = "DELETE FROM tbl_trace WHERE id_register='$id'";

if ($connect->query($query) === TRUE) {

	header("location:media.php?ref=data-trace");

} else {

	header("location:media.php?ref=data-trace");
}


?>