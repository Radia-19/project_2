<?php 

include 'Database.php';

class Store extends Database
{
    public function addSymptom($user_id,$symptoms)
    {
		$created_at = date('Y-m-d H:i:s');
		$sql = "INSERT INTO stores (user_id,symptoms) VALUES ('$user_id','$symptoms')";//query
		$this->exec($sql);
		return true;
	}
	public function getAllSymptoms()
	{
		$sql = "SELECT stores.id,stores.disease_name,stores.symptoms, users.username FROM stores join users on users.id=stores.user_id;";
		return $this->fetch($sql);
	}
	public function getOneSymptom($q_id)
	{
		$sql = "SELECT * FROM stores WHERE id='$q_id'";
		return $this->fetch($sql);
	}   
}
?>