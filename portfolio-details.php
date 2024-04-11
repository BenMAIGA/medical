<?php

session_start();

$connect = mysqli_connect("localhost","root","","bmdproject");

if(!$connect){
	die('connection Failed'. mysqli_connect_error());
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Brand | Profile Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="shuuli.png" style="transform: scale(2.5); margin-left: 50px;"></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <?php
if (isset($_GET['id'])) 

{
    $member_id = $_GET['id'];
    $query = "SELECT * FROM webdata WHERE id='$member_id'";
    $query_run = mysqli_query($connect, $query);

    if (mysqli_num_rows($query_run) > 0)
    {
        $member = mysqli_fetch_array($query_run);
        $_SESSION['tin'] = $member['tin'];
    }
    else
    {
        echo "<h3>No Recode Found</h3>";
    }
}

?>

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2><?=$member['brand']; ?></h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
      <div class="row justify-content-between gy-4 mt-4">

<div class="col-lg-8">
  <div class="portfolio-description">
    <div class="testimonial-item">
      <div>
        <img src="<?=$member['file']; ?>" class="testimonial-img" alt="">
        <h3><?=$member['name']; ?></h3>
        <h4><?=$member['category']; ?></h4>
      </div>
    </div>

    <p>
    <?=$member['other']; ?>
    </p>

  </div>
</div>

<div class="col-lg-3">
  <div class="portfolio-info">
    <h3>Profile Details</h3>
    <ul>
      <li><strong>TIN</strong> <span><?=$member['tin']; ?></span></li>
      <li><strong>Email</strong> <span><?=$member['email']; ?></span></li>
      <li><strong>Location</strong> <span><?=$member['city']; ?></span></li>
      <li><strong>Mobile:</strong><?=$member['phone']; ?><br></strong><?=$member['phone1']; ?></li>
      <li><div class="social">
                <a href="<?=$member['link']; ?>"><i class="bi bi-twitter" style="font-size: 20px; margin: 10px; padding: 5px; border: 2px solid #028a7a; border-radius: 100%;"></i></a>
                <a href="<?=$member['link1']; ?>"><i class="bi bi-facebook" style="font-size: 20px; margin: 10px; padding: 5px; border: 2px solid #028a7a; border-radius: 100%;"></i></a>
                <a href="<?=$member['link2']; ?>"><i class="bi bi-instagram" style="font-size: 20px; margin: 10px; padding: 5px; border: 2px solid #028a7a; border-radius: 100%;"></i></a>
              </div></li>
    </ul>
  </div>
</div>
<!-- <div class="text-center"><a href="member-update.php?id=<?= $member['id']; ?>"><button type="submit" style="width: 30%; background: #017466; color: #fff; border: 2px solid #028a7a; height: 60px; border-radius: 50px; font-size: 18px;">Update Profile</button></a></div> --->
    
<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
      <div class="container" data-aos="fade-up">
        
        <div class="section-header">
          <h2>Events</h2>
        <div class="row gy-4">
        <?php

$event_id = $_SESSION['tin'];
$event ="SELECT * FROM eventdata WHERE code='$event_id'";
$event_run = mysqli_query($connect, $event);

while ($result = mysqli_fetch_assoc($event_run)) {
  echo '
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
            <a href="view-event.php" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$result['photo'].'" class="img-fluid" alt=""></a>
              <h4>'.$result['event'].'</h4>
              <span>'.$result['sub'].' , '.$result['dedicate'].'</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
              <span>'.$result['date'].' , '.$result['date1'].'</span>
            </div>
          </div><!-- End Team Member -->
          ';
        }
        
        ?>
    <!---      <div class="text-center"><a href="event-add.php?id=<?= $member['id']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><button type="submit" style="width: 30%; background: #017466; color: #fff; border: 2px solid #028a7a; height: 60px; border-radius: 50px; font-size: 18px;">Add Event</button></a></div> --->

    </section><!-- End Our Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact</h2>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
include "footer.html";
?>