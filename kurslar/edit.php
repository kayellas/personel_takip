<?php
include("header.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $kursId = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "personel_takip";

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed" . $connection->connect_error);
    }

    $sql = "SELECT * FROM kurs WHERE kurs_id = $kursId";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query:" . $connection->error);
    }

    $row = $result->fetch_assoc();

    // HTML formunu başlat
    echo '<form method="POST" action="update_process.php">';
    
    // Hidden input ile kursId'yi form içinde taşıyın
    echo '<input type="hidden" name="kurs_id" value="' . $kursId . '">';

    // Diğer input alanlarını ekleyin
    echo 'İsim: <input type="text" name="kurs_ad" value="' . $row['kurs_ad'] . '"><br>';
    echo 'Fİyat: <input type="text" name="kurs_fiyat" value="' . $row['kurs_fiyat'] . '"><br>';
    
    // Güncelleme butonu
    echo '<input type="submit" value="Güncelle">';
    
    // HTML formunu kapat
    echo '</form>';

    $connection->close();
} else {
    // Hatalı veya eksik parametrelerle erişim durumunda başka bir sayfaya yönlendirme yapabilirsiniz
    header("Location: kurs.php");
    exit();
}

include("../sidebar/footer.php");
?>
