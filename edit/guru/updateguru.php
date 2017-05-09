<?php
	include "../../config/config.php";

	$no=$_POST['no'];
	$nama=$_POST['nama'];
	$status=$_POST['status'];
	$key=$_POST['id'];

	$query="update guru set no='$no', nama='$nama', status='$status' where no='$key'";
	mysql_query($query);
	mysql_close();
	
	header("Location:tampilguru.php");
?> 