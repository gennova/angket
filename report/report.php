<?php
	include "../config/config.php";
	if(empty($_SESSION['login'])){
		header("location:../index.php");
	}
	
	if ($_SESSION['pengisian']=='Sudah Mengisi' && $_SESSION['ceklogin']=='User') {
		header("location:../input/done.php");
	}
	else if($_SESSION['pengisian']=='Belum Mengisi' && $_SESSION['ceklogin']=='User') {
		header ("location:../input/input.php");
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
			echo "<li><a href='../input/input.php'>Input</a></li>
		<li><a href='../edit/edit.php'>Edit</a></li>
		<li style='border-right: 1px solid #fff'><a href='report.php'>Report</a></li>";
		}
	?>
	<li style="float:right"><a href="../logout.php">Logout</a></li>
	</ul>
	</div>
	<div class="container"><br><br><br>
	  <div class="header2">
		<center><h2>Report</h2></center> 
	  </div>
		<div class="content">
			<fieldset>Hasil Angket		<a href='hasil/hasil.php'><input style='float:right; width:100px;' type='button' value='Go'/></a></fieldset><br><br>
			<fieldset>Hasil Angket Rekap Per Guru		<a href='hasil/hasil.php'><input style='float:right; width:100px;' type='button' value='Go'/></a></fieldset><br><br>
			<fieldset>Cek Siswa  		<a href='ceksiswa/ceksiswa.php'><input style='float:right; width:100px;' type='button' value='Go'/></a></fieldset><br><br>
		</div>
	</div>
	<div class="back_footer2">
		<b>&copy; 2020 | YPII </b>
	</div>
</body>
</html>
</body>
</html>