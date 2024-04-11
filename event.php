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

  <title>Event | Online Date-event</title>
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
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src="shuuli.png" style="transform: scale(2.5); margin-left: 50px;"></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="links.php">Event</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Posted SHUULI <span>ON-NET EVENT</span></h2>
          <p>MAN'S mind may be likened to a garden, which may be intelligently cultivated or
            allowed to run wild; but whether cultivated or neglected,</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Events Posts</h2>
          <p>
            <form method="GET">
            <input type="text" name="search" placeholder="Search" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
            <button type="submit" class="btn btn-primary"  style="margin: 20px;">Search</button>
            </form>
          </p>
        </div>
        <div class="row gy-4">
        <?php

if (isset($_GET['search'])){
  $searchvalue = $_GET['search'];
  $query ="SELECT * FROM eventdata WHERE CONCAT(event,sub,place) LIKE '%$searchvalue%'";
  $query_run = mysqli_query($connect, $query);

  if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $item)
    {
      ?>
            <div class="col-xl-4 col-md-6">
    <article>

      <div class="post-img">
        <img src="<?= $item['photo']; ?>" alt="" class="img-fluid">
      </div>

      <p class="post-category"><?= $item['code']; ?></p>

      <h2 class="title"><?= $item['event']; ?></h2>
      <p class="post-author"><?= $item['sub']; ?></p>
      <div class="d-flex align-items-center">
        <img src="<?= $item['photo']; ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
        <div class="post-meta">
          <p class="post-author"><?= $item['dedicate']; ?></p>
          <p class="post-date">
            <time>From: <?= $item['date']; ?> To: <?= $item['date1']; ?></time>
          </p>
          <p class="post-author"><?= $item['place']; ?></p>
        </div>
      </div>

    </article>
  </div><!-- End post list item -->
      <?php

    }
  }else{
    echo '<center style="font-size: 28px; font-weight: 600; color: red;">No Event Found</center>';
  }
}

?>


        <div class="row gy-4">
        <?php

$query = "SELECT * FROM eventdata WHERE date > CURDATE()";

if ($query_run = mysqli_query($connect, $query)){
  $event = "SELECT * FROM eventdata,webdata WHERE tin=code AND date > CURDATE() ORDER BY date DESC";
  $query_run = mysqli_query($connect, $event);

  while ($result = mysqli_fetch_assoc($query_run)){
	echo '<div class="col-xl-4 col-md-6">
    <article>

      <div class="post-img">
        <img src="'.$result['photo'].'" alt="" class="img-fluid">
      </div>

      <p class="post-category">'.$result['category'].'</p>

      <h2 class="title">'.$result['event'].'</h2>
      <p class="post-author">'.$result['sub'].'</p>
      <div class="d-flex align-items-center">
        <img src="'.$result['file'].'" alt="" class="img-fluid post-author-img flex-shrink-0">
        <div class="post-meta">
          <p class="post-author">'.$result['name'].'</p>
          <p class="post-date">
            <time>From: '.$result['date'].' To: '.$result['date1'].'</time>
          </p>
          <p class="post-author">'.$result['place'].'</p>
        </div>
      </div>

    </article>
  </div><!-- End post list item -->
  ';
  }
}


?>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

<?php
include "footer.html";
?>