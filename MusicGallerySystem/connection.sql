-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2018 at 04:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music2`
--

-- --------------------------------------------------------

--
-- Table structure for table `audios2`
--

CREATE TABLE `audios2` (
  `s_id` int(11) NOT NULL,
  `s_path` varchar(50) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_artist` varchar(50) NOT NULL,
  `s_genre` varchar(50) NOT NULL,
  `s_movie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audios2`
--

INSERT INTO `audios2` (`s_id`, `s_path`, `s_name`, `s_artist`, `s_genre`, `s_movie`) VALUES
(16, 'Enna Sona.mp3', 'Enna Sona', 'Arijit Singh', 'Hindi', 'Ok janu'),
(17, 'Zalima.mp3', 'Zalima', 'Arijit Singh', 'Hindi', 'Raees'),
(18, 'khola haoyay.mp3', 'Khola haoyay', 'Santunu Mukherjee', 'Rabindra Sangeet', 'Rabindra album'),
(23, 'Tumi Robe Nirobe.mp3', 'Tumi Robe Nirobe', 'sd', 'Rabindra Sangeet', 'Rabindra album'),
(25, 'The Humma Song.mp3', 'The Humma Song', 'Badsha', 'Hindi', 'Ok Jannu'),
(26, 'Tomar Mohabisshwe Kicchu.mp3', 'Tomar Mohabisshwe Kicchu', 'S D', 'Bengali', 'Nazrul Geeti'),
(27, 'More Deke Lao.mp3', 'More Deke Lao', 'wr', 'Bengali', 'Nazrul Geeti'),
(28, 'Coffe Houser.mp3', 'Coffe Houser', 'Manna Dey', 'Bengali', 'Best of manna dey'),
(29, 'Se Amar Choto-Manna Dey.mp3', 'Se Amar Choto-Manna Dey', 'Manna Dey', 'Bengali', 'Best of manna dey'),
(30, 'Zindagi Kaisi Hai.mp3', 'Zindagi Kaisi Hai', 'Manna Dey', 'Bengali', 'Best of manna dey'),
(31, 'Tui ki amar.mp3', 'Tui ki amar', 'Manna Dey', 'Bengali', 'Best of manna dey'),
(33, 'Dil Se Re.mp3', 'Dil Se Re', 'A.R.Rahaman', 'Best of A.R.Rahaman', 'Dil Se'),
(34, 'Ae Nazneen Suno.mp3', 'Ae Nazneen Suno', 'A.R.Rahaman', 'Best of A.R.Rahaman', 'Dil Mai Hai'),
(35, 'Pehli Baar Dil Ye (Hum Ho Gaye Aap Ke) 320Kbps.mp3', 'Pehli Baar Dil Ye', 'Alka Yagnik', 'Best of Alka Yagnik', 'Hum Ho Gaye Aap Ke'),
(36, 'Saaton Janam Main Tere - Dilwale - 320Kbps.mp3', 'Saaton Janam Me Tere', 'Alka Yagnik', 'Best of Alka Yagnik', 'Dilwale'),
(37, 'Der Se Hua (Female Version) - HHGAK 320Kbps.mp3', 'Der Se Hua', 'Alka Yagnik', 'Best of Alka Yagnik', 'Hum Ho Gaye Aap Ke'),
(38, 'Ae Mere Humsafar__Raag.Me__.mp3', 'Ae Mere Hum Safar', 'Udit Narayan', 'Old hindi songs', 'Best of Udit Narayan'),
(39, 'Nasha Yeh Pyar Ka__Raag.Me__.mp3', 'Nasha Yeh Payar Ka', 'Udit Narayan', 'Old hindi songs', 'Best of Udit Narayan'),
(40, 'Baar Baar Dekho.mp3', 'Baar Baar Dekho', 'Rafi', 'Old hindi songs', 'Best of Rafi'),
(41, 'Kya Hua Tera Wada.mp3', 'Kya Hua Tera Wada', 'Rafi', 'Old hindi songs', 'Best of Rafi'),
(42, 'Bas Itna Hai Kehna__Raag.Me__.mp3', 'Bas Itna Hai Kahena', 'Sonu Nigam', 'Hindi', 'Sonu Nigam Collection'),
(43, 'Allah Maaf Kare__Raag.Me__.mp3', 'Allah Maaf Kare', 'Sonu Nigam', 'Hindi', 'Sonu Nigam Collection'),
(44, 'Behti Hawa Sa Tha Woh(MyMp3Song).mp3', 'Behti Hawa Sa Tha Wo', 'Santunu Moitro', 'Hindi', '3 Idiots'),
(46, 'Tara jhilmil swapna (bengali-mp3.com).mp3', 'Tara Jhilmil', 'Sandha Mukhopadhya', 'Old Bengali Songs', 'Sondha Mukhopadhya Collections'),
(47, 'Tomar chokher jale (bengali-mp3.com).MP3', 'Tomar Chokher Jole', 'Hemanta Mukhopadhya', 'Old Bengali Songs', 'Hemanta Mukhopadhya Collections'),
(48, 'Shape Of You (Mp3Beet.Com) - 192Kbps.mp3', 'Shape Of You', 'Ed Sheeran', 'English', 'English Pops'),
(49, 'Ellie Goulding - Love Me Like You Do.mp3', 'Love Me Like You Do', 'Ellie Goulding', 'English', 'English Pops');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `u_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `u_id`, `name`) VALUES
(38, 9, 'hindi songs'),
(39, 9, 'English songs'),
(40, 9, 'Old Hindi Songs');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_song`
--

CREATE TABLE `playlist_song` (
  `ps_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist_song`
--

INSERT INTO `playlist_song` (`ps_id`, `id`, `p_name`, `s_name`, `s_id`) VALUES
(64, 38, 'hindi', 'The Humma Song', 25),
(66, 39, 'English', 'Shape Of You', 48),
(68, 38, 'hindi', 'Enna Sona', 16),
(69, 39, 'English', 'Love Me Like You Do', 49),
(70, 40, 'old songs', 'Baar Baar Dekho', 40);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phno` decimal(10,0) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phno`, `user_pass`) VALUES
(9, 'Protim Ghosh', 'protim234@gmail.com   ', '9836257959', '1234'),
(10, 'Pronay Ghosh', 'pronay123@gmail.com', '9748544832', '1234'),
(11, 'Protim Ghosh', 'pro121@gmail.com ', '9433583104', '4856');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audios2`
--
ALTER TABLE `audios2`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist_song`
--
ALTER TABLE `playlist_song`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audios2`
--
ALTER TABLE `audios2`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `playlist_song`
--
ALTER TABLE `playlist_song`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;