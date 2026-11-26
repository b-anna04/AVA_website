<?php
  include_once "pages/navbar.php";
  include_once "pages/footer.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Kapcsolat - Alföld Vívó Akadémia</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="theme-color" content="#293b87">
  <meta name="copyright" content="© 2025 Alföld Vívó Akadémia">

  <meta name="robots" content="index, follow">

  <meta name="description" content="Az Alföld Vívó Akadémia kapcsolatok menüpontja. Elérhetőségek, e-mail címek, telefonszámok és minden egyéb.">

  <link rel="canonical" href="https://www.alfoldvivoakademia.hu/kapcsolat">

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

  <!--emailjs installation-->
  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
  </script>
  <script type="text/javascript">
    (function(){
        emailjs.init({
          publicKey: "QTTcRErS-EhZBfjKv",
        });
    })();
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-238ZZF7VXP"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-238ZZF7VXP');
  </script>
  
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Főoldal",
          "item": "https://www.alfoldvivoakademia.hu/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Kapcsolat",
          "item": "https://www.alfoldvivoakademia.hu/kapcsolat"
        }
      ]
    }
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "mainEntity": {
    "@type": "SportsClub",
    "@id": "https://www.alfoldvivoakademia.hu/#sportsclub",
    "name": "Alföld Vívó Akadémia",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "46.6826917",
      "longitude": "21.1138876"
    }
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Gyulai út 34.",
      "addressLocality": "Békéscsaba",
      "postalCode": "5600",
      "addressCountry": "HU"
    },
    "email": "alfoldvivoakademia2019@gmail.com",
    "employee": [
      {
        "@type": "Person",
        "name": "Nagy Nándor",
        "jobTitle": "Vezetőedző",
        "telephone": "+36302458759",
        "email": "big.nandor@gmail.com"
      },
      {
        "@type": "Person",
        "name": "Runa Andrea",
        "jobTitle": "Edző",
        "telephone": "+36706152924",
        "email": "runa.andrea@alfoldvivoakademia.hu"
      },
      {
        "@type": "Person",
        "name": "Mecskó Máté",
        "jobTitle": "Edző",
        "telephone": "+36306285673",
        "email": "mecsko.mate@alfoldvivoakademia.hu"
      }
    ]
  }
}
</script>
  
</head>
<body>
   <!--facebook iframe-->
   <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v20.0" nonce="SuH8qrUC"></script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5D4WZVSS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  
  <!--Navbar-->
  <?= navBar(); ?>
  
  <main id="tartalom">
    <div class="content">
      <h1>Kapcsolat</h1>
        <div class="contact">
            <li><b>Képviselő:</b> Maulis Lászlóné elnök</li>
            <li><b>Telefon:</b> +36 30 597 1636</li>
            <li><b>Vívóterem címe:</b> 5600 Békéscsaba, Gyulai út 34.</li>
            <li><b>Telefon:</b> +36 70 615 2924</li>
            <li><b>Levelezési cím:</b> 5600 Békéscsaba Gyulai út 34.</li>
            <li><b>Számlázási cím:</b> 5600 Békéscsaba Gyulai út 34.</li>
            <li><b>E-mail:</b> alfoldvivoakademia2019@gmail.com</li>
            <li><b>Fegyvernem:</b> párbajtőr</li>
      </div>
      <div class="contact">
        <div class="fb-page" data-href="https://www.facebook.com/avabekescsaba" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/avabekescsaba" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/avabekescsaba">AVA Békéscsaba</a></blockquote></div>
      </div>
      <!--meh-->
      <!--coaches-->
      <section>
      <h2>Az egyesületünk edzői és elérhetőségeik</h2>
      <br>
      <div class="row">
        <div class="col-lg-4 text-center kapcs_p">
          <!-- 
            <figure>
              <img src="images/grey_600x600.jpg" alt="Radnai Reinhart" class="edzo_kep">
              <figcaption>Radnai Reinhart</figcaption>
            </figure>
          -->
          <strong>Nagy Nándor</strong>
          <br>vezetőedző<br>
          <abbr title="Telefonszám"><b>tel.:</b></abbr>+36 30 245 8759<br>
          <b>e-mail:</b>big.nandor@gmail.com<br><br>
        </div>
        <div class="col-lg-4 text-center kapcs_p">
          <!-- 
            <figure>
              <img src="images/grey_600x600.jpg" alt="Runa Andrea" class="edzo_kep">
              <figcaption>Runa Andrea</figcaption>
            </figure>
          -->
          <strong>Runa Andrea</strong>
          <br>edző<br>
          <abbr title="Telefonszám"><b>tel.:</b></abbr> +36 70 615 2924<br>
          <b>e-mail:</b> runa.andrea@alfoldvivoakademia.hu<br><br>
        </div>
        <div class="col-lg-4 text-center kapcs_p">
          <!-- 
            <figure>
              <img src="images/mate.jpg" alt="Mecskó Máté" class="edzo_kep">
              <figcaption>Mecskó Máté</figcaption>
            </figure>
          -->
          <strong>Mecskó Máté</strong>
          <br>edző<br>
          <abbr title="Telefonszám"><b>tel.:</b></abbr> +36 30 628 5673<br>
          <b>e-mail:</b> mecsko.mate@alfoldvivoakademia.hu<br><br>
        </div>
      </div>
      <hr>
      </section>
      <br>
      <div>
        <div class="row">

          <!--map-->
          <div class="contact-container col-md-6 text-center column">
            <h3>Edzéseink helyszíne</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d684.294339372572!2d21.113830385487603!3d46.682500448400866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47442b2bee192471%3A0x925d5e4dbc0820b4!2zVsOtdsOzdGVyZW0!5e0!3m2!1shu!2shu!4v1711190213373!5m2!1shu!2shu" width="100%" height="440" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div> 

          <!--form-->
          <div class="contact-container col-md-6 column">
            <h3>Vedd fel velünk a kapcsolatot</h3>
            <form id="contact-form" onsubmit="sendMail(); return false;">
              <input type="text" id="name" name="name" placeholder="Név" class="contact-inputs" required>
              <input type="email" id="email" name="email" placeholder="E-mail cím" class="contact-inputs" required>
              <input type="text" id="subject" name="subject" placeholder="Tárgy" class="contact-inputs" required>
              <textarea id="message" name="message" placeholder="Üzenet" style="min-height: 120px;" class="contact-inputs" required></textarea>
              <!--buttons-->
              <div class="btn-group d-flex justify-content-center">
                <button class="my_button" type="submit" onclick=""><b>Elküld</b><span class="loading" id="loading"></span></button>
              </div>
            </form>       
          </div>

        </div>
      </div>
    </div>
    <br>
  </main>
  
  <!--footer-->
  <?= footer(); ?>

  <!--javascript-->
  <script src="script/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
