<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../../../includes/head.php'; ?>
</head>

<body class="starter-page-page">

  <?php include '../../../includes/header.php'; ?>

  <main class="main">

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Wrocław, Polska</span>
        <h1>Wrocław, Polska</h1>
        <p>Urodziny we Wrocławiu - 2021</p>
        <p id="carWr21">Kraków - Wrocław - Kraków: około 550 km</p>
      </div><!-- End Section Title -->

    </section><!-- /Starter Section  -->
    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_2194.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_2194_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_2200.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_2200_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_4983.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_4983_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_4986.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_4986_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_4990.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_4990_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_4994.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_4994_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_4988.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_4988_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_4998.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_4998_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_5002.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_5002_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_5014.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_5014_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_5015.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_5015_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="/trips/2021/wroclaw/IMG_5020.jpeg" class="glightbox" data-gallery="images-gallery">
                <img oncontextmenu="return false" src="/trips/2021/wroclaw/IMG_5020_s.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->
          
        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>

  
<?php include '../../../includes/footer.php'; ?>
<script src="../../../assets/vendor/aos/aos.js"></script>
<!--  <script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>-->
  <script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<!--  <script src="../../../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>-->
<!--  <script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>-->

  <!-- Main JS File -->
  <script src="../../../assets/js/main.js"></script>

  <script>

    const carWr21 = parseInt(
            document.getElementById('carWr21').innerText.replace(/\D/g, ''),
            10
    );
    localStorage.setItem('carWr21', JSON.stringify(carWr21));
    localStorage.setItem('carWr21', JSON.stringify(carWr21));
    
  </script>

</body>

</html>