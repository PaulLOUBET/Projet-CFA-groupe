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
		    $conn = new PDO("mysql:host=$servername;dbname=ProjetCFA", $username, $password);
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
		$stmt = $this->connexion->prepare("INSERT INTO `user`( `email`, `password`, `sex`) VALUES (:email,:password,:sex)");
		$stmt->bindParam(':email', $user->getMail());
		$stmt->bindParam(':sex', $user->getSex());
		$stmt->bindParam(':password', $user->getPassword());
		$stmt->execute();
	}
	function getUserByEmail($email){

		$sql =  "SELECT * FROM `user` WHERE email='".$email."'";
		$user = null;
		include_once "model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['email'],$row['password'],null,$row['sex']);
	  	}
	  	return $user;
	}
}

?>