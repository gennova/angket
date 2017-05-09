<?php
	include "../../config/config.php";
	
	$nama=$_POST['nama'];
	$status=$_POST['status'];

	$query="INSERT INTO matpel(nama,status) VALUES('".$nama."','".$status."')";
	mysql_query($query);
	mysql_close();

	header("location:tampilmapel.php");
?>