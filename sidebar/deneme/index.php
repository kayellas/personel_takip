<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel Listesi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Personel Listesi</h1>

    <?php
    // db_connect.php dosyasını include etme
    include 'login.php';

    // Veritabanındaki personel_tablo tablosundan verileri çekme
    $sql = "SELECT * FROM personel";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Tablo başlıklarını oluşturma
        echo "<table>";
        echo "<tr><th>TC Kimlik</th><th>Ad</th><th>Soyad</th><th>Telefon</th></tr>";

        // Verileri tabloya ekleme
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['personel_tc'] . "</td>";
            echo "<td>" . $row['personel_ad'] . "</td>";
            echo "<td>" . $row['personel_soyad'] . "</td>";
            echo "<td>" . $row['personel_tel'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Veri bulunamadı.";
    }

    // Veritabanı bağlantısını kapatma
    $conn->close();
    ?>

</body>
</html>
