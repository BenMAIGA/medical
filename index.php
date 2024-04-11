<html>
	<?php

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

  <title>Home | SHUULI website</title>
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
          <li><a href="#hero">Home</a></li>
          <li><a href="event.php">Event</a></li>
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
          <h2>Welcome to <span>SHUULI</span></h2>
          <p>MAN'S mind may be likened to a garden, which may be intelligently cultivated or
            allowed to run wild; but whether cultivated or neglected,</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="register.php" class="btn-get-started">Register</a>
          </div>
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
  $query ="SELECT * FROM webdata WHERE CONCAT(name,brand,email,zone,city) LIKE '%$searchvalue%'";
  $query_run = mysqli_query($connect, $query);

  if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $item)
    {
      ?>
            <div class="col-xl-4 col-md-6">
    <article>

      <div class="post-img">
        <img src="<?= $item['file']; ?>" alt="" class="img-fluid">
      </div>

      <h2 class="title"><?= $item['brand']; ?></h2>
          <p><span> <?= $item['city']; ?>, </span><span> <?= $item['distr']; ?>, </span><span> +<?= $item['phone']; ?> </span></p>
          <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
        </div>
      </div>

    </article>
  </div><!-- End post list item -->
      <?php

    }
  }else{
    echo '<center style="font-size: 28px; font-weight: 600; color: red;">No Profile Found</center>';
  }
}

?>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section --> 

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Brand Profile</h2>
        </div>
        

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-search"></li>
              <li data-filter=".filter-mc">Mc</li>
              <li data-filter=".filter-dancer">Dancer</li>
              <li data-filter=".filter-dj">Dj</li>
              <li data-filter=".filter-designer">Designer</li>
              <li data-filter=".filter-maids_brighters">maids&brighters</li>
              <li data-filter=".filter-venue">venue</li>
              <li data-filter=".filter-special_hire">special hire</li>
              <li data-filter=".filter-caterer">caterer</li>
            </ul><!-- End Portfolio Filters -->
          </div>
           <div class="row gy-4 portfolio-container">


          <div class="row gy-4 portfolio-container">

<?php

$data = "SELECT * FROM webdata WHERE category='mc' ORDER BY id DESC";
$data_run = mysqli_query($connect, $data);

while ($row = mysqli_fetch_assoc($data_run)) 
{
    echo '
            <div class="col-xl-4 col-md-6 portfolio-item filter-mc">
              <div class="portfolio-wrap">
                <a href="'.$row['file'].'" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$row['file'].'" class="img-fluid" alt="" style="height: 250px; width: 100%;"></a>
                <div class="portfolio-info">
                  <h4>'.$row['brand'].'</h4>
                  <p><span> '.$row['city'].' </span>,<span '.$row['distr'].' </span>,<span> +'.$row['phone'].' </span></p>
                  <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            ';
}
?>

<?php

$data = "SELECT * FROM webdata WHERE category='dancer' ORDER BY id DESC";
$data_run = mysqli_query($connect, $data);

while ($row = mysqli_fetch_assoc($data_run)) 
{
    echo '
            <div class="col-xl-4 col-md-6 portfolio-item filter-dancer">
              <div class="portfolio-wrap">
                <a href="'.$row['file'].'" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$row['file'].'" class="img-fluid" alt="" style="height: 250px; width: 100%;"></a>
                <div class="portfolio-info">
                  <h4>'.$row['brand'].'</h4>
                  <p><span> '.$row['city'].', </span><span '.$row['distr'].', </span><span> +'.$row['phone'].' </span></p>
                  <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            ';
}
?>


<?php

$data = "SELECT * FROM webdata WHERE category='caterer' ORDER BY id DESC";
$data_run = mysqli_query($connect, $data);

while ($row = mysqli_fetch_assoc($data_run)) 
{
    echo '
            <div class="col-xl-4 col-md-6 portfolio-item filter-caterer">
              <div class="portfolio-wrap">
                <a href="'.$row['file'].'" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$row['file'].'" class="img-fluid" alt="" style="height: 250px; width: 100%;"></a>
                <div class="portfolio-info">
                  <h4>'.$row['brand'].'</h4>
                  <p><span> '.$row['city'].', </span><span '.$row['distr'].', </span><span> +'.$row['phone'].' </span></p>
                  <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            ';
}
?>
<?php

$data = "SELECT * FROM webdata WHERE category='dj' ORDER BY id DESC";
$data_run = mysqli_query($connect, $data);

while ($row = mysqli_fetch_assoc($data_run)) 
{
    echo '
            <div class="col-xl-4 col-md-6 portfolio-item filter-dj">
              <div class="portfolio-wrap">
                <a href="'.$row['file'].'" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$row['file'].'" class="img-fluid" alt="" style="height: 250px; width: 100%;"></a>
                <div class="portfolio-info">
                  <h4>'.$row['brand'].'</h4>
                  <p><span> '.$row['city'].', </span><span '.$row['distr'].', </span><span> +'.$row['phone'].' </span></p>
                  <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            ';
}
?>
<?php

$data = "SELECT * FROM webdata WHERE category='maids&brighters' ORDER BY id DESC";
$data_run = mysqli_query($connect, $data);

while ($row = mysqli_fetch_assoc($data_run)) 
{
    echo '
            <div class="col-xl-4 col-md-6 portfolio-item filter-maids&brighters">
              <div class="portfolio-wrap">
                <a href="'.$row['file'].'" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$row['file'].'" class="img-fluid" alt="" style="height: 250px; width: 100%;"></a>
                <div class="portfolio-info">
                  <h4>'.$row['brand'].'</h4>
                  <p><span> '.$row['city'].', </span><span '.$row['distr'].', </span><span> +'.$row['phone'].' </span></p>
                  <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            ';
}
?>
<?php

$data = "SELECT * FROM webdata WHERE category='venue' ORDER BY id DESC";
$data_run = mysqli_query($connect, $data);

while ($row = mysqli_fetch_assoc($data_run)) 
{
    echo '
            <div class="col-xl-4 col-md-6 portfolio-item filter-venue">
              <div class="portfolio-wrap">
                <a href="'.$row['file'].'" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$row['file'].'" class="img-fluid" alt="" style="height: 250px; width: 100%;"></a>
                <div class="portfolio-info">
                  <h4>'.$row['brand'].'</h4>
                  <p><span> '.$row['city'].', </span><span '.$row['distr'].', </span><span> +'.$row['phone'].' </span></p>
                  <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            ';
}
?>






<?php

$data = "SELECT * FROM webdata WHERE category='designer' ORDER BY id DESC";
$data_run = mysqli_query($connect, $data);

while ($row = mysqli_fetch_assoc($data_run)) 
{
    echo '
            <div class="col-xl-4 col-md-6 portfolio-item filter-designer">
              <div class="portfolio-wrap">
                <a href="'.$row['file'].'" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$row['file'].'" class="img-fluid" alt="" style="height: 250px; width: 100%;"></a>
                <div class="portfolio-info">
                  <h4>'.$row['brand'].'</h4>
                  <p><span> '.$row['city'].', </span><span '.$row['distr'].', </span><span> +'.$row['phone'].' </span></p>
                  <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            ';
}
?>

<?php

$data = "SELECT * FROM webdata WHERE category='special hire' ORDER BY id DESC";
$data_run = mysqli_query($connect, $data);

while ($row = mysqli_fetch_assoc($data_run)) 
{
    echo '
            <div class="col-xl-4 col-md-6 portfolio-item filter-special_hire">
              <div class="portfolio-wrap">
                <a href="'.$row['file'].'" data-gallery="portfolio-gallery-app" class="glightbox"><img src="'.$row['file'].'" class="img-fluid" alt="" style="height: 250px; width: 100%;"></a>
                <div class="portfolio-info">
                  <h4>'.$row['brand'].'</h4>
                  <p><span> '.$row['city'].', </span><span '.$row['distr'].', </span><span> +'.$row['phone'].' </span></p>
                  <a href="portfolio-details.php?id='.$row['id'].'" title="More Details">More</a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            ';
}
?>
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

<?php
include "footer.html";
?>
</html>
