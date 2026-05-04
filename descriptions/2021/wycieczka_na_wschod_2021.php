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
        <span class="description-title">Wycieczka na Wschód - 2021</span>
        <h2>Wycieczka na Wschód - 2021</h2>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-left">
              <div class="col-lg-4">
                <img src="/trips/2021/wycieczka_na_wschod/google_3.jpg" class="img-fluid" alt="">
              </div>
              
              <div class="col-lg-7">
                <h3 class="text-start">Wycieczka samochodem z Krakowa do 
                  <a href="./cities/przemysl_21.php">Przemyśla,</a></h3>
                <h3 class="text-start"><a href="./cities/zamosc_21.php">Zamościa</a> oraz <a href="./cities/krasiczyn_21.php">Krasiczyna</a></h3>
                  <h3 class="text-start" id="carPl21">razem jakieś 710 km</h3>
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
    const carPl21 = parseInt(
            document.getElementById('carPl21').innerText.replace(/\D/g, ''),
            10
    );
    localStorage.setItem('carPl21', JSON.stringify(carPl21));
    
  </script>

</body>

</html>