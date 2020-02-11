<?php 


/**
  * 
  */
class Persona
{

	public $name;
	public $lastName;
	public $profession;
	public $email;
	public $phone;
	public $aboutMe;
	public $sex;
	public $hobbies;


	function __construct($name, $lastName, $profession, $email ,$phone,$aboutMe, $sex,$hobbies)
	{
		$this->name = $name;
		$this->lastName = $lastName;
		$this->profession = $profession;
		$this->email = $email;
		$this->phone = $phone;
		$this->aboutMe = $aboutMe;
		$this->sex = $sex;
		$this->hobbies = $hobbies;
	}


} 

?>