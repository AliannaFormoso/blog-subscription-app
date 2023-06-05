-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 07:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlcourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`first_name`, `last_name`, `email`, `user_name`, `pass`) VALUES
('Alba', 'Recio', 'alba@email.com', 'alba79', 'Cami99'),
('Alexa', 'Google', 'alexa@google.com', 'alexaSiri', 'Cami99'),
('Amador', 'Rivas', 'amador@email.com', 'amancio', 'Cami99'),
('Angelines', 'Chacon', 'angelines@gmail.com', 'nines', 'Cami99'),
('Antonio', 'Garcia', 'antonio@email.es', 'anthony', 'Cami99'),
('Bertha', 'Otero', 'bertha@email.es', 'berthinha', 'Cami99'),
('Bruno', 'Quiroga', 'bruno@email.com', 'brunoQuiro', 'Cami99'),
('Camilo', 'Cienfuegos', 'camilo@email.com', 'cienfuegos', 'Cami99'),
('Carlos', 'Arteaga', 'carlos@email.com', 'charlieArte', 'Cami99'),
('Dalila', 'Sanzon', 'dalila@email.com', 'dali00', 'Cami99'),
('Daniell', 'Puentes', 'dani@email.it', 'daniPooh', 'Cami99'),
('Diego', 'Nelasquez', 'diego@email.es', 'diegonel1400', 'Cami99'),
('Enrique', 'Pastor', 'enrique@email.com', 'kikePaz', 'Cami99'),
('Estela', 'Reynolds', 'estela@email.es', 'estela', 'Cami99'),
('Fermin', 'Trujillo', 'fermin@email.es', 'fermin', 'Cami99'),
('Francisco', 'Zoya', 'francisco@email.es', 'pancho2000', 'Camin99'),
('Javier', 'Maroto', 'javier@email.es', 'javiMaroto', 'Cami99'),
('Jose', 'Rodriguez', 'jose@email.com', 'pepero', 'Cami99'),
('Josefa', 'Gonzalez', 'josefa@email.com', 'josefaGon', 'Cami99'),
('Juan', 'Dominguez', 'juan@email.com', 'juandm90', 'Cami99'),
('Juana', 'De Arco', 'juana@email.es', 'juanita', 'Cami99'),
('Judith', 'Becquer', 'judith@email.es', 'judith', 'Cami99'),
('Leo', 'Ticaprio', 'leo@email.com', 'leotitanic', 'Cami99'),
('Macarena', 'Gomez', 'macarena@gmail.com', 'makiGo3', 'Cami99'),
('Maite', 'Figueroa', 'maite@email.es', 'maiteFigue', 'Cami99'),
('Maria', 'Sanchez', 'maria@email.es', 'maria92', 'Cami99'),
('Pedro', 'Martinez', 'pedro@email.com', 'pedrito1', 'Cami99'),
('Ramon', 'Perez', 'ramon@email.es', 'ramonpr', 'Cami99'),
('Romeo', 'Capuleto', 'romeo@gmail.it', 'romeoItaly', 'Cami99'),
('Rose', 'Titanic', 'rose@email.com', 'rose1912', 'Cami99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
