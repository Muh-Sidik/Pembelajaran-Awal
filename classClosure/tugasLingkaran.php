<?php

//2
echo "Masukkan Phi : ";
	$phi = (int)fgets(STDIN);
echo "Masukkan Jari : ";
	$jari = (int)fgets(STDIN);	
echo "Luas lingkaran";
	function Lingkaran($phi, $jari){
		print_r($phi * ($jari * $jari));
	}
	echo Lingkaran($phi, $jari) ."cm\n";