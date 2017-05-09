<?php
	include "../../config/config.php";

	$no=$_POST['no'];
	$soal=$_POST['soal'];
	$status=$_POST['status'];

	$query="INSERT INTO soal(no,soal,status) VALUES('".$no."','".$soal."','".$status."')";
	
	mysql_query($query);

	header("location:tampilsoal.php");
?>