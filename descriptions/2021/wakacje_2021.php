<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../includes/head.php'; ?>
</head>

<body class="starter-page-page">

  <?php include '../../includes/header.php'; ?>

  <main class="main">

    <!-- Portfolio Section -->
    <section class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Wakacje 2021</span>
        <h2>Wakacje 2021</h2>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-left">
              <div class="col-lg-4">
                <img src="/trips/2021/wakacje/google_2.jpg" class="img-fluid" alt="">
              </div>
              
              <div class="col-lg-7">
                <h3 class="text-start">Wakacje samochodem z Krakowa do Włoch:</h3>
                <h3 class="text-start">
                  <a href="./cities/karpacz_21.php">Karpacz</a>, 
                  <a href="./cities/pilsen_21.php">Pilzno</a>, 
                 Pergine Valsugana,
                  <a href="./cities/werona_21.php">Werona</a>,
                  <a href="./cities/rimini_21.php">Rimini</a>,</h3>
                <h3 class="text-start"><a href="./cities/rzym_21.php">Rzym</a>, 
                  okolice Sutri, 
                  <a href="./cities/ferrara_21.php">Ferrara</a>,  
                  <a href="./cities/wenecja_21.php">Wenecja</a> i</h3>
                <h3 class="text-start">powrót do domu</h3>
                <h3 class="text-start" id="carIt21">razem około 3620 km</h3>
                <br/>
                <h3 class="text-start">Plus wycieczki do</h3>
                <h3><a href="./cities/jeleniagora_21.php">Jelenia Góra</a>, Werona, jezioro Coldonazzo, 
                  <a href="./cities/sanmarino_21.php">San Marino</a></h3>
                
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

    const carIt21 = parseInt(
            document.getElementById('carIt21').innerText.replace(/\D/g, ''),
            10
    );
    localStorage.setItem('carIt21', JSON.stringify(carIt21));

  </script>

</body>

</html>