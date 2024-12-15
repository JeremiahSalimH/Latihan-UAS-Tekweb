CREATE TABLE `resi` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomor_resi` varchar(100) NOT NULL,
  `tanggal_resi` DATE NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;