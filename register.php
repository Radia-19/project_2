<?php include 'header.php'?>
<?php include 'navbar.php'?>
<?php include 'core/User.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/register.css">
        

 <main>
    <section class="sec1 mb-5">
         <div class="heading text-center">
            <a href="index.php"><img src="assets/images/Favicon.png" alt="Favicon.png"></a>
            <h3 class="heading-1 ">Create Account</h3>
            <p class="text-1">Register for FREE unlimited survices, questions & responses. Have already an account?<a class="fw-bold" href="login.php"><u> Login Here</u></a></p>
          </div>
          <div class="container">
          	<div class="row">
          	 <div class="col-8 offset-2">
             <?php
                if(isset($_POST['submit'])){
                    $user = new User;
                    $userCount = $user->checkPreviousUser($_POST['username'],$_POST['email']);
                   
                    if(count($userCount) > 0){
                        echo "<p class='alert alert-warning'>Username/Email Exits</p>"; 
                    }else{
                        $user->register($_POST['username'],$_POST['email'],md5($_POST['password']),md5($_POST['cpassword']));

                        echo "<p class='alert alert-success'>Register Sucessfully!</p>";
                        }
                   
                } 


            ?> 
          		<form name="f2" action="" onsubmit = "return validation()" method="POST">

                   
                    <input class="form-control form-control-lg" type="text" name="username" id="username" autocomplete="off" required>
                    <label class="form-label mb-4" for="username">User Name</label>
                  
                    <input class="form-control form-control-lg" type="email" name="email" id="email" autocomplete="off" required>
                     <label class="form-label mb-4" for="email">E-mail<span class="req">*</span></label>

                    <input class="form-control form-control-lg" type="password" id="password" name="password" required autocomplete="off">
                     <label class="form-label mb-4" for="password">Password<span class="req">*</span></label>
                <div class="form-group"> 
                      
                     <input class="form-control form-control-lg" type="password"  id="cpassword" name="cpassword" autocomplete="off" required>
                     <label class="form-label mb-4" for="cpassword">Confirm Password</label>
                
                     <small id="emailHelp" class="form-text text-muted fw-lighter ms-5">Make sure to type the same password</small> 

                </div>  
                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2 check" type="checkbox" name="check" value="" id="form2Example3cg">
                  <label class="form-check-label" for="form2Example3g">I agree all statements in <a href="#" class="text-body"><u>Terms of service</u></a></label>
                </div>

               	<div class="d-flex justify-content-center mb-4">
                  <button  type="submit" name="submit" class="btn btn-primary btn-block btn-lg border border-0 rounded-2 gradient-custom-4 regBtn">Register</button>
                </div>
                    
                </form>

          		</div>
          	</div>
          </div>
           
        </section>
    </main>


<?php include 'footer.php'?>
  <script>  
        function validation()  
        {   
        var password=document.f2.password.value;  
        var cpassword=document.f2.cpassword.value;  
        
        if(password==cpassword){  
        return true;  
        }  
        else{  
        alert("password must be same!");  
        return false;  
        } 
        } 
  </script>
