
<?php
require './Classes/travelPlan.php';

use Classes\travelPlan;

$plan = new travelPlan();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Trip</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles-trip.css">
        <link rel="stylesheet" href="assets/css/styles-home.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
              style="font-family: Audiowide, serif;color: rgb(255,0,0);">Trips</a></li>
          <li class="nav-item"><a class="nav-link active" href="#" onclick="alert('Please LogIn to site!')" style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Bookings</a></li>
              
              
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
              style="font-family: Audiowide, serif;color: rgb(255,255,255);">Home</a></li>
          
          <li class="nav-item"><a class="nav-link active" href="trips.php"
              style="font-family: Audiowide, serif;color: rgb(255,0,0);">Trips</a></li>
          <li class="nav-item"><a class="nav-link active" href="booking.php"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Bookings</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php"
              style="color: var(--bs-secondary-bg);font-family: Audiowide, serif;">Abouts us</a></li>
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
        <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">Tours in Sri Lanka</h1>
        <div class="features-boxed" style="color: var(--bs-emphasis-color);background: var(--bs-tertiary-color);">
            <div class="container" style="border-color: var(--bs-secondary-color);">
                <div class="intro"></div>
            </div>
        </div>

        <?php
        $rs = $plan->getPlan();
        foreach ($rs as $plans) {
            ?>
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;"
                                                        src="assets/img/trip/<?php echo $plans['destination_id']; ?>.jpg"></div>
                    </div>
                    <div class="col-md-6 d-md-flex align-items-md-center">
                        <div style="max-width: 350px;">
                            <h2 class="text-uppercase fw-bold" style="font-family: Audiowide, serif;color: var(--bs-body-bg);">
                                <?php echo $plans['destination_name']; ?></h2>
                            <p class="my-3" style="color: var(--bs-body-bg);font-family: Roboto, sans-serif;text-align: justify;"><?php echo $plans['description']; ?></p>


                            <button ty morepe="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $plans['destination_id']; ?>" 
                                    style="font-family: Audiowide, serif;">
                                More
                            </button> 

                            
                                <button class="btn btn-outline-primary btn-lg"
                                        role="button" onclick="myFunction()" style="font-family: Audiowide, serif;">Book</button>
                           

                            <!-- model1 -->
                            <div class="modal fade" id="exampleModal<?php echo $plans['destination_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"  style="font-family: Audiowide, serif;">Sightseeing Tour</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><h6>DAY 01  - <?php echo $plans['location1']; ?></h6>
                                            <h6>DAY 02 - <?php echo $plans['location2']; ?></h6> 
                                            <br><br>


                                            <h6>MEETING POINT</h6>

                                            This day tour will start according to the client's request places but must be one of the
                                            Hotels in Colombo, Negombo or Katunayake .
                                            From Colombo Airport or Colombo harbour

                                            <h6>INCLUDE</h6>
                                            <p>
                                            <?php echo $plans['include']; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <footer>
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><img
                            src="assets/img/tournee-low-resolution-logo-white-on-black-background_3_240x180-removebg-preview%20(1).png"
                            width="169" height="78"></h3>
                    <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Trips</a><strong> · </strong><a
                            href="#">Booking</a><strong> · </strong><a href="#">About us</a><strong> · </strong><a
                            href="#">Feedbacks</a><strong>&nbsp;</strong></p>
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



        <script>
      function myFunction() {
          <?php
            if(isset($_SESSION['email'])){
          ?>
        window.location.href="booking.php";  
        <?php
            }else{
                ?>
                    swal("Access Denied!", "First You Need to LogIn!", "error");
                    <?php
            }
        ?>
      }
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>

</html>