<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../includes/head.php'; ?>
</head>

<body class="starter-page-page">

  <?php include '../../includes/header.php'; ?>

  <main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Zima na Zanzibarze - 2022</span>
        <h2>Zima na Zanzibarze - 2022</h2>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-left">
              
              <div class="col-lg-5">
                <img src="https://zdjecia.malwinatomasz.pl/trips/2022/zanzibar_22/zanzibar_22_flight.jpg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-6">
                <h3 class="text-start">Przelot samolotem czarterowym</h3>
                <h3 class="text-start">Kraków - Stone Town - Krakow</h3>
                <h3 class="text-start" id="flightZz22">około 15000 km</h3>
              </div>
              <div class="col-lg-6">
                <h3 class="text-start">Pobyt na wyspie:</h3>
                <h3 class="text-start"><a href="./cities/stone_town_22.html">Stone Town</a>, Promised land 
                  <a href="./cities/promised_land_22.html">Lodge,</a> </h3>
                  <a href="./cities/pwani_mchangani_22.html">Pwani Mchangani</a>
                <h3 class="text-start" id="carZz22">niecałe 250 km</h3>
              </div>
              <div class="col-lg-5">
                <img src="https://zdjecia.malwinatomasz.pl/trips/2022/zanzibar_22/zanzibar_22_car.jpg" class="img-fluid" alt="">
              </div>
              
            </div>
          </div>
        
      </div><!-- End Section Title -->

      <div class="container-fluid">

      

      </div>

    </section><!-- /Portfolio Section -->
    

  </main>

  
<?php include '../../includes/footer.php'; ?>
<script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script>
    
    const flightZz22 = parseInt(
            document.getElementById('flightZz22').innerText.replace(/\D/g, ''),
            10
    );
    localStorage.setItem('flightZz22', JSON.stringify(flightZz22));
    console.log('flight='+flightZz22);

    const carZz22 = parseInt(
            document.getElementById('carZz22').innerText.replace(/\D/g, ''),
            10
    );
    localStorage.setItem('carZz22', JSON.stringify(carZz22));
    console.log('car='+carZz22);
  </script>

</body>

</html>