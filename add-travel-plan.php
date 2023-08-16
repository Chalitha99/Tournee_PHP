<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Travel Plan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/admin_panel.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body style="background: url(&quot;assets/img/Ella-9-Arch-Bridge.jpg&quot;) no-repeat;background-size: cover;">
    <?php session_start();
        $username = $_SESSION["username"];
            ?>
    <!-- Start: Navbar DC -->
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
                <button class="btn bt btn-outline-primary btn-lg"
                        role="button" href="#" style="font-family: Audiowide, serif;background-color: white;"><?php echo $username; ?></button>
                </a></li>
    
                 <!-- Register-->
                 <li class="nav-item"> <a class="nav-link" href="logout.php">
                  <button class="btn btn-outline-primary btn-lg"
                  role="button" href="logout.php" style="font-family: Audiowide, serif;">Log Out</button>
                  </a></li>


              
        </ul>
      </div>
    </div>
  </nav><!-- End: Navbar DC -->
    <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">Add Travel Plan</h1>
    <div>
        <div class="container">
            
            <form action="addTravelPlan.php" method="POST">
                <div class="card shadow mb-3 p-5">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Travel Plan Details</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-8 col-lg-12">
                                <div class="mb-3"><label class="form-label" for="service_name"><strong>Travel
                                            Plan</strong></label><input class="form-control" type="text"
                                        id="service_name" placeholder="Plan Name" name="planName" required=""></div>
                                <div class="mb-3"><label class="form-label" for="service_name"><strong>Day 1 -
                                            Location</strong></label><input class="form-control" type="text"
                                        id="service_name-1" placeholder="Day 01 - Location" name="location1" required="">
                                </div>
                                <div class="mb-3"><label class="form-label" for="service_name"><strong>Day 2 -
                                            Location</strong></label><input class="form-control" type="text"
                                        id="service_name-2" placeholder="Day 02 - Location" name="location2" required="">
                                </div>
                                <div class="mb-3"><label class="form-label"
                                                         for="service_name"><strong>Description</strong></label><textarea name="description"
                                        class="form-control"></textarea></div>
                                <div class="mb-3"><label class="form-label"
                                                         for="service_name"><strong>Include</strong></label><textarea name="include"
                                        class="form-control"></textarea></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end mb-3"><button class="btn btn-primary btn-lg" type="submit">Add Travel Plan</button>
                </div>
            </form>
            
            <?php
                if (isset($_GET['success'])) {

                    if ($_GET['success'] == 1) {
                        ?>
                        
                        <script>
                                swal("Successfully!", "Added Travel Plan!", "success");
                        </script>
                        <?php
                    }
                }
                ?>
            
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><img src="assets/img/tournee-low-resolution-logo-white-on-black-background_3_240x180-removebg-preview%20(1).png"
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
                    dedication to exceptional service, we strive to transform your journeys into unforgettable
                    adventures. Let us guide you on the path to discovery and create memories that last a lifetime.</p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i
                            class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>