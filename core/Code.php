<?php 

include 'Database.php';

class Code extends Database
{
    public function addPrediction($user_id,$disease_name,$symptoms)
    {
		$sql = "INSERT INTO demo (user_id,disease_name,symptoms) VALUES ('$user_id','$disease_name','$symptoms1')";//query
		$this->exec($sql);
		return true;
	}
	   
}
?>




