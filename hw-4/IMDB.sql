-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2021 at 08:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IMDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `title` varchar(50) NOT NULL,
  `descript` varchar(500) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `production` varchar(500) NOT NULL,
  `casts` varchar(500) NOT NULL,
  `DateYear` int(4) NOT NULL,
  `duration` int(6) NOT NULL,
  `f_id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`title`, `descript`, `genre`, `director`, `production`, `casts`, `DateYear`, `duration`, `f_id`, `img`) VALUES
('Titanic', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'Drama, Romance', 'James Cameron', 'James Cameron', 'Leonardo DiCaprio, Kate Winslet, Billy Zane', 1997, 194, 1, 'titanic.jpg'),
('The Great Gatsby', 'A writer and wall street trader, Nick, finds himself drawn to the past and lifestyle of his millionaire neighbor, Jay Gatsby.', 'Drama, Romance', 'Baz Luhrmann', 'Baz Luhrmann, Catherine Martin', 'Leonardo DiCaprio, Carey Mulligan, Joel Edgerton', 2013, 143, 2, 'getsby.jpg'),
('The Godfather', 'An organized crime dynasty\'s aging patriarch transfers control of his clandestine empire to his reluctant son. ', 'Crime, drama', 'Francis Ford Coppola', 'Paramount Pictures', 'Marlon Brando, Al Pacino, James Caan ', 1972, 175, 3, 'godf.jpg'),
('Schindler\'s List', 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis. ', 'Biography, Drama, History ', 'Steven Spielberg', 'Universal Pictures', ' Liam Neeson, Ralph Fiennes, Ben Kingsley', 1993, 205, 4, 'sind.jpg'),
(' Forrest Gump ', 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate and other historical events unfold through the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.', 'Drama,Romance', ' Robert Zemeckis', 'Paramount Pictures', 'Tom Hanks, Robin Wright, Gary Sinise ', 1994, 144, 5, 'gamp.jpg'),
('Inception', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O. ', 'Action,Adventure', ' Christopher Nolan', 'Warner Bros. Pictures', ' Leonardo DiCaprio, Joseph Gordon-Levitt, Elliot Page', 2010, 180, 6, 'inception.jpg'),
('The Matrix', 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence. ', 'Action,Sci-fi', 'Wachowski Sisters', 'Warner Bros', ' Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', 1999, 156, 7, 'matrix.jpg'),
('Interstellar', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival. ', 'Adventure,Drama, Sci-fi', 'Christopher Nolan', '      Paramount Pictures     Warner Bros. Pictures     Legendary Pictures     Syncopy     Lynda Obst Productions', 'Matthew McConaughey, Anne Hathaway, Jessica Chastain', 2014, 196, 10, 'inter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstName` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_uid` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `isAdmin` char(5) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `surname`, `email`, `user_uid`, `psw`, `isAdmin`, `id`) VALUES
('andjela', 'manojlovic', 'akimanojlovic@gmail.com', 'andjela99', 'nekasifra123', 'admin', 1),
('aleksandr', 'fokin', 'grahelm@gmail.com', 'sasa93', 'sifra321', 'admin', 2),
('ivana', 'stefanovic', 'ivana99@gmail.com', 'ivana99', 'password321', 'admin', 3),
('ime', 'prezime', 'mojmejl@gmail.com', 'ime99', 'siframejla123', '', 4),
('petar', 'petrovic', 'perap@gmail.com', 'njegos', 'sifra123', '', 5),
('petar', 'petrovic', 'perap@gmail.com', 'njegos', 'sifra', '', 6),
('nevena', 'radojevic', 'nena@gmail.com', 'nena00', 'nena123', '', 7),
('', '', '', '', '', '', 8),
('', '', '', '', '', '', 9),
('', '', '', '', '', '', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
