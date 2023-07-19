
USE application_db;

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nm_lengkap` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nm_lengkap`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nmb` varchar(25) NOT NULL,
  `pin` int(2) NOT NULL,
  `stok` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nmb`, `pin`, `stok`) VALUES
(1, 'Buku A500', 1, 1),
(2, 'Buku A502', 1, 4),
(3, 'Buku A503', 1, 6),
(4, 'Buku A504', 2, 1),
(5, 'Buku A505', 3, 2),
(6, 'Buku A600', 3, 5),
(7, 'Buku A601', 5, 2),
(8, 'Buku A602', 5, 3),
(9, 'Buku A603', 6, 2),
(10, 'Buku A604', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `centroid`
--

CREATE TABLE IF NOT EXISTS `centroid` (
  `id_centroid` int(11) NOT NULL,
  `c1x` int(4) NOT NULL,
  `c2x` int(4) NOT NULL,
  `c3x` int(4) NOT NULL,
  `c1y` int(4) NOT NULL,
  `c2y` int(4) NOT NULL,
  `c3y` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid`
--

INSERT INTO `centroid` (`id_centroid`, `c1x`, `c2x`, `c3x`, `c1y`, `c2y`, `c3y`) VALUES
(1, 4, 1, 5, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `id_hasil` int(1) NOT NULL,
  `c1` TEXT,
  `c2` TEXT,
  `c3` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `hasil` (`id_hasil`, `c1`, `c2`, `c3`) VALUES
(1, NULL, NULL, NULL);