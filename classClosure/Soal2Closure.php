<?php

echo "persegi panjang \n";
$persegipanjang = function($panjang, $lebar) {

    echo "Luas persegi panjang : ";
    print_r($panjang * $lebar);
};
    echo "Luas persegi panjang \n";
    echo "panjang : ";
    $panjang = (int)fgets(STDIN);

    echo "lebar : ";
    $lebar = (int)fgets(STDIN);

$persegipanjang($panjang, $lebar); echo "\n";

//segitiga
 $segitiga = function($alas, $tinggi) {

    echo "Luas Segitiga : ";
    print_r($alas * $tinggi/2);
};
    echo "Luas Segitiga \n";

    echo "Alas : ";
    $alas = (int)fgets(STDIN);

    echo "Tinggi : ";
    $tinggi = (int)fgets(STDIN);

$segitiga($alas, $tinggi);

// lingkaran
echo "lingkaran \n";
$lingkaran = function($phi, $jari) {

    echo "Luas lingkaran : ";
    print_r($phi * ($jari * $jari));
};
    echo "luas lingkaran \n";
    $phi = 3.14;

    echo "jari-jari : ";
    $jari = (int)fgets(STDIN);

$lingkaran($phi, $jari); echo "\n";

// trapesium
echo "trapesium \n";
$trapesium = function($tinggi, $sisi, $sisi2) {

    echo "Luas trapesium : ";
    print_r($tinggi * ($sisi + $sisi2)/2);
};
    echo "luas trapesium \n";
    
    echo "sisi atas : ";
    $sisi = (int)fgets(STDIN);
    echo "sisi alas : ";
    $sisi2 = (int)fgets(STDIN);
    echo "tinggi : ";
    $tinggi = (int)fgets(STDIN);

$trapesium($tinggi, $sisi, $sisi2); echo "\n";