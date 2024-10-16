<?php
include 'Database.php';

class Amount extends Database
{
    
    public function addItem($id,$name,$amount)
    {
		$created_at = date('Y-m-d H:i:s');
		$sql = "INSERT INTO items (id,name,amount,created_at) VALUES ('$id','$name','$amount','$created_at')";
		$this->exec($sql);
		return true;
	}
	public function addPackage($id,$name)
	{
		$sql = "INSERT INTO packages (id,name) VALUES ('$id','$name')";//query
		$this->exec($sql);
		return true;
	}
    public function getAllItems($search = "") 
    {
        if($search == "")
        {
            $sql = "SELECT items.id, items.name, items.amount FROM items JOIN packages on packages.name";
        }else{ 
            $sql = "SELECT items.id, items.name, items.amount FROM items JOIN packages on packages.name";
        }       
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
    public function addAllItemPackages($id,$item_id,$package_id)
    {
        $sql = "INSERT INTO item_packages (id,item_id,package_id) VALUES ('$id','$item_id','$package_id')";//query
        $this->exec($sql);
        return true;
    }
    public function getItemPackage()
    {
        $sql = "SELECT * FROM item_package WHERE package_id == packages.id";
        return $this->fetch($sql);
    }

}
?>
