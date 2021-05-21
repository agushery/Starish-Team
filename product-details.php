<?php
  include "koneksi.php";
  $id_produk = $_GET['id_produk'];
  $tampil=mysqli_query($conn,"SELECT * FROM product JOIN kategori
  ON product.id_kategori=kategori.id_kategori
  WHERE id_produk='$id_produk'");
  $data=mysqli_fetch_assoc($tampil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Starish Team</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoatas.jpg" rel="icon">
  <link href="assets/img/logoatas.jpg" rel="logoatas">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="index.php">Starish Team</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index.php#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Product Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Product Details</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <?php
                include "koneksi.php";
                $id_produk = $_GET['id_produk'];
                $ambil=mysqli_query($conn,"SELECT * FROM product_detail
                WHERE id_produk='$id_produk'");
                while($dataambil=mysqli_fetch_assoc($ambil)){
            ?>
                  <img src="assets/img/Produk/<?php echo $dataambil['nama_gambar'];?>" class="img-fluid" alt="">
            <?php } ?>
          </div>

          <div class="portfolio-info">
            <h3>Product information</h3>
            <ul>
              <li><strong>Category</strong>: <?php echo $data['nama_kategori'];?></li>
              <li><strong>Price</strong><?php echo ": Rp. ".number_format($data['harga_produk']);?></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2><?php echo $data['nama_produk'];?></h2>
          <p>
            <?php echo $data['deskripsi_produk']; ?>
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Starish Team</strong>. All Rights Reserved</p>
            <div class="credits">
              Designed by <a href="https://www.github.com/agushery">Agus Hery</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>