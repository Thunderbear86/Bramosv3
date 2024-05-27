<?php
require 'settings/init.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? null;
    $description = $_POST['description'] ?? null;
    $url = $_POST['url'] ?? null;
    $pricing = $_POST['pricing'] ?? 'gratis';
    $categories = $_POST['categories'] ?? null;
    $image = $_FILES['image']['name'] ?? null;

    if ($image) {
        $target_directory = "uploads/";
        $target_file = $target_directory . basename($_FILES["image"]["name"]);
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image = null;
        }
    }

    if (empty($name) || empty($description)) {
        echo "Navn og beskrivelse skal udfyldes.";
        exit;
    }

    $sql = "INSERT INTO aisolutions (name, description, url, categories, image_url, pricing) VALUES (:name, :description, :url, :categories, :image_url, :pricing)";
    $params = [
        ':name' => $name,
        ':description' => $description,
        ':url' => $url,
        ':categories' => $categories,
        ':image_url' => $image,
        ':pricing' => $pricing
    ];
    $db->sql($sql, $params, false);

    echo "Ny AI-løsning tilføjet.";
    header("Location: catalog.php");
} else {
    echo "Fejl: Ingen data sendt.";
}
?>
