<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <title>DietGuru</title>
</head>
<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">DietGuru</a>
    <span class="navbar-text">Your One Stop Destination To A Healthy LifeStyle</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Customer" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact Us</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCk3-_PvhoXZ70bnwXBdhI6QN3iKKUDkIJggs9Hw0OdhZUBXSq);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to DietGuru</h1>
      <p class="font-italic">Your One Stop Destination To A Healthy LifeStyle</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">Stay Healthy in 5 easy Steps!!!</h3>
      <p style="text-align:center">
        <br>Enter your details<br><br>

        Get Customized Diet Plans<br><br>

        Choose one<br><br>
        
        Get your daily Diet Chart<br><br>

        Follow your Chart<br><br>

      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-danger" id="Customer" >
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white" >Developers</h2>
      <div class="row mt-5" >
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/riddhi.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Riddhi Doshi</h4>
              <p class="card-text">Riddhi likes programming and developing strategies. 
                A third year computer engineering student with an aptness in web designing, Riddhi strives to provide easy solutions to complex problems with her skilfulness.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/athmika.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Athmika Hebbar</h4>
              <p class="card-text">Athmika is a third year computer engineering student who has a keen interest in web designing and app development.
                 In addition to this she is a logophile at heart and loves writing.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/manali.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Manali Bagwe</h4>
              <p class="card-text">Manali is a sincere student studying computer engineering in third year with a profound interest in database systems and web development. 
                She is a deep thinker and a very creative individual with a deep love for art.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->


        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/sir.jpg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Prof. Babaso Aldar</h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div> <!-- End Customer 4rd Column-->

        
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="https://www.facebook.com/diettogo" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="https://fitness-and-diet.tumblr.com/" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UCftBAZQBqxLxLw7CBDPtP5A" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="https://www.instagram.com/diet/" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Manali, Riddhi & Athmika &copy; 2019.
          </small>
          
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
   
    
</body>
</html>