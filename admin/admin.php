<?php
session_start();

// JSON fájlból felhasználónév és jelszó beolvasása
$json_data = file_get_contents('admin.json');
$user_data = json_decode($json_data, true);

$valid_username = $user_data['username'];
$valid_password = $user_data['password'];

$_SESSION['upload_message'] = "";
$_SESSION['upload_message2'] = "";

include_once '../storage.php';
$storage = new Storage(new JsonIO('../data/news.json'));
// Hírek lekérése és dátum szerint rendezése csökkenő sorrendben
$newsArray = $storage->findAll();
usort($newsArray, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

// Hibás belépési adat esetén üzenet megjelenítése
$error_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && password_verify($password, $valid_password)) {
        $_SESSION['loggedin'] = true;
        header("Location: admin.php?");
        exit();
    } else {
        $error_message = "Hibás felhasználónév vagy jelszó.";
    }
}

// Kijelentkezés
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: admin.php");
    exit();
}?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <meta name="robots" content="noindex, nofollow">
</head>
<body>

<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
    
    <!--Belépve-->
    <div class="welcome">
        <h2>Szia Mátéé :3</h2>
        <p>Majd ne felejts el kijelentkezni!😡</p>
        <a href="admin.php?logout=true" class="logout">Kijelentkezés</a>
    </div>

    <!--Galéria-->
    <!--Form-->
    <div id="galeria" class="content">
        <div class="upload-container">
            <h2>Kép feltöltése</h2>
                <p class="error"><?php echo $_SESSION['upload_message'] ?></p>
            <form action="addPhoto.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" id="image" required><br>
                <button type="submit" name="upload_image">Feltöltés</button>
            </form>
        </div>

        <!--Galéria-->
        <div class="gallery-container">
            <h2>Feltöltött képek</h2>
            <div class="gallery-div">
                <?php
                $image_dir = "../gallery/";
                $images = array_diff(scandir($image_dir), array('.', '..'));

                foreach ($images as $image) {
                    $file_path = $image_dir . $image;
                    $file_ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

                    // Csak képfájlokat listázzunk ki
                    if (in_array($file_ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                        echo "<div class='gallery-item'>";
                        echo "<img src='$file_path' alt='$image' class='pici-kep'><br>";
                        echo "<span class='cim'>$image</span>";
                        echo "<form action='deletePhoto.php' method='POST' class='delete-form'>
                                <input type='hidden' name='delete_image' value='$image'>
                                <button type='submit' class='delete-btn'>Törlés</button>
                            </form>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!--Hírek-->
    <!--Form-->
    <div id="hirek" class="content">
    <div class="upload-container">
        <h2>Hír feltöltése</h2>
        <p class="error"><?php echo $_SESSION['upload_message2'] ?></p>
        <form action="adNews.php" method="POST" enctype="multipart/form-data">
            <label for="title">Cím:</label><br>
            <input type="text" name="title" id="title" required><br>

            <label for="date">Dátum (yyyy-mm-dd):</label><br>
            <input type="text" name="date" id="date" required><br>

            <label for="link">Link:</label><br>
            <input type="text" name="link" id="link" required><br>

            <label for="image">Kép feltöltése:</label><br>
            <input type="file" name="image" id="image" required><br>

            <button type="submit" name="upload_news">Feltöltés</button>
        </form>
    </div>

    <!--Hírek-->
    <div class="news-container">
        <h2>Feltöltött hírek</h2>
        <div class="news-grid">
            <?php foreach ($newsArray as $news): ?>
                <div class="news-card-wrapper">
                    <a href="<?php echo $news['link']; ?>" class="news-card" target="_blank">
                        <div class="card">
                            <img src="<?php echo $news['image']; ?>" class="card-img-top" alt="<?php echo $news['title']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $news['title']; ?></h5>
                                <p class="card-text"><small><?php echo $news['date']; ?></small></p>
                                <!-- Törlés gomb -->
                                <form action="deleteNews.php" method="POST">
                                    <input type="hidden" name="delete_news" value="<?php echo $news['id']; ?>">
                                    <button type="submit" class="delete-news-btn">Törlés</button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php else: ?>
    <!--Belépés-->
    <div class="login-container">
        <h2>Belépés</h2>
        <?php if ($error_message): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form action="admin.php" method="POST">
            <label for="username">Felhasználónév:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Jelszó:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Belépés</button>
        </form>
    </div>
    <a href="https://www.alfoldvivoakademia.hu/" class="vissza">Vissza a weboldalra</a>    
<?php endif; ?>
</body>
</html>
