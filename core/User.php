<?php 
include 'Database.php';

class User extends Database
{
    public function register($username,$email,$password,$cpassword)
    {
    	$sql = "INSERT INTO users (username,email,password,cpassword) VALUES ('$username','$email','$password','$cpassword')";//query
    	$this->exec($sql);
    }
    public function checkPreviousUser($username,$email)
    {
        $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        return $this->fetch($sql);
    }
    public function checkOneUser($username,$password)
    {
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        return $this->fetch($sql);
    }
}
 
?> 