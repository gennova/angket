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
		<form method='post' action=''>
		  	<input type='text' name='search'><br>
		  	<div align='center'>
		  		<input type='submit' value='Search'>
		  	</div><br><br>
  		</form>	
  			<table>
			<tr><td>
<a href="#" onclick="printIt(document.getElementById('printme').innerHTML); return false"><div><button class="sexybutton sexysimple sexylarge" id="button2">Print</button></div></td><td></a><a href='#'><div><button class="sexybutton sexysimple sexylarge" id="button" onclick="goBack()">Kembali</button></div></a></td>
			</tr></table>
			<div id='printme'>
			<center><img src="/gambar/Capture.jpg" />
			<?php
			if (isset($_POST["search"])) {
				$search=$_POST['search'];

				$query="SELECT namaguru,cabang,kota,(soal1+soal2+soal3+soal4+soal5+soal6+soal7+soal8+soal9+soal10+soal11+soal12
						+soal13+soal14+soal15+soal16+soal17+soal18+soal19+soal20+soal21+soal22+soal23+soal24+soal25)as sum from angket where namaguru!='' AND namaguru='$search' || cabang='$search' || kota='$search'";
				$result=mysql_query($query);
				echo mysql_error();			
		    //echo "dataaaaaaaaaaaaaaaaaaaaaa";
				if($result){
					$i=0;
					echo"<table align='center'><tr><td><table border='1'><tr>
						<th>Nama Guru</th>
						<th>Cabang</th>
						<th>Kota</th>
						<th>Total</th>
						<th>Kategori</th>";
						echo"</tr>\r";
					while($row=mysql_fetch_array($result)){
						echo"<tr>\r";
						echo "<td><center>".$row['namaguru']."</td>\r";
						echo "<td><center>".$row['cabang']."</td>\r";
						echo "<td><center>".$row['kota']."</td>\r";
						echo "<td><center>".$row['sum']."</td>\r";
						$sum=$row['sum'];
						if($sum>='0' && $sum <='20') $kategori='Sangat Kurang';
		
						else if($sum>='21' && $sum <='40') $kategori='Kurang';
			
						else if($sum>='41' && $sum <='60') $kategori='Sedang';
			
						else if($sum>='61' && $sum <='80') $kategori='Baik';
						
						else if($sum>='81' && $sum <='100') $kategori='Sangat Baik';
						
						echo "<td><center>".$kategori."</td>\r";
						echo "</tr>\r";
					}
						echo"</table></td></tr></table>\r";
				}
			}
			else {	
				$query="SELECT namaguru,cabang,kota,(soal1+soal2+soal3+soal4+soal5+soal6+soal7+soal8+soal9+soal10+soal11+soal12
						+soal13+soal14+soal15+soal16+soal17+soal18+soal19+soal20+soal21+soal22+soal23+soal24+soal25)as sum from angket where namaguru!=''";
				$result=mysql_query($query);
				echo mysql_error();
				
				if($result){
					$i=0;
					echo"<table align='center'><tr><td><table border='1'><tr>
						<th>Nama Guru</th>
						<th>Cabang</th>
						<th>Kota</th>
						<th>Total</th>
						<th>Kategori</th>";
						echo"</tr>\r";
					while($row=mysql_fetch_array($result)){
						echo"<tr>\r";
						echo "<td><center>".$row['namaguru']."</td>\r";
						echo "<td><center>".$row['cabang']."</td>\r";
						echo "<td><center>".$row['kota']."</td>\r";
						echo "<td><center>".$row['sum']."</td>\r";
						$sum=$row['sum'];
						if($sum>='0' && $sum <='20') $kategori='Sangat Kurang';
		
						else if($sum>='21' && $sum <='40') $kategori='Kurang';
			
						else if($sum>='41' && $sum <='60') $kategori='Sedang';
			
						else if($sum>='61' && $sum <='80') $kategori='Baik';
						
						else if($sum>='81' && $sum <='100') $kategori='Sangat Baik';
						
						echo "<td><center>".$kategori."</td>\r";
						echo "</tr>\r";
					}
						echo"</table></td></tr></table>\r";
				}
			
			}
			?>
			</center>
			</div>
			<br><br>
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
echo ""; 
<script type='text/javascript'>
  var win=null;
  function printIt(printThis)
  {
    win = window.open();
    self.focus();
    win.document.open();
    win.document.write('<'+'html'+'><'+'head'+'><'+'style'+'>');
    win.document.write('body, td { font-family: Verdana; font-size: 10pt;}');
    win.document.write('<'+'/'+'style'+'><'+'/'+'head'+'><'+'body'+'>');
    win.document.write(printThis);
    win.document.write('<'+'/'+'body'+'><'+'/'+'html'+'>');
    win.document.close();
    win.print();
    win.close();
  }
</script>
  <script>
$(document).ready(function(){
var div = document.getElementById('myDiv');
div.style.visibility = "hidden";
div.style.display = "none";
    $("#hide").click(function(){
        $("div").hide();
    });
    $("#show").click(function(){
        $("div").show();
    });
});
</script>