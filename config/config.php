<?php
	SESSION_START();
	$hostname_koneksi = "localhost";
	$database_koneksi = "db_ypii";
	$username_koneksi = "root";
	$password_koneksi = "";
	$koneksi=mysql_connect($hostname_koneksi,$username_koneksi,$password_koneksi);
	mysql_select_db($database_koneksi,$koneksi);
?>