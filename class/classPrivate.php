<?php 
class Person
{
	//Property atau attribute

	//dapat kan nama object Person tanpa mengakses property atau attributenya

	//kita dapat set namanya sesuai nama yang kita inginkan tanpa mengakses langsung property atau attributenya

	private $name;
	private $age;

	public function getName() : string
	{
		return $this->name;
	}

	public function getAge() 
	{
		return $this->age;
	}

	public function setName(string $nama)
	{
		$this->name = $nama;
	}

	public function setAge(int $umur)
	{
		$this->age = $umur;
	}

	public function greeting()
	{
		return $this->name . " Umur Anda " . $this->age;
	}
}

$obperson = new Person;
$obperson->setName('sidik');
$obperson->setAge('10');
echo $obperson->greeting();