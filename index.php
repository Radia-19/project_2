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
                    <p class="text-black">মেডিকেয়ার হাসপাতাল অসামান্য ব্যক্তিগত পরিষেবা সহ পেশাদার<br> পরিষেবার শ্রেষ্ঠত্বের সমন্বয়ে সেরা স্বাস্থ্যসেবা পরিষেবা নিশ্চিত করে</p>
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
                    <p class="text-danger">রোগ বিশ্লেষণের জন্য সেরা ওয়েবসাইট</p>
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
                    <p class="text-success">স্বাস্থ্যসেবার জন্য কোনো আপস নয়</p>
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
                    <p class="text-white">বিশ্বাস, নিশ্চয়তা এবং সাফল্যের জন্য সেরা জায়গা</p>
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
                        <a href="#"><h5>
                        <span class="text3">Cold & Cough</span> 
                        <span class="text-primary bangla">&#2547; ১০</span></h5>
                        <p class="para3">কাশি হল সর্দির একটি সাধারণ উপসর্গ, যা অন্যান্য উপসর্গও সৃষ্টি করতে পারে, যেমন:</p></a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="menu-img"><img src="assets/images/myriam-zilles-KltoLK6Mk-g-unsplash.jpg" alt="myriam-zilles-KltoLK6Mk-g-unsplash.jpg"></div>
                        <div class="menu3">
                            <a href="#"><h5>
                            <span class="text3">Diabetes</span> 
                            <span class="text-primary">&#2547; ১০</span></h5>
                            <p class="para3">আপনার যদি নিম্নলিখিত ডায়াবেটিসের উপসর্গ থাকে তবে আপনার রক্তে শর্করা পরীক্ষা করার বিষয়ে আপনার ডাক্তারকে দেখুন:</p></a>
                        </div>
                </div>
            </div>
            <div class="row menu-row">
                <div class="col-left">
                    <div class="menu-img"><img src="assets/images/pexels-pixabay-208512.jpg" alt="pexels-pixabay-208512.jpg"></div>
                    <div class="menu3">
                        <a href="#"><h5>
                        <span class="text3">Allergies</span> 
                        <span class="text-primary">&#2547; ১০</span></h5>
                        <p class="para3">অ্যালার্জির প্রতিক্রিয়ার লক্ষণগুলি অন্তর্ভুক্ত করতে পারে:</p></a>
                    </div>
                    </div>
                <div class="col-right">
                 <div class="menu-img"><img src="assets/images/mufid-majnun-cM1aU42FnRg-unsplash.jpg" alt="mufid-majnun-cM1aU42FnRg-unsplash.jpg"></div>
                 <div class="menu3">
                            <a href="asthma.php"><h5>
                            <span class="text3">Asthma</span> 
                            <span class="text-primary">&#2547; ১০</span></h5>
                            <p class="para3">হাঁপানির উপসর্গ ব্যক্তিভেদে পরিবর্তিত হয় এবং এতে অন্তর্ভুক্ত থাকতে পারে:</p></a>
                            </div>
                </div>
            </div>
            <div class="row menu-row">
                <div class="col-left">
                    <div class="menu-img"><img src="assets/images/pexels-daniel-frank-287227.jpg" alt="pexels-daniel-frank-287227.jpg"></div>
                    <div class="menu3">
                        <a href="#"><h5>
                        <span class="text3">Hepatitis</span> 
                        <span class="text-primary">&#2547; ১০</span></h5>
                        <p class="para3">A, B, এবং C ধরনের লক্ষণগুলির মধ্যে অন্তর্ভুক্ত থাকতে পারে:</p></a>
                    </div>
                    </div>
                    <div class="col-right">
                    <div class="menu-img"><img src="assets/images/marcelo-leal-k7ll1hpdhFA-unsplash.jpg" alt="marcelo-leal-k7ll1hpdhFA-unsplash.jpg"></div>
                    <div class="menu3">
                        <a href="#"><h5>
                        <span class="text3">Influenza</span> 
                        <span class="text-primary">&#2547; ১০</span></h5>
                        <p class="para3">যারা ইনফ্লুয়েঞ্জায় অসুস্থ তারা প্রায়ই এই লক্ষণগুলির মধ্যে কিছু অনুভব করেন:</p></a>
                    </div>
                </div>
            </div>
            <div class="row menu-row">
                <div class="col-left">
                    <div class="menu-img"><img src="assets/images/louis-reed-pwcKF7L4-no-unsplash.jpg" alt="louis-reed-pwcKF7L4-no-unsplash.jpg"></div>
                    <div class="menu3">
                        <a href="#"><h5>
                        <span class="text3">Heart Disease</span> 
                        <span class="text-primary">&#2547; ১০</span></h5>
                        <p class="para3">হৃদরোগ বিভিন্ন উপসর্গের কারণ হতে পারে, যার মধ্যে রয়েছে:</p></a>
                    </div>
                    </div>
                    <div class="col-right">
                        <div class="menu-img"><img src="assets/images/national-cancer-institute-XknuBmnjbKg-unsplash.jpg" alt="national-cancer-institute-XknuBmnjbKg-unsplash.jpg"></div>
                        <div class="menu3">
                            <a href="#"><h5>
                            <span class="text3">Bacterial sinusitis</span> 
                            <span class="text-primary">&#2547; ১০</span></h5>
                            <p class="para3">ব্যাকটেরিয়াল সাইনোসাইটিস হল সাইনাসের আস্তরণকারী টিস্যুগুলির একটি প্রদাহ। উপসর্গ অন্তর্ভুক্ত:</p></a>
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
                                
              <ul class="nav nav-tabs nav-justified home-page-tab" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-start active d-flex align-items-start" id="editors-pick-tab"
                            data-bs-toggle="tab" data-bs-target="#editors-pick" type="button" role="tab"
                            aria-controls="editors-pick" aria-selected="true">
                            <span
                                class="fad d-md-inline-block fs-1 fs-sm-2 fs-lg-3 me-2 me-lg-3 home-page-tab-icon"></span>
                            <div class="flex-1">

                                <div class="fs--1 fs-sm-0 fs-lg-1 mb-0 fw-bold"><i class="fa-solid fa-stethoscope s0icon"></i> Popular <span
                                        class="d-none d-md-inline-block"></span></div>
                                <p class="mb-0 fs--2 fs-sm--1 nav-link-subtitle d-none d-md-block ps-4 ms-3 p1">Examination</p>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-start d-flex align-items-start" id="popular-freebies-tab" data-bs-toggle="tab"
                            data-bs-target="#popular-freebies" type="button" role="tab" aria-controls="popular-freebies"
                            aria-selected="false">
                            <span class="fad d-md-inline-block fs-1 fs-sm-2 fs-lg-3 me-2 me-lg-3 home-page-tab-icon"></span>
                            <div class="flex-1">

                                <div class="fs--1 fs-sm-0 fs-lg-1 mb-0 fw-bold"><i class="fa-solid fa-vials s0icon"></i> Special <span
                                        class="d-none d-md-inline-block"></span></div>
                                <p class="mb-0 fs--2 fs-sm--1 nav-link-subtitle d-none d-md-block ps-4 ms-3 p1">Check-ups</p>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-start d-flex align-items-start" id="recent-releases-tab" data-bs-toggle="tab"
                            data-bs-target="#recent-releases" type="button" role="tab" aria-controls="recent-releases"
                            aria-selected="false">
                            <span class="fad d-md-inline-block fs-1 fs-sm-2 fs-lg-3 me-2 me-lg-3 home-page-tab-icon"></span>
                            <div class="flex-1">
                                <div class="fs--1 fs-sm-0 fs-lg-1 mb-0 fw-bold"><span class="d-none d-md-inline-block"><i class="fa-solid fa-bandage s0icon"></i> General </span><span class="d-md-none"></span></div>
                                <p class="mb-0 fs--2 fs-sm--1 nav-link-subtitle d-none d-md-block ps-4 ms-3 p1">Latest</p>
                            </div>

                        </button>
                    </li>
                </ul> 
                 <div class="tab-content mb-4" id="myTabContent">
                    <div class="tab-pane pt-4 pt-md-5 fade show active" id="editors-pick" role="tabpanel"
                        aria-labelledby="editors-pick-tab">
                        <div class="row justify-content-center mt-0 mb-5">
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
                                    <button type="button" class="btn btn-primary mt-5 btn1">Explore More <i class="bi bi-arrow-right"></i></button>     
                        </div>
                        </div>
                </div>
                 <div class="tab-content mb-4" id="myTabContent">
                    <div class="tab-pane pt-4 pt-md-5 fade show" id="popular-freebies" role="tabpanel"
                        aria-labelledby="popular-freebies-tab">
                        <div class="row justify-content-center mt-0 mb-5 ">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">IMMUNOLOGY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">BIOCHEMISTRY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">HAEMATOLOGY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">CLINICAL PATHOLOGY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">SEROLOGY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">MICROBIOLOGY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">HISTOPATHOLOGY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">CYTOPATHOLOGY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">CLINICAL PATHOLOGY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">PCR LAB</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">FlOWCYTOMETRY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">IMMUNOHISTOCHEMISTRYPY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-5 btn1">Explore More <i class="bi bi-arrow-right"></i></button>  
                                 </div>
                            </div>
                        </div>
                </div>
                 <div class="tab-content mb-4" id="myTabContent">
                    <div class="tab-pane pt-4 pt-md-5 fade show" id="recent-releases" role="tabpanel"
                        aria-labelledby="recent-releases-tab">
                        <div class="row justify-content-center mt-0 mb-5">
                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">X-RAY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">EEG</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">ETT</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">MAMMOGRAPHY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">USG</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">MRI</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">ECHOCARDIOGRAM</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">COLONOSCOPY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">HOLTER ECG</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">ENDOSCOPY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">SPIROMETRY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                        <ul class="testName">
                                            <li class="dropdown">  
                                                <a href="#">FIBER OPTIC LARYNGOSCOPY</a> 
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-5 btn1">Explore More <i class="bi bi-arrow-right"></i></button> 
                                </div>
                            </div> 
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
                    <a href="booking.php"><button type="button" name="button" class="mt-4 primary-btn1" >Get Appointment</button></a>
                    <?php else: ?>
                    <a href="login.php"><button type="button" name="button" class="mt-4 primary-btn1" >Get Appointment</button></a>
                    <?php echo "Please login first";  ?>
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

<?php include 'footer.php'?>
