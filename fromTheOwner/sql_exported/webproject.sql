-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2017, 17:37:35
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webproject`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cars`
--

CREATE TABLE `cars` (
  `id` int(6) UNSIGNED NOT NULL,
  `brand` varchar(30) CHARACTER SET latin1 NOT NULL,
  `model` varchar(30) CHARACTER SET latin1 NOT NULL,
  `year` int(11) NOT NULL,
  `category` varchar(30) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `year`, `category`, `price`) VALUES
(3, 'Hyundai', 'Getz', 2011, 'hatchback', 23000),
(4, 'Renault', 'Megane', 2003, 'Sedan', 20000),
(5, 'Porche', 'Cayanne', 2014, 'SUV', 400000),
(7, 'bmw', '3.20', 2013, 'coupe', 146000),
(8, 'Hyundai', 'i30', 2013, 'hatchback', 60000),
(9, 'Ford', 'Escort', 1997, 'cabrio', 14000),
(10, 'HONDA', 'VFR800', 2008, 'ADVENTURE', 18000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `tel`) VALUES
(1, 'ali', 'ali', 'pass', 505),
(2, 'turgut kalfaoglu', 'turgut', 'kalfaoglu', 123),
(3, 'ali sait', 'ali', 'sait', 1234);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
