<?php
session_start();
$_SESSION['upload_message'] = '';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: admin.php");
    exit();
}

if (isset($_POST['upload_image']) && isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $target_dir = "../gallery/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Ellenőrzés, hogy a feltöltött fájl egy érvényes kép-e
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Kép feltöltése
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $_SESSION['upload_message'] = "";
            header("Location: admin.php?#galeria");
            exit();
        } else {
            $_SESSION['upload_message'] = "Hiba történt a kép feltöltésekor.";
            header("Location: admin.php?#galeria");
            exit();
        }
    } else {
        $_SESSION['upload_message'] = "A fájl nem egy érvényes kép.";
        header("Location: admin.php?#galeria");
        exit();
    }
} else {
    $_SESSION['upload_message'] = "Nincs kép kiválasztva, vagy hiba történt a fájl feltöltésében.";
    header("Location: admin.php?#galeria");
    exit();
}
?>
