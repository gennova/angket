<?php
	include "../../config/config.php";

	$key=$_GET['idcontent'];

	$query="update matpel set status='Tidak Aktif' where nama='$key'";
	mysql_query($query);
	mysql_close();
	
	header("location:tampilmapel.php");
?> 