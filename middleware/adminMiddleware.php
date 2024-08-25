<?php
                if(isset($_POST['submit'])){
                    $user = new User;
                    $checkOneUser = $user->checkOneUser($_POST['username'],$_POST['password'],$_POST['role']);

                        if($role !== 1){ 
                            
                            $_SESSION['role'] = $role;
                            $_SESSION['message'] = "You Are Not Authorized!";

                            header("location:index.php");
                        }
                        else{
                            //echo "<p class='alert alert-success'>Logged in Successfully!</p>";
                            $_SESSION['message'] = "login to continue!";
                            header("location:login.php");
                        }

                }    
        ?>