-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 05:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hero`
--

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `real_name` text NOT NULL,
  `short_bio` varchar(150) DEFAULT NULL,
  `long_bio` varchar(500) DEFAULT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `name`, `real_name`, `short_bio`, `long_bio`, `images`) VALUES
(6, 'Storm', 'Ororo Munroe', 'Controls the weather', 'Mutant Ororo Munroe confounds enemies of the X-Men by using her psionic abilities to manipulate the weather. As a storied, veteran X-Men member, Ororo Munroe - aka Storm - is one of the most powerful mutants on Earth.', 'b9cddbd44f03a7bc639d686916545bee.jpg'),
(7, 'Professor X', 'Professor Xavier Jr.', 'Founder of the X-Men', 'Charles Xavier is a mutant gifted with vast telepathic powers, being a specialist in mutant biology and sociology and the founder of the uncanny X-Men as Professor X. With immense support from Dr. Moira MacTaggert, his life has become dedicated to fulfill his dream of mutants and humans coexisting peacefully.', 'prof.jpg'),
(8, 'IceMan', 'Robert Louis \"Bobby\" Drake', 'Ability to manipulate ice and cold', 'Robert Louis \"Bobby\" Drake, X-Men (vol. 1) #46 (1968, back-up story) (flashback). Drake is the second founding member, and the youngest of the group. He is also a former member of the Champions, the Defenders, and X-Factor. Currently seen in Uncanny X-Men.', 'Iceman.png'),
(9, 'Angel', 'Warren Kenneth', 'Capable of flight', 'Warren is the third of the team\'s founding members, and the only member of the original team to have acted as a costumed hero even before joining the X-Men. He is a former member of the Champions, the Defenders, and X-Factor and is presently a member of the X-Force squad, and the X-Men as well. Currently seen in Uncanny X-Men, and Uncanny X-Force. Powers: Makes use of the large, feathered wings on his back for natural flight.', 'x-men-apocalypse-Angel_Death_rgb-copy_0.jpg'),
(10, 'Magneto', 'Max Eisenhardt', 'Ability to manipulate magnetic fields', 'Known by many names, Erik Lehnsherr is a powerful mutant willing to go to any extreme to protect his species as Magneto, the master of magnetism.[20] During his youth, he suffered atrocities at the hands of the Nazis in Auschwitz. After escaping, he learned at this cost of his own daughter\'s life that he had the mutant ability to generate and control magnetic fields, a condition that caused additional hate and fear from those who were different from him.[21] Being a target for so long and explic', '57-576746_png-magneto-x-men-magneto-png.png'),
(11, 'Beast', 'Dr. Henry ', 'Superhuman strength and agility', 'Dr. Henry \"Hank\" McCoy was the original team\'s scientist. Former member of the Avengers, the Defenders and X-Factor. Currently, he is the vice principal of the Jean Grey School for Higher Learning, he is also an agent of S.W.O.R.D', 'attachment_108285197.jpg'),
(12, 'Jean Grey', 'Jean Grey-Summers', 'Excels in astral', 'Jean Grey-Summers is the fifth and final member to joins the original X-Men team, although she has met Xavier before the others. An avatar to the Phoenix Force, Jean Grey was one of the X-Men most powerful member as well as their most dangerous foes.', '9d154f78-606a-40ea-a2c0-143d65961365.jpg'),
(13, 'Mimic', 'Calvin Montgomery Rankin', 'Ability to mimic the powers of others.', 'Calvin Montgomery Rankin was, at first, a villain to the X-Men, after an unsuccesful attempt to enhance his power, Professor X erased his memory. Former member of Norman Osborn\'s Dark X-Men.', '4464f9626b7e35e96c956b43baadb79f.jpg'),
(15, 'Morph', 'Kevin Sydney', 'Shapeshifting and telepathy abilities.', 'Kevin Sydney joins the X-Men while impersonating Professor X under the request of Charles Xavier himself. a former member of thee villainous Factor Three.', 'Morph.jpg'),
(16, 'Polaris', 'Lorna Dane', 'Senses and controls magentism.', 'Lorna Dane is Magneto\'s daughter. She was recruited by Professor X as Lorna Dane before taking the name of Polaris in X-Men, vol 1. #47 (1976). She lost her power on M-Day but later have them restored technologically by Apocalypse. Former member of the Acolytes, the Muir Islands X-Men, Starjammers, and X-Factor Investigations. Currently, she lead a new corporate X-Factor.', '11b4019f09c946c9082a1b7cd2abd2a6.jpg'),
(17, 'Wolverine', 'James Howlett', 'Has a powerful regenerative ability', 'James Howlett, better known as Logan, is arguably the most iconic member of the team. Formerm member of the U.S Army, Team X, Alpha Flight, Department H, Department K, the Defenders, the X-Men, and the Avengers. Former headmaster of the Jean Grey School for Higher Learning.', '27-274175_wolverine-professor-x-marvel-comics-comic-book-wolverine.png'),
(19, 'Rogue', 'Anne Marie ', 'Absorption of life force and personality.', 'Anne Marie is one of the most powerful X-Men, she once had the powers and memories of Ms. Marvel. Former member of the Brotherhood of Evil Mutants. Currently, she is a senior staff member of the Jean Grey School for Higher Learning.', '1b24665a1180aaf67def100470127f3d.jpg'),
(21, 'Rachel Grey', 'Rachel Grey', 'Has psionic abilities', 'Rachel Grey is the daughter of Cyclops and Jean Grey from an alternate future (Days of the Future Past). a Former member of the Starjammers, she is currently a senior staff member of the Jean Grey School for Higher Learning.', 'de7wgm5-778efacd-4631-4e3d-b195-0e16cbad5615.jpg'),
(22, 'Collosus', 'Piotr \"Peter\" Rasputin', 'Ability to transform into steel', 'Piotr \"Peter\" Rasputin is the brother of Magik, and longtime romantic interest of Kitty Pryde. Former member of Acolytes and Excalibur. He dies while releasing a cure for the Legacy Virus, but later resurrected by the Orb.', '790d8b28403e8705c787ed3c67449a86.jpg'),
(26, 'Clajenamu', 'Genius McX', 'She loves pink.', 'She loves pink and money.', 'happy-black-girl-holding-money-pink-background-no-more-worrying-excited-afro-woman-pointing-bunch-isolated-over-171182409.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `date`) VALUES
(6237, 'Hello', '1234', 0),
(42109, 'Tash', 'cake', 0),
(61104, 'Clare', '12345', 0),
(70123, 'CK', '54321', 0),
(84872, 'Bonnie', '246', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84873;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
