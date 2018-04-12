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
		    echo "Connected successfully"; 
	    }
		catch(PDOException $e)
	    {
	    	echo "Connection failed: " . $e->getMessage();
	    }

	}

	function createUser($user){
		$stmt = $this->connexion->prepare("INSERT INTO `user`( `email`, `sex` VALUES (:email,:sex)");
		$stmt->bindParam(':email', $user->getMail());
		$stmt->bindParam(':sex', $user->getSex());
		$stmt->execute();
	}
	function getUserByEmail($email){

		$sql =  "SELECT * FROM `user` WHERE email='".$email."'";
		$user = null;
		include_once "Model/user.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$user = new User($row['email'],00/00/00,$row['sex'],0000);
	  	}
	  	return $user;
	}
}

?>