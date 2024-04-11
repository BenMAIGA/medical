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

  <title>Impact Bootstrap Template - Portfolio Details</title>
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


    <!-- ======= registration Section ======= -->
    <section id="contact" class="contact">
    <a href="profile.php" class="btn btn-denger btn-sm" style="background: black; color:#fff; padding: 10px;">Back</a>
      <div class="container" data-aos="fade-up">
        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <div>
                  <h4>Event Details</h4>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <div>
                  <h4>Location</h4>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <div>
                  <h4>Event Date</h4>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <?php
          if(isset($_GET['id']))
          {
            $event_id = mysqli_real_escape_string($connect, $_GET['id']);
            $query = "SELECT * FROM eventdata WHERE id='$event_id'";
            $query_run = mysqli_query($connect, $query);

            if(mysqli_num_rows($query_run) > 0){
              $data = mysqli_fetch_array($query_run);
            }
            else
            {

            }
          }
          ?>
            <form action="event-form.php" method="POST">
            <input type="hidden" name="id" value="<?=$data['id']; ?>">
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="event" id="event" value="<?=$data['event']; ?>" style="margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;">
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="sub" class="form-control" id="sub" value="<?=$data['sub']; ?>" style="margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="dedicate" id="dedicat" style="margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;" value="<?=$data['dedicate']; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <input type="file" class="form-control" value="<?=$data['photo']; ?>" name="photo" id="photo" style="margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6 form-group">
                <input type="text" name="city" class="form-control" id="city1" style="margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;" value="<?=$data['city']; ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" name="place" class="form-control" id="place" style="margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;" value="<?=$data['place']; ?>">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>From</label>
                  <input type="date" name="date" class="form-control" id="from" value="<?=$data['date']; ?>" style="margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>To</label>
                  <input type="date" name="date1" class="form-control" id="to" style="margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;" value="<?=$data['date1']; ?>">
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="sms" rows="7" placeholder="<?=$data['sms']; ?>" value="<?=$data['sms']; ?>" style="width: 50%; margin: 5px;background: rgba(224, 224, 224, 0.425);color: grey;" ></textarea>
              </div>
              <div class="text-center"><button type="submit" name="update_event" style="width: 30%; background: #017466; color: #fff; border: 2px solid #028a7a; height: 60px; border-radius: 50px; font-size: 18px; margin: 5px;">Update Event</button></div>
            </form>
          </div><!-- End registration Form -->

        </div>

      </div>
    </section><!-- End registration Section -->

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
include('footer.html');
?>