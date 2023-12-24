<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbConn = new mysqli(
    $_ENV['MYSQL_INSTANCE_NAME'],
    $_ENV['MYSQL_USER'],
    $_ENV['MYSQL_PASSWORD'],
    $_ENV['MYSQL_DB_NAME']
);

if ($dbConn->connect_error) {
    die("Bağlantı Hatası: " . $dbConn->connect_error);
}

echo "Veritabanına Bağlandı";

return $dbConn;
?>

