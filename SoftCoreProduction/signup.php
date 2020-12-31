<!DOCTYPE html>
<html>
<head>
  <title>SignIn</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/indexcss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

</head>
<body>




<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-2">
        <div class="container text-center" >
            <!-- Navbar Brand -->
            <a href="index.php" class="navbar-brand mr-auto">
                <h2 style="font-family: merienda; font-weight: bold;">
                    SoftCore
                </h2>
            </a>
        </div>
    </nav>
</header>






<section class="my-1">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-lg-7 col-md-7 col-12" >
        <h2><b><a type="button" href="signin.php" class="btn btn-dark" style="width: 325px;">Sign In</a></b></h2>
      </div>
      <div class="col-lg-2 col-md-2 col-4">
        <h2><b><a type="button" href="signup.php" class="btn btn-dark" style="width: 325px;">Sign Up</a></b></h2>
      </div>
    </div>
  </div>


  <div class="container">
    
  <div class="row">
      <div class="col-lg-6 col-md-6 col-12" >
        <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" style="height: 500px; width: 500px;">
      </div>

      <div class="col-md-6 col-lg-6 col-12" style="margin-top: 70px;">
            <form action="#">
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Phone Number -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                            <option value="">+12</option>
                            <option value="">+10</option>
                            <option value="">+15</option>
                            <option value="">+18</option>
                        </select>
                        <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3">
                    </div>.


                    <!-- Job -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
                            <option value="">Choose your job</option>
                            <option value="">Designer</option>
                            <option value="">Developer</option>
                            <option value="">Manager</option>
                            <option value="">Accountant</option>
                        </select>
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <a href="#" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Create your account</span>
                        </a>
                    </div>

                </div>
            </form>
        </div>
      </div>
  </div>








  

      </div>
    </div>
  
</section>



<footer id="footer" >
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 footer-info">
          <h3>SoftCore</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</p>
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li><a href="projects.php">projects</a></li>
            <li><a href="desktop_product.php">products</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-Contact">
          <h4>Contact Us</h4>
          <p>
            BH6 Block-B<br>
            Lovely Professional University, phagwara, punjab<br>
            India<br>
            <strong>Phone:</strong>+91 9889285127<br>
            <strong>Email:</strong> Vishal123456mahor@gmail.com
          </p>
          <div class="social-links">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="fa-youtube"><i class="fa fa-youtube"></i></a>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</p>
          <form accept="" method="post">
            <input type="email" name="email">
            <input type="submit" value ="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      &copy; Copyright<strong> SoftCore</strong>. All Rights Reversed
    </div>
    <div class="credits">
      Designed by<a href="#"> SoftCore</a>
    </div>
  </div>
</footer>







  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="javascript/custom.js"></script>

</body>
</html>








