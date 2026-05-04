<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php'; ?>
</head>

<body>
<?php include 'includes/header.php'; ?>
<main class="main">
  <!-- Timeline -->
  <div class="container">
    
      <section id="timeLine" class="timeLine section">

        <!-- ===== Section Title ===== -->
        <div class="container section-title">
          <h2>Nasze podróże razem</h2>
          <h3>Podzielone na lata</h3>
          <h5 id="distanceCar"></h5>
          <h5 id="distanceFlight"></h5>
        </div>

        <!-- ===== Timeline ===== -->
        <div class="container">
          <div class="timeline-track">
            <?php
            include 'trips.php';
            foreach ($trips as $year => $yearTrips) {
            ?>
            <div class="timeLine-item">
              <div class="row align-items-center">
                <span class="timeline-dot"></span>
                <div class="col-12 col-md-2 col-lg-2 d-flex align-items-center position-relative">
                  <h3 class="timeLine-title"><?php echo $year; ?></h3>
                </div>
              </div>
            </div>
            <?php
            foreach ($yearTrips as $trip) {
            ?>
            <div class="timeLine-item">
              <div class="row">
                <div class="offset-md-2 offset-lg-2 col-12 col-md-4 col-lg-4">
                  <h4 class="trip-title">
                    <?php if ($trip['url']) { ?>
                    <a href="<?php echo $trip['url']; ?>">
                      <?php echo $trip['title']; ?>
                    </a>
                    <?php } else { ?>
                      <?php echo $trip['title']; ?>
                    <?php } ?>
                  </h4>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                  <h5 class="trip-cities">
                    <?php
                    $cityLinks = [];
                    foreach ($trip['cities'] as $city) {
                        if ($city['url']) {
                            $cityLinks[] = '<a href="' . $city['url'] . '">' . $city['name'] . '</a>';
                        } else {
                            $cityLinks[] = $city['name'];
                        }
                    }
                    echo implode(', ', $cityLinks);
                    ?>
                  </h5>
                </div>
              </div>
            </div>
            <?php
            }
            }
            ?>
          </div>
        </div>

      </section><!-- /timeLine Section -->
    </div>
  

</main>


<?php include 'includes/footer.php'; ?>
<script src="./assets/vendor/aos/aos.js"></script>
<script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Main JS File -->
<script src="./assets/js/main.js"></script>
<script src="./assets/js/distance.js"></script>
</body>

</html>