<?php
include("header.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $personelId = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "personel_takip";

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed" . $connection->connect_error);
    }

    $sql = "SELECT * FROM personel WHERE personel_id = $personelId";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query:" . $connection->error);
    }

    $row = $result->fetch_assoc();

    // HTML formunu başlat
    echo '<form method="POST" action="update_process.php">';
    
    // Hidden input ile personelId'yi form içinde taşıyın
    echo '<input type="hidden" name="personel_id" value="' . $personelId . '">';

    // Diğer input alanlarını ekleyin
    echo 'İsim: <input type="text" name="personel_ad" value="' . $row['personel_ad'] . '"><br>';
    echo 'Soyisim: <input type="text" name="personel_soyad" value="' . $row['personel_soyad'] . '"><br>';
    echo 'TC Kimlik: <input type="text" name="personel_tc" value="' . $row['personel_tc'] . '"><br>';
    echo 'Email: <input type="email" name="personel_mail" value="' . $row['personel_mail'] . '"><br>';
    echo 'Telefon Numarası: <input type="tel" name="personel_tel" value="' . $row['personel_tel'] . '"><br>';
    echo 'Personel Tipi: <input type="text" name="personel_tur_id" value="' . $row['personel_tur_id'] . '"><br>';

    // Güncelleme butonu
    echo '<input type="submit" value="Güncelle">';
    
    // HTML formunu kapat
    echo '</form>';

    $connection->close();
} else {
    // Hatalı veya eksik parametrelerle erişim durumunda başka bir sayfaya yönlendirme yapabilirsiniz
    header("Location: egitmen.php");
    exit();
}

include("../sidebar/footer.php");
?>
