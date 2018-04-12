<?php

/**
* 
*/
class User 
{
	
	private $email;
	private $id;
	private $birthdate;
	private $sex;
	private $password;

	function __construct($email,$password,$birthdate=null,$sex=null)
	{
		
		$this->email=$email;
		$this->birthdate=$birthdate;
		$this->sex=$sex;
		$this->password=$password;

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

}


?>