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

  <title>Registration | Brand</title>
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
        <h1><img src="shuuli.png" style="transform: scale(2.5); margin-left: 50px;"></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Registration</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Register</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= registration Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Brand Details</h4>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location</h4>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Contacts</h4>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="register-form.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 form-group">
                <select class="form-control" name="category" id="arrayDropdown" style="margin: 5px;" required >
				           <option value="">select category</option>
                   <script>
                    var arr=["mc","dancer","dj","designer"];
                    arr.map((op,i)=>{
                      options+='<option value="${op}" id="${i}" style="border-radius:5px;"">${op}</option>'
                    })
                    document.getElementById("arrayDropdown").innerHTML=options;
                   </script>
				           <option value="Mc">Mc</option>
				           <option value="Dancer">Dancer</option>
				           <option value="Dj">Dj</option>
				           <option value="Designer">Designer</option>
                   <option value="maids_brighters">maids&brighters</option>
                   <option value="venue">venue</option>
                   <option value="special_hire">special hire</option>
                   <option value="caterer">caterer</option>
			          </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" name="tin" class="form-control" style="margin: 5px;" id="tin" placeholder="TIN Number" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="brand" class="form-control" style="margin: 5px;" id="brand" placeholder="Brand Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" name="name" class="form-control" id="name" style="margin: 5px;" placeholder="Brand Owner" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <input type="password" class="form-control" name="pass" id="pass" style="margin: 5px;" placeholder="Password" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="pass1" id="pass1" style="margin: 5px;" placeholder="Confirm Password" required>
                </div>
              </div>
              <div class="form-group mt-3">
              <input type="file" class="form-control" name="file" id="logo" style="margin: 5px;"  required>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6 form-group">
                  <select class="form-control" name="city" class="form-control" style="margin: 5px;" id="city" placeholder="Country" required>
                  <option selected disabled>Choose Region</option>
				           <?php
                    $result = mysqli_query($connect,"SELECT * FROM regions ");
                     while($row = mysqli_fetch_array($result) ) {
                   ?>
                  <option value="<?php echo $row['Region'] ;?>"><?php echo $row["Region"];?></option>
                    <?php
                   }
                  ?>
                </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-control" name="distr" class="form-control" style="margin: 5px;" id="city" placeholder="Country" required>
                  <option selected disabled>Choose District</option>
				           <?php
                   
                    $result = mysqli_query($connect,"SELECT * FROM districts WHERE code=2  ");
                    while($row = mysqli_fetch_array($result))
                      {
                    ?>
                  <option value="<?php echo $row['district'];?>"><?php echo $row["district"];?></option>
                    <?php
                  }
                  ?>
                </select>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="phone" class="form-control" style="margin: 5px;" id="phone" placeholder="Mobile:" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" name="phone1" class="form-control" style="margin: 5px;" id="phone1" placeholder="Other Mobile:" >
                </div>
              </div>
              <div class="form-group mt-3">
              <input type="email" name="email" class="form-control" style="margin: 5px;" id="email" placeholder="Email Address" required>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <p style="margin: 5px;"><i class="bi bi-facebook" style="position: absolute; margin: 8px;"></i><input type="text" name="link" class="form-control" id="link" style="padding-left: 30px;" placeholder="Facebook" required></p>
                </div>
                <div class="col-md-6 form-group">
                <p style="margin: 5px;"><i class="bi bi-instagram" style="position: absolute; margin: 8px;"></i><input type="text" name="link1" class="form-control" id="link1" style="padding-left: 30px;" placeholder="Instagram" required></p>
                </div>
                <div class="col-md-6 form-group">
                <p style="margin: 5px;"><i class="bi bi-twitter" style="position: absolute; margin: 8px;"></i><input type="text" name="link2" class="form-control" id="link2" style="padding-left: 30px;" placeholder="Twitter" required></p>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <textarea class="form-control" name="other" style="margin: 5px;" rows="7" placeholder="More Details" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="register" style="width: 30%; background: #017466; color: #fff; border: 2px solid #028a7a; height: 60px; border-radius: 50px; font-size: 18px;">Register</button></div>
            </form>
          </div><!-- End registration Form -->

        </div>

      </div>
    </section><!-- End registration Section -->

  </main><!-- End #main -->

  <?php
include "footer.html";
?>