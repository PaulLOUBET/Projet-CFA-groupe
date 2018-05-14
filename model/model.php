<?php


/**
* 
*/
class Model
{
	private $connexion;
	
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "root";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=projet-cfa-groupe", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $this->connexion=$conn;
	    }
		catch(PDOException $e)
	    {
	    	echo "Connection failed: " . $e->getMessage();
	    }

	}

	function createUser($user){
		$stmt = $this->connexion->prepare("INSERT INTO `user`( `email`, `password`, `sex`, `birthdate`,`pseudo`) VALUES (:email,:password,:sex,:birthdate,:pseudo)");
		$stmt->bindParam(':email', $user->getMail());
		$stmt->bindParam(':sex', $user->getSex());
		$stmt->bindParam(':password', $user->getPassword());
		$stmt->bindParam(':birthdate', $user->getBirthdate());
		$stmt->bindParam(':pseudo', $user->getPseudo());
		$stmt->execute();
	}
	function getUserByEmail($email){

		$sql =  "SELECT * FROM `user` WHERE email='".$email."'";
		$user = null;
		include_once "model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['email'],$row['password'],$row['pseudo'],$row['birthdate'],$row['sex']);
	  	}
	  	return $user;
	}
	function getUserByPseudo($pseudo){

		$sql =  "SELECT * FROM `user` WHERE pseudo='".$pseudo."'";
		$user = null;
		include_once "model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['email'],$row['password'],$row['pseudo'],$row['birthdate'],$row['sex']);
	  	}
	  	return $user;
	}

	function createPublication($publication){
		$stmt = $this->connexion->prepare("INSERT INTO `publication`( `user_mail`, `date`, `content`) VALUES (:user_mail,:date,:content)");
		$stmt->bindParam(':user_email', $publication->getUserMail());
		$stmt->bindParam(':date', $publication->getDate());
		$stmt->bindParam(':content', $publication->getContent());
		$stmt->execute();
	}
}

?>