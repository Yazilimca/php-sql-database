-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Ağu 2022, 16:26:11
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `a`
--

CREATE TABLE `a` (
  `id` int(11) NOT NULL,
  `data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `a`
--

INSERT INTO `a` (`id`, `data`) VALUES
(1, 'testttt'),
(2, 'testttt2'),
(3, 'asdasd'),
(4, 'a');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `b`
--

CREATE TABLE `b` (
  `id` int(11) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `b`
--

INSERT INTO `b` (`id`, `data`) VALUES
(1, 2222),
(2, 33),
(3, 33),
(4, 33),
(5, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c`
--

CREATE TABLE `c` (
  `id` int(11) NOT NULL,
  `data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `c`
--

INSERT INTO `c` (`id`, `data`) VALUES
(1, 'test333'),
(2, 'k');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `b`
--
ALTER TABLE `b`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `a`
--
ALTER TABLE `a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `b`
--
ALTER TABLE `b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `c`
--
ALTER TABLE `c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
