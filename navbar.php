<?php 

if(!isset($_SESSION['username'])){
  session_start();
}

?> 

<section class="nav">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand logo" href="index.php">
                <img src="assets/images/15tCzg-LogoMakr.png" alt="15tCzg-LogoMakr.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link"  href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="department.php">Departments</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="contact.php" rlie="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Contact
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="contact.php">E-mail</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="contact.php">Phone</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="contact.php">Address</a></li>
                    </ul>
                  </li>

                  <?php if(isset($_SESSION['username'])): ?>  
                    <a class="nav-link" href="prediction1.php">Prediction</a>
                    <a class="nav-link" href="logout.php">Logout (<?= $_SESSION['username'] ?>)</a>
                  <?php else: ?>
                    <li class="nav-item">
                    <a class="nav-link login-popup" href="login.php">Login</a></li>
                    <li class="nav-item">
                    <a class="nav-link reg" href="register.php"><img class="me-2" src="assets/images/person-fill.svg" alt="person-fill.svg">Register</a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </section>
       <!-- End Navbar -->