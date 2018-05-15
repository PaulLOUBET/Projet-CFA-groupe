<?php

/**
* 
*/
class User 
{
	private $pseudo;
	private $email;
	private $id;
	private $birthdate;
	private $sex;
	private $password;
	private $descritption;

	function __construct($email,$password,$pseudo,$birthdate=null,$sex=null,$descritption=null)
	{
		
		$this->email=$email;
		$this->birthdate=$birthdate;
		$this->sex=$sex;
		$this->password=$password;
		$this->pseudo=$pseudo;
		$this->description=$descritption;
	}

	function getSex(){
		return $this->sex;
	}
	function getMail(){
		return $this->email;
	}
	
	function setMail($email){
		$this->email=$email;
	}
	function setSex($sex){
		$this->sex=$sex;
	}
	function getPassword(){
		return $this->password;
	}
	function setPassword($password){
		return $this->password=$password;
	}
	function getBirthdate(){
		return $this->birthdate;
	}
	function setBirthdate($birthdate){
		return $this->birthdate=$birthdate;
	}
	function getPseudo(){
		return $this->pseudo;
	}
	function setPseudo($pseudo){
		return $this->pseudo=$pseudo;
	}
	function getDescription(){
		return $this->description;
	}
	function setDescription($descritption){
		return $this->description=$descritption;
	}

}


?>