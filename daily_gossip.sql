-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 01:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_gossip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `p_name` varchar(300) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_details` varchar(5000) NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `userid`, `p_name`, `p_img`, `p_details`, `p_date`) VALUES
(1, '2\n', 'The Great War', '1669212074.jpg', '<p>WAR!</p>\r\n', '2022-11-23 14:27:21'),
(7, '1', 'At least 6 people were killed in a shooting at a Walmart in Virginia, officials say. The shooter is also dead', '1669215737.jpg', '<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_169DBC10-3C3F-A6FA-A2DF-A490829150CC@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\"><strong style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; font-weight:700; text-rendering:optimizelegibility\"><em style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; text-rendering:optimizelegibility\">[Breaking news update, published at 8:21 a.m. ET]</em></strong></p>\r\n\r\n<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_7037BF18-1AF9-742A-211A-A49DA9F8D662@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\">The gunman who killed six people at a Walmart in Virginia on Tuesday night was an employee at the store, Chesapeake Police Chief Mark Solesky said Wednesday. Solesky said the gunman is believed to have died from a self-inflicted gunshot wound, but his identity has not been released because his next of kin has not been notified.</p>\r\n\r\n<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_9EDD7007-BBE7-3FDB-9BC3-A4909590699C@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\"><strong style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; font-weight:700; text-rendering:optimizelegibility\"><em style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; text-rendering:optimizelegibility\">[Previous story, published at 7:31 a.m. ET]</em></strong></p>\r\n\r\n<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_A124E122-183D-332F-CD43-A3FB2A5BB0BD@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\">At least six people were shot dead Tuesday night inside a&nbsp;<a href=\"http://www.cnn.com/us/live-news/walmart-shooting-chesapeake-virginia-11-23-22/index.html\" style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: var(--theme-paragraph__font-size--from-small); line-height: var(--theme-paragraph__line-height--from-small); color: var(--theme-paragraph__link-color); text-decoration-line: var(--theme-paragraph__link-decoration); text-decoration-color: var(--theme-paragraph__link-decoration-color); text-decoration-thickness: var(--theme-paragraph__link-decoration-thickness); text-underline-offset: var(--theme-paragraph__hover-link-offset); text-decoration-skip-ink: var(--theme-underline-skip-ink);\" target=\"_blank\">Walmart in Chesapeake</a>, Virginia, in an attack that unfolded within an hour of the store&rsquo;s scheduled closing time, city officials said early Wednesday.</p>\r\n\r\n<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_49A01E4B-9B9C-4F2C-DB67-A430FB57BBA8@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\">The shooter is dead,&nbsp;<a href=\"https://twitter.com/AboutChesapeake/status/1595349110038859776\" style=\"box-sizing: inherit; -webkit-', '2022-11-23 15:02:17'),
(8, '1', 'At least 6 people were killed in a shooting at a Walmart in Virginia, officials say. The shooter is also dead', '1669215737.jpg', '<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_169DBC10-3C3F-A6FA-A2DF-A490829150CC@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\"><strong style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; font-weight:700; text-rendering:optimizelegibility\"><em style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; text-rendering:optimizelegibility\">[Breaking news update, published at 8:21 a.m. ET]</em></strong></p>\r\n\r\n<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_7037BF18-1AF9-742A-211A-A49DA9F8D662@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\">The gunman who killed six people at a Walmart in Virginia on Tuesday night was an employee at the store, Chesapeake Police Chief Mark Solesky said Wednesday. Solesky said the gunman is believed to have died from a self-inflicted gunshot wound, but his identity has not been released because his next of kin has not been notified.</p>\r\n\r\n<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_9EDD7007-BBE7-3FDB-9BC3-A4909590699C@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\"><strong style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; font-weight:700; text-rendering:optimizelegibility\"><em style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; text-rendering:optimizelegibility\">[Previous story, published at 7:31 a.m. ET]</em></strong></p>\r\n\r\n<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_A124E122-183D-332F-CD43-A3FB2A5BB0BD@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\">At least six people were shot dead Tuesday night inside a&nbsp;<a href=\"http://www.cnn.com/us/live-news/walmart-shooting-chesapeake-virginia-11-23-22/index.html\" style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; font-size: var(--theme-paragraph__font-size--from-small); line-height: var(--theme-paragraph__line-height--from-small); color: var(--theme-paragraph__link-color); text-decoration-line: var(--theme-paragraph__link-decoration); text-decoration-color: var(--theme-paragraph__link-decoration-color); text-decoration-thickness: var(--theme-paragraph__link-decoration-thickness); text-underline-offset: var(--theme-paragraph__hover-link-offset); text-decoration-skip-ink: var(--theme-underline-skip-ink);\" target=\"_blank\">Walmart in Chesapeake</a>, Virginia, in an attack that unfolded within an hour of the store&rsquo;s scheduled closing time, city officials said early Wednesday.</p>\r\n\r\n<p class=\"inline-placeholder paragraph\" data-component-name=\"paragraph\" data-editable=\"text\" data-uri=\"archive.cms.cnn.com/_components/paragraph/instances/paragraph_49A01E4B-9B9C-4F2C-DB67-A430FB57BBA8@published\" style=\"-webkit-font-smoothing:antialiased; box-sizing:inherit; color:#000000; font-family:cnnsans,&quot;Helvetica Neue&quot;,Helvetica,Arial,Utkal,sans-serif; font-size:medium; letter-spacing:0.4px; line-height:var(--theme-paragraph__line-height--from-small); margin-bottom:16px; margin-left:0; margin-right:0; margin-top:0; overflow-wrap:break-word; text-rendering:optimizelegibility\">The shooter is dead,&nbsp;<a href=\"https://twitter.com/AboutChesapeake/status/1595349110038859776\" style=\"box-sizing: inherit; -webkit-', '2022-11-23 15:02:17'),
(9, '2\r\n', 'The Great War', '1669212074.jpg', '<p>WAR!</p>\r\n', '2022-11-23 14:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `passwords` varchar(300) NOT NULL,
  `news` int(1) NOT NULL,
  `avatars` varchar(50) NOT NULL DEFAULT 'user.png',
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `phone`, `country`, `dob`, `gender`, `passwords`, `news`, `avatars`, `date_created`) VALUES
(1, 'John Wick', 'tester@gmail.com', '+2348124423122', 'Antigua and Barbuda', '2022-11-15', 'Female', '$2y$10$5cVZEZ2l5ukXhef7uePXCO94RG75TwqKvAWbwQCPVLufiA6PES7N.', 1, 'avatar1.jpg', '2022-11-16'),
(2, 'Emmanuel Odobo', 'emmanuelodobo10@gmail.com', '08124423122', 'Nigeria', '2022-11-16', 'male', '$2y$10$bbad2ZVX67r8M3a2D8H6Ge/i7K10CRCj4bLm8FWrahlf2rgTZAUaO', 1, 'user.png', '2022-11-16'),
(3, 'Chris Graham', 'chrisgraham2625@gmail.com', '+2348124423122', 'Nigeria', '2022-11-16', 'male', '$2y$10$PnG02vRqEcUlGG3tinSsr.VJNa11ttq29tJ8mQz2Zc2i9apyafvv6', 0, 'user.png', '2022-11-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
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
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
