<?php
	include "../config/config.php";
	
	$user=$_SESSION['angket'];
	$namaguru=$_POST['namaguru'];
	$mapel=$_POST['mapel'];
	$cabang=$_POST['cabang'];
	$kota=$_POST['kota'];
	$jawaban1=$_POST['jawaban1'];
	$jawaban2=$_POST['jawaban2'];
	$jawaban3=$_POST['jawaban3'];
	$jawaban4=$_POST['jawaban4'];
	$jawaban5=$_POST['jawaban5'];
	$jawaban6=$_POST['jawaban6'];
	$jawaban7=$_POST['jawaban7'];
	$jawaban8=$_POST['jawaban8'];
	$jawaban9=$_POST['jawaban9'];
	$jawaban10=$_POST['jawaban10'];
	$jawaban11=$_POST['jawaban11'];
	$jawaban12=$_POST['jawaban12'];
	$jawaban13=$_POST['jawaban13'];
	$jawaban14=$_POST['jawaban14'];
	$jawaban15=$_POST['jawaban15'];
	$jawaban16=$_POST['jawaban16'];
	$jawaban17=$_POST['jawaban17'];
	$jawaban18=$_POST['jawaban18'];
	$jawaban19=$_POST['jawaban19'];
	$jawaban20=$_POST['jawaban20'];
	$jawaban21=$_POST['jawaban21'];
	$jawaban22=$_POST['jawaban22'];
	$jawaban23=$_POST['jawaban23'];
	$jawaban24=$_POST['jawaban24'];
	$jawaban25=$_POST['jawaban25'];

	$query="update angket set pengisian='Sudah Mengisi',namaguru='$namaguru',mapel='$mapel',cabang='$cabang',kota='$kota'
			,soal1='$jawaban1',soal2='$jawaban2',soal3='$jawaban3',soal4='$jawaban4',soal5='$jawaban5',soal6='$jawaban6'
			,soal7='$jawaban7',soal8='$jawaban8',soal9='$jawaban9',soal10='$jawaban10',soal11='$jawaban11',soal12='$jawaban12'
			,soal13='$jawaban13',soal14='$jawaban14',soal15='$jawaban15',soal16='$jawaban16',soal17='$jawaban17'
			,soal18='$jawaban18',soal19='$jawaban19',soal20='$jawaban20',soal21='$jawaban21',soal22='$jawaban22'
			,soal23='$jawaban23',soal24='$jawaban24',soal25='$jawaban25' where namapengisi='$user'";
			
	mysql_query($query);
	mysql_close();
	
	header("location:done.php");
?>