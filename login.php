<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles-login.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body style="background: url(&quot;assets/img/Ella-9-Arch-Bridge.jpg&quot;) no-repeat;background-size: cover;">
    <nav class="navbar navbar-expand-md navigation-clean navbar-light"
        style="z-index: 2000;border-color: var(--bs-navbar-brand-color);--bs-body-bg: var(--bs-navbar-disabled-color);background: var(--bs-navbar-active-color);">
        <div class="container-fluid"><a class="navbar-brand" href="index.html"><img
                    src="assets/img/tournee-low-resolution-logo-white-on-black-background_3_240x180-removebg-preview%20(1).png"
                    width="186" height="120" style="width: 186px;"></a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php"
                            style="font-family: Audiowide, serif;color: rgb(255,255,255);">Home</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link active" href="trips.php"
                            style="font-family: Audiowide, serif;color: rgb(255,255,255);">Trips</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" onclick="alert('Please LogIn to site!')"
                            style="color: rgb(255,255,255);font-family: Audiowide, serif;">Bookings</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php"
                            style="color: rgb(255,255,255);font-family: Audiowide, serif;">Abouts us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" onclick="alert('Please LogIn to site!')"
                            style="color: rgb(255,255,255);font-family: Audiowide, serif;">Feedbacks</a></li>
                    
                            <!-- Register-->
                 <li class="nav-item"> <a class="nav-link" href="register.php">
                    <button class="btn btn-outline-primary btn-lg"
                    role="button" href="register.html" style="font-family: Audiowide, serif;">Register</button>
                    </a></li>

               
                </ul>
            </div>
        </div>
    </nav>
    <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">LOGIN</h1>
    <div></div>
    <div class="container">
        
            <div class="text-end mb-3">
                <div class="d-flex d-xl-flex align-items-center align-items-xl-center"
                    style="width: 100%;height: 100%;">
                    <div class="container mt-5" style="height: 471.05px;">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-lg-12 col-xl-10">
                                <div class="card shadow-lg o-hidden border-0 my-5"
                                    style="background: rgba(150,148,249,0.54);">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-6 d-none d-lg-flex">
                                                <div class="flex-grow-1"
                                                    style="background: url(&quot;assets/img/2712078-ai.jpg&quot;) center / cover no-repeat;">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 align-items-center" style="height: 464.05px;">
                                                <div class="p-5" style="backdrop-filter: opacity(1);">
                                                    <div class="text-center">
                                                        <h4 class="text-dark mb-4" style="font-size: 54px;">Welcome
                                                            back!</h4>
                                                    </div>
                                                    
                                                    
                                                    <form method="POST" action="loginprocess.php" class="user p-5 justify-content-center">
                                                        <div class="mb-3"><input class="form-control form-control-user"
                                                                type="email" id="exampleInputEmail"
                                                                aria-describedby="emailHelp" placeholder="Email"
                                                                name="email"></div>
                                                        <div class="mb-3"><input class="form-control form-control-user"
                                                                type="password" id="exampleInputPassword"
                                                                placeholder="Password" name="password"></div>
                                                        <div class="mb-3">
                                                            <div class="custom-control custom-checkbox small"></div>
                                                        </div><button class="btn btn-primary d-block btn-user w-100"
                                                            type="submit">Login</button>
                                                        <?php
                   if(isset($_GET['error'])){
                       if($_GET['error']==1){
                           ?>
                      <label style="color: red ">username or password is incorrect</label>
                      <?php
                       }
                   }
                   ?>

                                                            <div class="mb-3">
                                                                <a href="forgotPassword.php" class="btn btn-link" style="font-family: Audiowide, serif;">Forgot password</a>
                                                            </div>    
                                                    </form>
                                                    <?php
                if (isset($_GET['success'])) {

                    if ($_GET['success'] == 1) {
                        ?>
                        
                        <script>
                                swal("Successfully!","Change the Password", "success");
                        </script>
                        <?php
                    }
                    elseif ($_GET['success'] == 2) {
                        ?>
                        
                        <script>
                                swal("Successfully!", "Created the account!", "success");
                        </script>
                        <?php
                    }
                }
                ?>
                        
                        
                                                    <div class="text-center"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div>
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
    
     <h2>Login</h2>
    <form action="login_backend.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
    
    <br>
    
    <a href="forgot_password.php">Forgot Password?</a>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>