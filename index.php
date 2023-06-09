<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pizzaria</title>
  <meta content="Pizzas gostosas" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php
  include_once('./config/constantes.php');
  include_once('./config/conexao.php');
  include_once('./func/func.php');

  
  ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include_once ('./components/menu-top.php');?>


  <!-- ======= Hero Section ======= -->
  <?php include_once ('./components/banner.php');?>

  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php include_once ('./components/about.php');?>
    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <?php include_once ('./components/cards.php');?>
    <!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <?php include_once ('./components/stats.php');?>
    <!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <?php include_once ('./components/cardapio.php');?>
    <!-- End Menu Section -->

    <!-- ======= Avaliaçao Section ======= -->
    <?php include_once ('./components/avaliacao.php');?>;
    <!-- End avaliação Section -->

    <!-- ======= Events Section ======= -->
    <?php include_once ('./components/events.php');?>
    <!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <?php include_once ('./components/chefs.php');?>
    <!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    <?php include_once ('./components/book.php');?>
    <!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <?php include_once ('./components/gallery.php');?>
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <?php include_once ('./components/contact.php');?>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once ('./components/footer.php');?>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>