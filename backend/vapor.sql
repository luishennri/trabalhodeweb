-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 10:25 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `jogos`
--

CREATE TABLE `jogos` (
  `IdJogos` int(11) NOT NULL,
  `Imagem` varchar(255) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Nota` float NOT NULL,
  `Desenvolvedora` varchar(100) NOT NULL,
  `Plataforma` varchar(100) NOT NULL,
  `Genero` varchar(100) NOT NULL,
  `Jogadores` int(5) NOT NULL,
  `Lancamento` varchar(15) NOT NULL,
  `Trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jogos`
--

INSERT INTO `jogos` (`IdJogos`, `Imagem`, `Nome`, `Nota`, `Desenvolvedora`, `Plataforma`, `Genero`, `Jogadores`, `Lancamento`, `Trailer`) VALUES
(1, 'https://bdjogos.com.br/capas/4866-Minecraft-Dungeons-capa-1.jpg', 'Minecraft Dungeons', 7, 'Mojang Studios', 'PC, XBOX one, Playstation 4, Nintendo Switch', 'ação e aventura, Dungeon crawler', 4, '23/05/2020', 'https://www.youtube.com/embed/076mjMOL6R8'),
(2, 'https://upload.wikimedia.org/wikipedia/pt/9/94/Ori_and_the_Will_of_the_Wisps.jpg', 'Ori and the will of the Wisps', 9.2, 'Moon Studios', 'Microsoft Studios ', 'Plataforma Metroidvania', 1, '11/05/2020', 'https://www.youtube.com/embed/kd0zbNw1VOg'),
(3, 'https://upload.wikimedia.org/wikipedia/pt/thumb/b/be/The_Last_of_Us_capa.png/275px-The_Last_of_Us_capa.png', 'The Last of Us', 9.5, 'Naughty Dog', 'PlayStation 3', 'Ação-aventura, Sobrevivência', 1, '14 /06/2013', 'https://www.youtube.com/embed/OQWD5W3fpPM'),
(5, 'https://upload.wikimedia.org/wikipedia/pt/thumb/c/c5/RE2_remake_PS4_cover_art.png/270px-RE2_remake_PS4_cover_art.png', 'Resident Evil 2 Remake', 9.1, 'Capcom', 'Microsoft Windows, PlayStation 4, Xbox One', 'Survival horror', 1, '25/01/2019', 'https://www.youtube.com/embed/sVB_XudMgoA'),
(6, 'https://upload.wikimedia.org/wikipedia/en/thumb/1/1b/Monster_Hunter_World_cover_art.jpg/220px-Monster_Hunter_World_cover_art.jpg', 'Monster Hunter: World', 9, 'Capcom', 'PlayStation 4, Xbox One, Microsoft Windows', 'Action role-playing', 4, '09/08/2018', 'http://www.youtube.com/embed/Ro6r15wzp2o'),
(7, 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c0/Hollow_Knight_cover.jpg/220px-Hollow_Knight_cover.jpg', 'Hollow Knight', 9.8, 'Team Cherry', 'Microsoft Windows, macOS, Linux, Nintendo Switch, PlayStation 4, Xbox One', 'Action-adventure, Metroidvania', 1, '25/09/2018', 'http://www.youtube.com/embed/UAO2urG23S4'),
(8, 'https://upload.wikimedia.org/wikipedia/en/thumb/8/8d/Darkest_Dungeon_Logo.png/220px-Darkest_Dungeon_Logo.png', 'Darkest Dungeon', 8.7, 'Red Hook Studios', 'Microsoft Windows, OS X, Linux, PlayStation 4, PlayStation Vita, iOS, Nintendo Switch, Xbox One', 'Role-playing, dungeon crawl', 1, '19/01/2016', 'http://www.youtube.com/embed/h-mXN3akTPU'),
(9, 'https://upload.wikimedia.org/wikipedia/en/thumb/6/68/Halo_Guardians.png/220px-Halo_Guardians.png', 'Halo 5', 8.1, '343 Industries', 'Xbox one', 'FPS', 1, '22/10/2015', 'http://www.youtube.com/embed/Rh_NXwqFvHc'),
(10, 'https://upload.wikimedia.org/wikipedia/en/thumb/0/00/The_Order_1886_Cover_Art.png/220px-The_Order_1886_Cover_Art.png', 'The Order: 1886', 6.6, 'Ready at Dawn', 'Playstation 3', 'Action-adventure', 1, '20/02/2015', 'http://www.youtube.com/embed/RgJvIak6BpE'),
(11, 'https://upload.wikimedia.org/wikipedia/en/thumb/4/42/Batman_Arkham_Asylum_Videogame_Cover.jpg/220px-Batman_Arkham_Asylum_Videogame_Cover.jpg', 'Batman: Arkham Asylum', 8.8, 'Rocksteady Studios', 'PlayStation 3, Xbox 360, Microsoft Windows, Mac OS X, PlayStation 4, Xbox One', 'Action-adventure', 1, '25/08/2009', 'http://www.youtube.com/embed/T8bu2Y_cZb8'),
(12, 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f1/WitnessPoster.png/220px-WitnessPoster.png', 'The Witness (2016 video game)', 7.5, 'Thekla, Inc.', 'Microsoft Windows, PlayStation 4, Xbox One, Nvidia Shield, macOS, iOS', 'Puzzle', 1, '26/01/2016', 'http://www.youtube.com/embed/ul7kNFD6noU'),
(13, 'https://upload.wikimedia.org/wikipedia/en/thumb/f/fd/Logo_of_Stardew_Valley.png/220px-Logo_of_Stardew_Valley.png', 'Stardew Valley', 9, 'ConcernedApe', 'Microsoft Windows, macOS, Linux, PlayStation 4, Xbox One, Nintendo Switch', 'Simulation, role-playing', 2, '26/02/2016', 'http://www.youtube.com/embed/ot7uXNQskhs'),
(14, 'https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Destiny_2_%28artwork%29.jpg/220px-Destiny_2_%28artwork%29.jpg', 'Destiny 2', 7.7, 'Bungie', 'Microsoft Windows, PlayStation 4, Xbox One', 'First-person shooter', 4, '06/09/2017', 'http://www.youtube.com/embed/hdWkpbPTpmE');

-- --------------------------------------------------------

--
-- Table structure for table `relacao`
--

CREATE TABLE `relacao` (
  `IdRelacao` int(11) NOT NULL,
  `IdJogos` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relacao`
--

INSERT INTO `relacao` (`IdRelacao`, `IdJogos`, `IdUsuario`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 8, 1),
(4, 6, 1),
(5, 7, 1),
(6, 12, 1),
(7, 13, 1),
(8, 11, 1),
(9, 3, 1),
(10, 5, 1),
(11, 11, 2),
(12, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Senha` varchar(30) NOT NULL,
  `Cidade` varchar(30) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Pais` varchar(30) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Nome`, `Username`, `Senha`, `Cidade`, `Estado`, `Pais`, `Descricao`, `Imagem`) VALUES
(1, 'Rafael Cavalcante do Espirito Santo', 'Faelces', '123456', 'Belo Horizonte', 'Minas Gerais', 'Brasil', 'Fã de jogos de todos os tipos pro gamer ', 'https://img.freepik.com/vetores-gratis/imagens-animadas-abstratas-neon-lines_23-2148344065.jpg?size=626&ext=jpg'),
(2, 'Luiz Henrique ', 'JamalMalik', '456789', 'Belo Horizonte', 'Minas Gerais', 'Brasil', 'Pro player de CS e valorant streamer nas horas vagas', 'https://www.lupadigital.info/wp-content/uploads/2018/05/imagens-gratis.jpg.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`IdJogos`),
  ADD UNIQUE KEY `Nome` (`Nome`);

--
-- Indexes for table `relacao`
--
ALTER TABLE `relacao`
  ADD PRIMARY KEY (`IdRelacao`),
  ADD KEY `IdJogos` (`IdJogos`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `Login` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `IdJogos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `relacao`
--
ALTER TABLE `relacao`
  MODIFY `IdRelacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `relacao`
--
ALTER TABLE `relacao`
  ADD CONSTRAINT `relacao_ibfk_1` FOREIGN KEY (`IdJogos`) REFERENCES `jogos` (`IdJogos`),
  ADD CONSTRAINT `relacao_ibfk_2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
