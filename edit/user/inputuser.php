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
			<table>
			<form method="post" action="simpanuser.php">
			<tr>
				<td>Username<input name="username" type="text" id="username"/></td>
			</tr>
			
			<tr>
				<td>Password<input name="password" type="text" id="password"/></td>
			</tr>
			
			<tr>
				<td><br/>Nama Lengkap<input name="nama" type="text" id="nama"/></td>
			</tr>
			
			<tr>
				<td><br/>Status<select name="status">
						<option value='Admin'>Admin</option>
						<option value='User'>User
						<option value='Tidak Aktif'>Tidak Aktif</td>
						</select>
			</tr>
			
			<tr>
				<td><br/>Cabang<select name="cabang" id="cabang">
					<option value="">Please Select</option>
					<?php
					include "../../config/config.php";
					
					$sql = "select * from cabang where status='Aktif'";
					$result = mysql_query($sql);
					if($result) {
						while($row = mysql_fetch_array($result)) {
							echo "<option value=\"".$row['nama']."\"";
							if($row['nama']) {
								echo "Please Select";
							}
							echo ">".$row['nama']."</option>";
						}
					}
					?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td><br/>Kota<select name="kota" id="kota">
					<option value="">Please Select</option>
					<?php
					include "../../config/config.php";
					
					$sql = "select * from cabang where status='Aktif'";
					$result = mysql_query($sql);
					if($result) {
						while($row = mysql_fetch_array($result)) {
							echo "<option value=\"".$row['kota']."\"";
							if($row['kota']) {
								echo "Please Select";
							}
							echo ">".$row['kota']."</option>";
						}
					}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><br/><input type="submit" name="Submit" value="Simpan" /><input name="Batal" type="reset" id="batal" value="Reset" /></td>
			</tr>
			</form>
		</table>
		</div>
	</div>
	<div class="back_footer2">
		<b>&copy; 2020 | YPII </b>
	</div>
</body>
</html>
</body>
</html>