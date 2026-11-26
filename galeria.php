<?php
  include_once "pages/navbar.php";
  include_once "pages/footer.php";
  include_once "pages/gallery.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Galéria - Alföld Vívó Akadémia</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="theme-color" content="#293b87">
  <meta name="copyright" content="© 2025 Alföld Vívó Akadémia">

  <meta name="robots" content="noindex, follow">
  
  <link rel="canonical" href="https://www.alfoldvivoakademia.hu/">
  
  <!--favicon-->
  <!-- Google által preferált PNG -->
  <link rel="icon" type="image/png" sizes="144x144" href="/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

  <!-- ICO fallback régebbi böngészőknek -->
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="shortcut icon" href="/favicon.ico">

  <!--bootstrap 5.3.3-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!--ikonok-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  
  <!--css link-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5D4WZVSS');</script>
<!-- End Google Tag Manager -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-238ZZF7VXP"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-238ZZF7VXP');
  </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5D4WZVSS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  
  <!--Navbar-->
  <?= navBar(); ?>
  
  <!--Gallery-->
  <main id="tartalom">
    <?= gallery(); ?>
  </main>

  <!--Footer-->
  <?= footer(); ?>

  <!--javascript-->
  <script src="script/script.js"></script>

  <!--javascript-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init(
    {
      once: true,
      duration:"1600",
      disable: 'mobile'
    });
  </script>
</body>
</html>
