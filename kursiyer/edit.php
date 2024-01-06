<?php
include("header.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $kursiyerId = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "personel_takip";

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed" . $connection->connect_error);
    }

    $sql = "SELECT * FROM kursiyer WHERE kursiyer_id = $kursiyerId";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query:" . $connection->error);
    }

    $row = $result->fetch_assoc();

    // HTML formunu başlat
    echo '<form method="POST" action="update_process.php">';
    
    // Hidden input ile kursiyerId'yi form içinde taşıyın
    echo '<input type="hidden" name="kursiyer_id" value="' . $kursiyerId . '">';

    // Diğer input alanlarını ekleyin
    echo 'İsim: <input type="text" name="kursiyer_ad" value="' . $row['kursiyer_ad'] . '"><br>';
    echo 'Soyisim: <input type="text" name="kursiyer_soyad" value="' . $row['kursiyer_soyad'] . '"><br>';
    echo 'TC Kimlik: <input type="text" name="kursiyer_tc" value="' . $row['kursiyer_tc'] . '"><br>';
    echo 'Email: <input type="email" name="kursiyer_mail" value="' . $row['kursiyer_mail'] . '"><br>';
    echo 'Telefon Numarası: <input type="tel" name="kursiyer_tel" value="' . $row['kursiyer_tel'] . '"><br>';
    echo 'Kurs Adı: <input type="text" name="kurs_ad" value="' . $row['kurs_ad'] . '"><br>';
    echo 'Kursiyer Ödeme: <input type="text" name="kursiyer_odeme" value="' . $row['kursiyer_odeme'] . '"><br>';

    // Güncelleme butonu
    echo '<input type="submit" value="Güncelle">';
    
    // HTML formunu kapat
    echo '</form>';

    $connection->close();
} else {
    // Hatalı veya eksik parametrelerle erişim durumunda başka bir sayfaya yönlendirme yapabilirsiniz
    header("Location: panel.php");
    exit();
}

include("../sidebar/footer.php");
?>
