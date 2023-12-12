<header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?= base_url()?>./assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="" class="nav-link text-white"><i class="bx bx-user"></i> <span> <?php 
                session_start(); 

                if (isset($_SESSION['ename'])) {
                      $_SESSION['msg'] = "You must log in first";
                     // header('location: service.php');
                }
                if (isset($_GET['logout'])) {
                      session_destroy();
                      unset($_SESSION['ename']);
                      header("location: index.php");
                }
              ?></span></a></li>
          <li><a href="<?= base_url()?>/#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="<?= base_url('login')?>" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Login</span></a></li> 
          <li><a href="<?= base_url('registration')?>" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Registration</span></a></li>        
          <li><a href="<?= base_url('service')?>" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="<?= base_url('contact')?>" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
     
    </div>
  </header><!-- End Header -->
