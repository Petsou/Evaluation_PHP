-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 23, 2021 at 01:30 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immobilier`
--

-- --------------------------------------------------------

--
-- Table structure for table `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `surface` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(6, 'Villa de somptueuse', '12 allée du lorem ipsum', 'Loremcity', 21000, '1000', 700000, 'logement1.png', 'location', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dignissim sagittis lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus non erat in odio elementum pretium ut non enim. Morbi ultricies sagittis malesuada. Sed malesuada cursus lacus, non fermentum velit tempus nec. Etiam vitae nisl non enim auctor blandit. Sed rhoncus vel ipsum vel mollis. Aenean laoreet felis ut porttitor lobortis. Sed nec sapien in turpis pretium convallis ac eget nisi. Quisque molestie nisi quis neque pretium elementum. Aliquam aliquam in nunc ac mattis. '),
(7, 'Villa de luxe', '12 rue du lorem ipsum', 'Loremcity', 21000, '900', 500000, 'logement2.jpg', 'location', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dignissim sagittis lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus non erat in odio elementum pretium ut non enim. Morbi ultricies sagittis malesuada. Sed malesuada cursus lacus, non fermentum velit tempus nec. Etiam vitae nisl non enim auctor blandit. Sed rhoncus vel ipsum vel mollis. Aenean laoreet felis ut porttitor lobortis. Sed nec sapien in turpis pretium convallis ac eget nisi. Quisque molestie nisi quis neque pretium elementum. Aliquam aliquam in nunc ac mattis. '),
(8, 'Superbe appartement', '5 square d l\'ipsum', 'Ipsumville', 32000, '600', 300000, 'logement3.jpg', 'vente', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dignissim sagittis lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus non erat in odio elementum pretium ut non enim. Morbi ultricies sagittis malesuada. Sed malesuada cursus lacus, non fermentum velit tempus nec. Etiam vitae nisl non enim auctor blandit. Sed rhoncus vel ipsum vel mollis. Aenean laoreet felis ut porttitor lobortis. Sed nec sapien in turpis pretium convallis ac eget nisi. Quisque molestie nisi quis neque pretium elementum. Aliquam aliquam in nunc ac mattis. '),
(9, 'Appartement paradisiaque', '2 square de l\'ipsum', 'Ipsumville', 32000, '700', 400000, 'logement4.jpg', 'vente', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dignissim sagittis lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus non erat in odio elementum pretium ut non enim. Morbi ultricies sagittis malesuada. Sed malesuada cursus lacus, non fermentum velit tempus nec. Etiam vitae nisl non enim auctor blandit. Sed rhoncus vel ipsum vel mollis. Aenean laoreet felis ut porttitor lobortis. Sed nec sapien in turpis pretium convallis ac eget nisi. Quisque molestie nisi quis neque pretium elementum. Aliquam aliquam in nunc ac mattis. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
