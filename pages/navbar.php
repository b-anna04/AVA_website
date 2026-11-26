<?php function navBar() {
    // Az aktuális oldal elérési útjának lekérése
    $current_page = basename($_SERVER['SCRIPT_NAME']);

    // Menüpontok definiálása
    $menu_items = [
        '' => 'Kezdőlap',
        'edzesek' => 'Edzések',
        'galeria' => 'Galéria',
        'kapcsolat' => 'Kapcsolat'
        
    ];
?>
    <!-- Tartalomhoz ugrás horgony -->
    <a href="#tartalom" class="my-anchor">Ugrás a tartalomra</a>

    <!-- Fejléc háttér -->
    <header>
        <div class="my_container">
            <img src="images/AVAhatter.svg" alt="Menü feletti egyesületi logó" class="fejlec_kep">
            <a href="https://www.alfoldvivoakademia.hu/"><img src="images/AVAfeliratos.svg" alt="Menü feletti egyesületi logó" class="centered"></a>
        </div>
    </header>

    <!-- Navigációs sáv -->
    <nav class="my_navbar" id="myTopnav">
        <input class="menu-btn" type="checkbox" id="menu-btn">
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php foreach ($menu_items as $file => $title): ?>
                <li itemprop="name">
                    <a itemprop="url" href="https://www.alfoldvivoakademia.hu/<?php echo $file; ?>" class="<?php echo ($current_page == $file) ? 'nav_active' : 'nav_a'; ?>">
                        <?php echo $title; ?>
                    </a>
                </li>
            <?php endforeach; ?>
            <li class="dropdownn" itemprop="name">
                <a itemprop="url" class="nav_a" href="#">Versenyek <i class="fa fa-caret-down"></i></a>
                <div class="dropdownn-content ch">
                    <!-- <a class="nav_a" href="https://www.alfoldvivoakademia.hu/kgykorverseny">Kulcsár Győző Körverseny</a> -->
                    <a itemprop="url" class="nav_a" href="https://versenyinfo.hunfencing.hu/index.php?p=pRanglista" target="_blank">Országos ranglista <sup><i class="fa-solid fa-up-right-from-square"></i></sup></a>
                    <a itemprop="url" class="nav_a" href="https://www.hunfencing.hu/" target="_blank">Magyar Vívó Szövetség <sup><i class="fa-solid fa-up-right-from-square"></i></sup></a>
                </div>
            </li>
        </ul>
    </nav>
<?php }?>
