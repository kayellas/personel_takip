<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //retrieve from data
    $username = $_POST['kullanici_adi'];
    $password = $_POST['sifre'];
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
    $query = "SELECT * FROM kullanici WHERE kullanici_adi='$username' AND sifre='$password'";
    $result = $conn->query($query);

    if($result->num_rows ==1 ){
        //login success
        header("Location: sidebar/index.html");
    }
    else{
        //login failed
        header("Location: error.html");
        exit();
    }
    $conn->close();





?>

