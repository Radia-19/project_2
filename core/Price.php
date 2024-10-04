<?php 
include 'Database.php';

class Price extends Database
{
    public function addItems($user_id,$disease_name,$price,)
    {
		$created_at = date('Y-m-d H:i:s');
		$sql = "INSERT INTO items (user_id,disease_name,price,created_at) VALUES ('$user_id','$disease_name','$price','$created_at')";//query
		$this->exec($sql);
		return true;
	}
	public function getitems()
	{
		$sql = "SELECT items.id,items.disease_name,items.price, users.username FROM items join users on users.id=items.user_id;";
		return $this->fetch($sql);
	}
	public function getOneItem($q_id)
	{
		$sql = "SELECT * FROM items WHERE id='$q_id'";
		return $this->fetch($sql);
	}
}

?>