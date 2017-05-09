<?php
	include "../../config/config.php";

	$nama=$_POST['nama'];
	$kota=$_POST['kota'];
	$status=$_POST['status'];
	$key=$_POST['id'];

	$query="update cabang set nama='$nama', kota='$kota', status='$status' where nama='$key'";
	mysql_query($query);
	mysql_close();
	
	header("Location:tampilcabang.php");
?> 