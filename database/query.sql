SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS 'shitttacker';
CREATE DATABASE IF NOT EXISTS `shitttacker` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shitttacker`;

DROP TABLE IF EXISTS 'userinfo';
CREATE TABLE IF NOT EXISTS 'userinfo'
(
    `id` int(100) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
