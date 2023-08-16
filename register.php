


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>booking (copy)</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles-register.css">
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

                        <!-- Login-->

                        <li class="nav-item"> <a class="nav-link" href="login.php">
                                <button class="btn btn-outline-primary btn-lg"
                                        role="button" href="login.html" style="font-family: Audiowide, serif;">Login</button>
                            </a></li>


                </div>
            </div>
        </nav>
        <h1 style="text-align: center;color: var(--bs-body-bg);font-family: Audiowide, serif;">REGISTER</h1>
        <div></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-7 bg-white shadow-lg" style="border-radius: 5px;">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Create an Account!</h4>
                        </div>
                        <form class="user" action="registerprocess.php" method="POST">
                            <div class="mb-3"><input class="form-control form-control-user" type="text"
                                                     placeholder="Username" name="username" required=""></div>
                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="email"
                                                     placeholder="Email Address" name="email" required=""></div>
                            <!--                            <div class="row mb-3">
                                                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                                                                      type="password" id="pswd1" placeholder="Password" name="password" required="" ></div>
                                                            
                                                        </div>-->
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="password" id="pswd1" placeholder="Password" name="password" required="">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="password" id="pswd2" placeholder="Confirm Password" name="confirm_password" required="">
                                    <p id="passwordMismatchMsg" class="text-danger" style="display:none;">Passwords do not match.</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text"
                                                                          placeholder="First Name" name="fname" required="" ></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="text"
                                                             placeholder="Last Name" name="lname" required=""></div>
                            </div>
                            <div class="row mb-3">
                                <p id="emailErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                                <p id="passwordErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                            </div><button class="btn btn-primary d-block btn-user w-100" id="submit"
                                          type="submit" name="submit">Register Account</button>
                            <hr>
                        </form>
                        <div class="text-center"></div>
                        <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <script>
document.addEventListener("DOMContentLoaded", function () {
    const password1 = document.getElementById("pswd1");
    const password2 = document.getElementById("pswd2");
    const passwordMismatchMsg = document.getElementById("passwordMismatchMsg");

    password2.addEventListener("input", function () {
        if (password1.value !== password2.value) {
            passwordMismatchMsg.style.display = "block";
        } else {
            passwordMismatchMsg.style.display = "none";
        }
    });
});
</script>
  
    </body>

</html>

