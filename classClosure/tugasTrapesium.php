<?php

//3
echo "Masukkan Tingginya : ";
	$tinggi = (int)fgets(STDIN);
echo "Masukkan Sisi atas : ";
	$sisi = (int)fgets(STDIN);
echo "Masukkan Sisi alas : ";
	$sisi2 = (int)fgets(STDIN);
echo "Luas Trapesium";
	function Trapesium($tinggi, $sisi, $sisi2) {
		print_r($tinggi * ($sisi+$sisi2)/2);
	}
	echo Trapesium($tinggi, $sisi, $sisi2) ."cm\n";