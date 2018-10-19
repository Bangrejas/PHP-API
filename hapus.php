<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM data WHERE id='$id'");
	header("location:main.php");

 ?>