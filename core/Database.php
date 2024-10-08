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
		}catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
		// if ($this->pdo === null) {
        //     die('PDO connection is not initialized.');
        // }
	}

	public function exec($sql)
	{
		$statement = $this->conn->prepare($sql);
    	$statement->execute();
	}

	public function fetch($sql)
	{
		$statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	// // Prepare and execute queries (this is how should be handled SQL in Price.php)
    // public function query($query) {
    //     // Check if PDO is initialized before preparing the query
    //     if ($this->pdo === null) {
    //         die('Error: PDO connection not established.');
    //     }

    //     $this->statement = $this->pdo->prepare($query);  // Use $pdo to prepare the query
    // }
    // // Bind values to the statement
    // public function bind($param, $value, $type = null)
    // {
    //     if (is_null($type)) {
    //         switch (true) {
    //             case is_int($value):
    //                 $type = PDO::PARAM_INT;
    //                 break;
    //             case is_bool($value):
    //                 $type = PDO::PARAM_BOOL;
    //                 break;
    //             case is_null($value):
    //                 $type = PDO::PARAM_NULL;
    //                 break;
    //             default:
    //                 $type = PDO::PARAM_STR;
    //         }
    //     }
    //     $this->conn->bindValue($param, $value, $type);
    // }
    // Execute the prepared statement
    // public function execute() {
    //     return $this->stmt->execute();
    // }
    // Get result as an associative array
    // public function result() {
    //     $this->execute();
    //     return $this->stmt->fetch(PDO::FETCH_ASSOC);
    // }
}

//$db = new Database();

?>