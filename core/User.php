<?php 

include 'Database.php';

class User extends Database
{
    public function register($username,$email,$password,$cpassword)
    {
        // if($role = $_POST['role']){
        //     foreach ($role as $role){
        //             print_r($role);exit();
        //         }
        //     }
        $sql = "INSERT INTO users (username,email,password,cpassword) VALUES ('$username','$email','$password','$cpassword')";//query
    	$this->exec($sql);
    }
    public function checkPreviousUser($username,$email)
    {
        $sql = "SELECT * FROM users WHERE username ='$username' OR email ='$email'";
        return $this->fetch($sql);
    }
   
    public function checkOneUser($username,$password,$role)
    {
        foreach ($role as $role){
            //echo "$role";
            //print_r($role);exit();
         }
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password' AND role ='$role'";
        return $this->fetch($sql);
    }  
}
?> 