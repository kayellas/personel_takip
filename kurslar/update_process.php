<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kurs_id'])) {
    $kursId = $_POST['kurs_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "personel_takip";

    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed" . $connection->connect_error);
    }

    $kursAd = $_POST['kurs_ad'];
    $kursFiyat = $_POST['kurs_fiyat'];
    
   

    $sql = "UPDATE kurs SET 
        kurs_ad = ?, 
        kurs_fiyat = ?, 
      
        WHERE kurs_id = ?";

    $stmt = $connection->prepare($sql);

    $stmt->bind_param("ss", $kursAd, $kursFiyat);

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
    header("Location: kurs.php");
    exit();
}
?>
