<?php 

include 'Database.php';

class User extends Database
{
    public function register($username,$email,$password,$cpassword,$role)
    {
    	$sql = "INSERT INTO users (username,email,password,cpassword,role) VALUES ('$username','$email','$password','$cpassword','$role')";//query
    	$this->exec($sql);
    }
    public function checkPreviousUser($username,$email)
    {
        $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        return $this->fetch($sql);
    }
   
    public function checkOneUser($username,$password,$role)
    {
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
        return $this->fetch($sql);
    }   
}
?> 