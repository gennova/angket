<?php
	include "../config/config.php";
	
	if(empty($_POST['username'])){
		header("location:../index.php?err=1");
	}else if(empty($_POST['password'])){
		header("location:../index.php?err=2");
	}else{
		$password = $_POST['password'];
		$username = $_POST['username'];
				
		$username = mysql_real_escape_string($username); 
		$password = mysql_real_escape_string($password);
		
		$sql = mysql_query("select * from login where username = '$username'");
		$row = mysql_fetch_array($sql);
				
		if(!empty($row['username'] && $row['status']!=='Tidak Aktif')){
			if($row['password']==$password){
				$_SESSION['login'] = $password;
				$_SESSION['ceklogin']=$row['status'];
				$_SESSION['angket']=$row['nama'];
				$namapemakai=$_SESSION['angket'];
				
				$sql1 = mysql_query("select pengisian from angket where namapengisi='$namapemakai'");
				$row1= mysql_fetch_array($sql1);
						
				if($row1) {
					$_SESSION['pengisian']=$row1['pengisian'];
				}
				header("location:../input/input.php");
			}else{
				header("location:../index.php?err=4");
			}
		}else{
			header("location:../index.php?err=3");
		}
		
	}
?>