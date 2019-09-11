<?php 

//soal 1
echo "Masukkan panjang : ";
	$panjang = (int)fgets(STDIN);
echo "Masukkan Lebar : ";
	$lebar = (int)fgets(STDIN);
echo "Luas Persegi Panjang";
	function Persegi($panjang, $lebar){	
		print_r($panjang * $lebar);	
	}
	echo Persegi($panjang, $lebar) ."cm\n";