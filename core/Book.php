<?php 
include 'Database.php';

class Book extends Database
{
    public function addBooking($user_id,$name,$email,$doctor_name,$no_of_people,$special_request)
    {
		$created_at = date('Y-m-d H:i:s');
		$sql = "INSERT INTO bookings (user_id,name,email,doctor_name,no_of_people,special_request,created_at) VALUES ('$user_id','$name','$email','$doctor_name','$no_of_people','$special_request','$created_at')";//query
		$this->exec($sql);
		return true;
	}
	public function getBookings()
	{
		$sql = "SELECT bookings.id,bookings.disease_name,bookings.symptoms, users.username FROM bookings join users on users.id=bookings.user_id;";
		return $this->fetch($sql);
	}
	public function getOneBooking($q_id)
	{
		$sql = "SELECT * FROM bookings WHERE id='$q_id'";
		return $this->fetch($sql);
	}
}

?>