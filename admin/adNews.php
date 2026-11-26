<?php
session_start();
$_SESSION['upload_message2'] = '';
include_once('../storage.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_news'])) {
    // Bekért adatok
    $title = $_POST['title'];
    $date = $_POST['date'];
    $link = $_POST['link'];

    // Dátum validálás (formátum ellenőrzés)
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        $_SESSION['upload_message2'] = 'Hibás dátum formátum! Használj yyyy-mm-dd formátumot.';
        header("Location: admin.php?#hirek");
        exit();
    } else {
        // Kép kezelése
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // Kép kiterjesztésének ellenőrzése
            $file_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($file_ext, $allowed_ext)) {
                $_SESSION['upload_message2'] = 'Csak képfájlok (jpg, jpeg, png, gif) tölthetők fel!';
                header("Location: admin.php?#hirek");
                exit();
            }

            $imageTmpName = $_FILES['image']['tmp_name'];
            $imageName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME) . '.' . $file_ext;
            $imagePath = '../images/news/' . $imageName;

            // Kép áthelyezése
            if (move_uploaded_file($imageTmpName, $imagePath)) {
                // Új hír hozzáadása a JSON-hoz
                $news = [
                    'id' => uniqid(), // Egyedi ID generálása
                    'title' => $title,
                    'date' => $date,
                    'image' => $imagePath, // Kép elérési útja
                    'link' => $link,
                ];

                // A meglévő autó adatokat tároló fájl betöltése
                $storage = new Storage(new JsonIO('../data/news.json'));

                // Új hír hozzáadása a JSON fájlhoz
                $storage->add($news);

                $_SESSION['upload_message2'] = '';
                header("Location: admin.php?#hirek");
                exit();
            } else {
                $_SESSION['upload_message2'] = 'A kép feltöltése sikertelen!';
                header("Location: admin.php?#hirek");
                exit();
            }
        } else {
            $_SESSION['upload_message2'] = 'Nincs kép kiválasztva vagy hiba történt a feltöltéskor!';
            header("Location: admin.php?#hirek");
            exit();
        }
    }
}
?>
