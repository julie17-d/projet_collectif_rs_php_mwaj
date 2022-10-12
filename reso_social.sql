
CREATE DATABASE IF NOT EXISTS `reso_social` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `reso_social`;


DROP TABLE IF EXISTS `critiques`;

CREATE TABLE `critiques`(
    `id`int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `author` varchar(50) NOT NULL,
    `content` text NOT NULL,
    `rating` int(1) UNSIGNED NOT NULL,
    `imdbId` varchar(50) NOT NULL,
    PRIMARY KEY(`id`)
);

INSERT INTO `critiques` (`author`, `content`, `rating`, `imdbId`) VALUES
('lebossdu75', 'amazing horror movie filled with tension and dread', 4, 'tt7784604');


DROP TABLE IF EXISTS `signup`;

CREATE TABLE `signup`(
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`id`)
);