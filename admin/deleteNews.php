<?php
include_once('../storage.php');  // Ha szükséges, helyezd ide a Storage.php importálást

// Ellenőrizd, hogy van-e 'delete_news' adat a POST-ban
if (isset($_POST['delete_news'])) {
    $newsId = $_POST['delete_news'];

    // Hozd létre az adattárolót
    $storage = new Storage(new JsonIO('../data/news.json'));

    // Keresd meg a törölni kívánt hír adatait
    $newsArray = $storage->findAll();
    $newsToDelete = null;

    foreach ($newsArray as $news) {
        if ($news['id'] === $newsId) {
            $newsToDelete = $news;
            break;
        }
    }

    // Ha megtaláltuk a hírt
    if ($newsToDelete !== null) {
        // Kép törlése a mappából
        $imagePath = $newsToDelete['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath);  // A kép törléséhez
        }

        // Törlés a JSON-ból
        $storage->delete($newsId);
    }

    // Visszairányítás a hírek oldalra
    header("Location: admin.php?#hirek");
    exit();
}
?>
