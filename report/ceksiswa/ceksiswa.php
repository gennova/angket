<?php
	include "../../config/config.php";
	if(empty($_SESSION['login'])){
		header("location:../../index.php");
	}
	
	if ($_SESSION['pengisian']=='Sudah Mengisi' && $_SESSION['ceklogin']=='User') {
		header("location:../../input/done.php");
	}
	else if($_SESSION['pengisian']=='Belum Mengisi' && $_SESSION['ceklogin']=='User') {
		header ("location:../../input/input.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Angket Pembelajaran YPII</title>
	<link rel="stylesheet" href="../../css/style.css">
	<script type="text/javascript" src="../../js/jquery.js"></script>
</head>
<body background="../../images/background.jpg">
	<div class="top">
	<ul>
	<?php
		if($_SESSION['ceklogin']=='Admin'){
			echo "<li><a href='../../input/input.php'>Input</a></li>
		<li><a href='../../edit/edit.php'>Edit</a></li>
		<li style='border-right: 1px solid #fff'><a href='../report.php'>Report</a></li>";
		}
	?>
	<li style="float:right"><a href="../../logout.php">Logout</a></li>
	</ul>
	</div>
	<div class="container"><br><br><br>
	  <div class="header2">
		<center><h2>Report</h2></center> 
	  </div>
		<div class="content">
			<?php
			
			$query="SELECT angket.namapengisi as namapengisi, angket.pengisian as pengisian, login.nama as nama, 
					login.cabang as cabang, login.kota as kota from angket,login where angket.namapengisi=login.nama";
			$result=mysql_query($query);
			echo mysql_error();

			if($result){
				$i=0;
				echo"<table align='center'><tr><td><table border='1'><tr>
					<th>Nama Pengisi</th>
					<th>Pengisian</th>
					<th>Cabang</th>
					<th>Kota</th>";
					echo"</tr>\r";
				while($row=mysql_fetch_array($result)){
					echo"<tr>\r";
					echo "<td><center>".$row['namapengisi']."</td>\r";
					echo "<td><center>".$row['pengisian']."</td>\r";
					echo "<td><center>".$row['cabang']."</td>\r";
					echo "<td><center>".$row['kota']."</td>\r";
					echo "</tr>\r";
				}
					echo"</table></td></tr></table>\r";
			}
			?><br><br>
		</div>
	</div>
	<div class="back_footer2">
		<b>&copy; 2020 | YPII </b>
	</div>
</body>
</html>
</body>
</html>