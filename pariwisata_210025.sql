-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 06:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata_210025`
--

-- --------------------------------------------------------

--
-- Table structure for table `css_210025`
--

CREATE TABLE `css_210025` (
  `id_css` int(11) NOT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `link_img` varchar(255) NOT NULL DEFAULT 'default.png',
  `pos_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `css_210025`
--

INSERT INTO `css_210025` (`id_css`, `id_wisata`, `link_img`, `pos_img`) VALUES
(1, 1, 'airterjunriyan.png', 'center right'),
(2, 2, 'airterjunkrayan.jpg', 'center right'),
(3, 3, 'kebunbinusan.jpg', 'center'),
(4, 4, 'airterjunriyan.png', 'center'),
(5, 5, 'gunungputih.png', 'center right'),
(11, 6, 'bird2.jpg', 'center left');

-- --------------------------------------------------------

--
-- Table structure for table `data_210025`
--

CREATE TABLE `data_210025` (
  `id_data_210025` int(11) NOT NULL,
  `nama_pemesan_210025` varchar(55) DEFAULT NULL,
  `id_wisata_210025` int(11) DEFAULT NULL,
  `total_dewasa_210025` int(11) DEFAULT NULL,
  `total_anak_210025` int(11) DEFAULT NULL,
  `kendaraan_210025` varchar(10) DEFAULT NULL,
  `total_harga_210025` int(11) DEFAULT NULL,
  `catatan_210025` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_210025`
--

INSERT INTO `data_210025` (`id_data_210025`, `nama_pemesan_210025`, `id_wisata_210025`, `total_dewasa_210025`, `total_anak_210025`, `kendaraan_210025`, `total_harga_210025`, `catatan_210025`) VALUES
(1, 'Harman', 3, 2, 2, 'car', 30000, 'Testing'),
(2, 'Saya', 1, 1, 0, 'car', 17000, 'Ini catatan');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata_210025`
--

CREATE TABLE `tempat_wisata_210025` (
  `id_wisata_210025` int(11) NOT NULL,
  `nama_tempat_210025` varchar(250) DEFAULT NULL,
  `kota_210025` varchar(100) DEFAULT NULL,
  `deskripsi_210025` text DEFAULT NULL,
  `harga_tiket_210025` int(11) DEFAULT NULL,
  `jam_operasional_210025` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_wisata_210025`
--

INSERT INTO `tempat_wisata_210025` (`id_wisata_210025`, `nama_tempat_210025`, `kota_210025`, `deskripsi_210025`, `harga_tiket_210025`, `jam_operasional_210025`) VALUES
(1, 'Air Terjun Rian', 'Sesayap, Kabupaten Tana Tidung, Kalimantan Utara', 'Air Terjun memiliki tinggi sekitar 90 meter sampai ke puncaknya dan jatuh melalui bebatuan terjal gunung rian yang terdiri dari 7 tingkatan, namun hanya tingkat 1 dan 2 saja yang sering dikunjungi oleh wisatawan, karena untuk mencapai tingkatan lainnya diperlukan tenaga ekstra.\r\nTerletak di kaki Gunung Rian, Kabupaten Tana Tidung menjadikan air terjun ini bernama Air Terjun Rian. Air terjun ini memberikan suguhan alam yang begitu indah, dengan air jernih yang mengalir memberikan nuansa kesegaran yang luar biasa.\r\nSelain pemandangan alamnya yang indah, di Air terjun Rian juga dapat dijumpai salah satu flora khas Kalimantan yaitu pohon Ulin (aeusideroxylon zwageri). Pohon Ulin merupakan vegetasi hutan tropis yang mempunyai nilai jual yang sangat tinggi karena kualitas kayunya yang memang berkualitas super.', 10000, '08.30 - 16.30'),
(2, 'Air Terjun Krayan', 'Desa Long Midang, Kecamatan Krayan, Kabupaten Nunukan', 'Wilayah satu ini seakan akan menjadi lokasi yang kurang terjamah, sehingga budaya Dayak masih sangat terjaga dan cukup kental.\r\nWisata Air Terjun Krayan ini memiliki potensi dan daya tarik yang cukup tinggi. Potensi yang dimilikinya yaitu menjadi wisata yang mendunia jika akses dan fasilitas diperbaiki.\r\nDaya tarik yang ditawarkan adalah keasrian alam dan debit air yang sangat besar, sehingga dijadikan PLTA oleh masyarakat setempat sehingga lebih hemat energi.', 10000, '09.30 - 15.45'),
(3, 'Kebun Raya Binusan', 'Desa Binusan, Kecamatan Nunukan, Kabupaten Nunukan', 'Kalimantan sangat terkenal dengan hutannya yang menjadi paru paru dunia dengan aneka flora dan fauna liar. Oleh karena itu, kebun raya binusan ini cukup ramai dikunjungi karena bisa Anda jadikan sebagai objek wisata dan edukasi.\r\nTempat ini juga menawarkan spot menarik untuk menikmati akhir pekan, udara yang sejuk sehingga sangat nyaman, dan menikmati hutan yang cukup asri. Berlibur dengan memandang alam ini dapat menyegarkan kembali pikiran dan hati.', 10000, '09.00 - 15.30'),
(4, 'Batu Tumpuk', 'Panca Agung, Kecamatan Tanjung Palas Utara, Kabupaten Bulungan', 'Banyak yang bertanya tanya mengenai destinasi wisata satu ini karena keunikannya belum diketahui banyak orang. Daya tarik dari lokasi ini adalah batu yang ditumpuk menjulang tinggi dan paduannya dengan panorama alam sekitar menciptakan udara yang sejuk.\r\nWisata satu ini cocok dipakai sebagai lokasi fotografi dengan pengambilan gambar yang tepat dapat foto yang sangat artistik. Pepohonan di tempat ini sangat rapat, sehingga suasana pun masih asri.', 10000, '08.30 - 16.45'),
(5, 'Gunung Putih', 'Desa Gunung Putih, Kecamatan Tanjung Palas Utara, Kabupaten Bulungan', 'Sesuai dengan namanya, gunung satu ini berwarna putih karena merupakan gunung kapur. Destinasi wisata ini menawarkan pesona alam yang sangat indah dengan tingginya gunung dan paduan persawahan yang menghiasi sekitarnya.\r\nSaat ini telah dilengkapi dengan anak tangga agar para pelancong dapat naik ke puncak dengan mudah. Menurut kabar yang terdengar, goa di gunung ini dulu pernah dijadikan sebagai tempat semedi dari Sultan Bulungan.\r\nDisebut gunung putih karena tempat ini berupa adalah gunung kapur berwarna putih. Bentuknya yang indah, membuatnya menjadi dayabtarik masyarakat sekitar untuk berwisata. Untuk sampai ke puncak gunung, kita bisa melewati jajaran anak tangga yang cukup panjang.\r\nSaat mendaki Gunung Putih, dapat kita temui sejumlah gazebo untuk beristirahat sebelum akhirnya mencapai puncak. Waktu yang dibutuhkan untuk sampai ke puncak sekitar 15 sampai 20 menit. Setelah sampai di puncak gunung, kita bisa menikmati pemandangan alam nan elok dari ketinggian dengan udara yang sejuk.', 7000, '07.00 - 16.45'),
(6, 'Pantai Tanah Kuning', 'Desa Tanah Kuning, Kecamatan Tanjung Palas Timur, Kabupaten Bulungan', 'Nama Tanah Kuning diambil dari nama desa di mana pantai indah ini berada. Pasirnya yang putih bersih akan tampak indah bila terkena pancaran sinar matahari. Bahkan, pasir yang basah tersapu air laut akan terlihat seperti mutiara terbentang dengan kilauannya yang membuat siapa saja terpesona.\r\nUntuk mendatangi lokasi Anda bisa memilih berbagai alternatif jalan, mau melalui darat, laut atau melalui sungai. Pantai Tanah Kuning  memiliki air yang bersih dan seolah kebiruan menyatu dengan warna langit. Semilir angin di antara berbagai pohon yang tumbuh subur di tepi pantai semakin menambah keelokan panorama Pantai Tanah Kuning.', 7000, '05.00 - 17.45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `css_210025`
--
ALTER TABLE `css_210025`
  ADD PRIMARY KEY (`id_css`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `data_210025`
--
ALTER TABLE `data_210025`
  ADD PRIMARY KEY (`id_data_210025`),
  ADD KEY `id_wisata_210025` (`id_wisata_210025`);

--
-- Indexes for table `tempat_wisata_210025`
--
ALTER TABLE `tempat_wisata_210025`
  ADD PRIMARY KEY (`id_wisata_210025`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `css_210025`
--
ALTER TABLE `css_210025`
  MODIFY `id_css` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_210025`
--
ALTER TABLE `data_210025`
  MODIFY `id_data_210025` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `css_210025`
--
ALTER TABLE `css_210025`
  ADD CONSTRAINT `css_210025_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tempat_wisata_210025` (`id_wisata_210025`);

--
-- Constraints for table `data_210025`
--
ALTER TABLE `data_210025`
  ADD CONSTRAINT `data_210025_ibfk_1` FOREIGN KEY (`id_wisata_210025`) REFERENCES `tempat_wisata_210025` (`id_wisata_210025`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
