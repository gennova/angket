<?php
	include "../../config/config.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$status=$_POST['status'];
	$cabang=$_POST['cabang'];
	$kota=$_POST['kota'];
	$key=$_POST['id'];

	$query="update login set username='$username', password='$password', nama='$nama', status='$status', cabang='$cabang', kota='$kota' where nama='$key'";
	mysql_query($query);
	mysql_close();
	
	header("Location:tampiluser.php");
?> 