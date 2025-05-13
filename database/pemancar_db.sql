-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2025 at 04:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemancar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_pembuatan` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `nama`, `username`, `email`, `password`, `tanggal_pembuatan`) VALUES
(1, 'Alfi', 'alfi', 'alfi@email.com', '827ccb0eea8a706c4c34a16891f84e7b', '2025-04-27 15:35:42'),
(2, 'Sulthan', 'sulthan', 'sulthan@email.com', '827ccb0eea8a706c4c34a16891f84e7b', '2025-04-27 15:35:42'),
(3, 'Alim', 'alim', 'alim@email.com', '827ccb0eea8a706c4c34a16891f84e7b', '2025-04-27 15:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemancar`
--

CREATE TABLE `data_pemancar` (
  `id_pemancar` int(20) NOT NULL,
  `nama_pemancar` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `pembaruan_terakhir` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pemancar`
--

INSERT INTO `data_pemancar` (`id_pemancar`, `nama_pemancar`, `provinsi`, `latitude`, `longitude`, `pembaruan_terakhir`) VALUES
(1, 'TVRI Joglo', 'DKI Jakarta', -6.22076944, 106.72581944, '2025-05-02 13:25:36'),
(2, 'TVRI Panyandakan', 'Jawa Barat', -6.81476389, 107.56040556, '0000-00-00 00:00:00'),
(3, 'TVRI Pameungpeuk', 'Jawa Barat', -7.63333333, 107.74408056, '0000-00-00 00:00:00'),
(4, 'Garut Virtual 1', 'Jawa Barat', -7.35582806, 107.79924583, '0000-00-00 00:00:00'),
(5, 'Garut Virtual 2', 'Jawa Barat', -6.99793583, 107.95929417, '0000-00-00 00:00:00'),
(6, 'Garut Virtual 3', 'Jawa Barat', -7.54915083, 107.87229444, '0000-00-00 00:00:00'),
(7, 'Garut Virtual 4', 'Jawa Barat', -7.25726528, 107.89969306, '0000-00-00 00:00:00'),
(8, 'TVRI Cirebon', 'Jawa Barat', -6.68607500, 108.54819444, '0000-00-00 00:00:00'),
(9, 'TVRI Kuningan', 'Jawa Barat', -6.95191111, 108.47509167, '0000-00-00 00:00:00'),
(10, 'TVRI Ciamis', 'Jawa Barat', -7.23862222, 108.53300000, '0000-00-00 00:00:00'),
(11, 'TVRI Pasir Koja', 'Jawa Barat', -7.49695278, 108.29775000, '0000-00-00 00:00:00'),
(12, 'Tasikmalaya Virtual', 'Jawa Barat', -7.21824278, 108.11618722, '0000-00-00 00:00:00'),
(13, 'TVRI Puncak Surangga', 'Jawa Barat', -7.12065278, 106.59664167, '0000-00-00 00:00:00'),
(14, 'TVRI Gunung Walad', 'Jawa Barat', -6.91372222, 106.83612500, '0000-00-00 00:00:00'),
(15, 'TVRI Gunung Malang', 'Jawa Barat', -6.72941944, 107.65958056, '0000-00-00 00:00:00'),
(16, 'Cianjur Virtual 1', 'Jawa Barat', -6.76722333, 107.08626861, '0000-00-00 00:00:00'),
(17, 'Cianjur Virtual 2', 'Jawa Barat', -7.34305556, 107.12972222, '0000-00-00 00:00:00'),
(18, 'TVRI Bukit Nyampai', 'Jawa Barat', -6.79291667, 107.96011389, '0000-00-00 00:00:00'),
(19, 'TVRI Gombel', 'Jawa Tengah', -7.04474444, 110.42539722, '0000-00-00 00:00:00'),
(20, 'TVRI Semanggi', 'Jawa Tengah', -7.05839722, 111.43878611, '0000-00-00 00:00:00'),
(21, 'TVRI Gunung Gantungan', 'Jawa Tengah', -7.06992500, 109.24002222, '0000-00-00 00:00:00'),
(22, 'TVRI Eromoko', 'Jawa Tengah', -7.98561389, 110.79769444, '0000-00-00 00:00:00'),
(23, 'Eromoko Virtual', 'Jawa Tengah', -7.82800722, 111.24571194, '0000-00-00 00:00:00'),
(24, 'TVRI Gunung Priksa', 'Jawa Tengah', -6.95192500, 109.93489722, '0000-00-00 00:00:00'),
(25, 'Virtual Temanggung', 'Jawa Tengah', -7.33563889, 110.19770833, '0000-00-00 00:00:00'),
(26, 'TVRI Pucang Pendawa/Jepara', 'Jawa Tengah', -6.46019722, 110.91995556, '0000-00-00 00:00:00'),
(27, 'TVRI Baribis', 'Jawa Tengah', -7.20485556, 108.85497778, '0000-00-00 00:00:00'),
(28, 'TVRI Gunung Depok', 'Jawa Tengah', -7.55630000, 109.25368611, '0000-00-00 00:00:00'),
(29, 'TVRI Gunung Tugel', 'Jawa Tengah', -7.71078333, 109.91342222, '0000-00-00 00:00:00'),
(30, 'Purworejo Virtual', 'Jawa Tengah', -7.44171889, 109.75286556, '0000-00-00 00:00:00'),
(31, 'TVRI Pathuk Yogyakarta', 'DI Yogyakarta', -7.83789722, 110.52430556, '0000-00-00 00:00:00'),
(32, 'TVRI Surabaya', 'Jawa Timur', -7.28973333, 112.71407500, '0000-00-00 00:00:00'),
(33, 'TVRI Oro Oro Ombo', 'Jawa Timur', -7.90158889, 112.52655833, '0000-00-00 00:00:00'),
(34, 'TVRI Gunung Doek', 'Jawa Timur', -7.94662500, 113.13365278, '0000-00-00 00:00:00'),
(35, 'TVRI Gunung Brengik', 'Jawa Timur', -7.05759722, 113.57785833, '0000-00-00 00:00:00'),
(36, 'Jember Virtual', 'Jawa Timur', -8.18686389, 113.73429167, '0000-00-00 00:00:00'),
(37, 'TVRI Betek', 'Jawa Timur', -7.87097778, 114.31999167, '0000-00-00 00:00:00'),
(38, 'Situbondo Virtual', 'Jawa Timur', -7.72527694, 113.84328194, '0000-00-00 00:00:00'),
(39, 'TVRI Alas Malang', 'Jawa Timur', -8.32949722, 114.25083611, '0000-00-00 00:00:00'),
(40, 'TVRI Besuki', 'Jawa Timur', -7.86249444, 111.86752222, '0000-00-00 00:00:00'),
(41, 'TVRI Gunung Banon', 'Jawa Timur', -8.20326944, 112.03921944, '0000-00-00 00:00:00'),
(42, 'TVRI Pare', 'Jawa Timur', -7.75805556, 112.19928333, '0000-00-00 00:00:00'),
(43, 'TVRI Tuban', 'Jawa Timur', -7.01549444, 112.01140000, '0000-00-00 00:00:00'),
(44, 'TVRI Trenggalek', 'Jawa Timur', -8.13957222, 111.59041667, '0000-00-00 00:00:00'),
(45, 'TVRI Wonogondo', 'Jawa Timur', -8.18108611, 111.16063056, '0000-00-00 00:00:00'),
(46, 'TVRI Cilegon', 'Banten', -5.98521389, 106.04499167, '0000-00-00 00:00:00'),
(47, 'TVRI Pandeglang', 'Banten', -6.38221667, 105.98591667, '0000-00-00 00:00:00'),
(48, 'TVRI Bayah', 'Banten', -6.94367778, 106.25540556, '0000-00-00 00:00:00'),
(49, 'TVRI Jantho', 'Aceh', 5.29624722, 95.60923611, '0000-00-00 00:00:00'),
(50, 'TVRI Banda Aceh', 'Aceh', 5.50879722, 95.30248056, '0000-00-00 00:00:00'),
(51, 'TVRI Lhoong', 'Aceh', 5.30413889, 95.23982500, '0000-00-00 00:00:00'),
(52, 'TVRI Sabang', 'Aceh', 5.85377222, 95.34825278, '0000-00-00 00:00:00'),
(53, 'TVRI Calang', 'Aceh', 4.63401389, 95.57849167, '0000-00-00 00:00:00'),
(54, 'TVRI Lamno', 'Aceh', 5.05671389, 95.33366944, '0000-00-00 00:00:00'),
(55, 'TVRI Meureudeu', 'Aceh', 5.20343056, 96.26215556, '0000-00-00 00:00:00'),
(56, 'TVRI Geumpang', 'Aceh', 4.83024444, 96.13316667, '0000-00-00 00:00:00'),
(57, 'TVRI Sigli', 'Aceh', 5.27837222, 95.98048611, '0000-00-00 00:00:00'),
(58, 'TVRI Tangse', 'Aceh', 5.01027778, 95.91461111, '0000-00-00 00:00:00'),
(59, 'TVRI Meulaboh', 'Aceh', 4.21581944, 96.06514722, '0000-00-00 00:00:00'),
(60, 'TVRI Blang pidie', 'Aceh', 3.73655000, 96.83887500, '0000-00-00 00:00:00'),
(61, 'TVRI Takengon', 'Aceh', 4.66263889, 96.80667500, '0000-00-00 00:00:00'),
(62, 'TVRI Silihnara', 'Aceh', 4.60313889, 96.73229167, '0000-00-00 00:00:00'),
(63, 'TVRI Linge', 'Aceh', 4.46388889, 96.82996667, '0000-00-00 00:00:00'),
(64, 'TVRI Lhokseumawe', 'Aceh', 5.20961111, 97.03990556, '0000-00-00 00:00:00'),
(65, 'TVRI Langsa', 'Aceh', 4.52857500, 97.93424444, '0000-00-00 00:00:00'),
(66, 'TVRI Lokop', 'Aceh', 4.39644444, 97.50000000, '0000-00-00 00:00:00'),
(67, 'TVRI Blangkejeren', 'Aceh', 3.99579722, 97.32876389, '0000-00-00 00:00:00'),
(68, 'TVRI Rikit Gaib', 'Aceh', 4.12503056, 97.23921944, '0000-00-00 00:00:00'),
(69, 'TVRI Trangon', 'Aceh', 4.07723611, 97.07731111, '0000-00-00 00:00:00'),
(70, 'TVRI Kutacane', 'Aceh', 3.46647500, 97.82371944, '0000-00-00 00:00:00'),
(71, 'TVRI Tapak Tuan', 'Aceh', 3.25745000, 97.17333889, '0000-00-00 00:00:00'),
(72, 'TVRI Meukek', 'Aceh', 3.41658333, 97.08727778, '0000-00-00 00:00:00'),
(73, 'TVRI Subulussalam', 'Aceh', 2.64848333, 98.00726389, '0000-00-00 00:00:00'),
(74, 'TVRI Singkil', 'Aceh', 2.28460278, 97.79087500, '0000-00-00 00:00:00'),
(75, 'TVRI Pulau Banyak', 'Aceh', 2.29950000, 97.40838333, '0000-00-00 00:00:00'),
(76, 'TVRI Sinabang', 'Aceh', 2.46996667, 96.38497222, '0000-00-00 00:00:00'),
(77, 'TVRI Kampung Air', 'Aceh', 2.59384722, 95.96370833, '0000-00-00 00:00:00'),
(78, 'TVRI Nasbreuhe', 'Aceh', 2.61403611, 95.89135278, '0000-00-00 00:00:00'),
(79, 'TVRI Sibigo', 'Aceh', 2.83722222, 95.87805556, '0000-00-00 00:00:00'),
(80, 'TVRI Bandar Baru', 'Sumatera Utara', 3.26383333, 98.54006667, '0000-00-00 00:00:00'),
(81, 'TVRI Simarjarunjung', 'Sumatera Utara', 2.83772222, 98.77253056, '0000-00-00 00:00:00'),
(82, 'TVRI Rantau Prapat', 'Sumatera Utara', 2.09875000, 99.83200278, '0000-00-00 00:00:00'),
(83, 'TVRI Siborong Borong', 'Sumatera Utara', 2.31433611, 98.98001389, '0000-00-00 00:00:00'),
(84, 'TVRI Parapat', 'Sumatera Utara', 2.66631667, 98.92711111, '0000-00-00 00:00:00'),
(85, 'TVRI Tarutung', 'Sumatera Utara', 1.98894444, 98.95052778, '0000-00-00 00:00:00'),
(86, 'TVRI Sidikalang', 'Sumatera Utara', 2.69872778, 98.30422222, '0000-00-00 00:00:00'),
(87, 'TVRI Sibolga', 'Sumatera Utara', 1.75136944, 98.77329167, '0000-00-00 00:00:00'),
(88, 'TVRI Sipirok', 'Sumatera Utara', 1.56008889, 99.28927778, '0000-00-00 00:00:00'),
(89, 'TVRI Natal', 'Sumatera Utara', 0.59458333, 99.11261111, '0000-00-00 00:00:00'),
(90, 'TVRI Kotanopan', 'Sumatera Utara', 0.72583278, 99.60777778, '0000-00-00 00:00:00'),
(91, 'TVRI Gunung Sitoli', 'Sumatera Utara', 1.28807500, 97.61591667, '0000-00-00 00:00:00'),
(92, 'TVRI Teluk Dalam', 'Sumatera Utara', 0.56914444, 97.76017778, '0000-00-00 00:00:00'),
(93, 'TVRI Lahewa', 'Sumatera Utara', 1.36293056, 97.21733889, '0000-00-00 00:00:00'),
(94, 'TVRI Bukit Sarai', 'Sumatera Barat', -0.97474444, 100.36708056, '0000-00-00 00:00:00'),
(95, 'TVRI Gunung Gompong', 'Sumatera Barat', -0.96352500, 100.64560833, '0000-00-00 00:00:00'),
(96, 'TVRI Pandai Sikat', 'Sumatera Barat', -0.39423056, 100.36367500, '0000-00-00 00:00:00'),
(97, 'TVRI Pasaman Barat', 'Sumatera Barat', 0.11648333, 99.88460000, '0000-00-00 00:00:00'),
(98, 'TVRI Lubuk Sikaping', 'Sumatera Barat', 0.11990556, 100.17401111, '0000-00-00 00:00:00'),
(99, 'TVRI Taeh Bukit', 'Sumatera Barat', -0.12690833, 100.60404167, '0000-00-00 00:00:00'),
(100, 'Sungaidareh Virtual', 'Sumatera Barat', -0.94301250, 101.51203194, '0000-00-00 00:00:00'),
(101, 'Lubukgadang Virtual', 'Sumatera Barat', -1.46222167, 101.05576111, '0000-00-00 00:00:00'),
(102, 'TVRI Painan', 'Sumatera Barat', -1.34874722, 100.57954444, '0000-00-00 00:00:00'),
(103, 'Tua Pejat Virtual', 'Sumatera Barat', -2.07036389, 99.59619472, '0000-00-00 00:00:00'),
(104, 'TVRI Pekanbaru', 'Riau', 0.51765833, 101.42832500, '0000-00-00 00:00:00'),
(105, 'TVRI Pasir Pengaraian', 'Riau', 0.85605000, 100.30533889, '0000-00-00 00:00:00'),
(106, 'Rokan Hilir Virtual', 'Riau', 2.15997833, 100.80675528, '0000-00-00 00:00:00'),
(107, 'TVRI Dumai', 'Riau', 1.63554167, 101.40175000, '0000-00-00 00:00:00'),
(108, 'TVRI Sungai Pakning', 'Riau', 1.33198056, 102.15214444, '0000-00-00 00:00:00'),
(109, 'TVRI Selat Panjang', 'Riau', 1.00888889, 102.69143333, '0000-00-00 00:00:00'),
(110, 'TVRI Siak Sri Indrapura ', 'Riau', 0.79671111, 102.04545278, '0000-00-00 00:00:00'),
(111, 'TVRI Baserah', 'Riau', -0.43068056, 101.73426389, '0000-00-00 00:00:00'),
(112, 'Rengat Virtual', 'Riau', -0.36348111, 102.28946500, '0000-00-00 00:00:00'),
(113, 'TVRI Tembilahan', 'Riau', -0.31963056, 103.16509444, '0000-00-00 00:00:00'),
(114, 'TVRI Telanaipura', 'Jambi', -1.61534722, 103.57197222, '0000-00-00 00:00:00'),
(115, 'TVRI Sarolangun', 'Jambi', -2.30088333, 102.72532778, '0000-00-00 00:00:00'),
(116, 'TVRI Kuala Tungkal', 'Jambi', -0.86127778, 103.41101667, '0000-00-00 00:00:00'),
(117, 'TVRI Muara Bungo', 'Jambi', -1.49323333, 102.12161667, '0000-00-00 00:00:00'),
(118, 'TVRI Tebo', 'Jambi', -1.46742222, 102.35756667, '0000-00-00 00:00:00'),
(119, 'TVRI Sungai Penuh', 'Jambi', -2.03406111, 101.40821389, '0000-00-00 00:00:00'),
(120, 'TVRI Kayu Aro Kerinci', 'Jambi', -1.82281389, 101.27313889, '0000-00-00 00:00:00'),
(121, 'TVRI Bangko', 'Jambi', -2.05543611, 102.27671389, '0000-00-00 00:00:00'),
(122, 'TVRI Palembang', 'Sumatera Selatan', -2.97638056, 104.73890000, '0000-00-00 00:00:00'),
(123, 'TVRI Sekayu', 'Sumatera Selatan', -2.85633333, 103.84866111, '0000-00-00 00:00:00'),
(124, 'TVRI Tebing Tinggi', 'Sumatera Selatan', -3.60673056, 103.09322500, '0000-00-00 00:00:00'),
(125, 'TVRI Prabumulih', 'Sumatera Selatan', -3.41592222, 104.24199167, '0000-00-00 00:00:00'),
(126, 'TVRI Lahat', 'Sumatera Selatan', -3.77250000, 103.53854722, '0000-00-00 00:00:00'),
(127, 'TVRI Pagar Alam', 'Sumatera Selatan', -4.08746389, 103.15210000, '0000-00-00 00:00:00'),
(128, 'TVRI Baturaja', 'Sumatera Selatan', -4.10451667, 104.17260556, '0000-00-00 00:00:00'),
(129, 'TVRI Gunung Raya', 'Sumatera Selatan', -4.87230556, 104.05238889, '0000-00-00 00:00:00'),
(130, 'TVRI Bentiring', 'Bengkulu', -3.76762500, 102.31153889, '0000-00-00 00:00:00'),
(131, 'TVRI Bengkulu', 'Bengkulu', -3.79248611, 102.27128333, '0000-00-00 00:00:00'),
(132, 'TVRI Manna', 'Bengkulu', -4.43226944, 102.92995833, '0000-00-00 00:00:00'),
(133, 'TVRI Bintuhan', 'Bengkulu', -4.78145278, 103.32995556, '0000-00-00 00:00:00'),
(134, 'TVRI Curup', 'Bengkulu', -3.44258333, 102.52684167, '0000-00-00 00:00:00'),
(135, 'TVRI Ketahun', 'Bengkulu', -3.35855278, 101.83117222, '0000-00-00 00:00:00'),
(136, 'TVRI Mukomuko', 'Bengkulu', -2.57826944, 101.12350278, '0000-00-00 00:00:00'),
(137, 'TVRI Ipuh', 'Bengkulu', -2.99278611, 101.49264167, '0000-00-00 00:00:00'),
(138, 'TVRI Gunung Betung', 'Lampung', -5.40638611, 105.17895833, '0000-00-00 00:00:00'),
(139, 'TVRI Pahoman', 'Lampung', -5.41932500, 105.22822778, '0000-00-00 00:00:00'),
(140, 'TVRI Tanjung Karang', 'Lampung', -5.42435556, 105.27066111, '0000-00-00 00:00:00'),
(141, 'TVRI Simpang Pematang', 'Lampung', -4.02367500, 105.25037222, '0000-00-00 00:00:00'),
(142, 'TVRI Kota Bumi', 'Lampung', -4.71657500, 104.78885556, '0000-00-00 00:00:00'),
(143, 'TVRI Kota Agung', 'Lampung', -5.46559167, 104.52922778, '0000-00-00 00:00:00'),
(144, 'TVRI Liwa', 'Lampung', -5.03669167, 104.07727778, '0000-00-00 00:00:00'),
(145, 'TVRI Gunung Mangkol', 'Kepulauan Bangka Belitung', -2.25311111, 106.07627778, '0000-00-00 00:00:00'),
(146, 'TVRI Gunung Manumbing', 'Kepulauan Bangka Belitung', -2.01651667, 105.18108889, '0000-00-00 00:00:00'),
(147, 'TVRI Gunung Muntai', 'Kepulauan Bangka Belitung', -2.98572778, 106.52501667, '0000-00-00 00:00:00'),
(148, 'TVRI Gunung Tajam', 'Kepulauan Bangka Belitung', -2.74797778, 107.88542500, '0000-00-00 00:00:00'),
(149, 'TVRI Batam', 'Kepulauan Riau', 1.12312500, 103.94566389, '0000-00-00 00:00:00'),
(150, 'TVRI Kijang/Bintan Timur', 'Kepulauan Riau', 0.84357500, 104.59980556, '0000-00-00 00:00:00'),
(151, 'Karimun Virtual', 'Kepulauan Riau', 0.90161861, 103.42787972, '0000-00-00 00:00:00'),
(152, 'TVRI Tarempa', 'Kepulauan Riau', 3.22286667, 106.22336667, '0000-00-00 00:00:00'),
(153, 'Anambas Virtual 1', 'Kepulauan Riau', 3.00382444, 105.70465972, '0000-00-00 00:00:00'),
(154, 'Anambas Virtual 2', 'Kepulauan Riau', 3.29097389, 106.28092611, '0000-00-00 00:00:00'),
(155, 'Anambas Virtual 3', 'Kepulauan Riau', 3.16546889, 106.21849611, '0000-00-00 00:00:00'),
(156, 'TVRI Natuna', 'Kepulauan Riau', 3.93717778, 108.37125833, '0000-00-00 00:00:00'),
(157, 'Natuna Virtual 1', 'Kepulauan Riau', 2.50721528, 109.08502667, '0000-00-00 00:00:00'),
(158, 'Natuna Virtual 2', 'Kepulauan Riau', 4.01748639, 108.21949333, '0000-00-00 00:00:00'),
(159, 'Natuna Virtual 3', 'Kepulauan Riau', 3.61927167, 108.10449972, '0000-00-00 00:00:00'),
(160, 'Lingga Virtual', 'Kepulauan Riau', -0.19534333, 104.54897722, '0000-00-00 00:00:00'),
(161, 'TVRI Bukit Bakung', 'Bali', -8.81874444, 115.18823333, '0000-00-00 00:00:00'),
(162, 'TVRI Gunung Kutul', 'Bali', -8.29322222, 114.95200278, '0000-00-00 00:00:00'),
(163, 'TVRI Kintamani', 'Bali', -8.20804444, 115.32593889, '0000-00-00 00:00:00'),
(164, 'TVRI Kelatakan', 'Bali', -8.22389722, 114.48971944, '0000-00-00 00:00:00'),
(165, 'TVRI Pujut', 'Nusa Tenggara Barat', -8.88211667, 116.26236667, '0000-00-00 00:00:00'),
(166, 'TVRI Seganteng', 'Nusa Tenggara Barat', -8.58972222, 116.37500000, '0000-00-00 00:00:00'),
(167, 'TVRI Suwela', 'Nusa Tenggara Barat', -8.52314167, 116.57404444, '0000-00-00 00:00:00'),
(168, 'TVRI Gunung Kedatu Lombok', 'Nusa Tenggara Barat', -8.65333333, 116.09155556, '0000-00-00 00:00:00'),
(169, 'TVRI Sembalun', 'Nusa Tenggara Barat', -8.36471111, 116.53542778, '0000-00-00 00:00:00'),
(170, 'TVRI Mataram', 'Nusa Tenggara Barat', -8.58688889, 116.08865833, '0000-00-00 00:00:00'),
(171, 'TVRI Tanjung Lombok', 'Nusa Tenggara Barat', -8.36758889, 116.12479444, '0000-00-00 00:00:00'),
(172, 'Sumbawa Barat Virtual', 'Nusa Tenggara Barat', -8.72636333, 116.84305806, '0000-00-00 00:00:00'),
(173, 'TVRI Sumbawa', 'Nusa Tenggara Barat', -8.55252778, 117.33607222, '0000-00-00 00:00:00'),
(174, 'TVRI Dompu', 'Nusa Tenggara Barat', -8.54174444, 118.44608889, '0000-00-00 00:00:00'),
(175, 'TVRI Bima', 'Nusa Tenggara Barat', -8.54363056, 118.81107778, '0000-00-00 00:00:00'),
(176, 'TVRI Oben', 'Nusa Tenggara Timur', -10.27017778, 123.66616944, '0000-00-00 00:00:00'),
(177, 'TVRI Kupang', 'Nusa Tenggara Timur', -10.17180833, 123.61339722, '0000-00-00 00:00:00'),
(178, 'TVRI Soe', 'Nusa Tenggara Timur', -9.86138333, 124.25850000, '0000-00-00 00:00:00'),
(179, 'TVRI Kefamenanu', 'Nusa Tenggara Timur', -9.46030000, 124.47646667, '0000-00-00 00:00:00'),
(180, 'TVRI Atambua', 'Nusa Tenggara Timur', -9.09147778, 124.86382500, '0000-00-00 00:00:00'),
(181, 'TVRI Betun', 'Nusa Tenggara Timur', -9.56167500, 124.90692222, '0000-00-00 00:00:00'),
(182, 'TVRI Rote', 'Nusa Tenggara Timur', -10.76006944, 123.12561111, '0000-00-00 00:00:00'),
(183, 'TVRI Sabu', 'Nusa Tenggara Timur', -10.51277833, 121.87844056, '0000-00-00 00:00:00'),
(184, 'TVRI Waingapu', 'Nusa Tenggara Timur', -9.67703333, 120.19351667, '0000-00-00 00:00:00'),
(185, 'TVRI Wakaibubak', 'Nusa Tenggara Timur', -9.61340556, 119.41798056, '0000-00-00 00:00:00'),
(186, 'TVRI Labuhan Bajo', 'Nusa Tenggara Timur', -8.48866667, 119.88633333, '0000-00-00 00:00:00'),
(187, 'TVRI Ruteng', 'Nusa Tenggara Timur', -8.62808333, 120.46366667, '0000-00-00 00:00:00'),
(188, 'TVRI Bajawa', 'Nusa Tenggara Timur', -8.80699444, 120.97815000, '0000-00-00 00:00:00'),
(189, 'TVRI Aimere', 'Nusa Tenggara Timur', -8.84702778, 120.86494444, '0000-00-00 00:00:00'),
(190, 'TVRI Boawae', 'Nusa Tenggara Timur', -8.77343611, 121.22166389, '0000-00-00 00:00:00'),
(191, 'TVRI Ende', 'Nusa Tenggara Timur', -8.83761111, 121.66883333, '0000-00-00 00:00:00'),
(192, 'TVRI Maumere', 'Nusa Tenggara Timur', -8.63144444, 122.22466667, '0000-00-00 00:00:00'),
(193, 'TVRI Adonara', 'Nusa Tenggara Timur', -8.24208333, 123.13922222, '0000-00-00 00:00:00'),
(194, 'TVRI Lembata', 'Nusa Tenggara Timur', -8.39115278, 123.42178333, '0000-00-00 00:00:00'),
(195, 'TVRI Kalabahi', 'Nusa Tenggara Timur', -8.21380556, 124.54433333, '0000-00-00 00:00:00'),
(196, 'TVRI Pontianak', 'Kalimantan Barat', -0.04371389, 109.34076944, '0000-00-00 00:00:00'),
(197, 'TVRI Air Besar', 'Kalimantan Barat', 0.74661944, 110.11020833, '0000-00-00 00:00:00'),
(198, 'TVRI Singkawang', 'Kalimantan Barat', 0.89126667, 108.97372222, '0000-00-00 00:00:00'),
(199, 'TVRI Bengkayang', 'Kalimantan Barat', 0.83257222, 109.49095833, '0000-00-00 00:00:00'),
(200, 'TVRI Sanggau Ledo', 'Kalimantan Barat', 1.16850278, 109.72276667, '0000-00-00 00:00:00'),
(201, 'TVRI Sukadana', 'Kalimantan Barat', 1.21583333, 109.97056111, '0000-00-00 00:00:00'),
(202, 'TVRI Sambas', 'Kalimantan Barat', 1.35800556, 109.29966111, '0000-00-00 00:00:00'),
(203, 'TVRI Sanggau', 'Kalimantan Barat', 0.12555556, 110.59500000, '0000-00-00 00:00:00'),
(204, 'TVRI Balai Karangan', 'Kalimantan Barat', 0.80750833, 110.42173333, '0000-00-00 00:00:00'),
(205, 'TVRI Sintang', 'Kalimantan Barat', 0.07775556, 111.50445556, '0000-00-00 00:00:00'),
(206, 'TVRI Nanga Merakai', 'Kalimantan Barat', 0.68737583, 111.51451472, '0000-00-00 00:00:00'),
(207, 'TVRI Senaning', 'Kalimantan Barat', 0.92341667, 111.02477222, '0000-00-00 00:00:00'),
(208, 'TVRI Putussibau', 'Kalimantan Barat', 0.87730556, 112.92281944, '0000-00-00 00:00:00'),
(209, 'TVRI Semitau', 'Kalimantan Barat', 0.53585278, 111.97297222, '0000-00-00 00:00:00'),
(210, 'TVRI Nanga Badau', 'Kalimantan Barat', 1.04163889, 111.89863889, '0000-00-00 00:00:00'),
(211, 'TVRI Nanga Pinoh', 'Kalimantan Barat', -0.35111111, 111.71166667, '0000-00-00 00:00:00'),
(212, 'TVRI Ketapang', 'Kalimantan Barat', -1.84008333, 109.97743333, '0000-00-00 00:00:00'),
(213, 'TVRI Kendawangan', 'Kalimantan Barat', -2.43138889, 110.15694444, '0000-00-00 00:00:00'),
(214, 'Kayong Virtual', 'Kalimantan Barat', -1.21444500, 109.99106694, '0000-00-00 00:00:00'),
(215, 'TVRI Banjarmasin', 'Kalimantan Selatan', -3.34616667, 114.62486389, '0000-00-00 00:00:00'),
(216, 'TVRI Kandangan', 'Kalimantan Selatan', -2.85571944, 115.24804167, '0000-00-00 00:00:00'),
(217, 'TVRI Amuntai', 'Kalimantan Selatan', -2.41800000, 115.24745278, '0000-00-00 00:00:00'),
(218, 'TVRI Paringin/Balangan', 'Kalimantan Selatan', -2.35127778, 115.47513889, '0000-00-00 00:00:00'),
(219, 'TVRI Kota Baru', 'Kalimantan Selatan', -3.24377778, 116.22261111, '0000-00-00 00:00:00'),
(220, 'TVRI Tanjung Tabalong', 'Kalimantan Selatan', -1.98780556, 115.59541667, '0000-00-00 00:00:00'),
(221, 'TVRI Haruai', 'Kalimantan Selatan', -1.45138889, 115.54446389, '0000-00-00 00:00:00'),
(222, 'TVRI Batulicin', 'Kalimantan Selatan', -3.39222222, 115.98083333, '0000-00-00 00:00:00'),
(223, 'TVRI Palangkaraya', 'Kalimantan Tengah', -2.21211111, 113.91036667, '0000-00-00 00:00:00'),
(224, 'TVRI Pulang Pisau', 'Kalimantan Tengah', -2.75081111, 114.25809722, '0000-00-00 00:00:00'),
(225, 'TVRI Kapuas', 'Kalimantan Tengah', -2.97777778, 114.40086111, '0000-00-00 00:00:00'),
(226, 'TVRI Ampah', 'Kalimantan Tengah', -1.81451000, 115.16014000, '0000-00-00 00:00:00'),
(227, 'TVRI Buntok', 'Kalimantan Tengah', -1.72617222, 114.84205000, '0000-00-00 00:00:00'),
(228, 'TVRI Kualakurun', 'Kalimantan Tengah', -1.10514167, 113.85602222, '0000-00-00 00:00:00'),
(229, 'TVRI Muarateweh', 'Kalimantan Tengah', -0.94805556, 114.89638889, '0000-00-00 00:00:00'),
(230, 'TVRI Pangkalan Bun', 'Kalimantan Tengah', -2.69356389, 111.62577500, '0000-00-00 00:00:00'),
(231, 'TVRI Sampit', 'Kalimantan Tengah', -2.56394444, 112.95174444, '0000-00-00 00:00:00'),
(232, 'TVRI Kuala Kuayan', 'Kalimantan Tengah', -1.96189167, 112.51950556, '0000-00-00 00:00:00'),
(233, 'TVRI Kuala Pembuang', 'Kalimantan Tengah', -3.38926944, 112.54491111, '0000-00-00 00:00:00'),
(234, 'TVRI Gunung Lampu', 'Kalimantan Timur', -0.53775556, 117.14642222, '0000-00-00 00:00:00'),
(235, 'TVRI Balikpapan', 'Kalimantan Timur', -1.26194167, 116.82189722, '0000-00-00 00:00:00'),
(236, 'TVRI Sangkulirang', 'Kalimantan Timur', 0.99077222, 117.97910000, '0000-00-00 00:00:00'),
(237, 'TVRI Berau/Tanjung Redeb', 'Kalimantan Timur', 2.15040278, 117.48241667, '0000-00-00 00:00:00'),
(238, 'TVRI Melak', 'Kalimantan Timur', -0.23075000, 115.81550000, '0000-00-00 00:00:00'),
(239, 'Mahakam Ulu Virtual', 'Kalimantan Timur', 0.37711944, 115.41084417, '0000-00-00 00:00:00'),
(240, 'TVRI Tanah Grogot', 'Kalimantan Timur', -1.90469444, 116.19307500, '0000-00-00 00:00:00'),
(241, 'TVRI Long Ikis', 'Kalimantan Timur', -1.56257778, 116.19805000, '0000-00-00 00:00:00'),
(242, 'TVRI Tarakan', 'Kalimantan Utara', 3.30482222, 117.59513889, '0000-00-00 00:00:00'),
(243, 'TVRI Malinau', 'Kalimantan Utara', 3.52715000, 116.59109444, '0000-00-00 00:00:00'),
(244, 'TVRI Nunukan', 'Kalimantan Utara', 4.14102778, 117.65743889, '0000-00-00 00:00:00'),
(245, 'TVRI Sebatik', 'Kalimantan Utara', 4.15458611, 117.89677778, '0000-00-00 00:00:00'),
(246, 'TVRI Long Bawan', 'Kalimantan Utara', 3.90547222, 115.69888889, '0000-00-00 00:00:00'),
(247, 'TVRI Makaweimben', 'Sulawesi Utara', 1.32706667, 124.95434722, '0000-00-00 00:00:00'),
(248, 'TVRI Manado', 'Sulawesi Utara', 1.47947778, 124.84972778, '0000-00-00 00:00:00'),
(249, 'TVRI Kotamobagu', 'Sulawesi Utara', 0.75921389, 124.31027778, '0000-00-00 00:00:00'),
(250, 'TVRI Belang', 'Sulawesi Utara', 0.98322222, 124.79514444, '0000-00-00 00:00:00'),
(251, 'TVRI Tarenan', 'Sulawesi Utara', 1.24175000, 124.72772222, '0000-00-00 00:00:00'),
(252, 'TVRI Pinolusian', 'Sulawesi Utara', 0.39408333, 124.11697222, '0000-00-00 00:00:00'),
(253, 'TVRI Baroko', 'Sulawesi Utara', 0.89450000, 123.23313889, '0000-00-00 00:00:00'),
(254, 'TVRI Siau Timur', 'Sulawesi Utara', 2.71452778, 125.39944444, '0000-00-00 00:00:00'),
(255, 'TVRI Tahuna', 'Sulawesi Utara', 3.63171389, 125.51206389, '0000-00-00 00:00:00'),
(256, 'TVRI Lirung', 'Sulawesi Utara', 4.01379167, 126.64143611, '0000-00-00 00:00:00'),
(257, 'TVRI Palu', 'Sulawesi Tengah', -0.88681944, 119.86366944, '0000-00-00 00:00:00'),
(258, 'TVRI Kulawi', 'Sulawesi Tengah', -1.61026944, 120.03939167, '0000-00-00 00:00:00'),
(259, 'TVRI Tompe', 'Sulawesi Tengah', -0.21958333, 119.80922222, '0000-00-00 00:00:00'),
(260, 'TVRI Lapaloan', 'Sulawesi Tengah', -0.68027778, 119.72972222, '0000-00-00 00:00:00'),
(261, 'TVRI Sabang', 'Sulawesi Tengah', 0.21222222, 119.86258333, '0000-00-00 00:00:00'),
(262, 'TVRI Tambu', 'Sulawesi Tengah', -0.04793333, 119.87820556, '0000-00-00 00:00:00'),
(263, 'TVRI Donggala', 'Sulawesi Tengah', -0.67081944, 119.74571389, '0000-00-00 00:00:00'),
(264, 'TVRI Lembasada', 'Sulawesi Tengah', -0.78774722, 119.65757222, '0000-00-00 00:00:00'),
(265, 'TVRI Toli Toli', 'Sulawesi Tengah', 1.04192778, 120.81757500, '0000-00-00 00:00:00'),
(266, 'TVRI Buol Toli- Toli', 'Sulawesi Tengah', 1.06479444, 121.46622778, '0000-00-00 00:00:00'),
(267, 'TVRI Lembe Paleleh', 'Sulawesi Tengah', 1.04705556, 121.94977778, '0000-00-00 00:00:00'),
(268, 'TVRI Tanjung Santigi', 'Sulawesi Tengah', 0.47247500, 120.82689444, '0000-00-00 00:00:00'),
(269, 'TVRI Toboli', 'Sulawesi Tengah', -0.71197222, 120.09416389, '0000-00-00 00:00:00'),
(270, 'TVRI Sausu', 'Sulawesi Tengah', -1.05383333, 120.41266389, '0000-00-00 00:00:00'),
(271, 'TVRI Tinombo', 'Sulawesi Tengah', 0.38500000, 120.27805556, '0000-00-00 00:00:00'),
(272, 'TVRI Poso', 'Sulawesi Tengah', -1.38838611, 120.77225556, '0000-00-00 00:00:00'),
(273, 'TVRI Pendolo', 'Sulawesi Tengah', -2.13750000, 120.70883056, '0000-00-00 00:00:00'),
(274, 'TVRI Tentena', 'Sulawesi Tengah', -1.70716667, 120.67550000, '0000-00-00 00:00:00'),
(275, 'TVRI Ampana', 'Sulawesi Tengah', -0.84130278, 121.60095556, '0000-00-00 00:00:00'),
(276, 'TVRI Beteleme', 'Sulawesi Tengah', -2.16783333, 121.28172222, '0000-00-00 00:00:00'),
(277, 'TVRI Luwuk', 'Sulawesi Tengah', -0.93434722, 122.82362778, '0000-00-00 00:00:00'),
(278, 'TVRI Bunta', 'Sulawesi Tengah', -0.83508333, 122.19119444, '0000-00-00 00:00:00'),
(279, 'TVRI Pagimana', 'Sulawesi Tengah', -0.79448611, 122.65349722, '0000-00-00 00:00:00'),
(280, 'TVRI Toili', 'Sulawesi Tengah', -1.46138889, 122.39900000, '0000-00-00 00:00:00'),
(281, 'TVRI Banggai', 'Sulawesi Tengah', -1.56250000, 123.48871944, '0000-00-00 00:00:00'),
(282, 'TVRI Makasar', 'Sulawesi Selatan', -5.16066944, 119.41592222, '0000-00-00 00:00:00'),
(283, 'TVRI Gunung Loka', 'Sulawesi Selatan', -5.44968333, 119.91690000, '0000-00-00 00:00:00'),
(284, 'TVRI Tanjung Butung', 'Sulawesi Selatan', -4.55299722, 119.59399167, '0000-00-00 00:00:00'),
(285, 'TVRI Bontu Tabang', 'Sulawesi Selatan', -2.98083333, 119.86833333, '0000-00-00 00:00:00'),
(286, 'TVRI Rindingallo', 'Sulawesi Selatan', -2.90308333, 119.82601944, '0000-00-00 00:00:00'),
(287, 'TVRI Masamba', 'Sulawesi Selatan', -2.59096667, 120.33967778, '0000-00-00 00:00:00'),
(288, 'TVRI Makadae', 'Sulawesi Selatan', -3.95032222, 119.67766944, '0000-00-00 00:00:00'),
(289, 'TVRI Baraka/Gunung Marru', 'Sulawesi Selatan', -3.40083333, 119.89194444, '0000-00-00 00:00:00'),
(290, 'TVRI Sengkang', 'Sulawesi Selatan', -4.13458333, 120.03741667, '0000-00-00 00:00:00'),
(291, 'Sinjai Virtual', 'Sulawesi Selatan', -5.13623611, 120.23489444, '0000-00-00 00:00:00'),
(292, 'TVRI Matano', 'Sulawesi Selatan', -2.57168889, 121.37010556, '0000-00-00 00:00:00'),
(293, 'TVRI Wawondula', 'Sulawesi Selatan', -2.59222222, 121.27472222, '0000-00-00 00:00:00'),
(294, 'TVRI Kendari', 'Sulawesi Tenggara', -3.98735278, 122.50850556, '0000-00-00 00:00:00'),
(295, 'TVRI Punggaluku', 'Sulawesi Tenggara', -4.28378889, 122.48483611, '0000-00-00 00:00:00'),
(296, 'TVRI Unaaha', 'Sulawesi Tenggara', -3.87127500, 122.04189444, '0000-00-00 00:00:00'),
(297, 'TVRI Lasolo', 'Sulawesi Tenggara', -3.58608611, 122.16568889, '0000-00-00 00:00:00'),
(298, 'TVRI Bau Bau', 'Sulawesi Tenggara', -5.46797500, 122.62938889, '0000-00-00 00:00:00'),
(299, 'TVRI Raha', 'Sulawesi Tenggara', -4.79972222, 122.71580833, '0000-00-00 00:00:00'),
(300, 'TVRI Boepinang', 'Sulawesi Tenggara', -4.82141111, 121.67666389, '0000-00-00 00:00:00'),
(301, 'TVRI Pomala', 'Sulawesi Tenggara', -4.20195000, 121.59170000, '0000-00-00 00:00:00'),
(302, 'TVRI Lasusua', 'Sulawesi Tenggara', -3.59329722, 120.94128056, '0000-00-00 00:00:00'),
(303, 'TVRI Wanci', 'Sulawesi Tenggara', -5.29488056, 123.54523056, '0000-00-00 00:00:00'),
(304, 'TVRI Banabungi', 'Sulawesi Tenggara', -5.51410833, 122.84114167, '0000-00-00 00:00:00'),
(305, 'TVRI Ereke', 'Sulawesi Tenggara', -4.82334722, 123.18071111, '0000-00-00 00:00:00'),
(306, 'TVRI Gorontalo', 'Gorontalo', 0.55856111, 123.04862778, '0000-00-00 00:00:00'),
(307, 'Kwandangan Virtual', 'Gorontalo', 0.80760722, 122.88361389, '0000-00-00 00:00:00'),
(308, 'TVRI Tilamuta', 'Gorontalo', 0.53480278, 122.34554167, '0000-00-00 00:00:00'),
(309, 'TVRI Paguyaman', 'Gorontalo', 0.66708333, 122.55330556, '0000-00-00 00:00:00'),
(310, 'TVRI Marisa', 'Gorontalo', 0.51978611, 121.92828611, '0000-00-00 00:00:00'),
(311, 'TVRI Popayato', 'Gorontalo', 0.54778889, 121.58960000, '0000-00-00 00:00:00'),
(312, 'TVRI Mamuju', 'Sulawesi Barat', -2.71385000, 118.85871944, '0000-00-00 00:00:00'),
(313, 'TVRI Bukit Malotong', 'Sulawesi Barat', -3.04690278, 119.32370000, '0000-00-00 00:00:00'),
(314, 'TVRI Gunung Salabose Majene', 'Sulawesi Barat', -3.54020000, 118.96443333, '0000-00-00 00:00:00'),
(315, 'TVRI Pasangkayu Mamuju', 'Sulawesi Barat', -1.17489167, 119.36667500, '0000-00-00 00:00:00'),
(316, 'TVRI Bukit Greser', 'Maluku', -3.71966111, 128.16396111, '0000-00-00 00:00:00'),
(317, 'TVRI Masohi', 'Maluku', -3.32299167, 128.94103056, '0000-00-00 00:00:00'),
(318, 'TVRI Wahai', 'Maluku', -2.79853889, 129.50928333, '0000-00-00 00:00:00'),
(319, 'TVRI Namlea', 'Maluku', -3.27769444, 127.09941667, '0000-00-00 00:00:00'),
(320, 'TVRI Saumlaki', 'Maluku', -7.97573333, 131.30595000, '0000-00-00 00:00:00'),
(321, 'TVRI Larat', 'Maluku', -7.14067222, 131.72310556, '0000-00-00 00:00:00'),
(322, 'TVRI Dobo', 'Maluku', -5.78783333, 134.20852778, '0000-00-00 00:00:00'),
(323, 'TVRI Tual', 'Maluku', -5.63175000, 132.74501111, '0000-00-00 00:00:00'),
(324, 'TVRI Elat', 'Maluku', -5.66873889, 132.99449444, '0000-00-00 00:00:00'),
(325, 'Serwaru Virtual', 'Maluku', -8.17037972, 127.66505778, '0000-00-00 00:00:00'),
(326, 'Leti Virtual', 'Maluku', -8.16932444, 127.79746750, '0000-00-00 00:00:00'),
(327, 'TVRI Ternate', 'Maluku Utara', 0.78976111, 127.35554722, '0000-00-00 00:00:00'),
(328, 'TVRI Morotai', 'Maluku Utara', 2.05083333, 128.29461111, '0000-00-00 00:00:00'),
(329, 'TVRI Soa Siu', 'Maluku Utara', 0.66533333, 127.44808333, '0000-00-00 00:00:00'),
(330, 'TVRI Sanana', 'Maluku Utara', -2.06500000, 125.98038889, '0000-00-00 00:00:00'),
(331, 'Talibu Virtual', 'Maluku Utara', -1.76531000, 124.44482667, '0000-00-00 00:00:00'),
(332, 'Halmahera Virtual', 'Maluku Utara', 0.80824361, 128.09080972, '0000-00-00 00:00:00'),
(333, 'TVRI Jayapura', 'Papua', -2.54992222, 140.70942778, '0000-00-00 00:00:00'),
(334, 'TVRI Kemtugresi', 'Papua', -2.56962778, 140.54822500, '0000-00-00 00:00:00'),
(335, 'TVRI Arso', 'Papua', -2.95273056, 140.77294722, '0000-00-00 00:00:00'),
(336, 'Pegunungan Bintang Virtual', 'Papua', -4.91442333, 140.62769528, '0000-00-00 00:00:00'),
(337, 'TVRI Tanah Merah', 'Papua', -6.08791667, 140.30458333, '0000-00-00 00:00:00'),
(338, 'TVRI Merauke', 'Papua', -8.48867778, 140.38752500, '0000-00-00 00:00:00'),
(339, 'TVRI Jagebob', 'Papua', -8.19340833, 140.76128056, '0000-00-00 00:00:00'),
(340, 'TVRI Bade', 'Papua', -7.13186111, 139.58226111, '0000-00-00 00:00:00'),
(341, 'Tolikara Virtual', 'Papua', -3.72996556, 138.48239556, '0000-00-00 00:00:00'),
(342, 'Asmat Virtual', 'Papua', -5.54284000, 138.13586611, '0000-00-00 00:00:00'),
(343, 'TVRI Wamena', 'Papua', -4.06644444, 138.89597222, '0000-00-00 00:00:00'),
(344, 'Pionerbivak Virtual', 'Papua', -2.30138472, 138.03624389, '0000-00-00 00:00:00'),
(345, 'Puncak Jaya Virtual', 'Papua', -3.70238750, 137.96160694, '0000-00-00 00:00:00'),
(346, 'Puncak Virtual', 'Papua', -3.98491917, 137.64069917, '0000-00-00 00:00:00'),
(347, 'Mimika Virtual', 'Papua', -4.55655944, 136.86594444, '0000-00-00 00:00:00'),
(348, 'Deiyai Virtual', 'Papua', -4.07037639, 136.20783639, '0000-00-00 00:00:00'),
(349, 'Enarotali Virtual', 'Papua', -3.92850028, 136.25314917, '0000-00-00 00:00:00'),
(350, 'Dogiyai Virtual', 'Papua', -4.00505639, 135.86786889, '0000-00-00 00:00:00'),
(351, 'Nabire Virtual', 'Papua', -3.38170194, 135.56852472, '0000-00-00 00:00:00'),
(352, 'TVRI Serui', 'Papua', -1.87958611, 136.24142222, '0000-00-00 00:00:00'),
(353, 'TVRI Biak', 'Papua', -1.16325000, 136.07364444, '0000-00-00 00:00:00'),
(354, 'TVRI Sarmi', 'Papua', -1.85455556, 138.75293056, '0000-00-00 00:00:00'),
(355, 'TVRI Sorong', 'Papua Barat', -0.86990278, 131.26265833, '0000-00-00 00:00:00'),
(356, 'TVRI Waigeo/Saonek', 'Papua Barat', -0.46932500, 130.78440000, '0000-00-00 00:00:00'),
(357, 'Tambraw Virtual', 'Papua Barat', -0.39229500, 132.46657722, '0000-00-00 00:00:00'),
(358, 'TVRI Manokwari', 'Papua Barat', -0.85839722, 134.06184167, '0000-00-00 00:00:00'),
(359, 'Kumurkek Virtual', 'Papua Barat', -1.24972222, 132.50900000, '0000-00-00 00:00:00'),
(360, 'Teminabuan Virtual', 'Papua Barat', -1.43518111, 132.00781583, '0000-00-00 00:00:00'),
(361, 'TVRI Bintuni', 'Papua Barat', -2.12050000, 133.53841667, '0000-00-00 00:00:00'),
(362, 'TVRI Fak Fak', 'Papua Barat', -2.92343889, 132.30244167, '0000-00-00 00:00:00'),
(363, 'TVRI Kaimana', 'Papua Barat', -3.66714167, 133.76258333, '0000-00-00 00:00:00'),
(365, 'TVRI Aww', 'DKI Jakarta', -5.00000000, 220.00000000, '2025-05-01 06:45:06'),
(366, 'Testing 1', 'Jawa Barat', -6.24888129, 120.47722300, '2025-05-01 06:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_aksi`
--

CREATE TABLE `jenis_aksi` (
  `id_aksi` int(11) NOT NULL,
  `nama_aksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_aksi`
--

INSERT INTO `jenis_aksi` (`id_aksi`, `nama_aksi`) VALUES
(1, 'Menambahkan Pemancar Baru'),
(2, 'Mengubah Data Pemancar'),
(3, 'Mengunggah File KMZ Terbaru'),
(4, 'Mengunduh Data Pemancar'),
(5, 'Menghapus Data Pemancar');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `id_pemancar` int(11) DEFAULT NULL,
  `id_upload` int(11) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `id_aksi` int(11) NOT NULL,
  `deskripsi_aksi` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `id_pemancar`, `id_upload`, `id_admin`, `id_aksi`, `deskripsi_aksi`, `tanggal`) VALUES
(2, NULL, NULL, 1, 2, 'Mengubah Titik yang Lebih akurat', '2025-04-30 14:44:35'),
(3, NULL, NULL, 1, 2, 'Mengubah Titik yang Lebih akurat', '2025-04-30 15:05:53'),
(4, NULL, NULL, 1, 2, 'Pengetesan terakhir edit data', '2025-04-30 15:28:34'),
(5, NULL, NULL, 2, 2, 'Mengubah Titik yang Lebih akurat melalui akun lain', '2025-04-30 15:30:45'),
(6, NULL, NULL, 2, 5, 'Menghapus Data Pemancar Teluk Wondama Virtual', '2025-04-30 15:41:14'),
(7, NULL, NULL, 2, 2, 'dsss', '2025-04-30 17:49:18'),
(8, 1, NULL, 2, 2, 'Pengetesan terakhir edit data', '2025-04-30 17:51:20'),
(9, 1, NULL, 2, 2, 'Mengubah Titik yang Lebih akurat melalui akun lain', '2025-04-30 17:53:05'),
(10, NULL, NULL, 1, 4, 'Mengunduh Data Pemancar', '2025-04-30 18:29:30'),
(11, NULL, NULL, 1, 4, 'Mengunduh Data Pemancar Pada 2025-04-30 11:29:56', '2025-04-30 18:29:56'),
(12, NULL, NULL, 1, 4, 'Mengunduh Data Pemancar Pada 2025-04-30 11:30:30', '2025-04-30 18:30:30'),
(13, 366, NULL, 1, 1, 'Menambahkan Titik Pemancar Baru', '2025-05-01 06:59:40'),
(14, NULL, NULL, 1, 4, 'Mengunduh Data Pemancar Pada 2025-05-02 06:25:00', '2025-05-02 13:25:00'),
(15, 1, NULL, 1, 2, 'Perbaikan Titik', '2025-05-02 13:25:36'),
(16, NULL, NULL, 1, 3, 'test', '2025-05-11 20:16:20'),
(17, NULL, 2, 1, 3, 'Test v2', '2025-05-11 20:30:41'),
(18, NULL, 3, 1, 3, 'Testing v3', '2025-05-11 20:33:20'),
(19, NULL, 4, 1, 3, 'Terbaru', '2025-05-12 17:18:38'),
(20, NULL, 5, 1, 3, 'Testing terbaru', '2025-05-12 18:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `upload_kmz`
--

CREATE TABLE `upload_kmz` (
  `id_upload` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `path_file` varchar(500) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_kmz`
--

INSERT INTO `upload_kmz` (`id_upload`, `nama_file`, `path_file`, `id_admin`, `tanggal_upload`) VALUES
(1, 'prediksi-11052025', 'kml/prediksi-11052025', 1, '2025-05-11 20:16:20'),
(2, 'prediksi-11052025', 'kml/prediksi-11052025', 1, '2025-05-11 20:30:41'),
(3, 'prediksi-11052025', 'kml/prediksi-11052025', 1, '2025-05-11 20:33:20'),
(4, 'prediksi-12052025', 'kml/prediksi-12052025', 1, '2025-05-12 17:18:38'),
(5, 'prediksi-12052025', 'kml/prediksi-12052025', 1, '2025-05-12 18:44:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `data_pemancar`
--
ALTER TABLE `data_pemancar`
  ADD PRIMARY KEY (`id_pemancar`);

--
-- Indexes for table `jenis_aksi`
--
ALTER TABLE `jenis_aksi`
  ADD PRIMARY KEY (`id_aksi`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `idx_log_id_pemancar` (`id_pemancar`),
  ADD KEY `idx_log_id_upload` (`id_upload`),
  ADD KEY `idx_log_id_admin` (`id_admin`),
  ADD KEY `idx_log_id_aksi` (`id_aksi`);

--
-- Indexes for table `upload_kmz`
--
ALTER TABLE `upload_kmz`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `idx_upload_kmz_id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_pemancar`
--
ALTER TABLE `data_pemancar`
  MODIFY `id_pemancar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `jenis_aksi`
--
ALTER TABLE `jenis_aksi`
  MODIFY `id_aksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `upload_kmz`
--
ALTER TABLE `upload_kmz`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_log_id_aksi` FOREIGN KEY (`id_aksi`) REFERENCES `jenis_aksi` (`id_aksi`),
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`id_pemancar`) REFERENCES `data_pemancar` (`id_pemancar`),
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `data_admin` (`id_admin`),
  ADD CONSTRAINT `log_ibfk_3` FOREIGN KEY (`id_upload`) REFERENCES `upload_kmz` (`id_upload`);

--
-- Constraints for table `upload_kmz`
--
ALTER TABLE `upload_kmz`
  ADD CONSTRAINT `upload_kmz_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `data_admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
