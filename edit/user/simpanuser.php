<?php
	include "../../config/config.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$status=$_POST['status'];
	$cabang=$_POST['cabang'];
	$kota=$_POST['kota'];


	$query="INSERT INTO login(username,password,nama,status,cabang,kota) VALUES('".$username."','".$password."','".$nama."','".$status."','".$cabang."','".$kota."')";
	
	$query2="INSERT INTO angket(namapengisi, pengisian) VALUES ('".$nama."','Belum Mengisi')";
	mysql_query($query2);
	mysql_query($query);

	header("location:tampiluser.php");
?>