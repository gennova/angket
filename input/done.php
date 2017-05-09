<?php
	include "../config/config.php";
	if(empty($_SESSION['login'])){
		header("location:../index.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Angket Pembelajaran YPII</title>
	<link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body background="../images/background.jpg">
	<div class="top">
	<ul>
	<?php
		if($_SESSION['ceklogin']=='Admin'){
		echo "<li><a href='input.php'>Input</a></li>
			<li><a href='../edit/edit.php'>Edit</a></li>
			<li style='border-right: 1px solid #fff'><a href='../report/report.php'>Report</a></li>";
		}
	?>
	<li style='float:right'><a href='../logout.php'>Logout</a></li></ul>
	</div>
	<div class="container"><br><br><br>
	  <div class="header2">
		<center><h2>Angket Pembelajaran</h2></center> 
	  </div>
	<div class="content">
		<br><br><br><br><br><br><br>
		<p style="font-size:150%;" align='center'>Terimakasih sudah mengisi Angket Pembelajaran.<br><br>Jika ada masalah terkait program ini,silahkan kontak Administrator Sekolah</p>
	</div>
	</div>
	<div class="back_footer2">
		<b>&copy; 2020 | YPII </b>
	</div>
</body>
</html>
</body>
</html>