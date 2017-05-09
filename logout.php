<?php
	SESSION_START();
	unset($_SESSION['login']);
	header("location:index.php");
?>