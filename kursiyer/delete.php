<?php
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

    // Tablodan satırı sil
    $sqlDeleteTable = "DELETE FROM kursiyer WHERE kursiyer_id = $kursiyerId";
    $resultDeleteTable = $connection->query($sqlDeleteTable);

    if (!$resultDeleteTable) {
        die("Tablo silme işlemi başarısız:" . $connection->error);
        
    }

    // Veritabanından satırı sil
    $sqlDeleteDatabase = "DELETE FROM kursiyer WHERE kursiyer_id = ?";
    
    $stmt = $connection->prepare($sqlDeleteDatabase);
    $stmt->bind_param("i", $kursiyerId);

    if ($stmt->execute()) {
        // Başarılı bir şekilde silindiğinde ana sayfaya yönlendirme yapabilirsiniz
        echo '<script type="text/javascript">alert("Güncelleme başarıyla gerçekleştirildi.");</script>';
        header("Location:panel.php");
        exit();
    } else {
        die("Veritabanı silme işlemi başarısız:" . $stmt->error);
    }

    $stmt->close();
    $connection->close();

} else {
    // Hatalı veya eksik parametrelerle erişim durumunda başka bir sayfaya yönlendirme yapabilirsiniz
    header("Location: kursiyer.php");
    exit();
}
?>
