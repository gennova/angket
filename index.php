<!DOCTYPE HTML>
<html>
<head>
	<title>Angket Pembelajaran YPII</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body background="images/background.jpg">
	<div class="kiri">
		<div class="logo"> <a href="http://www.webunika.com"> <img src="images/logo.png" > </a></div>
		<div class="garis"> </div>
		<div class="judul"> 
			Angket Pembelajaran YPII
		</div>
	</div>
	<div class="wrap">
		<div class="main">
			<div class="label"></div>
			<div class="header">
					<div class="putehputeh"></div><h2> LOGIN </h2>
			</div>
			<div class="form_login">
			<form method="POST" action="system/login.php">
				<table width=100%;>
					<tr><td class="tulisan"> 
						<?php 
							if(isset($_GET['err']) && $_GET['err'] == 1)
								echo "Username belum diisi";
							else if(isset($_GET['err']) && $_GET['err'] = 2)
								echo "Username atau Password salah";
							else if(isset($_GET['err']) && $_GET['err'] = 3)
								echo "Username atau Password salah";
							else if(isset($_GET['err']) && $_GET['err'] = 4)
								echo "Username atau Password salah";
						?>
					</td></tr>
					<tr><td><span class="username"></span><input type="text" name="username" placeholder="Username"></td></tr>
					<tr><td><span class="password"></span><input type="password" name="password" placeholder="Password"></td></tr>
					<tr><td><input type="submit" value="Login" class="btn_login"></td></tr>	
				</table>
			</form>
			</div>
			<div class="back_footer">
				<b>&copy; 2020 | YPII </b>
			</div>
		</div>
	</div>
	
	
	
</body>
</html>