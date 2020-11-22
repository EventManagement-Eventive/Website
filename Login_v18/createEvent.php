<?php require('config.php');
?>
    <!-- //header -->
    <!-- inner banner -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eventive</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/eventivelogo.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bikin - v2.1.0
  * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!--h1 class="logo mr-auto"><a href="index.html">Eventive</a></h1-->
      <!-- Uncomment below if you prefer to use an image logo -->
   <a href="../index.html" class="logo mr-auto"><img src="assets/img/headerlogo.jpg" alt="logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <!--li><a href="#services">Services</a></li-->
          <li><a href="#portfolio">Events</a></li>

          <!--li><a href="#team">Team</a></li-->
          <!--li><a href="#pricing">Pricing</a></li-->
          <!--li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li-->
          <li><a href="#contact">Contact</a></li>
           <li class="active"><a href="logout.php">Logout</a></li>


        </ul>
      </nav><!-- .nav-menu -->

      <!--a href="#about" class="get-started-btn scroll to">Get Started</a-->

    </div>
  </header><!-- End Header -->
  
    <!-- //breadcrumbs -->
    <!-- login  -->
    <div class="modal-body align-w3">
        <form action="controllers/createevent.php" method="post" class="p-sm-3" enctype='multipart/form-data'>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Event name</label>
                <input type="text" class="form-control" placeholder="Event  name" name="ename" id="recipient-name"
                    required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Date</label>
                <input type="date" class="form-control" name="date" id="recipient-name"
                    required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Venue( if virtual enter link)</label>
                <input type="text" class="form-control" placeholder="Event venue" name="venue" id="recipient-name"
                    required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Price Per entry(in RS)</label>
                <input type="number" class="form-control" placeholder="30" name="price" id="recipient-name"
                    required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Event Details</label>
                <input type="text" class="form-control" placeholder="enter full details" name="details" id="recipient-name"
                    required>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Logo/image of event</label>
                <input type="file" class="form-control" name="photo" id="recipient-name" required>
        
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Event Type</label>
                <select  name="Stype" id="stype1" onchange="myFunction()" required>
                    <option value="" >Select Event Type</option>
                    <option value="Tech Talks" >Tech Talks</option>
                    <option value="Hackathon">Hackathon</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Webinar">Webinar</option>
                    <option value="Study Jams">Study Jams</option>
                    <option value="others">Others</option>
                </select>
                <input type="text" id="others" class="form-control" placeholder="Enter Sports Type" name="Stype1">
                    <script>
                    function myFunction() {
                      var x = document.getElementById("stype1").value;
                      var y = document.getElementById("others").value;
                      if (x == "others") {
                            document.getElementById("others").style.visibility = "visible";
                          } else {
                            document.getElementById("others").style.visibility = "hidden";
                            document.getElementById("others").value=null;
                          }
                  }
</script>
            </div>
<?php
//$Stype=$_POST['Stype'];
//var_dump($(('#stype1').val()));
//die();
?>
            <div class="right-w3l">
                <input type="submit" class="form-control bg-theme" value="Create">
            </div>

        </form>
    </div>
    <!-- //login -->
