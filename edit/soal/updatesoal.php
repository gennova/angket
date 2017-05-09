<?php
	include "../../config/config.php";

	$no=$_POST['no'];
	$soal=$_POST['soal'];
	$status=$_POST['status'];
	$key=$_POST['id'];

	$query="update soal set no='$no', soal='$soal', status='$status' where soal='$key'";
	mysql_query($query);
	mysql_close();
	
	header("Location:tampilsoal.php");
?> 