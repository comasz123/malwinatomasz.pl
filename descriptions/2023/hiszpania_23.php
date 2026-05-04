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
        <span class="description-title">Samochodem przez północ Hiszpanii, 2023</span>
        <h2>Samochodem przez północ Hiszpanii, 2023</h2>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-left">
              <div class="col-lg-4">
                <img src="/assets/img/trips_s/2023/hiszpania/google_spain_23.jpg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-7">
                <h3 class="text-start">Wyjazd samochodem</h3>
                <h3 class="text-start">
                  <a href="./cities/el_escorial_23.php">El Escorial</a> -
                  <a href="./cities/valle_delos_caidos_23.php">Valle de los Caidos</a> -
                  <a href="./cities/siguenza_23.php">Sigüenza</a> -
                  <a href="./cities/saragossa_23.php">Saragossa</a> -
                  <a href="./cities/pampeluna_23.php">Pampeluna</a> -
                  <a href="./cities/san_sebastian_23.php">Sam Sebastian</a> -
                  <a href="./cities/bilbao_23.php">Bilbao</a> -
                  <a href="./cities/wybrzeze_23.php">wybrzeże Santa Cruz</a> -
                  <a href="./cities/coruna_23.php">A Coruna</a> -
                  <a href="./cities/santiago_de_compostela_23.php">Santiago de Compostela</a> -
                  <a href="./cities/fisterra_23.php">Fisterra</a> -
                  <a href="./cities/madryt_23.php">Madryt</a> -
                </h3>
                <h3 class="text-start" id="carHisz23">razem około 2300 km</h3>
                <h3 class="text-start" id="flightHisz23">Przelot Krakow-Madryt-Krakow, około: 4400 km</h3>
                <br/>
              </div>
            </div>
          </div>
        
      </div><!-- End Section Title -->

    </section><!-- /Portfolio Section -->

  </main>

  
<?php include '../../includes/footer.php'; ?>
<script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script>
    
    const carHisz23 = parseInt(
            document.getElementById('carHisz23').innerText.replace(/\D/g, ''),
            10
    );
    localStorage.setItem('carHisz23', JSON.stringify(carHisz23));
    console.log('car='+carHisz23);
    
    const flightHisz23 = parseInt(
            document.getElementById('flightHisz23').innerText.replace(/\D/g, ''),
            10
    );
    localStorage.setItem('flightHisz23', JSON.stringify(flightHisz23));
    console.log('flight='+flightHisz23);

  </script>

</body>

</html>