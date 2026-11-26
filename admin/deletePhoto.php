<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    die("Nincs jogosultságod a művelethez!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_image'])) {
    $image_name = $_POST['delete_image'];
    $file_path = "../gallery/" . $image_name;

    if (file_exists($file_path)) {
        if (unlink($file_path)) {
            header("Location: admin.php");
            exit();
        } else {
            echo "Hiba történt a fájl törlésekor.";
        }
    } else {
        echo "A fájl nem található.";
    }
} else {
    echo "Érvénytelen kérés.";
}
?>
