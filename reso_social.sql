
CREATE DATABASE IF NOT EXISTS `reso_social` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `reso_social`;


DROP TABLE IF EXISTS `critique`;

CREATE TABLE `critique`(
    `id`int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `author` varchar(50) NOT NULL,
    `content` text NOT NULL,
    `rating` int(1) UNSIGNED NOT NULL,
    PRIMARY KEY(`id`)
);


DROP TABLE IF EXISTS `login`;

CREATE TABLE `login`(
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`id`)
);

