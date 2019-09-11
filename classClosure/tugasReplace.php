<?php 

//soal 3
echo "Masukkan jumlah : ";
	$jumlah = (int)fgets(STDIN);

for ($i=0; $i < $jumlah; $i++) { 
	echo "Masukkan angka : ";
	$angka = (int)fgets(STDIN);
	$data[] = $angka;
}

$hasil = array_map (function($replace){
	return $replace *3;
}, $data);
print_r($hasil);