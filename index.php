<?php include 'header.php'?>
<?php include 'navbar.php'?>
<?php include 'core/User.php'?>

<main>
        <section class="banner">
            <div id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active banner-img1">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="head1">The perfect place for your <br> Health Care</h1>
                    <p class="text-black">Medicare hospital ensures the best healthcare service comprise of professional<br> service excellence with outstanding personal service</p>
                    <?php if(isset($_SESSION['username'])): ?>
                    <a href="booking.php"><button type="button" class="btn btn-light text-primary">Booking Now</button></a>
                    <?php else: ?>
                    <a href="login.php"><button type="button" class="btn btn-light text-primary">Booking Now</button></a>
                    <?php endif; ?>    
                  </div>
                </div>
                <div class="carousel-item banner-img2">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="head1">The perfect solution for your <br> disease prediction</h1>
                    <p class="text-black">Medicare hospital ensures the best healthcare service comprise of professional<br> service excellence with outstanding personal service</p>
                    <?php if(isset($_SESSION['username'])): ?>
                    <a href="booking.php"><button type="button" class="btn btn-light text-primary">Booking Now</button></a>
                    <?php else: ?>
                    <a href="login.php"><button type="button" class="btn btn-light text-primary">Booking Now</button></a>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="carousel-item banner-img3">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="head1">The perfect opportunity for <br> medical survice</h1>
                    <p class="text-secondary">Medicare hospital ensures the best healthcare service comprise of professional<br> service excellence with outstanding personal service</p>
                    <?php if(isset($_SESSION['username'])): ?>
                    <a href="booking.php"><button type="button" class="btn btn-light text-primary">Booking Now</button></a>
                    <?php else: ?>
                    <a href="login.php"><button type="button" class="btn btn-light text-primary">Booking Now</button></a>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="carousel-item banner-img4">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="head1">The perfect goal for your <br> health achivement</h1>
                    <p class="text-white">Medicare hospital ensures the best healthcare service comprise of professional<br> service excellence with outstanding personal service</p>
                    <?php if(isset($_SESSION['username'])): ?>
                    <a href="booking.php"><button type="button" class="btn btn-light text-primary">Booking Now</button></a>
                    <?php else: ?>
                    <a href="login.php"><button type="button" class="btn btn-light text-primary">Booking Now</button></a>
                    <?php endif; ?>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>  
        </section>
        <!-- End Banner -->
        <section class="sec1">
            <div class="s1row">
               
                <div class="s1col">
                    <a href="#doctors">
                    <i class="fa-solid fa-user-doctor"></i>
                    <h2 class="heading-1">Doctors</h2>
                    <p class="text-1">
                        We have some skillful, professional Doctors & Surgeons who make our place extraordinary and well-knowned.
                    </p>
                    </a>
                </div>
               
                <div class="s1col">
                    <a href="nurse.php">
                    <i class="fa-solid fa-laptop-medical"></i>
                    <h2 class="heading-1">Quality Survices</h2>
                    <p class="text-1">
                        Here's the place where you can find the perfect solution and quality medical survices. We run all kind of test.
                    </p>
                    </a>
                </div>
                <div class="s1col">
                    <a href="nurse.php">
                    <i class="fa-solid fa-stethoscope"></i>
                    <h2 class="heading-1">Online Checkups</h2>
                    <p class="text-1">
                        We have fast and easy online services. So you can find the treatment you want. 
                    </p>
                    </a>
                </div>
                <div class="s1col">
                    <a href="nurse.php">
                    <i class="fa-sharp fa-solid fa-headset"></i>
                    <h2 class="heading-1">24/7 Services</h2>
                    <p class="text-1">
                        We try our best to accomplish your needs and preferences, that's why we have a 24/7 service team to co-operate with you.
                    </p>
                    </a>
                </div>

            </div>
        </section>
        <!-- END sec1 -->
        <section class="sec3 ">
         <div class="s3head">
            <div class="divider-head3">
                <div class="divider3"></div>
                <h3>Analyzing</h3>
                <div class="divider3"></div>
            </div>
            <h2>Disease Prediction</h2>
         </div> 
          <div class="menu">
            <div class="row menu-row">
                <div class="col-left">
                    <div class="menu-img"><img src="assets/images/towfiqu-barbhuiya-Yw9Vgr6i_-0-unsplash.jpg" alt="towfiqu-barbhuiya-Yw9Vgr6i_-0-unsplash.jp"></div>
                    <div class="menu3"> 
                        <a href="cold.php"><h5>
                        <span class="text3">Cold & Cough</span> 
                        <span class="text-primary bangla">&#2547; ১০</span></h5>
                        <p class="para3">A cough is a common symptom of the cold, which can also cause other symptoms, such as:</p></a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="menu-img"><img src="assets/images/myriam-zilles-KltoLK6Mk-g-unsplash.jpg" alt="myriam-zilles-KltoLK6Mk-g-unsplash.jpg"></div>
                        <div class="menu3">
                            <a href="diabetes.php"><h5>
                            <span class="text3">Diabetes</span> 
                            <span class="text-primary">&#2547; ১০</span></h5>
                            <p class="para3">If you have any of the following diabetes symptoms, see your doctor about getting your blood sugar tested:</p></a>
                        </div>
                </div>
            </div>
            <div class="row menu-row">
                <div class="col-left">
                    <div class="menu-img"><img src="assets/images/pexels-pixabay-208512.jpg" alt="pexels-pixabay-208512.jpg"></div>
                    <div class="menu3">
                        <a href="allergies.php"><h5>
                        <span class="text3">Allergies</span> 
                        <span class="text-primary">&#2547; ১০</span></h5>
                        <p class="para3">Symptoms of an allergic reaction can include:</p></a>
                    </div>
                    </div>
                <div class="col-right">
                 <div class="menu-img"><img src="assets/images/mufid-majnun-cM1aU42FnRg-unsplash.jpg" alt="mufid-majnun-cM1aU42FnRg-unsplash.jpg"></div>
                 <div class="menu3">
                            <a href="asthma.php"><h5>
                            <span class="text3">Asthma</span> 
                            <span class="text-primary">&#2547; ১০</span></h5>
                            <p class="para3">Asthma symptoms vary from person to person and can include:</p></a>
                            </div>
                </div>
            </div>
            <div class="row menu-row">
                <div class="col-left">
                    <div class="menu-img"><img src="assets/images/pexels-daniel-frank-287227.jpg" alt="pexels-daniel-frank-287227.jpg"></div>
                    <div class="menu3">
                        <a href="hepatitis.php"><h5>
                        <span class="text3">Hepatitis</span> 
                        <span class="text-primary">&#2547; ১০</span></h5>
                        <p class="para3">The symptoms of types A, B, and C may include:</p></a>
                    </div>
                    </div>
                    <div class="col-right">
                    <div class="menu-img"><img src="assets/images/marcelo-leal-k7ll1hpdhFA-unsplash.jpg" alt="marcelo-leal-k7ll1hpdhFA-unsplash.jpg"></div>
                    <div class="menu3">
                        <a href="influenza.php"><h5>
                        <span class="text3">Influenza</span> 
                        <span class="text-primary">&#2547; ১০</span></h5>
                        <p class="para3">People who are sick with Influenza often feel some of these symptoms:</p></a>
                    </div>
                </div>
            </div>
            <div class="row menu-row">
                <div class="col-left">
                    <div class="menu-img"><img src="assets/images/louis-reed-pwcKF7L4-no-unsplash.jpg" alt="louis-reed-pwcKF7L4-no-unsplash.jpg"></div>
                    <div class="menu3">
                        <a href="heart.php"><h5>
                        <span class="text3">Heart Disease</span> 
                        <span class="text-primary">&#2547; ১০</span></h5>
                        <p class="para3">Heart disease can cause a variety of symptoms, including:</p></a>
                    </div>
                    </div>
                    <div class="col-right">
                        <div class="menu-img"><img src="assets/images/national-cancer-institute-XknuBmnjbKg-unsplash.jpg" alt="national-cancer-institute-XknuBmnjbKg-unsplash.jpg"></div>
                        <div class="menu3">
                            <a href="sinusitis.php"><h5>
                            <span class="text3">Bacterial sinusitis</span> 
                            <span class="text-primary">&#2547; ১০</span></h5>
                            <p class="para3">Bacterial sinusitis, also known as a sinus infection, is an inflammation of the tissues lining the sinuses. Symptoms include:</p></a>
                            </div>
                </div>
            </div>
         </div> 
        </section>
        <!-- END sec3 -->
        <section class="sec5" id="doctors">
            <div class="s5head">
                <div class="divider-head5">
                    <div class="divider5"></div>
                    <h3>Doctors & Surgeons</h3>
                    <div class="divider5"></div>
                </div>
                <h2>Our Healthcare Professionals</h2>
                </div> 
                <div class="s5row">
                    <div class="s5col mt-2">
                        <img src="assets/images/images (7)-modified.png" alt="images (7)-modified.png">
                        <h2 class="heading-5">Dr Jyoti Gupta</h2>
                        <p class="text-5">
                            Dermatology, Venereology & Leprosy
                        </p>
                        <div class="s5Icon">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                    <div class="s5col mt-2">
                        <img src="assets/images/images (1)-modified.png" alt="images (1)-modified.png">
                        <h2 class="heading-5">Dr Md Nazrul Islam</h2>
                        <p class="text-5">
                            Specialist In Medicine
                        </p>
                        <div class="s5Icon">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                    <div class="s5col mt-2">
                        <img src="assets/images/Taslima.2e16d0ba.fill-500x666-c0-modified.png" alt="Taslima.2e16d0ba.fill-500x666-c0-modified.png">
                        <h2 class="heading-5">Dr Taslima Akter</h2>
                        <p class="text-5">
                            Consultant- Family Medicine
                        </p>
                        <div class="s5Icon">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                    <div class="s5col mt-2">
                        <img src="assets/images/1557720552-300x300.jpg-modified.png" alt="1557720552-300x300.jpg-modified.png">
                        <h2 class="heading-5">DR. Md Shahriar</h2>
                        <p class="text-5">
                            Colon, Rectal & General Surgery
                        </p>
                        <div class="s5Icon">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End sec5 -->
        <section class="sec0">
          <div class="s0head">
            <div class="divider-head0">
                <div class="divider0"></div>
                <h3>Check-up List</h3>
                <div class="divider0"></div>
            </div>
            <h2>Disease Prediction</h2>
          </div>

          <div class="s0row">
                <div class="s0col">
                    <a href="#">
                    <i class="fa-solid fa-stethoscope s0icon"></i>
                    <div class="s0para ps-2">
                    <p class="mb-0">Popular</p>
                    <h5>Examinations</h5>
                    </a>
                    </div>
                </div>
                <div class="s0col">
                    <a href="checkup.php"> 
                    <i class="fa-solid fa-vials s0icon"></i>
                    <div class="s0para ps-2">
                    <p class="mb-0">Special</p>
                    <h5>Check-ups</h5>
                    </a>
                    </div>
                </div>
                <div class="s0col">
                    <a href="labtest.php">  
                    <i class="fa-solid fa-bandage s0icon"></i>
                    <div class="s0para ps-2">
                    <p class="mb-0">General</p>
                    <h5>Lab Tests</h5>
                    </a>
                    </div>
                </div>
          </div>

          <div class="container">
                    <div class="row justify-content-center mt-5 mb-5 ">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">CT SCAN</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">DENTAL XRAY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">ERCP</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">BONE DENSITOMETER</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">ECG</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">COLOR DOPPLER</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">DUPLEX STUDY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">HOLTER MONITOR</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">NCV/EMG</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">UROFLOWMETRY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">FIBROSCAN</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">COLPOSCOPY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-light text-primary mt-5 btn1">Explore More <i class="bi bi-arrow-right"></i></button>    
                      </div>
          </div>
        </section>
        <!-- End sec0 -->
        <section class="sec4">
            <div class="form-row">
             <div class="col1">
                <img src="assets/images/marcelo-leal-k7ll1hpdhFA-unsplash.jpg" alt="marcelo-leal-k7ll1hpdhFA-unsplash.jpg">
            </div>
            <div class="col2">
                <div class="divider-head">
                     <h3 class="s4head">Reservation</h3>
                     <div class="divider"></div>
                    </div>
                    <h2>Book An Online Consultant</h2>
           
             <form action="" method="POST">
                <div class="table1">
                    <div class="tab-col-left">
                        <input type="text" placeholder="Your Name" name="name" class="book">
                    </div>
                    <div class="tab-col-right">
                        <input type="email" placeholder="Your Email" name="email" class="book">
                    </div>
                </div>
                <div class="table2">
                    <div class="tab-col-left">
                        <input type="text" placeholder="Doctor's name" name="doctor_name" class="book2">
                    </div>
                    <div class="tab-col-right">
                        <div class="select-people">
                        <p class="para-4 mb-0">Number of People</p>
                        <select name="no_of_people" class="book2">
                            <option selected value="One Person">One Person</option>
                            <option value="Two Person">Two Person</option>
                            <option value="Three Person">Three Person</option>
                        </select>
                        </div>
                    </div> 
                </div>
                <div class="table3">
                    <!-- <input type="textarea" placeholder="Special Request" class="book3"> -->
                    <textarea type="textarea" placeholder="Special Request" name="special_request" class="book3"></textarea>
                </div>
                <?php if(isset($_SESSION['username'])): ?>
                <a href="booking.php"><button type="submit" name="submit" class="mt-4 primary-btn1">Get Appointment</button></a>
                <?php else: ?>
                <a href="login.php"><button type="submit" name="submit" class="mt-4 primary-btn1">Get Appointment</button></a>
                <?php endif; ?>
            </form>
           </div>
          </div>    
        </section>
        <!-- End sec4 -->
        <section class="sec2">
            <div class="s2row">
                <div class="s2left">
                    <div class="top-box">
                        <div class="img1">
                            <img src="assets/images/benyamin-bohlouli-e7MJLM5VGjY-unsplash.jpg" alt="benyamin-bohlouli-e7MJLM5VGjY-unsplash.jpg">
                        </div>
                        <div class="img2">
                            <img src="assets/images/pexels-daniel-frank-287227.jpg" alt="pexels-daniel-frank-287227.jpg">
                        </div>
                    </div>
                    <div class="bottom-box">
                        <div class="img3">
                            <img src="assets/images/dominik-lange-VUOiQW4OeLI-unsplash.jpg" alt="dominik-lange-VUOiQW4OeLI-unsplash.jpg">
                        </div>
                        <div class="img4">
                            <img src="assets/images/smartworks-coworking-E7Tzh2TTS6c-unsplash.jpg" alt="smartworks-coworking-E7Tzh2TTS6c-unsplash.jpg">
                        </div>
                    </div>
    
    
                </div>
                <div class="s2right">
                    <div class="divider-head">
                        <h3>About Us</h3>
                        <div class="divider"></div>
                    </div>
                    <h2>Brightening your <i class="fa-solid fa-syringe"></i>  Health Path</h2>
                    <p class="para">We think big and act boldly to improve the health of communities and accelerate equality and diversity in health care. We share our knowledge globally, impact policy, and partner with others to create lasting — and much-needed — change for a healthier world.<br><br>
                    We're also using our platform to make innovative care accessible for all. And we're just getting started.</p>
                    <div class="s2years">
                        <div class="years-left">
                            <div class="num ps-3">
                                <h1>15</h1>
                            </div>
                            <div class="experience">
                                <p class="p1">Years of </p><p class="p2">Experience</p>
                            </div>
                        </div>
                        <div class="years-right">
                            <div class="num2 ps-3">
                                <h1>25</h1>
                            </div>
                            <div class="popular">
                                <p class="p3">Popular </p><p class="p4">Doctors & Surgeons</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn bg-light text-primary" >Read More</button>
                </div>
    
            </div>
        </section>
        <!-- END sec2 -->
         
</main>
<!--END Main-->
   
-

<?php include 'footer.php'?>
