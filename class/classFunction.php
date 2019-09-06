<?php 
 class Student
 {
 	private $name;
 	private $nik;
public function __construct($nama, $nik)
 	{
 		$this->name = $nama;
 		$this->nik = $nik;
 	}

 	public function setName()
 	{
 		return $this->nama();

 	}
 	public function setNik()
 	{
 		return $this->nik();
 	}
 }

 class Mahasiswa extends Student
 {
 	private $jurusan;

 	public function __construct($name, $nik, $jurusan)
 	{
 		parent::__construct($name, $nik);
 		$this->jurusan = $jurusan;
 	}

 	public function greeting()
 	{
 		return "Halo Mahasiswa" . $this->name;
 				"NIK mu adalah" . $this->nik;
 				"Jurusan mu adalah" . $this->jurusan;
 	}
 class Siswa extends Student
 {
 	private $kelas;

 	public function __construct($name, $nik, $kelas)
 	{
 		parent::__construct($name, $nik);
 		$this->kelas = $kelas;
 	}

 	public function greeting()
 	{
 		return "Halo Mahasiswa" . $this->name;
 				"NIK mu adalah" . $this->nik;
 				"kelas mu adalah" . $this->kelas;
 	}

 }


 ?>
