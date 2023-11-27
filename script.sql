CREATE DATABASE happy_mario;

CREATE TABLE `students` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
)
CREATE TABLE `teachers` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
)

CREATE TABLE `booking` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `student_id` int(11) DEFAULT NULL
  FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
)


INSERT INTO `students` (`id`, `nom`, `prenom`, `cin`, `email`, `gender`, `image`) VALUES
(24, 'Adnane', 'Roujane', 'FA158678', 'adnane@gmail.com', 'male', '875-1697011849.jpg'),
(25, 'ghizlane', 'maqdar', 'AA158545', 'ghizlane@gmail.com', 'female', '925-1697012057.jpg'),
(26, 'omar', 'ennedi', 'QA456789', 'omar@gmail.com', 'male', '859-1697012922.jpg'),
(27, 'abdelilah', 'sadiqi', 'QA154878', 'abdelilah@gmail.com', 'male', '945-1697011623.jpg'),
(28, 'Rachid', 'RACH', 'AA158545', 'rachid@gmail.com', 'male', '873-1697012932.jpg'),
(29, 'zakaria', 'elkoh', 'QA456789', 'zakaria@gmail.com', 'male', '906-1697012829.jpg'),
(30, 'Anass', 'Elmakhloufi', 'QA154887', 'anass@gmail.com', 'male', '843-1697011936.jpg'),
(31, 'FatimaEzahra', 'adardor', 'QA154882', 'titima@gmail.com', 'female', '953-1697011962.jpg'),
(32, 'Aymen', 'Bisdaoune', 'QA154878', 'aymen11@gmail.com', 'male', '853-1697011944.jpg'),
(34, 'Nabil', 'CHABAB', 'QA848165', 'nabil.chababnabil@gmail.com', 'male', 'me.jpg'),
(35, 'said', 'aabilla', 'QA15484', 'said@gmail.com', 'male', '716-1693323428.jpg');

INSERT INTO `teachers` (`id`, `nom`, `prenom`, `departement`, `classe`, `image`) VALUES
(3, 'Anass', 'Choubri', 'BIOF', '1BAC-BIOF-2', '33-1669135287.jpg'),
(5, 'Aziz', 'Ben Mallouk', 'SVT', '2BAC-SVT-4', '38-1684487575.jfif'),
(6, 'Reda', 'Elmedkouri', 'BIOF', '2BAC-BIOF-1', '37-1684509574.jfif'),
(7, 'tayeb', 'souini', 'PC', '2-BAC-PC-1', '711-1691576438.jpg'),
(8, 'Aymane', 'Benhima', 'SVT', '2-BAC-SVT-4', '12-1665938441.jpg'),
(11, 'Reda', 'Elmedkouri', 'SVT', '2-BAC-SVT-2', '37-1684509574.jfif'),
(12, 'Anass', 'Elmakhloufi', 'BIOF', 'BIOF-1', '33-1669135287.jpg'),
(13, 'Aziz', 'Ben Mallouk', 'SVT', '2BAC-SVT-1', '38-1684487575.jfif');

INSERT INTO `booking` (`id`, `book_name`, `category`, `start_date`, `end_date`, `student_id`) VALUES
(1, 'Harry Potter', 'Fantasy', '2023-10-26 14:30:42', '2023-12-26 14:30:42', 32),
(2, 'Fantastic Beats', 'Action', '2023-11-24 14:32:44', '2023-11-24 14:32:44', 30),
(4, 'Power', 'test', '2023-11-20 16:21:59', '2023-12-22 16:21:59', 35),
(5, 'Control Your Mind', 'Self Development', '2023-11-26 16:22:29', '2024-01-30 16:22:29', 25),
(6, 'Male impersonators', 'self development', '2023-11-26 16:24:23', '2023-12-20 16:24:23', 24);

SELECT booking.* , students.nom FROM `booking`
INNER JOIN `students` ON booking.student_id = students.id;

SELECT booking.* , students.nom , teachers.nom AS teacher_name
FROM `booking`
INNER JOIN `students` ON booking.student_id = students.id
INNER JOIN `teachers` ON booking.teacher_id = teachers.id;
