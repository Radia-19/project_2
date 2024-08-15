<?php include 'header.php'?>

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
          		<form name="f2" action="" onsubmit = "return validation()" method="POST">

                <div class="row mt-4">
                    <div class="col-md-6 mb-4">

                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" />
                        <label class="form-label" for="firstName">First Name</label>
                      </div>

                      </div>
                    <div class="col-md-6 mb-4">

                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" />
                        <label class="form-label" for="lastName">Last Name</label>
                      </div>

                    </div>
                </div>

                    <input class="form-control form-control-lg" type="email" id="email" name="reg-email" autocomplete="off">
                     <label class="form-label mb-4" for="email">E-mail<span class="req">*</span></label>

                    <input class="form-control form-control-lg" type="password" id="password" name="reg-pass" required autocomplete="off">
                     <label class="form-label mb-4" for="password">Password<span class="req">*</span></label>
                <div class="form-group"> 
                      
                     <input type="password" class="form-control" id="cpassword" name="cpassword" autocomplete="off">
                     <label class="form-label mb-4" for="cpassword">Confirm Password</label>
                
                     <small id="emailHelp" class="form-text text-muted fw-lighter ms-5">Make sure to type the same password</small> 

                </div>  
                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2 check" type="checkbox" value="" id="form2Example3cg">
                  <label class="form-check-label" for="form2Example3g">I agree all statements in <a href="#" class="text-body"><u>Terms of service</u></a></label>
                </div>

               	<div class="d-flex justify-content-center mb-4">
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block btn-lg border border-0 rounded-2 gradient-custom-4 text-white regBtn">Register</button>
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
    if(isset($_GET['sign-btn'])){
        $name1 = $_GET['name1'];
        $name2 = $_GET['name2'];
        $sign_email = $_GET['sign-email'];
        $sign_password = $_GET['sign-password'];
    }

    class signup_info{
    private $conn;

       public function add_data($data){
        $name1 = $data['name1'];
        $name2 = $data['name2'];
        $sign_email = $data['sign-email'];
        $sign_pass = $data['sign-pass'];

           $query = "INSERT INTO signup_info(name1,name2,sign-email,sign-pass) VALUE ('$name1','$name2',$sign_email','$sign_pass')";

           if(mysqli_query($this->conn, $query)){
               return "Information Added Sucessfully";
           }
       }

        public function signup_info($data){
        $name1 = $data['name1'];
        $name2 = $data['name2'];
        $sign_email = $data['sign-email'];
        $sign_pass = MD5($data['sign-pass']); 

        $query = "SELECT * FROM signup_info WHERE sign_email='$sign_email' && sign_pass='$sign_pass'";    
        if(mysqli_query($this->conn, $query)){
            $signup_info = msqli_query($this->conn, $query);
            if($signup_info){
                header("location:index.html");
                $signup_data = mysqli_fetch_assoc($signup_info);
               
            }
        }
       }


  }



?>
