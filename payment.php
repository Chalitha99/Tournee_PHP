<!DOCTYPE html>

  
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Payment</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles-payment.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body style="background: url(&quot;assets/img/Ella-9-Arch-Bridge.jpg&quot;) no-repeat;background-size: cover;">
  <?php session_start();
  if(isset($_SESSION['email'])){
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
              style="color: rgb(255,0,0);font-family: Audiowide, serif;">Bookings</a></li>
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
        }else{
            header("Location:index.php");
        }?>
  <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">PAYMENT</h1>
  <?php
  $tour_id=NULL;
  if(isset($_GET["id"])){
      $tour_id=$_GET["id"];
  }
  ?>
  
  <form action="upload.php" method="POST" enctype="multipart/form-data">
 
 
  <div class="files color form-group mb-3">
    <div class="container justify-content-center text-center" style="background: var(--bs-body-bg);">
        <h1>Upload Your Payment PDF file here!!!</h1>
        
        
      <?php
            if(isset($_GET["error"])){
                if($_GET["error"]==1){
                    echo "<p style='color:red;'>Error Occured!!!</p>";
                     }
        
                elseif($_GET["error"]==2){
                     echo "<p style='color:red; font-family: Audiowide, serif;'>File Size Too Big....!!!</p>";
                     }
                     
                    }
        ?>
      <div class="row">
          <div class="col-lg-12"><input id="pdf" type="file"  name="uploadfile" accept=".pdf"></div>
      </div>
    </div>
  </div>
      <input type="hidden" name="tourid" value="<?php echo $tour_id;?>" />
  <div class="container">
   
    <div class="col mt-5 text-center"><button class="btn btn-primary justify-content-center"
        type="button" style="font-family: Audiowide, serif;"><input id="upload" type="submit"  name="submit" value="Upload"></button></div>
  </div>
      
 </form>  



<?php
            if (isset($_GET['success'])) {

                if ($_GET['success'] == 1) {
                    ?>

                    <script>
                        swal("Successfully!", "Completed Payment!", "success");
                    </script>
                    <?php
                }
            }
            ?>
  
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
  

  
  
  
  
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>