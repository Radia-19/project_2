<?php

include 'Database.php';

class Code extends Database
{
    public function prediction($user_id)
    {
      $created_at = date('Y-m-d H:i:s');
		$sql = "INSERT INTO demo (user_id) VALUES ('$user_id')";//query
		$this->exec($sql);
		return true;
	}
	public function checkPreviousPrediction($user_id)
    {
        $sql = "SELECT * FROM demo WHERE user_id ='$user_id'";
        return $this->fetch($sql);
    }
    public function checkOnePrediction($user_id,$symptoms1,$symptoms2,$symptoms3,$symptoms4,$symptoms5,$symptoms6,$symptoms7,$symptoms8)
    {
        foreach ($symptoms1 as $symptoms1){
            //echo "$symptoms1e";
            print_r($symptoms1);exit();
         }
         foreach ($symptoms2 as $symptoms2){
            //echo "$symptoms2e";
            print_r($symptoms2);exit();
         }
         foreach ($symptoms3 as $symptoms3){
            //echo "$symptoms3e";
            print_r($symptoms3);exit();
         }
         foreach ($symptoms4 as $symptoms4){
            //echo "$symptoms4e";
            print_r($symptoms4);exit();
         }
         foreach ($symptoms5 as $symptoms5){
            //echo "$symptoms5e";
            print_r($symptoms5);exit();
         }
         foreach ($symptoms6 as $symptoms6){
            //echo "$symptoms6e";
            print_r($symptoms6);exit();
         }
         foreach ($symptoms7 as $symptoms7){
            //echo "$symptoms7e";
            print_r($symptoms7);exit();
         }
         foreach ($symptoms8 as $symptoms8){
            //echo "$symptoms8e";
            print_r($symptoms8);exit();
         }
        $sql = "SELECT * FROM demo WHERE user_id ='$user_id' OR symptoms1 ='$symptoms1' OR symptoms2 ='$symptoms2' OR symptoms3 ='$symptoms3' OR symptoms4 ='$symptoms4' OR symptoms5 ='$symptoms5' OR symptoms6 ='$symptoms6' OR symptoms7 ='$symptoms7' OR symptoms8 ='$symptoms8'";
        return $this->fetch($sql);
    }
	public function getAllPredictions()
	{
		$sql = "SELECT demo.id,demo.symptoms1,demo.created_at, users.username FROM demo join users on users.id=demo.user_id;";
		return $this->fetch($sql);
	}
	public function getOnePrediction($q_id)
	{
		$sql = "SELECT * FROM demo WHERE id='$q_id'";
		return $this->fetch($sql);
	}   
}
?>




