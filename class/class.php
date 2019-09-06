<?php
/* struktur dasar class
 *
*class NamaClass {
	argument;
}
istilah yg berlaku setter & getter
meethod adalah memanggil data dari objec
*kaidah yg berlaku pada class, setiap argument harus dibungkus dalam method
ketentuan (new) butuh NamaClass nya;

*/
// class GeraiMiAyam
// {
// 	// 
// 	public $ingredients;

// }$objectGerai = new GeraiMiAyam;
// $objectGerai ->ingredients =[]; 

// /**
//  * 
//  */
// class GeraiMiAyam 
// { 
//public = bisa dirubah diluar class
// 	//ptivat = hanya bisa di akses di dalam class atau tdak bisa di rubah diluar class
// 	private $v = ;
 //////////protected =internal dan yg mewarisan
	
// 	function __construct(argument)
// 	{
// 		# code...
/// 	}
// }

/*class Rumah
{
	// property atau attribute
	private $kamar ;
	public $ruangtamu ;
	// dapatkan nama object person tanpa mengakses langsung property atau attributenya
	public function getkamar(){
		return $this -> kamar;
	}
	public function getruangtamu(){
		return $this -> ruangtamu;
	}
	// kita dapat set namanya sesuai nama yg kita ingingkan tanpa mengakses langsung property ataiu attribute
	
	public function setkamar($property){
		return $this->kamar=$property;

	}
	public function setruangtamu($objec){
		return $this->ruangtamu=$objec;

	}
	public function greeting ()
	{
		return "tidur itu di ". $this->kamar . " bukan di" . $this ->ruangtamu;
	}
}$rumahbaru = New Rumah;
$rumahbaru -> setkamar (' kasur ');
$rumahbaru -> setruangtamu(" kursi tamu\n");
echo $rumahbaru -> greeting();
*/

//protected internal dan hanya bisa diakses yg mewariskan
// class student
// {
// 	protected $nama;
// 	protected $nik;
// 	public function __construct ($nama, $nik) // constrak = hampir sama dengan set 
// 	{
// 		$this->nama=$nama;
// 		$this->nik=$nik;
// 	}
// 	public function getname()
// 	{
// 		$this->nama;
// 	}
// 	public function getnik()
// 	{
// 		$this->nik;
// 	}
// }
// //inherident / warisan 
// class Mahasisswa extends Student
// {
// 	private $jurusan;

// 	public function __construct ($nama, $nik, $jurusan)
// 	{
// 		parent::__construct($nama, $nik);
// 		$this->jurusan = $jurusan;
// 	}
// 	public function greeting()
// 	{
// 		return "Nama : " . $this->nama .
// 				"nik : " . $this->nik .
// 				"jurusan : " . $this->jurusan;
// 	}
// }

// $objMahasiswa = new Mahasisswa ("andi hamsah\n ", " T-0020 \n", " IT\n");
// echo $objMahasiswa->greeting ();

$judul = fgets(STDIN);
$ISBN = fgets(STDIN);
class Buku
{
	public $Buku =
	[
		[' Judul ' => $judul,
		 ' ISBN '  => $ISBN
		],
		[ 'Judul' => $judul,
		  'ISBN'  => $ISBN
		]
	];
	
	public function __construct ()
	{
		$this-> 
	}
}
$objpengunjung = new Pengembalian (fgets(STDIN),  fgets(STDIN), fgets(STDIN), fgets(STDIN));
echo $objpengunjung->greeting ();                              