<?php
  include_once "pages/navbar.php";
  include_once "pages/footer.php";
  include_once "pages/news.php";
?>

<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Alföld Vívó Akadémia - Békéscsabai vívás</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="theme-color" content="#293b87">
  <meta name="copyright" content="© 2025 Alföld Vívó Akadémia">
  
  <!-- Preconnect a gyorsabb betöltéshez -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

  <meta name="description" content="Az Alföld Vívó Akadémia Békéscsaba vívóklubja, ahol párbajtőr és kerekesszékes vívást gyakorolhatnak gyerekek és felnőttek, hobbi vagy versenyszinten.">

  <meta name="keywords" content="AVA, Alföld Vívó Akadémia, Békéscsaba, Vívás, Csabai vívás, békés vármegyei vívás, békés megyei vívás, békéscsabai vívás, amatőr vívás, hobbi vívás, verseny vívás, vívóterem, iskolai vívás, Jankay, iskolakezdés, párbajtőr, alföldi vivó akadémia, vívás gyerekeknek, vívás felnőtteknek, gyerek vívás, sulivívás, vívás fiataloknak, sport, sport békéscsaba, sport gyerekeknek, sport általános iskolásoknak, Kulcsár Győző Körverseny, Olimpici, békéscsabai vívó verseny">

  <meta name="robots" content="index, follow">

  <meta property="og:title" content="Alföld Vívó Akadémia">
  <meta property="og:url" content="https://www.alfoldvivoakademia.hu/">
  <meta property="og:description" content="Az Alföld Vívó Akadémia Békéscsaba vívóklubja. Az egyesület párbajtőr és kerekesszékes vívással foglalkozik, amelyet gyerekek és felnőttek egyaránt kipróbálhatnak és gyakorolhatnak, akár hobbi szinten, akár versenyszerűen.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://www.alfoldvivoakademia.hu/images/376572185_247499608260199_8033759319058404369_n.jpg">

  <link rel="canonical" href="https://www.alfoldvivoakademia.hu/">

  <!--favicon-->
  <!-- Google által preferált PNG -->
  <link rel="icon" type="image/png" sizes="144x144" href="/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

  <!-- ICO fallback régebbi böngészőknek -->
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/favicon.ico">

  <!--bootstrap 5.3.3-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

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
    }
  ]
}
</script>

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Alföld Vívó Akadémia",
      "url": "https://www.alfoldvivoakademia.hu/"
    }
</script>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SportsClub",
    "@id": "https://www.alfoldvivoakademia.hu/#sportsclub",
    "name": "Alföld Vívó Akadémia",
    "alternateName": "AVA",
    "url": "https://www.alfoldvivoakademia.hu/",
    "logo": "https://www.alfoldvivoakademia.hu/images/logo_2.svg",
    "image": "https://www.alfoldvivoakademia.hu/images/376572185_247499608260199_8033759319058404369_n.jpg",
    "description": "Az Alföld Vívó Akadémia Békéscsaba vívóklubja. Az egyesület párbajtőr és kerekesszékes vívással foglalkozik, amelyet gyerekek és felnőttek egyaránt kipróbálhatnak és gyakorolhatnak, akár hobbi szinten, akár versenyszerűen.",
    "knowsAbout": ["Fencing", "Épée", "Wheelchair fencing"],
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "46.6826917",
      "longitude": "21.1138876"
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Gyulai út 34.",
      "addressLocality": "Békéscsaba",
      "postalCode": "5600",
      "addressCountry": "HU"
    },
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "telephone": "+36-30-628-5673",
        "contactType": "customer service",
        "areaServed": "HU",
        "availableLanguage": ["Hungarian", "English"]
      },
      {
        "@type": "ContactPoint",
        "email": "alfoldvivoakademia2019@gmail.com",
        "contactType": "email"
      }
    ],
    "openingHours": [
      "Mo,Tu,We,Th,Fr 8:00-20:00"
    ],
    "sameAs": [
      "https://www.facebook.com/avabekescsaba",
      "https://www.instagram.com/alfoldvivoakademia"
    ]
  }
</script>



</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5D4WZVSS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  
  <!--Navbar-->
  <?= navBar(); ?>

  <picture>
    <source srcset="images/teremkep.webp" type="image/webp">
    <img src="images/teremkep.png" alt="Vívóterem" loading="lazy" fetchpriority="high" class="teremkep" width="2868" height="757">
  </picture>

  <main id="tartalom">
    
    <!--kezdolap-->
    <section>
      <div class="content">
        <h1 class="text_centered">Üdvözöljük az <strong>Alföld Vívó Akadémia</strong> honlapján!</h1>
        <div class="container-fluid" data-aos="fade-left" data-aos-delay="100">
          <div class="row flex-md-row-reverse index_divs">
            <picture class="col-md-6">
                <source srcset="images/376572185_247499608260199_8033759319058404369_n.webp" type="image/webp">
                <img src="images/376572185_247499608260199_8033759319058404369_n.jpg" alt="Békéscsabai vívó gyerekek csoportkép" loading="lazy" class="index_photos" width="681" height="454">
            </picture>
            <div class="col-md-6">
                <h2>Vívó egyesület Békéscsabán</h2>
                <p>
                    A klub <strong>párbajtőr vívással</strong> foglalkozik. A kicsiktől a nagyokig, képzettségi szinttől függetlenül bárki részt tud venni az edzéseinken, ugyanis a sportolni vágyók több csoportra vannak osztva, <strong>minden nap</strong> délután 4-től 8-ig.
                    Edzéseinken nagy hangsúlyt fektetünk a jó hangulatra, ahol a sportolók lépésről lépésre sajátíthatják el a vívás alapjait és fejleszthetik technikai tudásukat.
                </p>
                <p>
                    <strong>Iskolai tagozattal</strong> is foglalkozunk a <strong>Jankay Tibor Két Tanítású Nyelvű Általános Iskola</strong> sport tagozatán. A vívást választó fiataloknak az órarendjükbe épített időpontokban, iskolai időben vannak az edzéseik.
                    A rendszeres sportolás biztosítja számukra azt, hogy a tanórákon könnyebben fenn tudják tartani figyelmüket és magabiztosabban küzdjenek meg a mindennapi és iskolai kihívásokkal.
                </p>
              <a href="https://www.alfoldvivoakademia.hu/edzesek#orarend" class="orarend-link">Edzések időpontjai</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="parallax parallax2"></div>

    <!--Rólunk-->
    <section class="kekk">
      <div class="content container-fluid">
        <div class="row index_divs" data-aos="fade-right" data-aos-delay="100">
          <picture class="col-lg-6">
            <source srcset="images/letöltés.webp" type="image/webp">
            <img src="images/letöltés.jpg" alt="Régi vívó edzés" loading="lazy" class="index_photos" width="573" height="439">
          </picture>
          <div class="col-lg-6">
            <h2>A <strong>békéscsabai vívás</strong> története</h2>
            <p>
              Klubunk egykoron <b>Karácsonyi Lajos Vívó Egyesület</b> névvel kezdte meg működését a „Gödör” nevű helyen az 1970-es években. Nagyobb változásokat az ezredforduló hozott magával, ugyanis 2009-ben átköltözött az egyesület a mostani helyszínére, a <strong>Városi Sportcsarnok</strong> mellé. Majd új nevet kapott, és így lett <b>Alföld Vívó Akadémia</b> <abbr title="Alföld Vívó Akadémia">(AVA)</abbr>. Itt rengeteg tehetséges fiatal lépett pástra az évek alatt. Sajnos <strong>Békés vármegyében</strong> a diákoknak nincs sok lehetőségük folytatni egyetemi tanulmányaikat, ennek ellenére sokan a mai napig aktív részesei a sportnak. Hogy pár név említésre kerüljön kiemelkedő vívóink közül, <strong>Keszthelyi Zsombor</strong>, <strong>Dékány Kinga</strong>, <b>Gachályi Gréta</b> és <b>Petrovszki Áron</b> most a fővárosban vívnak, és érnek el sikereket itthoni és külföldi versenyeken egyaránt.
            </p>
            <p>
              Egyesületünkben számos sikeres edző dolgozott vagy nevelkedett. <b>Karácsony Lajos</b>, <b>Csetneki István</b> és <a href="http://bekeswiki.bmk.hu/index.php/Hajtman_J%C3%A1nos_(1957%E2%80%932020)" target="	_blank" class="orarend-link-feher"><b>Hajtman János</b></a> mind kiváló vívómesterek voltak. Tanítványaik számos sikert értek el az évek alatt. <b>Hajtman János</b> sikeres tanítványai nem csak a páston, hanem amellett is szép sikereket értek el tovább őrizve mesterük emlékét. <b>Ábelovszki Róbert</b>, <strong>Fekete Gábor</strong>, <b>Mecskó Máté</b> és <b>Runa Andrea</b> jelenleg is edzőként dolgozik.
            </p>
            <p>
              Jelenleg <b>közel 80 gyermek</b> tanulja a vívás rejtelmeit, járják végig az útjukat ebben a csodás sportban, amiben elismert edzőink lelkesen segítik őket. Így a jövőben bízhatunk abban, hogy újabb tehetségek fognak kikerülni az egyesületünk berkeiből.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--Miert a vivas-->
    <section>
      <div class="content">
        <div class="container-fluid" data-aos="fade-left" data-aos-delay="100">
          <div class="row flex-md-row-reverse index_divs">
            <picture class="col-md-6">
                <source srcset="images/484130608_610728898603933_5688892755863205533_n.webp" type="image/webp">
                <img src="images/484130608_610728898603933_5688892755863205533_n.jpg" alt="Gyerekek vívóedzésen Békéscsabán" loading="lazy" class="index_photos">
            </picture>
            <div class="col-md-6">
              <h2>Miért érdemes vívni?</h2>
              <p>
                A gyerekek számára a <strong>rendszeres mozgás</strong> alapvető fontosságú. A sport fejleszti a koordinációt, az egyensúlyérzéket, az állóképességet, miközben támogatja a koncentrációt, a kitartást és az önfegyelmet. Testmozgással a gyerekek egészségesebben fejlődnek, energikusabbak lesznek, és könnyebben birkóznak meg a mindennapokkal.
              </p>
              <p>
                A <strong>vívás</strong> egyedülálló sport, egyszerre fejleszti mind a testet és a szellemet. Javítja a gyorsaságot, a reakcióidőt és a stratégiai gondolkodást, mindeközben tanít a fegyelemre és koncentrációra. A rendszeres sportolás segít az élet számos területén, miközben edzéseinken játékosan sajátítják el a fiatalok a vívás alapjait.
              </p>
              <p>
                A vívás ugyan nagyrészt egyéni sport, de igen jó a <strong>közösségi élet</strong> nem csak az egyesületünk falain belül. <strong>Számos barátság</strong> alakulhat ki, ez a klubok közötti jóbarátságnak és az edzőtáboroknak, versenyeknek is köszönhető. Egyesületünk tagjai együtt fejlődnek, egymást támogatva sajátítják el a sportolás szabályait. Így a vívás nemcsak egy mozgásforma, hanem életre szóló készségeket és <strong>élményeket</strong> ad a gyerekeknek, amelyek a felnőtté válás során is nagy előnyt jelentenek.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="parallax parallax3"></div>

    <!--News-->
    <section>
      <div class="content">
        <!--Plakat-->
        <picture class="plakat-content" data-aos="zoom-in" data-aos-delay="200">
          <source srcset="images/plakat.webp" type="image/webp">
          <img src="images/plakat.png" alt="plakat" loading="lazy" class="plakat">
          <a href="https://www.alfoldvivoakademia.hu/edzesek#infok" class="edzes-button">További információk</a>
        </picture>

        <!--News-->
        <?= news(); ?>
      </div>
      <div style="text-align: center;">
        <a href="hirek" class="edzes-button">Összes hír megtekintése</a>
      </div>

    </section>

    <!--Partners-->
    <section>
      <div class="content">
        <h3 class="text_centered">Támogatóink</h3>
        <div class="flex-container">
          <a href="https://hunfencing.hu/" target="_blank" rel="noopener noreferrer">
            <img src="images/mvsz_logo_arany_keret.jpg" alt="Magyar Vívó Szövetség" loading="lazy">
          </a>
          <a href="https://shop.pbtfencing.hu/?lang=hu" target="_blank" rel="noopener noreferrer">
            <img src="images/pbt_logo.jpg" alt="PBT vívófelszerelés" loading="lazy">
          </a>
          <a href="https://bekescsaba.hu/" target="_blank" rel="noopener noreferrer">
            <img src="images/bekescsabalogo.jpg" alt="Békéscsabai önkormányzat" loading="lazy">
          </a>
        </div>
      </div>
    </section>
      
  </main>
  
  <!--footer-->
  <?= footer(); ?>

  <!--javascript-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init(
    {
      once: true,
      duration: 1400,
      disable: 'mobile'
    });
  </script>

</body>
</html>
