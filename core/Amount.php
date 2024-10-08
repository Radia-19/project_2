<?php
include 'Database.php';

class Amount extends Database
{
    
    public function addItem($id,$name,$amount,$quantities)
    {
		$created_at = date('Y-m-d H:i:s');
		$sql = "INSERT INTO items (id,name,amount,quantities,created_at) VALUES ('$id','$name','$amount','$quantities','$created_at')";//query
		$this->exec($sql);
		return true;
	}
	public function addPackage($id,$name)
	{
		$sql = "INSERT INTO packages (id,name) VALUES ('$id','$name')";//query
		$this->exec($sql);
		return true;
	}
    public function getAllItems() 
    {
        $query = "SELECT items.id, items.name, items.amount, items.quantities FROM items JOIN packages on packages.name";
        return $this->fetch($sql);
    }
    
    public function getOneItem($item_id) 
    {
        $sql = "SELECT * FROM items WHERE id = :item_id";
        $statement = $this->conn->prepare($sql);  // Prepare the SQL query
        $statement->bindParam(':item_id', $item_id);  // Bind the item_id parameter
        $statement->execute();  // Execute the query
        return $statement->fetch();  // Fetch the single item
    }

    // private $db;

    // public function __construct() {
    //     $this->db = new Database();  
    // }
    // Get price for a single item, with validation for the item ID
    // public function getOneItem($item_id){
    //     $item_id = intval($item_id);
    //     if ($item_id <= 0){
    //         return null;  // Invalid item ID
    //     }
    //     $query = "SELECT id, name, price FROM items WHERE id = :item_id";
    //     $this->db->query($query);
    //     $this->db->bind(':item_id', $item_id);
    //     return $this->db->single();
    // }

    // Fetch all items for display on the page
    
}
?>
