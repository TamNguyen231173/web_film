-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 02:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourcecodester_omsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(10) NOT NULL,
  `name` nvarchar(30) NOT NULL,
  `rdate` varchar(5) NOT NULL,
  `runtime` varchar(4) NOT NULL,
  `description` nvarchar(500) NOT NULL,
  `viewers` int(10) DEFAULT '0',
  `imdb` int(2),
  `tomato` int(3),
  `imgpath` text NOT NULL,
  `poster` text NOT NULL,
  `videopath` text NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `name`, `rdate`, `runtime`, `description`, `viewers`, `imdb`, `tomato`, `imgpath`, `poster`, `videopath`, `genre_id`) VALUES
(1, 'Peaky Blinders', '2013', '60', N'Một băng đảng khét tiếng xuất hiện ở Birmingham, Anh Quốc năm 1919. Cầm đầu băng là Tommy Shelby, tên trùm tội phạm khét tiếng muốn nổi lên bằng mọi giá.', '0', 8.8, 94, 'peaky_bliners_bg.jpg', 'peaky_blinders_poster.jpg', 'https://hd.1080phim.com/share/680390c55bbd9ce416d1d69a9ab4760d', 7),
(2, 'Joker', '2019', '121', N'Thành phố Gotham năm 1981, một nghệ sĩ hài nghèo mắc bệnh tâm thần nỗ lực khẳng định mình. Cuộc đời anh rơi vào thảm cảnh đen tối sau khi chống trả bọn tấn công.', '0', 8.4, 68, 'joker_bg.jpg', 'joker_poster.jpg', 'http://aa.nguonphimmoi.com/share/f8c1f23d6a8d8d7904fc0ea8e066b3bb', 6),
(3, 'The Godfather', '1972', '180', N'Câu chuyện bắt đầu bằng đám cưới cô con gái cưng của “Don” Vito Corleone (Marlon Brando) ông trùm băng Mafia ở New York. Con trai út của ông là Michael (Al Pacino) vừa trở về từ Đại chiến Thế giới 2 và không giấu ý định đứng ngoài mọi vụ làm ăn của gia đình.', '0', 9.2, 97, 'the_god_father_bg.jpg', 'the_godfather_poster.jpg', 'https://aa.nguonphimmoi.com/share/131799f66a96ee034181e8a54b4c0b49', 7),
(4,'Inception', '2010', '150', N'Một tên trộm ăn cắp bí mật của công ty thông qua việc sử dụng công nghệ chia sẻ giấc mơ được đưa ra nhiệm vụ nghịch đảo của việc trồng một ý tưởng vào tâm trí của một c.e.o.', '0', 8.8, 87, 'inception_bg.jpg', 'inception_poster.jpg', 'https://1080.hdphimonline.com/share/d54e99a6c03704e95e6965532dec148b', 2),
(5, 'The Big Short', '2015', '130', N'Phim Đại Suy Thoái - The Big Short 2016: Brad Pitt, Christian Bale, Steve Carell và Ryan Gosling vào vai những người ngoài cuộc chứng kiến nền kinh tế ngày càng thối nát. Họ thấy bất mãn khi không thế lực nào ra tay cứu vãn nó, kể cả các ngân hàng lớn, truyền thông hay chính phủ.', '0', 7.8, 89, 'the_big_short_bg.jpg', 'the-big_short_poster.jpg', 'https://1080.hdphimonline.com/share/3e4b663e94e918f8f9fdf1ddef046564', 12),
(6,'La la land', '2016', '120', N'Nữ diễn viên khao khát phục vụ các ngôi sao điện ảnh ở giữa các buổi thử giọng và các vụ trầy xước của nhạc sĩ Jazz bằng cách chơi các hợp đồng biểu diễn của Cocktail-Party ở Dingy Bars.', '0', 8, 91, 'la_la_land_bg.jpg', 'la _la_land_poster.jpg', 'https://1080.hdphimonline.com/share/a501bebf79d570651ff601788ea9d16d', 5),
(7,'303', '2018', '144', N'Câu chuyện của Jule và Jan cùng rời khỏi Berlin để đi du ngoạn về miền nam đất nước...', '0', 7.5, 83, '303_bg.jpg', '303_poster.jpg', 'https://hd.1080phim.com/share/a7ce4026f43a4491f1284bb38d96f440', 5),
(8,'Coco', '2017', '105', N'Mặc dù đã cấm các thế hệ gia đình của gia đình mình về âm nhạc, Miguel mơ ước trở thành một nhạc sĩ thành đạt như thần tượng của mình, Ernesto de la Cruz.', '0', 8.4, 97, 'coco_bg.jpg', 'coco_poster.jpg', 'https://1080.hdphimonline.com/share/cee8d6b7ce52554fd70354e37bbf44a2', 13),
(9,'Soul', '2020', '100', N'Joe là một giáo viên ban nhạc trung học có cuộc sống không diễn ra theo cách anh ta mong đợi. Đam mê thực sự của anh là Jazz - và anh ấy tốt.', '0', 8, 95, 'soul_bg.png', 'soul_poster.jpg', 'https://1080.hdphimonline.com/share/95192c98732387165bf8e396c0f2dad2', 13),
(10,'Luca', '2021', '95', N'Trên Riviera của Ý, một tình bạn khó khăn nhưng mạnh mẽ lớn lên giữa một con người và một con quái vật biển được ngụy trang như một con người.', '0', 7.4, 91, 'luca_bg.jpg', 'luca_poster.jpg', 'https://1080.hdphimonline.com/share/77369e37b2aa1404f416275183ab055f', 13),
(11, 'Onward', '2020', '102', N'Trong một thế giới giả tưởng ngoại thành, hai anh em yêu tinh tuổi teen, Ian và lúa mạch Lightfoot, đi trên một hành trình để khám phá nếu vẫn còn một chút phép thuật còn sót lại để dành một ngày cuối cùng với cha của họ, người đã chết khi còn quá trẻ để nhớ anh ấy.', '0', 7.4, 88, 'onward_bg.jpg', 'onward_poster.jpg', 'https://kd.hd-bophim.com/share/8bb88f80d334b1869781beb89f7b73be', 13),
(12, 'Turning red', '2022', '120', N'Mei, mười ba tuổi đang trải qua cảm giác khó xử khi là một thiếu niên với sự thay đổi - khi quá phấn khích, cô ấy đã biến thành một con gấu trúc đỏ khổng lồ.', '0', 7, 94, 'turning_red_bg.jpg', 'onward_poster.jpg', 'https://1080.hdphimonline.com/share/c04c19c2c2474dbf5f7ac4372c5b9af1', 9),
(13, 'Your name', '2016', '106', N'Hai người lạ thấy mình được liên kết một cách kỳ lạ. Khi một hình thức kết nối, sẽ khoảng cách là điều duy nhất để giữ chúng xa nhau?', '0', 8.4, 98, 'your_name_bg.jpg', 'your_name_poster.jpg', 'https://1080.hdphimonline.com/share/4d6b3e38b952600251ee92fe603170ff', 5),
(14, 'Catch Me If You Can', '2002', '141', N'Một đặc vụ FBI quyết tâm bỏ tù tay lừa đảo gian xảo Frank Abagnale Jr. Nhưng Frank không chỉ trốn thoát tài tình mà còn mê trò đuổi bắt vô cùng.', '0', 8.1, 96, 'catch_me_if_you_can_bg.jpg', 'catch_me_if_you_can_poster.jpg', 'https://kd.hd-bophim.com/share/ea5d2f1c4608232e07d3aa3d998e5135', 14),
(15, 'John Wick', '2014', '100', N'Khi con trai của gã gangster ăn trộm xe và giết chú chó, John Wick, một người đàn ông gan dạ đã vô cùng đau đớn và tìm đến tận hang ổ của bọn tội phạm để báo thù.', '0', 7.4, 86, 'john_wick_bg.jpg', 'john_wick_poster.jpg', 'http://aa.nguonphimmoi.com/share/6da9003b743b65f4c0ccd295cc484e57', 10),
(16, 'About time', '2013', '120', N'Ở tuổi 21, Tim Lake (Domhnall Gleeson) phát hiện ra anh ta có thể đi du lịch trong thời gian ... ', '0', 7.8, 70, 'about_time_bg.jpg', 'about_time_poster.jpg', 'https://hd.1080phim.com/share/cc42acc8ce334185e0193753adb6cb77', 5);
-- INSERT INTO `movies` (`mid`, `name`, `genre`, `rdate`, `runtime`, `decription`, `viewers`, `imgpath`, `videopath`) VALUES
-- (1, 'rampage', 'fiction', '2017', '120', 'animals', 8, 'rampage.jpg', 'RAMPAGE Trailer.mp4'),
-- (2, 'black panther', 'fiction', '2017', '140', 'super hero movie', 13, 'black panther.jpg', 'Black Panther.mp4'),
-- (3, 'spiderman homecoming', 'fiction', '2018', '110', 'super hero movie', 5, 'spider-man-homecoming.jpg', 'Spider-Man Homecoming.mp4'),
-- (4, 'jumanji', 'adventure', '2017', '130', '4 kids stuck in video game', 12, 'jumanji2017.jpg', 'JUMANJI 17.mp4'),
-- (5, 'the conjuring', 'horror', '2013', '120', 'ghost house', 1, 'Conjuring.jpg', 'The Conjuring.mp4'),
-- (6, 'the conjuring 2', 'horror', '2015', '115', 'cursed family', 1, 'conjuring2.jpg', 'The Conjuring 2.mp4'),
-- (7, 'infinity wars ', 'fiction', '2018', '123', 'collaboration of all marvel characters', 5, 'infinity war.jpg', 'Avengers Infinity War.mp4'),
-- (8, 's', 's', 's', '', 's', 27, 'Baby Care Website in PHP with Full Source Code.jpg', ''),
-- (9, 's', 's', 's', '12', 'sd', 27, 'Online Attendance Management System in PHP with Full Source Code.jpg', 'Attendance Monitoring.mp4'),
-- (10, 'sadasdas', 'asd', 'asd', '', 'asd', 19, 'Attendance Monitoring System in Android with Full Source Code.jpg', 'Attendance Monitoring.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `movies2`
--

CREATE TABLE `movies2` (
  `movie2_id` int(10) NOT NULL,
  `name` nvarchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `videopath` text NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `rating`
--

CREATE TABLE `casts` (
  `cast_id` int(10) NOT NULL,
  `cast_name` nvarchar(50) NOT NULL,
  `cast_img` text NOT NULL,
  `movie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `genres` (
  `genre_id` int(10) NOT NULL,
  `genre_name` nvarchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`,`genre_name`) VALUES
(1,'Hài'),
(2, 'Khoa học viễn tưởng'),
(3, 'Kinh dị'),
(4, 'Chiến tranh'),
(5, 'Lãng mạn'),
(6, 'Chính kịch'),
(7, 'Tội phạm'),
(8, 'Hư cấu lịch sử'),
(9, 'Vui'),
(10, 'Hành động'),
(11, 'Giật gân'),
(12, 'Tài liệu'),
(13, 'Gia Đình'),
(14, 'Giật Gân');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rate_count` int(3) NOT NULL,
  `movie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `user_avatar` varchar(500) DEFAULT './assets/storage/uploads/img/default_avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `users` (`user_id`, `user_name`,`email`, `password`, `DOB`, `user_avatar`) VALUES
(1, 'tamnguyen', 'tamnguyen@gmail.com', 'admin', '05/02/2003', default);

-- --------------------------------------------------------

--
-- Table structure for table `movies2`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `movies2`
--
ALTER TABLE `movies2`
  ADD PRIMARY KEY (`movie2_id`),
  ADD KEY `movie_id` (`movie_id`);

  --
-- Indexes for table `movies2`
--
ALTER TABLE `casts`
  ADD PRIMARY KEY (`cast_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `genre_id` (`genre_id`);

  --
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies2`
  MODIFY `movie2_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `casts`
  MODIFY `cast_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);
COMMIT;

-- Constraints for table `movies2`
--
ALTER TABLE `movies2`
  ADD CONSTRAINT `movies2_ibfk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);
COMMIT;

-- Constraints for table `casts`
--
ALTER TABLE `casts`
  ADD CONSTRAINT `casts_ibfk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);
COMMIT;

-- Constraints for table `genres`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);
COMMIT;

-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);
COMMIT;

-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_fk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movies_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
