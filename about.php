<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>aboutus</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles-about.css">
</head>

<body style="background: url(&quot;assets/img/Ella-9-Arch-Bridge.jpg&quot;) no-repeat;background-size: cover;">
  <?php session_start();
        if(!isset($_SESSION['email'])){
            
            ?>
            <nav class="navbar navbar-expand-md navigation-clean navbar-light align-items-center"
    style="z-index: 2000;border-color: var(--bs-navbar-brand-color);--bs-body-bg: var(--bs-navbar-disabled-color);background: var(--bs-navbar-active-color);">
                <div class="container-fluid"><a class="navbar-brand" href="index.php"><img
          src="assets/img/tournee-low-resolution-logo-white-on-black-background_3_240x180-removebg-preview%20(1).png"
          width="186" height="120" style="width: 186px;"></a><button data-bs-toggle="collapse" class="navbar-toggler"
        data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse align-items-center" id="navcol-1">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="index.php"
              style="font-family: Audiowide, serif;color: rgb(255,255,255);">Home</a></li>
          
          <li class="nav-item"><a class="nav-link active" href="trips.php"
              style="font-family: Audiowide, serif;color: rgb(255,255,255);">Trips</a></li>
          <li class="nav-item"><a class="nav-link active" href="#" onclick="alert('Please LogIn to site!')" style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Bookings</a></li>
              
              
          <li class="nav-item"><a class="nav-link active" href="about.php"
              style="color: rgb(255,0,0);font-family: Audiowide, serif;">Abouts us</a></li>
              <li class="nav-item"><a class="nav-link active" href="#" onclick="alert('Please LogIn to site!')"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Feedbacks</a></li>
          
               <!-- Login-->

               <li class="nav-item"> <a class="nav-link" href="login.php">
                <button class="btn btn-outline-primary btn-lg"
                role="button" href="login.html" style="font-family: Audiowide, serif;">Login</button>
                </a></li>
    
                 <!-- Register-->
                 <li class="nav-item"> <a class="nav-link" href="register.php">
                  <button class="btn btn-outline-primary btn-lg"
                  role="button" href="register.php" style="font-family: Audiowide, serif;">Register</button>
                  </a></li>


              
        </ul>
      </div>
    </div>
  </nav>
    <?php
        }else{
            $username = $_SESSION["username"];
            ?>
                
                <nav class="navbar navbar-expand-md navigation-clean navbar-light align-items-center"
    style="z-index: 2000;border-color: var(--bs-navbar-brand-color);--bs-body-bg: var(--bs-navbar-disabled-color);background: var(--bs-navbar-active-color);">
    <div class="container-fluid"><a class="navbar-brand" href="index.php"><img
          src="assets/img/tournee-low-resolution-logo-white-on-black-background_3_240x180-removebg-preview%20(1).png"
          width="186" height="120" style="width: 186px;"></a><button data-bs-toggle="collapse" class="navbar-toggler"
        data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse align-items-center" id="navcol-1">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php"
              style="font-family: Audiowide, serif;color: rgb(255,255,255);">Home</a></li>
          
          <li class="nav-item"><a class="nav-link active" href="trips.php"
              style="font-family: Audiowide, serif;color: rgb(255,255,255);">Trips</a></li>
          <li class="nav-item"><a class="nav-link active" href="booking.php"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Bookings</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php"
              style="color: rgb(255,0,0);font-family: Audiowide, serif;">Abouts us</a></li>
          <li class="nav-item"><a class="nav-link active" href="feedback.php"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Feedbacks</a></li>
          
               <!-- Login-->

               <li class="nav-item"> <a class="nav-link" href="#">
                <button class="btn btn-outline-primary btn-lg"
                role="button" href="#" style="font-family: Audiowide, serif;"><?php echo $username; ?></button>
                </a></li>
    
                 <!-- Register-->
                 <li class="nav-item"> <a class="nav-link" href="logout.php">
                  <button class="btn btn-outline-primary btn-lg"
                  role="button" href="logout.php" style="font-family: Audiowide, serif;">Log Out</button>
                  </a></li>


              
        </ul>
      </div>
    </div>
  </nav>
    <?php
        }
    ?>
  <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">ABOUT US</h1>
  <div></div>
  <div class="container" style="background: rgba(255,255,255,0.81);">
    <section class="py-4 py-xl-5">
      <div class="container h-100">
        <div class="row h-100">
          <div
            class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
            <div>
              <h2 class="text-uppercase fw-bold mb-3" style="font-family: Audiowide, serif;">Our MISSION</h2>
              <p class="mb-4"><br><span style="color: rgb(34, 34, 34);">Our mission is to inspire and empower
                  individuals to embark on unforgettable journeys by providing them with comprehensive travel
                  information, personalized recommendations, and exceptional customer service. We strive to be your
                  trusted companion in planning and organizing your dream vacations.</span><br><br></p><img
                src="assets/img/3064.gif_wh860.gif" width="413" height="251" style="border-radius: 149px;">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container py-4 py-xl-5">
    <div class="row gy-4 gy-md-0" style="background: rgba(255,255,255,0.81);">
      <div
        class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center"
        style="background: rgba(255,255,255,0.81);">
        <div style="max-width: 350px;">
          <h2 class="text-uppercase fw-bold" style="font-family: Audiowide, serif;"><br><span
              style="font-weight: normal !important; color: rgb(34, 34, 34);">Who We Are</span><br><br></h2>
          <p class="my-3"><span style="color: rgb(34, 34, 34);">We are a team of avid travelers, adventurers, and
              wanderlust enthusiasts who have explored diverse destinations around the globe. Our love for travel and
              our firsthand experiences have led us to create this platform to assist and inspire fellow travelers. We
              understand the excitement and challenges that come with planning a trip, and we are here to simplify the
              process for you.</span><br><br></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;"
            src="assets/img/How-to-Improve-Teamwork-and-Collaboration-Skills0A.jpeg"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <section class="py-4 py-xl-5" style="background: rgba(255,255,255,0.69);">
          <div class="container h-100">
            <div class="row h-100">
              <div
                class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                <div>
                  <h2 class="text-uppercase fw-bold mb-3" style="font-family: Audiowide, serif;">Unveiling Our Story:
                    Pioneers in Crafting Unforgettable Travel Experiences</h2>
                  <p class="mb-4">Join us on this exciting journey and let Tournee be your trusted companion as you
                    explore the world. Start dreaming, planning, and creating memories that will last a lifetime!</p>
                  <a href="trips.php" style="text-decoration: none;"><button class="btn btn-primary fs-5 me-2 py-2 px-4 btn-tour" type="button">Plan&nbsp;<svg
                      xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                      viewBox="0 0 16 16" class="bi bi-globe-americas fas fa-globe-americas fab fa-spin">
                      <path
                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z">
                      </path>
                      </svg></button></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <div>
    <footer>
      <div class="row">
        <div class="col-sm-6 col-md-4 footer-navigation">
          <h3><img
              src="assets/img/tournee-low-resolution-logo-white-on-black-background_3_240x180-removebg-preview%20(1).png"
              width="169" height="78"></h3>
          <p class="links"><a href="index.html">Home</a><strong> · </strong><a href="trips.html">Trips</a><strong> · </strong><a
              href="booking.html">Booking</a><strong> · </strong><a href="about.html">About us</a><strong> · </strong><a
              href="feedback.html">Feedbacks</a><strong>&nbsp;</strong></p>
          <p class="company-name">Tournee © 2023 copyright</p>
        </div>
        <div class="col-sm-6 col-md-4 footer-contacts">
          <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
            <p><span class="new-line-span">21 Passara road,</span> Badulla, Sri Lanka</p>
          </div>
          <div><i class="fa fa-phone footer-contacts-icon"></i>
            <p class="footer-center-info email text-start"> +94 11 123 456 7</p>
          </div>
          <div><i class="fa fa-envelope footer-contacts-icon"></i>
            <p> <a href="#" target="_blank">support@tournee.com</a></p>
          </div>
        </div>
        <div class="col-md-4 footer-about">
          <h4>About the company</h4>
          <p> your trusted partner in creating remarkable travel experiences. With our passion for exploration and
            dedication to exceptional service, we strive to transform your journeys into unforgettable adventures. Let
            us guide you on the path to discovery and create memories that last a lifetime.</p>
          <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i
                class="fa fa-github"></i></a></div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>