<?php
	include "../../config/config.php";

	$nama=$_POST['nama'];
	$status=$_POST['status'];
	$key=$_POST['id'];

	$query="update matpel set nama='$nama', status='$status' where nama='$key'";
	mysql_query($query);
	mysql_close();

	header("Location:tampilmapel.php");
?> 