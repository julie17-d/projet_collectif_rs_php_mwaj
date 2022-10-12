
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
('lebossdu75', 'amazing horror movie filled with tension and dread', 4, 'tt7784604'),
('poniesAndRainbows', 'HATED this movie. too creepy! cant look at my daughter the same way.', 1, 'tt7784604'),
('zoecodda', 'LOVED this movie!! creeped me out.', 5, 'tt6857112'),
('hater24', 'meh, seen better', 2, 'tt6857112'),
('woirda', 'MY FAVORITE MOVIE!!!', 5, 'tt18394428'),
('personWithTaste', 'wtf is this', 0, 'tt18394428'),
('rando', 'a masterpiece of the shark tornado genre', 5, 'tt2724064');



DROP TABLE IF EXISTS `login`;

CREATE TABLE `login`(
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`id`)
);