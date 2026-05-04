<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../includes/head.php'; ?>
</head>

<body class="index-page">

  <?php include '../../includes/header.php'; ?>

  <main class="main">

    <!-- Portfolio Section -->
    <section class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Nowy Rok 2021</span>
        <h2>Nowy Rok 2021</h2>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-left">
              <div class="col-lg-4">
                <img src="/trips/2021/vienna_baden/google_1.png" class="img-fluid" alt="">
              </div>
              
              <div class="col-lg-7">
                <h3 class="text-start">Samochodem z Krakowa do Baden do wód,</h3>
                <h3 class="text-start">potem do Wiednia na Nowy Rok,</h3>
                <h3 class="text-start">powrót do domu</h3>
                <h3 class="text-start" id="carNy21">razem około 1000 km</h3>
                <br/>
                <h3 class="text-start"><a href="cities/vienna_21.html">Wiedeń</a></h3>
                <h3 class="text-start"><a href="cities/baden_21.html">Baden</a></h3>
                
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

  const carNy21 = parseInt(
          document.getElementById('carNy21').innerText.replace(/\D/g, ''),
          10
  );
  localStorage.setItem('carNy21', JSON.stringify(carNy21));
  
</script>

</body>

</html>