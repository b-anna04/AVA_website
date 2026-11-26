<?php
  include_once "pages/navbar.php";
  include_once "pages/footer.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Kulcsár Győző Körverseny - Alföld Vívó Akadémia</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="robots" content="noindex, follow">
  
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
  
  <main id="tartalom">
    <div class="content">
      <div class="container-fluid" data-aos="fade-left">
        <div class="row flex-md-row-reverse index_divs">
          <figure class="col-md-6">
              <img src="images/350143838_266803139186944_5708137007802099347_n.jpg" alt="csoportkép" class="index_photos">
          </figure>
          <div class="col-md-6">
            <h1>Kulcsár Győző Körverseny</h1>
            <p>
              Az <strong>Olimpici Grand Prix</strong> nemzetközi párbajtőr versenysorozat több állomásból állt az évek során, és rendszerint a júniusi országos bajnoksággal zárult. 
              Az évek során egyre nagyobb tömegeket mozgatott meg, és nevelte ki a jobbnál jobb vívókat. A 2024-es párizsi olimpiai bajnok párbajtőr csapat tagjai mind ezen a versenysorozaton kezdték el bontogatni a szárnyaikat.
            </p>
            <p>
              Az 2024/25-ös szezontól az Olimpici Grand Prix-et a <strong>Kulcsár Győző Körverseny</strong> váltotta fel. A helyszínek, a lebonyolítás és a hatalmas indulólétszámok nagyrészt változatlanul maradtak.
            </p>
            <p>
              Az országos bajnokság előtti utolsó megmérettetés rendszerint minden évben az 5. állomása a körversenynek, amit a kezdetek óta egyesületünk bonyolít le. Az elmúlt évek tapasztalatai alapján elmondható, hogy itt szokott lenni az egyik <strong>legtöbb</strong> induló. Mind a szülők, edzők és a versenyzők véleményei alapján kijelenthetjük, hogy nagy sikerrel szokott végződni a 3 napos verseny <strong>Békéscsabán</strong>. Ez annak is köszönhető, hogy a vívóterem mellett a Városi Sportcsarnok <strong>20 pástot</strong> tud biztosít a versenyzőknek.
            </p>
          </div>
        </div>
      </div>
      <h6 data-aos="fade-left"> 
        Idén <strong>2025. május 9-11.</strong> között rendezik meg a versenyt a <strong>Városi Sportcsarnokban</strong>.
        <br>Várunk minden érdeklődőt sok szeretettel!
      </h6>
    </div>

    <a class="pdf-link" href="images/2022-2023_inv_GP5_Bcsaba_hu-1.pdf" download>PDF letöltése</a>
    <div class="kek-container">
      <img src="images/kek.png" alt="Background image" class="kek">
      <object data-aos="zoom-in" class="pdf" 
        data="images/Csaba Kupa vers. kiírás 2025 magyar.pdf" 
        type="application/pdf">
        <a href="images/2022-2023_inv_GP5_Bcsaba_hu-1.pdf"></a>
      </object>
      <img class="pdf-image" src="images/Képernyőkép 2025-02-13 170821.png" alt="PDF előnézeti kép" data-aos="zoom-in">
      <p class="esemeny ciip">
        Eredmények:<br>
        <a href="" class="link">Hamarosan</a>
      </p>
    </div>
  <div class="esemeny_mobile">
    <p class="text_centered ciip">
      Eredmények:<br>
      <a href="" class="link">Hamarosan</a>
    </p>
  </div>

    <div class="content row justify-content-center align-items-start" data-aos="fade-up">
      <!-- Bal oldali oszlop -->
      <div class="mellette col-md-6 d-flex flex-column justify-content-start align-items-center text-center">
        <img src="images/1143182-200.png" class="logok">
        <h3>Szállásajánlat</h3>
        <h5>Szállások Békéscsabán:</h5>
        <a href="https://www.visitbekescsaba.hu" class="link">www.visitbekescsaba.hu</a><br>
        <h5>Szállások Gyulán:</h5>
        <a href="https://www.gyulavaros.hu" class="link">www.gyulavaros.hu</a>
        <a href="https://www.kiadoapartman.hu" class="link">www.kiadoapartman.hu</a>
      </div>
      <!-- Jobb oldali oszlop -->
      <div class="mellette col-md-6 d-flex flex-column justify-content-start align-items-center text-center">
        <img src="images/png-logo-png-favpng-bnQXBdspUxidhRGqSV3Z6hM3w.png" class="logok">
        <h3>Programajánlat</h3>
        <h5>Gyulai Várfürdő</h5>
        <a href="https://www.varfurdo.hu" class="link">www.varfurdo.hu</a><br>
        <h5>Wenckheim-kastély, Szabadkígyós</h5>
        <a href="https://www.szabadkigyosikastely.hu" class="link">www.szabadkigyosikastely.hu</a>
      </div>
    </div>
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
