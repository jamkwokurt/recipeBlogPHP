-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 08:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `type`, `item`, `detail`) VALUES
(1, 'Cake', 'Chiffon', 'Yield: 3*9 inch <br>\nOil 120g <br>\nMilk 315g <br>\nvanilla pod 1ea <br>\nFlour 345g (swap 30g for flavouring) <br>\nEgg Yolk 15ea <br>\nCastor Sugar 210g <br>\nEgg White 15ea <br>\n1hr 10mins at 150°C'),
(2, 'Biscuit', 'Dogscotti', 'Flour 1.4kg <br>\nOats 400g <br>\nBran 200g <br>\nPeanut Butter 2kg <br>\nEgg 4ea <br>\nParsley Chopped half a bunch <br>\nWater 1L (add more according to dough consistency)'),
(3, 'Tart', 'Chocolate Sweet Pastry Shell', 'Flour 2.25kg <br>\r\nCocoa Powder 250g <br>\r\nButter 1kg <br>\r\nIcing Sugar 1kg <br>\r\nEgg 750g'),
(4, 'Pastry', 'Canoli', 'Flour 1330g <br>\r\nSugar 70g <br>\r\nSlat 4g <br>\r\nButter 150g <br>\r\nEgg Yolk 70g <br>\r\nWhite Wine Vinegar 374g <br>\r\nWhole Egg 120g <br>\r\nMasala 120g <br>\r\nCocoa Powder 30g <br>\r\nDimension 9.5cm * 10cm <br>\r\nFry at 170°C <br>\r\nBrushing egg white to seal aft'),
(5, 'Frozen', 'Gelato Base', 'Milk 4.7kg <br>\r\nCream 700g <br>\r\nGlucose 240g <br>\r\nDextrose 240g <br>\r\nGelato Stabliser (Necto Latte) 30g <br>\r\nSkim Milk Powder 400g <br>\r\nSugar 945g <br>\r\n(*670g for Caramel & 275g with dry ingredient plus 60g salt for s.c flavour*) <br>\r\nCream 2000g '),
(6, 'Plated Dessert', 'Rosemary Crème Brûlée', 'Cream 3L <br>\r\nRosemary Sprig 30g <br>\r\nEgg Yolk 30ea <br>\r\nSugar 450g <br>\r\nVanilla Paste 1 teaspoon <br>\r\nBake at 100°C for 35 mins (oven needs to be dry; NO STEAM)'),
(7, 'Fruit Preserves', 'Pear & Rhubarb Compote', 'Coconut Oil 2 tablespoon <br>\r\nPear 3kg <br>\r\nRhubarb 3kg <br>\r\nSugar 680g <br>'),
(8, 'Decoration', 'Hokey Pokey', 'Honey 300g <br>\r\nGlucose 560g <br>\r\nSugar 1600 <br>\r\nWater 200g <br>\r\nBaking Soda 60g (whisk in caramel) <br>\r\n*Container needs to be lined with baking paper'),
(9, 'Plated Dessert', 'Rice Pudding', 'Milk 1L <br>\r\nCream 1L <br>\r\nSugar 100g <br>\r\nRisotto Rice 360g <br>\r\nAdd 200g milk at last before putting into container');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tag`) VALUES
(1, 'Cake'),
(2, 'Tart'),
(3, 'Biscuit'),
(4, 'Pastry'),
(5, 'Frozen'),
(6, 'Plated Dessert'),
(7, 'Fruit Preserves'),
(8, 'Decoration');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'jamkwok', 'jamkowk@gmail.com', '83c98a213a77adfeccbee498ed4d08d6', '2021-11-21 22:21:17'),
(3, 'admin', 'admin@jammit.co.nz', '21232f297a57a5a743894a0e4a801fc3', '2021-11-22 22:47:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
