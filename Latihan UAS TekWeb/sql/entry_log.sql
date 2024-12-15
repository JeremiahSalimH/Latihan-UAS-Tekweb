CREATE TABLE `entry_log` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tanggal` DATE NOT NULL,
  `kota` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nomor_resi_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`nomor_resi_id`) REFERENCES resi(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;