<!DOCTYPE html>
<?php
require './Classes/DBConnecter.php';

use Classes\DBConnecter;

$dbcon = new DBConnecter();
?>
<html data-bs-theme="light" lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>booking</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles-booking.css">


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
        <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">Book Your Trip</h1>
        <div></div>
        <div class="container">
            <form action="bookingprocess.php" method="POST">
                <div class="card shadow mb-3 p-5">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Fill in the required fields *</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-8 col-lg-12">
                                <div class="mb-3"><label class="form-label" for="service_name"><strong>Full Name
                                            *</strong></label><input class="form-control" type="text" id="service_name"
                                                             placeholder="Full Name" name="service_name" required=""></div>
                                <div class="mb-3"><label class="form-label" for="service_name"><strong>Travel Plan
                                            *</strong></label><select class="form-select col-lg-8" name="planname">
                                        <option selected="" disabled="">Select Plan</option>

                                            <?php
                                            try {
                                                $con = $dbcon->getConnection();
                                                $query = "SELECT * from destination";
                                                $pstmt = $con->prepare($query);
                                                $pstmt->execute();
                                                $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
                                                $i = 1;

                                                foreach ($rs as $destination) {
                                                    ?>  
                                                    <option value="<?php echo $destination->destination_name; ?>" ><?php echo $destination->destination_name; ?></option>  


                                                    <?php
                                                }
                                            } catch (PDOException $ex) {

                                                echo $ex->getMessage();
                                            }
                                            ?>




                                    </select></div>
                            </div>
                            <div class="col">
                                <div class="mb-3 col-lg-12 col-mb-12"><label class="form-label"
                                                                             for="service_client_payment_validated"><strong>Accomadation *&nbsp;</strong></label>
                                    <div class="form-group mb-3"><select class="form-select col" id="accommodation" onchange="selectAccomadation()">
                                            
                                                <option selected="" disabled="">Select Accomodation</option>
                                                <?php
                                                try {
                                                    $con = $dbcon->getConnection();
                                                    $query = "SELECT * FROM accommodation";
                                                    $pstmt = $con->prepare($query);
                                                    $pstmt->execute();
                                                    $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
                                                    $i = 1;

                                                    foreach ($rs as $accommodation) {
                                                        ?>  
                                                        <option value="<?php echo $accommodation->price; ?>" ><?php echo $accommodation->accommodation_name; ?></option>



                                                        <?php
                                                    }
                                                    ?>


                                            </select></div>
                                        <script>function selectAccomadation() {
                                            let accommodation = document.getElementById("accommodation").value
                                            document.getElementById("price").value=accommodation
                                        }
                                        </script>



                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="service_price"><strong>Price Rs.
                                                *&nbsp;</strong></label><label class="form-label" for="service_price"
                                                                       style="font-size: 11px;"><strong>per person&nbsp;</strong></label><input
                                                                       class="form-control" type="text" id="price" name="acco_price_per_person" readonly="" placeholder="Rs." value=""></div>
                                </div>
                            </div>
                            <div class="mb-3"></div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 col-4"><label class="form-label"
                                                                   for="service_name"><strong>Quentity*</strong></label><input
                                                                       class="form-control col-2" onchange="forAccommodation()" id="quentity" name="quentity" type="number" min="1" ></div>
                                </div>
                                <script>function forAccommodation() {
                                            let quentity = parseInt(document.getElementById("quentity").value)
                                            let accomodation = parseInt(document.getElementById("price").value)
                                            let sum = quentity*accomodation
                                             
                                            document.getElementById("aprice").value=sum
                                        }
                                        </script>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="service_price"><strong>Price Rs.
                                                *&nbsp;</strong></label><label class="form-label" for="service_price"
                                                                       style="font-size: 11px;"><strong>for accomadation&nbsp;</strong></label><input
                                                                       class="form-control" type="text" id="aprice" name="acco_price_per_person" readonly="" placeholder="Rs." value=""></div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 col"><label class="form-label" for="service_name"><strong>Tour
                                                Guide*</strong></label><select class="form-select" id="tourguide" onchange="selectGuide()">
                                                    <option selected="" disabled="">Select Tourguide</option>
                                            <?php
                                                
                                                    
                                                    $query1 = "SELECT * FROM tourguide";
                                                    $pstmt1 = $con->prepare($query1);
                                                    $pstmt1->execute();
                                                    $rs1 = $pstmt1->fetchAll(PDO::FETCH_OBJ);
                                                    $i = 1;

                                                    foreach ($rs1 as $guide) {
                                                        ?>  
                                                        <option value="<?php echo $guide->price; ?>" ><?php echo $guide->name; ?></option>



                                                        <?php
                                                    }
                                                    ?>
                                        </select></div>
                                    
                                    <script>function selectGuide() {
                                            let guide = document.getElementById("tourguide").value
                                            document.getElementById("tprice").value=guide
                                        }
                                        </script>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="service_price"><strong>Price Rs.
                                                *&nbsp;</strong></label><label class="form-label" for="service_price"
                                                                       style="font-size: 11px;"><strong>for Tourguide&nbsp;</strong></label><input
                                                                       class="form-control" type="text" id="tprice" placeholder="Rs."
                                                                       name="client_phone" readonly="" required="" value=""></div>
                                </div>
                            </div>
                            <div class="mb-3"></div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 col"><label class="form-label"
                                                                 for="service_name"><strong>Activity*</strong></label><select name="actName" class="form-select">
                                            <option selected="" disabled="">Select Activity</option>
                                            <option value="Vlog">Vlog</option>
                                            <option value="Play Traditional Games">Play Traditional Games</option>
                                            <option value="DJ Party">DJ Party</option>
                                            <option value="Swimming">Swimming</option>
                                            <option value="Other">Other</option>
                                                
                                        </select></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 col"><label class="form-label"
                                                                 for="service_name"><strong>Location*</strong></label><input name="location" class="form-control col"
                                                                 type="text"></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 col"><label class="form-label" for="service_name"
                                                                 style="width: 91.1625px;"><strong>Start Time*</strong></label><select
                                                                     class="form-select" name="startTime">
                                            <option selected="" disabled="">Select Start Time</option>
                                            <option value="Morning">Morning</option>
                                            <option value="Afternoon">Afternoon</option>
                                            <option value="Evening">Evening</option>
                                            <option value="Night">Night</option>
                                        </select></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 col"><label class="form-label" for="service_name"><strong>End
                                                Time*</strong></label><select class="form-select" name="endTime">
                                            <option selected="" disabled="">Select End Time</option>
                                            <option value="Morning">Morning</option>
                                            <option value="Afternoon">Afternoon</option>
                                            <option value="Evening">Evening</option>
                                            <option value="Night">Night</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="mb-3"></div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="service_client_start_date"><strong>Start
                                                date *</strong></label><input class="form-control"
                                                                      id="service_client_start_date" type="date" name="startDate"
                                                                      required=""></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="service_client_end_date"><strong>End date
                                                *</strong><br></label><input onchange="totalPrice()" class="form-control" id="service_client_end_date"
                                                                     type="date" name="endDate" required=""></div>
                                </div>
                            </div>
                            <script>function totalPrice() {
                                            let price = parseInt(document.getElementById("aprice").value)
                                            let guide = parseInt(document.getElementById("tprice").value)
                                            let sum = price+guide
                                             
                                            document.getElementById("totprice").value=sum
                                        }
                                        </script>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="mb-3"><label class="form-label" for="service_price"><strong>Full Price Rs.
                                            *</strong></label><input
                                                                       class="form-control" type="text" id="totprice" placeholder="Rs."
                                                                       name="fullprice" readonly="" required="" value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mb-3"><button class="btn btn-primary btn-lg" type="submit">Book Your Plan</button>
                    </div>
                
                
                </form>
            </div>
            <div>
                <?php
            } catch (PDOException $ex) {

                echo $ex->getMessage();
            }
            ?>
            <footer>
                <div class="row">
                    <div class="col-sm-6 col-md-4 footer-navigation">
                        <h3><img src="assets/img/tournee-low-resolution-logo-white-on-black-background_3_240x180-removebg-preview%20(1).png"
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
                        <p> your trusted partner in creating remarkable travel experiences. With our passion for exploration
                            and dedication to exceptional service, we strive to transform your journeys into unforgettable
                            adventures. Let us guide you on the path to discovery and create memories that last a lifetime.
                        </p>
                        <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                    class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a
                                href="#"><i class="fa fa-github"></i></a></div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>