<?php
  session_start();
 ?>
 
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
   <a href="welcome.php" class="logo mr-auto"><img src="assets/img/headerlogo.jpg" alt="logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="welcome.php">Home</a></li>
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

      <!--a href="#about" class="get-started-btn scrollto">Get Started</a-->

    </div>
  </header><!-- End Header -->
  <div class="container">
  <h2>Hosted Events</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#upcomingEvent">Upcoming Event</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#pastEvent">Past Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#allEvent">All Events</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="upcomingEvent" class="container tab-pane active" ><br>
      <h3>Upcoming Events</h3>
      <p>
        <?php 
        
        require './config.php';
        $conn=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $sql = "SELECT * FROM `event` where date > today() order by(date) ASC";
        
        $result = mysqli_query($conn, $sql);
    
      echo "<table>";  
      while ($row = mysqli_fetch_array($result)) { 

        echo "<tr><div style='height: 15px; width: auto; padding:30px; margin_top:40px'><h1><a href='details.php?id={$row['id']}'><b>{$row['name']}</tr></b>
    </h1>
    <p>
      <small style='float: right;'><i>Organized by {$row['venue']} </i></small>
    </p>
    <p style=''>
    <h7><small><i style='color: #333;'>(Event Start Date: {$row['date']} )</i></small></h7>
      {$row['details']}
      </div>
    </p>
 </a>";
      }
      echo "</table>";
      ?>
      </p>
    </div>
    
  </div>
</div>