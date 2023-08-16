<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Trip</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles-home.css">
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
              style="font-family: Audiowide, serif;color: rgb(255,0,0);">Home</a></li>
          <li class="nav-item"></li>
          <li class="nav-item"><a class="nav-link active" href="trips.php"
              style="font-family: Audiowide, serif;color: rgb(255,255,255);">Trips</a></li>
          <li class="nav-item"><a class="nav-link active" href="#" onclick="alert('Please LogIn to site!')"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Bookings</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Abouts us</a></li>
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
              style="font-family: Audiowide, serif;color: rgb(255,0,0);">Home</a></li>
          <li class="nav-item"></li>
          <li class="nav-item"><a class="nav-link active" href="trips.php"
              style="font-family: Audiowide, serif;color: rgb(255,255,255);">Trips</a></li>
          <li class="nav-item"><a class="nav-link active" href="booking.php"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Bookings</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Abouts us</a></li>
          <li class="nav-item"><a class="nav-link active" href="feedback.php"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Feedbacks</a></li>
          
               <!-- Login-->

               <li class="nav-item"> <a class="nav-link" href="<?php if ($_SESSION['isadmin']) {
                            echo "admin_panel.php";
            
        }else{echo"#";} ?>">
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
  
  <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">Wanna Plan Your Trip</h1>
  <div class="container">
    <div class="row">
      <div class="col">
        <section class="py-4 py-xl-5" style="background: rgba(255,255,255,0.69);">
          <div class="container h-100">
            <div class="row h-100">
              <div
                class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                <div>
                  <h2 class="text-uppercase fw-bold mb-3" style="font-family: Audiowide, serif;">Explore and Discover:
                    Your Ultimate Travel Companion</h2>
                  <p class="mb-4">Welcome to our travel plan website, your ultimate companion for exploring the world
                    and creating unforgettable adventures! Whether you're a seasoned globetrotter or a first-time
                    traveler, we're here to help you plan your dream vacation with ease and excitement.</p><a href="trips.php" style="text-decoration: none;"><button
                    class="btn btn-primary fs-5 me-2 py-2 px-4 btn-tour" type="button">Plan&nbsp;<svg
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
    <div class="container py-4 py-xl-5">
      <div class="row mb-5" style="background: rgba(255,255,255,0.69);">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <h2 style="font-family: Audiowide, serif;">Unforgettable Adventures Await: Plan Your Perfect Trip</h2>
          <p class="w-lg-50">Craft your dream trip, explore new horizons, and create unforgettable memories with ease
            and expertise.</p>
        </div>
      </div>
      <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col">
          <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
              src="assets/img/landscape-hills-covered-greenery-surrounded-by-sea-cloudy-sky-during-sunset.jpg">
            <div class="card-body p-4">
              <h4 class="card-title" style="font-family: Audiowide, serif;">Rumassala</h4>
              <p class="card-text">Located just over 5 kilometres from Taru Villas’ properties in Galle Fort, the
                Rumassala Hill is a popular attraction and natural wonder that is steeped in mythical stories. The hill
                is believed to be a part of the Himalayan Mountain Range, according to the chronicle of the Ramayana, as
                exotic flora that can only be found in the Himalayas flourish here.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
              src="assets/img/beautiful-shot-ma-shan-country-park-hong-kong.jpg">
            <div class="card-body p-4" style="height: 275.8px;">
              <h4 class="card-title" style="font-family: Audiowide, serif;">Narangala</h4>
              <p class="card-text">Narangala is also popularly known as Thanga-malai, which means ‘Golden Mountain’ in
                Tamil. This mountain has received this name due to the golden grasses that blanket its slopes. Narangala
                is situated in the Badulla district, Uva Province of Sri Lanka. Rising up to approx. 1,500 meters, this
                is the eighth highest peak in the Uva Provinces.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
              src="assets/img/thi-lo-su-tee-lor-su-tak-province-thi-lo-su-waterfall-largest-waterfall-thailand.jpg">
            <div class="card-body p-4" style="height: 273.8px;">
              <h4 class="card-title" style="font-family: Audiowide, serif;">Dunhinda</h4>
              <p class="card-text">Dunhinda is a very popular waterfall in Sri Lanka. It has a height of 64 meters.
                Therefore it is not leading from its height. But, it is a remarkable waterfall when considering the
                beauty of it. The name Dunhinda derived from the misty appearance in front of the waterfall during the
                rainy season.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-4 py-xl-5" style="background: #ffffff;border-radius: 15px;">
      <div class="row gy-4 gy-md-0">
        <div class="col-xxl-6 justify-content-center align-items-center text-center">
          <div class="container">
            <h2 class="text-uppercase fw-bold" style="font-family: Audiowide, serif;">Tailored Travel Plans: Your Path
              to Adventure</h2>
            <p class="my-3">Our trip planning service is your key to a seamless and unforgettable travel experience. We
              take care of the details so you can focus on the adventure. From personalized itineraries to handpicked
              accommodations and insider tips, let us craft a plan tailored to your preferences. Get ready for a journey
              that exceeds your expectations.</p><img class="rounded img-fluid w-100 fit-cover"
              style="min-height: 300px;" src="assets/img/1.jpg">
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="container">
            <h2 class="text-uppercase fw-bold" style="font-family: Audiowide, serif;">Exceptional Accommodation for Your
              Perfect Getaway</h2>
            <p class="my-3">Your Comfort is Our Priority: Discover a curated selection of accommodations that combine
              exceptional amenities, inviting ambiance, and personalized service, ensuring a memorable and enjoyable
              stay for every traveler. Welcome to your home away from home.</p><img
              class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/5.jpg">
          </div>
        </div>
      </div>
    </div>
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
</body>

</html>