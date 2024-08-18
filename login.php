<?php include 'header.php'?>
<?php include 'navbar.php'?>
<?php include 'core/User.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/login.css">
   <?php
                if(isset($_POST['submit'])){
                    $user = new User;
                    $checkOneUser = $user->checkOneUser($_POST['username'],$_POST['password']);
                    
                    if(count($checkOneUser) == 1){
                        
                        $getUserId = $checkOneUser[0]['id'];
                        $getUsername = $checkOneUser[0]['username'];
                        //SESSION
                        session_start();
                        $_SESSION['user_id'] = $getUserId;
                        $_SESSION['username'] = $getUsername;
                        header("location:index.php");

                    }else{
                        echo "<p class='alert alert-danger'>Credential Dose Not Match!</p>";
                    }

                }
                ?> 

<main>
    <section class="sec1 mb-5">
            <div class="heading text-center">
                <a href="index.php"><img src="assets/images/Favicon.png" alt="Favicon.png"></a>
                <h2 class="heading-1 fw-bold mt-3">Login here</h2>
                <p class="text-1 fw-bold mt-2">Best Healthcare Provider</p>
            </div>

            <div class="container">
              <div class="row">
               <div class="col-10 offset-1">
               
                
                <form name="f1" action="" onsubmit = "return validation()" method="POST">

                        <input class="form-control form-control-lg mb-2 rounded-0" type="text" id="username" name="username">
                        <label class="form-label mb-4" for="username">Username</label>
                  
                        
                        <input class="form-control form-control-lg mb-2 rounded-0" type="password" id="password" name="password">
                        <label class="form-label mb-4" for="password">Password<span class="req">*</span></label>

                        <div class="remember-forgot">
                        <label><input type="checkbox" class="check me-2">Remember me</label>
                        </div>

                        <button class="border border-0 rounded-2 gradient-custom-4 logBtn" type="submit" name="submit">Login</button >

                        <div class="login-register">
                        <p class="text-1">Don't have an account?<a href="register.php" class="fw-bold register-link"><u> Register Now </u></a></p>
                        </div>
                </form>
             </div>
            </div>
          </div>
    </section>
</main>

<?php include 'footer.php'?>

