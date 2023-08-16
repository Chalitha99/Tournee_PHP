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
    <title>Manage Accounts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
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
    <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">Manage User Accounts</h1>
    <div>
        <div class="container-fluid" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <h3 class="text-white mb-4">Dashboard</h3>
                </div>
            </div>
            <div class="card" id="TableSorterCard" style="border-style: none;border-radius: 6.5px;">
                <div class="card-header py-3" style="border-width: 0px;background: rgb(23,25,33);">
                    <div class="row table-topper align-items-center">
                        <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                            <p class="m-0 fw-bold" style="color: rgb(255,255,255);">Registered Users</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive" style="border-top-style: none;background: #171921;">
                            <table class="table table-striped table tablesorter" id="ipi-table">
                                <thead class="thead-dark"
                                    style="background: rgb(33,37,48);border-width: 0px;border-color: rgb(0,0,0);border-bottom-color: #21252F;">
                                    <tr
                                        style="border-style: none;border-color: rgba(255,255,255,0);background: #21252f;">
                                        <th class="text-center">traveller_id</th>
                                        <th class="text-center">email</th>
                                        <th class="text-center">username</th>
                                        <th class="text-center filter-false sorter-false">Action</th>
                                    </tr>
                                </thead>
                                
                                <?php
                                
                                try{
                                    $con =$dbcon->getConnection();
                                    $query ="SELECT * FROM traveller";
                                    $pstmt = $con->prepare($query);
                                    $pstmt->execute();
                                    $rs =$pstmt->fetchAll(PDO::FETCH_OBJ);
                                    $i=1;
                                    
                                    foreach ($rs as $user){
                                 ?>      
                                      <tbody class="text-center" style="border-top-width: 0px;">
                                    <tr style="background: #262a38;">
                                        
                                        
                                        <td style="color: var(--bs-emphasis-color);"><?php echo $user->traveller_id; ?></td>
                                        <td style="color: var(--bs-table-color);"><?php echo $user->email; ?></td>
                                        <td style="color: var(--bs-emphasis-color);"><?php echo $user->username; ?></td>
                                        
                                        
                                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                                            <a  href="deleteacc.php?id=<?php echo $user->traveller_id;?>"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a>
                                        </td>
                                    </tr>
                                </tbody> 
                                
                                <?php
                                    }
                                    
                                    
                                }
                                
                                
                                catch(PDOException $ex){
                                    
                                    echo $ex->getMessage(); 
                                }
                                
                                ?>
                                
                                <?php
                                        if(isset($_GET["success"])){
                                            if($_GET["success"]==1){
                                            
                                 ?>
                        
                                             <script>
                                                swal("Deleted!", "Successfully Deleted the User", "success");
                                             </script>
                                <?php
                                           
                                        }
                                        
                                            elseif($_GET["success"]==2){
                                             ?>
                        
                                             <script>
                                                swal("Error!", "There is an error in user deletion", "error");
                                             </script>
                                <?php
                                            
                                        }
                                            
                                        }
                                        
                                ?>
                                
                                
                          
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>