<?php include 'header.php'?>
<?php include 'navbar.php'?>
<?php include 'core/Book.php'?>

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/booking.css">

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
            <?php 
                if(isset($_POST['submit'])){
                   $booking = new Book;
                   $booking->addBooking($_SESSION['user_id'],$_POST['name'],$_POST['email'],$_POST['doctor_name'],$_POST['no_of_people'],$_POST['special_request']); 
                   echo "<p class='alert alert-success'>Booking Confirmed. You will get your serial number by mail. Thank you!!</p>";
                }
            ?>
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
                        <input type="text" placeholder="Doctor's name" name="doctor_name" class="book2" required>
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
                    <button type="submit" name="submit" class="mt-4 primary-btn1">Get Appointment</button>
            </form>
            </div>
            </div>    
        </section>
        <!-- End sec4 -->





<?php include 'footer.php'?>