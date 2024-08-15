<?php 

class Database
{
	public $conn;

	public function __construct()
	{
		$host = "localhost";
		$dbUser = "root";
		$dbPass = "";
		$dbName = "project_2";

		try {
		  $this->conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPass);
		  echo "Connected successfully";
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}
	
}

// $db = new Database();

?>