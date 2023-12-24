<?php
echo "dasda";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //retrieve from data
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];
}
    //database connection

    $host = "localhost";
    $dbUsername = "root";
    $dbpassword = "";
    $dbName = "personel_takip";


    $conn = new mysqli($host, $dbUsername, $dbpassword, $dbName );

    if($conn-> connect_error){
        die("Bağlantı Hatası: ".$conn-> connect_error);
    }

    //validate login authentiction
    $query = "SELECT * FROM kullanici WHERE kullanici_adi='$kullanici_adi' AND sifre='$sifre'";
    $result = $conn->query($query);

    if($result->num_rows == 1 ){
        //login success
        header("Location:home.html");
    }
    else{
        //login failed
        header("Location:error.html");
        exit();
    }

    // Veritabanından veri çek
    $sql = "SELECT * FROM personel";
    $result = $conn->query($sql);
    

    $conn->close();
?>

