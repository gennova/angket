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
		<center><h2>Data User</h2></center> 
	  </div>
		<div class="content">
		<form method='post' action=''>
		  	<input type='text' name='search' placeholder='Pencarian berdasarkan nama pemakai'><br>
		  	<div align='center'>
		  		<input type='submit' value='Search'>
		  	</div><br><br>
  		</form>	
			<?php
			if (isset($_POST["search"])) {
				$search=$_POST['search'];

				$query="SELECT login.username,login.password, login.nama, login.status, login.cabang, login.kota from login where nama='$search'";
				$result=mysql_query($query);
				echo mysql_error();

				if($result){
					$i=0;
					echo"<table align='center'><tr><td><table border='1'><tr>
						<th>Username</th>
						<th>Password</th>
						<th>Nama Pemakai</th>
						<th>Status</th>
						<th>Cabang</th>
						<th>Kota</th>";
						echo"<th>Option</th>";
						echo"<th>Edit</th>";
						echo"</tr>\r";
					while($row=mysql_fetch_array($result)){
						echo"<tr>\r";
						echo "<td><center>".$row['username']."</td>\r";
						echo "<td><center>".$row['password']."</td>\r";
						echo "<td><center>".$row['nama']."</td>\r";
						echo "<td><center>".$row['status']."</td>\r";
						echo "<td><center>".$row['cabang']."</td>\r";
						echo "<td><center>".$row['kota']."</td>\r";
						echo "<td>[<a href=\"deluser.php?idcontent=".$row['nama']."\">Hapus</a>]</td>";
						echo "<td>[<a href=\"edituser.php?idcontent=".$row['nama']."\">Edit</a>]</td>";
						echo "</tr>\r";
					}
						echo"</table></td></tr></table>\r";
				}
			} 
			else {
				$query="SELECT login.username,login.password, login.nama, login.status, login.cabang, login.kota from login";
				$result=mysql_query($query);
				echo mysql_error();

				if($result){
					$i=0;
					echo"<table align='center'><tr><td><table border='1'><tr>
						<th>Username</th>
						<th>Password</th>
						<th>Nama Pemakai</th>
						<th>Status</th>
						<th>Cabang</th>
						<th>Kota</th>";
						echo"<th>Option</th>";
						echo"<th>Edit</th>";
						echo"</tr>\r";
					while($row=mysql_fetch_array($result)){
						echo"<tr>\r";
						echo "<td><center>".$row['username']."</td>\r";
						echo "<td><center>".$row['password']."</td>\r";
						echo "<td><center>".$row['nama']."</td>\r";
						echo "<td><center>".$row['status']."</td>\r";
						echo "<td><center>".$row['cabang']."</td>\r";
						echo "<td><center>".$row['kota']."</td>\r";
						echo "<td>[<a href=\"deluser.php?idcontent=".$row['nama']."\">Hapus</a>]</td>";
						echo "<td>[<a href=\"edituser.php?idcontent=".$row['nama']."\">Edit</a>]</td>";
						echo "</tr>\r";
					}
						echo"</table></td></tr></table>\r";
				}
			}	
			?><br><br>
			<div align='center'>
				<a href='inputuser.php'><input type='button' value='Tambah User'/></a>
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