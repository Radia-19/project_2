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
		  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
		// if ($this->pdo === null) {
        //     die('PDO connection is not initialized.');
        // }
	}

	public function exec($sql, $params = [])
	{
		$statement = $this->conn->prepare($sql);
    	$statement->execute($params);
	}

	public function fetch($sql)
	{
		$statement = $this->conn->prepare($sql, $params = []);
        $statement->execute($params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
	public function fetchOne($sql, $params = [])
    {
        $statement = $this->conn->prepare($sql);
        $statement->execute($params);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Close the connection (optional)
    public function close()
    {
        $this->conn = null;
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