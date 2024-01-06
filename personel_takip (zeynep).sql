-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Oca 2024, 19:27:03
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `personel_takip`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurs`
--

CREATE TABLE `kurs` (
  `kurs_id` int(11) NOT NULL,
  `kurs_ad` varchar(45) NOT NULL,
  `personel_id` int(11) DEFAULT NULL,
  `kurs_baslangic` date DEFAULT NULL,
  `kurs_bitis` date DEFAULT NULL,
  `kurs_fiyat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kurs`
--

INSERT INTO `kurs` (`kurs_id`, `kurs_ad`, `personel_id`, `kurs_baslangic`, `kurs_bitis`, `kurs_fiyat`) VALUES
(500, 'Silahlı Özel Güvenlik', 0, '2022-12-01', '2023-01-01', '18.000'),
(501, 'Silahsız Özel Güvenlik', 0, '2023-01-01', '2023-02-01', '15.000'),
(502, 'Temel İlk Yardım', 0, '2023-10-01', '2023-11-01', '5.000'),
(503, 'Afad Kurtarma Eğitimi', 0, '2024-02-01', '2024-03-01', '5.000'),
(504, 'Etkili İletişim ve Yönetim', 0, '2023-12-25', '2024-01-25', '12.000');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kursiyer`
--

CREATE TABLE `kursiyer` (
  `kursiyer_id` int(11) NOT NULL,
  `kursiyer_ad` varchar(45) NOT NULL,
  `kursiyer_soyad` varchar(45) NOT NULL,
  `kursiyer_tc` varchar(45) DEFAULT NULL,
  `kursiyer_tel` varchar(45) DEFAULT NULL,
  `kursiyer_mail` varchar(45) DEFAULT NULL,
  `kursiyer_odeme` varchar(45) DEFAULT NULL,
  `kursiyer_baslangic` date DEFAULT NULL,
  `kursiyer_bitis` date DEFAULT NULL,
  `kurs_ad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kursiyer`
--

INSERT INTO `kursiyer` (`kursiyer_id`, `kursiyer_ad`, `kursiyer_soyad`, `kursiyer_tc`, `kursiyer_tel`, `kursiyer_mail`, `kursiyer_odeme`, `kursiyer_baslangic`, `kursiyer_bitis`, `kurs_ad`) VALUES
(1000, 'Sena', 'Taştan', '37966745928', '5437659832', 'sena@gmail.com', '15.000', '2023-07-01', '2023-08-01', 'Silahlı Özel Güvenlik'),
(1001, 'Ender', 'Halis', '37966745934', '5015763256', 'ender@gmail.com', '18.000', '2023-08-01', '2023-09-01', 'Silahsız Özel Güvenlik'),
(1002, 'Ela', 'Ediz', '77248722916', '5367653598', 'ela@gmail.com', '10.000', '2023-06-01', '2023-07-01', 'Temel İlk Yardım'),
(1003, 'Selim Ozan', 'Çakal', '30119404083', '5227641130', 'cakal@gmail.com', '18.000', NULL, NULL, 'Silahlı Özel Güvenlik'),
(1004, 'Bilgi', 'Sungurtekin', '37966745930', '5157634896', 'bilgi@gmail.com', '18.000', '2023-12-01', '2024-01-01', 'Silahlı Özel Güvenlik'),
(1005, 'Mehmet', 'Kutlucan', '25083118722', '5087628662', 'kutlucan@gmail.com', '15.000', '2023-10-01', '2023-11-01', 'Silahsız Özel Güvenlik'),
(1006, 'Turgay', 'Yılmaz', '37966745931', '5017622428', 'yilmaz@gmail.com', '17.000', '2023-11-01', '2023-12-01', 'Silahlı Özel Güvenlik'),
(1007, 'Şermin', 'Canatan', '60753566920', '5539876893', 'can@gmail.com', '8.000', '2023-11-01', '2023-12-01', 'Temel İlk Yardım'),
(1008, 'Ahmet', 'Sorguç', '37966745932', '5056783215', 'ahmet@gmail.com', '9.000', '2023-11-01', '2023-12-01', 'Temel İlk Yardım'),
(1009, 'Ece', 'Bağcı', '16134177794', '5101108202', 'bagci@gmail.com', '18.000', '2023-12-01', '2023-12-01', 'Silahlı Özel Güvenlik'),
(1010, 'Kürşad', 'Ersanlı', '37966745933', '5072659887', 'ersanli@gmail.com', '15.000', '2023-12-01', '2024-01-01', 'Silahsız Özel Güvenlik'),
(1011, 'Gülen', 'Sağcan', '33162581387', '5044211572', 'sagcan@gmail.com', '18.000', '2023-12-01', '2024-02-01', 'Silahlı Özel Güvenlik'),
(1012, 'Yılmaz', 'Duysak', '37966745934', '5015763256', 'duysak@gmail.com', '18.000', '2023-12-01', '2024-02-01', 'Silahlı Özel Güvenlik'),
(1013, 'Baki', 'Koçyiğit', '37966745928', '5437659832', 'bak@gmail.com', '16.000', NULL, NULL, 'Silahlı Özel Güvenlik'),
(1014, 'Selim', 'Aktuğ', '75647834532', '5444676453', 'selimm@gmail.com', '0', NULL, NULL, 'Afad Kurtarma Eğitimi'),
(1015, 'Baki', 'Koçyiğit', '33162581387', '5044211572', 'bak@gmail.com', '500', NULL, NULL, 'Etkili İletişim ve Yönetim'),
(1016, 'Kenan', 'Gün', '11111111111', '2222222222', 'gun@gmail.com', '400', NULL, NULL, 'Etkili İletişim ve Yönetim'),
(1017, 'Esin', 'Dizbay', '55555555555', '9999999999', 'esin@gmail.com', '200', NULL, NULL, 'Etkili İletişim ve Yönetim'),
(1018, 'Miray', 'Hekiman', '33333333333', '9999999999', 'miray@gmail.com', '9.000', NULL, NULL, 'Etkili İletişim ve Yönetim'),
(1019, 'Selvan', 'Yayman', '44444444444', '9999999999', 'selvan@gmail.com', '0', NULL, NULL, 'Afad Kurtarma Eğitimi'),
(1020, 'Alara', 'Acaroğlu', '00000000000', '9999999999', 'alara@gmail.com', '0', NULL, NULL, 'Afad Kurtarma Eğitimi'),
(1021, 'Defne', 'Akçay', '88888888888', '9999999999', 'esin@gmail.com', '200', NULL, NULL, 'Afad Kurtarma Eğitimi'),
(1022, 'Ela', 'Altun', '77777777777', '9999999999', 'ela@gmail.com', '0', NULL, NULL, 'Afad Kurtarma Eğitimi'),
(1023, 'Eylül', 'Arslantürk', '66666666666', '9999999999', 'eylul@gmail.com', '0', NULL, NULL, 'Afad Kurtarma Eğitimi'),
(1024, 'Sara', 'Aydınlı', '55555555555', '9999999999', 'sara@gmail.com', '0', NULL, NULL, 'Afad Kurtarma Eğitimi'),
(1025, 'Bulut', 'Dalkıran', '6482764466', '5462654389', 'dalkiran@gmail.com', '15000', NULL, NULL, 'Silahlı Özel Güvenlik'),
(1026, 'Seren', 'Solgun', '56765432567', '5067890897', 'seren@gmail.com', '20', NULL, NULL, 'Etkili İletişim ve Yönetim'),
(1027, 'Melek', 'Tanrıverdi', '56787434568', '5476538902', 'melek@gmail.com', '20', NULL, NULL, 'Etkili İletişim ve Yönetim'),
(1028, 'Pera', 'Kulaç', '54677288743', '5476538902', '123@gmail.com', '20', NULL, NULL, 'Silahsız Özel Güvenlik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurs_kursiyer`
--

CREATE TABLE `kurs_kursiyer` (
  `kurs_id` int(11) DEFAULT NULL,
  `kursiyer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kurs_kursiyer`
--

INSERT INTO `kurs_kursiyer` (`kurs_id`, `kursiyer_id`) VALUES
(500, 1000),
(500, 1003),
(500, 1004),
(500, 1006),
(500, 1009),
(500, 1011),
(500, 1012),
(500, 1013),
(501, 1001),
(501, 1003),
(501, 1010),
(502, 1002),
(502, 1007),
(502, 1008),
(503, 1014),
(503, 1019),
(503, 1020),
(503, 1021),
(503, 1022),
(503, 1023),
(503, 1024),
(504, 1015),
(504, 1016),
(504, 1017),
(504, 1018);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `personel_id` int(11) NOT NULL,
  `personel_ad` varchar(45) NOT NULL,
  `personel_soyad` varchar(45) NOT NULL,
  `personel_tc` varchar(45) NOT NULL,
  `personel_mail` varchar(45) NOT NULL,
  `personel_tel` varchar(45) NOT NULL,
  `personel_tur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`personel_id`, `personel_ad`, `personel_soyad`, `personel_tc`, `personel_mail`, `personel_tel`, `personel_tur_id`) VALUES
(1, 'Musa', 'Aktaş', '37966745784', 'musaaktas@gmail.com', '0505 530 9866', 3),
(2, 'Hüdaverdi', 'Yıldız', '13558296505', 'hudaverdi@gmail.com', '0505 314 6739', 2),
(3, 'Selim Emre', 'Tıraş', '28735808586', 'selim@gmail.com', '0505 096 7503', 6),
(4, 'Hüseyin', 'Koç', '55381166125', 'hkoc@gmail.com', '0544 415 9884', 4),
(5, 'Selçuk', 'Tıraş', '28735808586', 'selcuk@gmail.com', '0506 530 9284', 5),
(6, 'Gülperi', 'Yücel', '26801105873', 'gulperi@gmail.com', '0505 694 7593', 6),
(7, 'Muhammed', 'Bağdat', '30679365098', 'bagdat@gmail.com', '0546 622 1334', 6),
(8, 'zeynep', 'kaya', '1236789864', 'asd@dsf.com', '5366547890', 6),
(9, 'Alara', 'Kurtaran', '5674328743', 'alakur@gmail.com', '5447890987', 6),
(10, 'Berkay', 'Kulkanat', '63576523474', 'kulkanat@gmail.com', '5367896523', 5),
(27, 'Mustafa', 'Bayındır', '54673898643', 'mustafa@gmail.com', '5678764356', 6),
(28, 'Hedera', 'Pera', 'xxx', 'aaa@ds.ds', 'xxx', 3),
(30, 'Pera', 'Yavru', '123123123', '123132@gmail.com', '12312312312', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel_tur`
--

CREATE TABLE `personel_tur` (
  `personel_tur_id` int(11) NOT NULL,
  `personel_tur_ad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `personel_tur`
--

INSERT INTO `personel_tur` (`personel_tur_id`, `personel_tur_ad`) VALUES
(1, 'Yönetici'),
(2, 'Muhasebe'),
(3, 'İnsan Kaynakları'),
(4, 'Temizlik Görevlisi'),
(5, 'Güvenlik Görevlisi'),
(6, 'Eğitmen');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `person_kurs`
--

CREATE TABLE `person_kurs` (
  `kurs_id` int(11) NOT NULL,
  `personel_tur_id` int(11) NOT NULL,
  `personel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `person_kurs`
--

INSERT INTO `person_kurs` (`kurs_id`, `personel_tur_id`, `personel_id`) VALUES
(500, 6, 0),
(503, 6, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`kurs_id`),
  ADD KEY `personel_id` (`personel_id`);

--
-- Tablo için indeksler `kursiyer`
--
ALTER TABLE `kursiyer`
  ADD PRIMARY KEY (`kursiyer_id`);

--
-- Tablo için indeksler `kurs_kursiyer`
--
ALTER TABLE `kurs_kursiyer`
  ADD KEY `kurs_id` (`kurs_id`,`kursiyer_id`),
  ADD KEY `kursiyer_id` (`kursiyer_id`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`personel_id`),
  ADD KEY `personel_tur_id` (`personel_tur_id`);

--
-- Tablo için indeksler `personel_tur`
--
ALTER TABLE `personel_tur`
  ADD PRIMARY KEY (`personel_tur_id`);

--
-- Tablo için indeksler `person_kurs`
--
ALTER TABLE `person_kurs`
  ADD KEY `kurs_id` (`kurs_id`,`personel_tur_id`),
  ADD KEY `personel_tur_id` (`personel_tur_id`),
  ADD KEY `personel_id` (`personel_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kurs`
--
ALTER TABLE `kurs`
  MODIFY `kurs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- Tablo için AUTO_INCREMENT değeri `kursiyer`
--
ALTER TABLE `kursiyer`
  MODIFY `kursiyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1029;

--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `personel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kurs_kursiyer`
--
ALTER TABLE `kurs_kursiyer`
  ADD CONSTRAINT `kurs_kursiyer_ibfk_1` FOREIGN KEY (`kursiyer_id`) REFERENCES `kursiyer` (`kursiyer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kurs_kursiyer_ibfk_2` FOREIGN KEY (`kurs_id`) REFERENCES `kurs` (`kurs_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `personel_ibfk_1` FOREIGN KEY (`personel_tur_id`) REFERENCES `personel_tur` (`personel_tur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `person_kurs`
--
ALTER TABLE `person_kurs`
  ADD CONSTRAINT `person_kurs_ibfk_1` FOREIGN KEY (`kurs_id`) REFERENCES `kurs` (`kurs_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `person_kurs_ibfk_2` FOREIGN KEY (`personel_tur_id`) REFERENCES `personel_tur` (`personel_tur_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
