<?php

//soal 2
//1
echo "Masukkan alasnya : ";
	$alas = (int)fgets(STDIN);
echo "Masukkan tingginya : ";
	$tinggi = (int)fgets(STDIN);
echo "Luas Segitiga";
	function segitiga($alas, $tinggi){
		print_r($alas * $tinggi/2);
	}
	echo segitiga($alas, $tinggi) ."cm\n";