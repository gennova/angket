<?php
	include "../../config/config.php";

	$no=$_POST['no'];
	$nama=$_POST['nama'];
	$status=$_POST['status'];


	$query="INSERT INTO guru(no,nama,status) VALUES('".$no."','".$nama."','".$status."')";
	mysql_query($query);
	mysql_close();

	header("location:tampilguru.php");
?>