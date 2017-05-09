<?php
	include "../../config/config.php";

	$nama=$_POST['nama'];
	$kota=$_POST['kota'];
	$status=$_POST['status'];


	$query="INSERT INTO cabang(nama,kota,status) VALUES('".$nama."','".$kota."','".$status."')";
	mysql_query($query);
	mysql_close();

	header("location:tampilcabang.php");
?>