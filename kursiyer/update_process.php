<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kursiyer_id'])) {
    $kursiyerId = $_POST['kursiyer_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "personel_takip";

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed" . $connection->connect_error);
    }

    $kursiyerAd = $_POST['kursiyer_ad'];
    $kursiyerSoyad = $_POST['kursiyer_soyad'];
    $kursiyerTc = $_POST['kursiyer_tc'];
    $kursiyerMail = $_POST['kursiyer_mail'];
    $kursiyerTel = $_POST['kursiyer_tel'];
    $kursiyerOdeme = $_POST['kursiyer_odeme'];

    $kursAd = $_POST['kurs_ad'];

    $sql = "UPDATE kursiyer SET 
        kursiyer_ad = ?, 
        kursiyer_soyad = ?, 
        kursiyer_tc = ?, 
        kursiyer_mail = ?, 
        kursiyer_tel = ?, 
        kursiyer_odeme = ?, 
        kurs_ad = ?
        WHERE kursiyer_id = ?";

    $stmt = $connection->prepare($sql);

    $stmt->bind_param("sssssssi", $kursiyerAd, $kursiyerSoyad, $kursiyerTc, $kursiyerMail, $kursiyerTel,  $kursiyerOdeme, $kursAd, $kursiyerId);

    if ($stmt->execute()) {
        // Başarılı bir şekilde güncellendiğinde kursiyer.php sayfasına yönlendirme yapabilirsiniz
        /* header("Location: kursiyer.php"); */
        echo '<script type="text/javascript">alert("Güncelleme başarıyla gerçekleştirildi.");</script>';
        header("Location: update_process.php");

        exit();
    } else {
        die("Güncelleme hatası: " . $stmt->error);
    }

    $stmt->close();
    $connection->close();

} else {
    // Hatalı veya eksik parametrelerle erişim durumunda başka bir sayfaya yönlendirme yapabilirsiniz
    header("Location: kursiyer.php");
    exit();
}
?>
