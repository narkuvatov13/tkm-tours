-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Mar 2025, 15:26:11
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db_tour`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tour_img` text NOT NULL,
  `tour_location_title` varchar(255) NOT NULL,
  `tour_location_url` varchar(255) NOT NULL,
  `tour_title` varchar(255) NOT NULL,
  `tour_text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `tours`
--

INSERT INTO `tours` (`id`, `user_id`, `tour_img`, `tour_location_title`, `tour_location_url`, `tour_title`, `tour_text`, `created_at`, `updated_at`) VALUES
(4, 1, 'tour_images/zJeXpwAnGdDmpqUfvR0pOJLlf85obBUloTwAO9Pj.webp', 'Lebap', 'https://maps.app.goo.gl/aVP2h7DFqxSrQW4x7', 'Special \"Highlights\"', 'This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…', '2025-02-27 11:23:50', '2025-02-27 11:23:50'),
(5, 1, 'tour_images/w7oXXLedaYAk0drezWQUEzdVkoSsXxCaRzRG5TcT.webp', 'Dashoguz', 'https://maps.app.goo.gl/rjnAXwzmdKg8bG3F7', 'A  Week of Highlights', 'This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…', '2025-02-27 11:27:21', '2025-02-27 11:27:21'),
(6, 1, 'tour_images/rVQRLxHvp27aDkIdYfE56dSjyEQrHJWHQ13Bu7OX.webp', 'Asgabat', 'https://maps.app.goo.gl/LQh6BHUvZqYUHyhv7', 'Silk Road Revisited', 'This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…', '2025-02-27 11:29:27', '2025-02-27 11:29:27'),
(7, 1, 'tour_images/ph7r1Nw5Vlh0COBMBIezaCm5vzWx5FJTkSszBXyg.webp', 'Mary', 'https://maps.app.goo.gl/adTnbZgCnprmM3yB7', 'Heart of the Karakum', 'This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…', '2025-02-27 11:30:59', '2025-02-27 11:30:59'),
(8, 1, 'tour_images/Krzi8hZKhDf4CHmmpNun7N5VOPC3fDN06pKza5aA.webp', 'Ahal', 'https://maps.app.goo.gl/4w35JWaXihhsWNbVA', 'Special \"Novruz holiday\"', 'This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…', '2025-02-27 11:34:30', '2025-02-27 11:34:30');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tours_user_id_index` (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
