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
			<li><a href='../edit.php'>Edit</a></li>
			<li style='border-right: 1px solid #fff'><a href='../../report/report.php'>Report</a></li>";
		}
	?>	
		<li style="float:right"><a href="../../logout.php">Logout</a></li>
	</ul>
	</div>
	<div class="container"><br><br><br>
	  <div class="header2">
		<center><h2>Data Guru</h2></center> 
	  </div>
		<div class="content">
		<form method='post' action=''>
		  	<input type='text' name='search' placeholder='Pencarian berdasarkan no induk guru / nama guru'><br>
		  	<div align='center'>
		  		<input type='submit' value='Search'>
		  	</div><br><br>
  		</form>	
			<?php
			if (isset($_POST["search"])) {
				$search=$_POST['search'];

				$query="SELECT * from guru where nama='$search' || no='$search'";
				$result=mysql_query($query);
				echo mysql_error();

				if($result){
					$i=0;
					echo"<table align='center'><tr><td><table border='1'><tr>
						<th>No Induk</th>
						<th>Nama</th>
						<th>Status</th>";
						echo"<th>Option</th>";
						echo"<th>Edit</th>";
						echo"</tr>\r";
					while($row=mysql_fetch_array($result)){
						echo"<tr>\r";
						echo "<td><center>".$row['no']."</td>\r";
						echo "<td><center>".$row['nama']."</td>\r";
						echo "<td><center>".$row['status']."</td>\r";
						echo "<td>[<a href=\"delguru.php?idcontent=".$row['no']."\">Hapus</a>]</td>";
						echo "<td>[<a href=\"editguru.php?idcontent=".$row['no']."\">Edit</a>]</td>";
						echo "</tr>\r";
					}
						echo"</table></td></tr></table>\r";
				}
			}
			else {
				$query="SELECT * from guru";
				$result=mysql_query($query);
				echo mysql_error();

				if($result){
					$i=0;
					echo"<table align='center'><tr><td><table border='1'><tr>
						<th>No Induk</th>
						<th>Nama Guru</th>
						<th>Status</th>";
						echo"<th>Option</th>";
						echo"<th>Edit</th>";
						echo"</tr>\r";
					while($row=mysql_fetch_array($result)){
						echo"<tr>\r";
						echo "<td><center>".$row['no']."</td>\r";
						echo "<td><center>".$row['nama']."</td>\r";
						echo "<td><center>".$row['status']."</td>\r";
						echo "<td>[<a href=\"delguru.php?idcontent=".$row['no']."\">Hapus</a>]</td>";
						$_SESSION['guru']=$row['status'];
						echo "<td>[<a href=\"editguru.php?idcontent=".$row['no']."\">Edit</a>]</td>";
						echo "</tr>\r";
					}
						echo"</table></td></tr></table>\r";
				}
			}	
			?><br><br>
			<div align='center'>
				<a href='inputguru.php'><input type='button' value='Tambah Guru'/></a>
			</div>
		</div>
	</div>
	<div class="back_footer2">
		<b>&copy; 2020 | YPII </b>
	</div>
</body>
</html>
</body>
</html>