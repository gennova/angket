<?php
	include "../config/config.php";
	if(empty($_SESSION['login'])){
		header("location:../index.php");
	}
	
	if ($_SESSION['pengisian']=='Sudah Mengisi' && $_SESSION['ceklogin']=='User') {
		header("location:done.php");
	}
	else if($_SESSION['pengisian']=='Belum Mengisi' || $_SESSION['ceklogin']=='User') {
		
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Angket Pembelajaran YPII</title>
	<link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script>
			function radioButtonOnclick() {
				alert(1);
				alert(document.activeElement.name);
			}
	</script>

	<script type="text/javascript">
		var next;
		function toggle(radioBtn) {   
		 if(radioBtn.checked) {
		  next = Number(radioBtn.name)+1;
		  setTimeout("enableRadio('"+next+"')",2000);
		 }
		}

		function enableRadio(radioId) {
		 document.getElementById(radioId).disabled=false;
		 document.getElementById(radioId+"a").disabled=false;
		 document.getElementById(radioId+"b").disabled=false;
		 document.getElementById(radioId+"c").disabled=false;
		 document.getElementById(radioId+"d").disabled=false;
		 document.getElementById(radioId+"e").disabled=false;
		}

		function simpan(form) {
		 var soal=4; //Jumlah soal
		 if(next==soal) form.submit();
		}
	</script>
</head>
<body background="../images/background.jpg">
	<div class='top'>
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
		<table>
		<form method="post" action="save.php">			
			<tr>
				<td>Nama Guru<select name="namaguru" id="namaguru">
					<option value="">Please Select</option>
					<?php
					include "../config/config.php";
					
					$sql = "select * from guru where status='Aktif'";
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
				<td></td>
				<td></td>
				<td></td>
				<td>Mata Pelajaran<select name="mapel" id="mapel">
					<option value="">Please Select</option>
					<?php
					include "../config/config.php";
					
					$sql = "select * from matpel where status='Aktif'";
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
				<td></td>
				<td></td>
				<td></td>
				<td>Cabang<select name="cabang" id="cabang">
					<option value="">Please Select</option>
					<?php
					include "../config/config.php";
					
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
				<td></td>
				<td></td>
				<td></td>
				<td>Kota<select name="kota" id="kota">
					<option value="">Please Select</option>
					<?php
					include "../config/config.php";
					
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
		</table>
		<br>
		<fieldset>
			<div align="left">
			STS	: Sangat Tidak Setuju<br>
			TS	: Tidak Setuju<br>
			S	: Setuju<br>
			SS	: Sangat Setuju<br>
			<br>
			</div>
			<legend>Angket Evaluasi</legend>
			<table class='sample' border='1' align="center">
				<tr bgcolor='#CCCCCC'>
						<td align='center' style='width: 20px;' rowspan='2'>No</td>
						<td align='center' style='width: 320px;' rowspan='2'>PERNYATAAN</td>
						<td align='center' style='width: 70px;' colspan='4'>JAWABAN</td>				
				</tr>	
				<tr bgcolor='#CCCCCC'>
						<td align='center' style='width: 10px;'>STS</td>
						<td align='center' style='width: 10px;'>TS</td>
						<td align='center' style='width: 10px;'>S</td>
						<td align='center' style='width: 10px;'>SS</td>
				</tr>
			<?php
				$query="SELECT * from soal where status=0";
				$result=mysql_query($query);
				
				if($result){
					$a=1;
					while($row=mysql_fetch_array($result)){	
						echo"<tr><td align='center'>$a</td><td>".$row['soal']."</td>
							<td align='center'><input type='radio' name='jawaban$a' value='1' onClick='toggle(this)' /></td>
							<td align='center'><input type='radio' name='jawaban$a' value='2' onClick='toggle(this)' /></td>
							<td align='center'><input type='radio' name='jawaban$a' value='3' onClick='toggle(this)' /></td>
							<td align='center'><input type='radio' name='jawaban$a' value='4' onClick='toggle(this)' /></td>";
							$a++;
					}
					echo "</tr></table><br>";
				}
			?>
			<div align='center'>
				<input name='submit' align='center' type='submit' value='Simpan' >
			</div>
		</form>
		</div>
	</div>
	<div class="back_footer2">
		<b>&copy; 2020 | YPII </b>
	</div>
</body>
</html>
</body>
</html>