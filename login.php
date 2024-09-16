<?php ob_start();?>
<?php include 'header.php'?>
<?php include 'navbar.php'?>
<?php include 'core/User.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/login.css">
         
<main>            
    <section class="sec1 mb-5">
            <div class="top text-center">
                <a href="index.php"><img src="assets/images/Favicon.png" alt="Favicon.png"></a>
                <h2 class="top-1 fw-bold mt-3">Login here</h2>
                <p class="text-1 fw-bold mt-2">Best Healthcare Provider</p>
            </div>
            <div class="container">
              <div class="row">
               <div class="col-10 offset-1">
<?php
                if(isset($_POST['submit'])){
                    $user = new User;
                    $checkOneUser = $user->checkOneUser($_POST['username'],$_POST['password'],$_POST['role']);
                    
                    if(count($checkOneUser) == 1){
                        
                        $getUserId = $checkOneUser[0]['id'];
                        $getUsername = $checkOneUser[0]['username'];
                        $getRole = $checkOneUser[0]['role'];    
                       
                        if(!isset($_SESSION)) 
                        { 
                            session_start(); 
                        }   
                        $_SESSION['user_id'] = $getUserId;
                        $_SESSION['username'] = $getUsername;
                        $_SESSION['role'] = $getRole;
                        header("location:index.php");
                            if($getRole == "user"){
                                $_SESSION['role'] = $getRole;
                                header('location:index.php');
                                echo "<p class='alert alert-success'>Logged in Successfully!</p>";           
                                }else if($getRole == "admin"){
                                     $_SESSION['role'] = $getRole; 
                                     header('Location:admin/index.php');
                                     echo "<p class='alert alert-success'>Welcome to dashboard!</p>";
                                    }else{
                                        $_SESSION['message'] = "You Are Not Authorized!";
                                        header('location:login.php');
                                        }
                        }
                        else{
                        header('location:login.php');
                        echo "<p class='alert alert-danger mt-2'>Credential Dose Not Match!!!</p>";
                    }  
                  }
?> 
                 <form name="f1" action="" onsubmit = "return validation()" method="POST">

                        <label class="form-label mb-2" for="username">Username</label>
                        <input class="form-control form-control-lg mb-4 rounded-0" type="text" id="username" name="username">
                  
                        <label class="form-label mb-2" for="password">Password<span class="req">*</span></label>
                        <input class="form-control form-control-lg mb-4 rounded-0" type="password" id="password" name="password">
                        
                        <label class="form-label mb-1">User Type:</label>
                        <select class="form-select rounded-0 mb-4" aria-label="Default select example" name="role[]">
                             <option class="fw-bold" selected value="user">User</option>
                             <option class="fw-bold" value="admin">Admin</option>
                        </select>
                       

                        <div class="remember-forgot">
                        <label><input type="checkbox" class="check me-2">Remember me</label>
                        </div>

                        <button class="border border-0 rounded-2 gradient-custom-4 logBtn" type="submit" name="submit">Login</button >

                        <div class="login-register">
                        <p class="text-1">Don't have an account?<a href="register.php" class="fw-bold register-link"><u> Register Now </u></a></p>
                        </div>
                        

                 </form>
              <!-- </div> -->
            </div>
          </div>
    </section>
</main>

<?php include 'footer.php'?>

