<?php include 'header.php'?>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/login.css">
<main>

<!-- <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="email" required>
                    <label>E-mail</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                
                <button type="submit" class="btn">Login</button>
                
            </form>
        </div>
      </div> -->
        <section class="sec1 mb-5">
            <div class="heading text-center">
                <a href="index.php"><img src="assets/images/Favicon.png" alt="Favicon.png"></a>
                <h2 class="heading-1 fw-bold mt-3">Login here</h2>
            </div>

            <div class="container">
              <div class="row">
               <div class="col-10 offset-1">
                
                <form name="f1" action="login.php" onsubmit = "return validation()" method="POST">

                        <input class="form-control form-control-lg mb-2 rounded-0" type="email" id="email" name="email">
                        <label class="form-label mb-4" for="email">E-mail</label>
                  
                        
                        <input class="form-control form-control-lg mb-2 rounded-0" type="password" id="password" name="pass">
                        <label class="form-label mb-4" for="password">Password<span class="req">*</span></label>

                        <div class="remember-forgot">
                        <label><input type="checkbox" class="check me-2">Remember me</label>
                        </div>

                        <button class="border border-0 rounded-2 gradient-custom-4 logBtn" type="submit" id="login-button" name="btn">Login</button >

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
<?php      
    include('connect.php');  
    $email = $_POST['email'];  
    $pass = $_POST['pass'];  
      
        
        $email = stripcslashes($email);  
        $pass = stripcslashes($pass);  
        $email = mysqli_real_escape_string($con, $email);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select *from login_info where email = '$email' and pass = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid E-mail or Password.</h1>";  
        }     
?> 
