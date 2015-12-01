-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 01 Décembre 2015 à 20:19
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `G4_infomedia`
--
CREATE DATABASE IF NOT EXISTS `G4_infomedia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `G4_infomedia`;

-- Privilèges pour `root`@`localhost` // pass = root
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' IDENTIFIED BY PASSWORD '*81F5E21E35407D884A6CD4A731AEBFB6AF209E1B' WITH GRANT OPTION;
GRANT PROXY ON ''@'' TO 'root'@'localhost' WITH GRANT OPTION;

-- Privilèges pour `site`@`localhost` // pass = Vaise
GRANT SELECT ON `G4_infomedia`.* TO 'site'@'localhost' IDENTIFIED BY PASSWORD '*337D5B28B63CC66EEC704EBE11896C8D4A6FE2B9' WITH MAX_QUERIES_PER_HOUR 3600;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_fr` varchar(40) NOT NULL,
  `title_en` varchar(40) NOT NULL,
  `content_fr` text NOT NULL,
  `content_en` text NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modification` timestamp NULL DEFAULT NULL,
  `date_publication` date DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL COMMENT 'title-en.extension',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:news/1:event/2:news+event',
  `important` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`title_fr`, `title_en`, `content_fr`, `content_en`, `date_creation`, `date_modification`, `date_publication`, `img`, `type`, `important`) VALUES
('La fête des lumières s''invite à Vaise ', 'The Festival of lights at Vaise', '<p>En raison des événements tragiques récents, la Fête des Lumières ne pouvait se dérouler sous sa forme habituelle, il a donc été décidé de la reporter à l''identique en décembre 2016.</p><p>Cette année, <strong>un hommage en lumière</strong> sera cependant rendu aux victimes des attentats de Paris: le mardi 8 décembre nous proposons de rester unis, solidaires et d’illuminer notre ville comme jamais.</p>', '<p>Due to the recent tragic events, the Festival of lights could not be held in its usual form, it was therefore decided to postpone the same in December 2016.</p><p>This year, <strong>a highlight tribute</strong> will however be rendered to victims of the attacks of Paris: Tuesday, December 8th we propose to stay united, solidarity and illuminates our city as ever.</p>', '2015-11-12 16:48:09', '2015-11-25 21:49:53', '2015-11-12', '../news2.jpg', 2, 1),
('Inauguration de la Halte', 'La Halte inauguration', '<p>Née de la volonté de l’église de l’Annonciation de crée du lien social entre les habitants du quartier de Vaise, la Halte a ouvert ces portes le 10 octobre 2015. Cet espace est ouvert à tous et se veut convivial.</p><p>C’est le lieu du « bien vivre ensemble » qui favorise les rencontres autour d’un verre, d’un repas, d’un atelier sur une thématique … Une expérience unique à ne louper sous aucun prétexte.</p><p>Habitant du quartier de Vaise ou simple visiteur, arrêtez-vous !  <br /></p>', '<p>Born with the association of the Annonciation''s church to create a social link between inhabitants from Vaise quarter, la Halte oppened on October 10th 2015. This space is open for everyone and has to be sociable.</p><p>It''s the place of the « good living together » which favorisate meetings with a drink, a meal, a workshop on a thematic … A unique experience to not miss at any pretext.</p><p>Inhabitant of Vaise quarter or simple visitor, pass by !</p>', '2015-11-24 19:15:03', '2015-11-25 22:34:17', '2015-11-24', 'La-Halte-inauguration.jpg', 0, 1),
('Micro Mondes', 'Micro Mondes', '<p>Micro Mondes propose pour sa 3ème édition, un festival d’arts immersifs centré sur les créations contemporaines. Micro Mondes regroupe des artistes de théâtre, des arts plastiques, de la danse, du cirque ou encore du multimédia.</p><p>Ce festival vous entraine au cœur d’univers intimistes et sensoriels en regroupant images, sons, sensations tactiles ou encore poétiques.</p><p>Cet évènement se déroulera à Vaise au Théâtre Nouvelle Génération / Centre Dramatique National de Lyon du 24 au 29 Novembre 2015"</p>', '<p>Micro Mondes (Micro World) propose for his 3rd edition, an immersive art festival focused on contemporary creations. Micro Mondes has theater, plastic art, danse, circus or multimedia artists.</p><p>This festival leads you in the heart of intimate and sensorial univers by grouping images, sounds, tactils or poetics sensations.</p><p>This event will be at Vaise : Théâtre Nouvelle Génération / Centre Dramatique National de Lyon from 24th to 29th of November 2015"</p>', '2015-11-16 19:36:29', '2015-11-25 22:34:29', '2015-11-16', 'Micro-Mondes.jpg', 0, 0),
('Convergence Vélo 2015', 'Convergence Vélo 2015', '<p>Pour sa 4ème édition, la Convergence Vélo donne rendez-vous à tous les cyclistes du 9ème le Dimanche 20 Septembre 2016, place Valmy à 14h.</p><p>Découvrez ou redécouvrez le 9ème arrondissement comme vous ne l’avez jamais vu. C’est aussi l’occasion pour petits et grands de partager un moment convivial lors de cette sortie vélo.</p><p>Le parcours vous emmène de la place Valmy en passant par l’Auditorium puis finir dans le jolie Parc des Berges.  <br /></p>', '<p>For his 4th edition, the Convergence Vélo (bicycle event) organize to all bikers an event on Sunday September 20th 2016, place Valmy à 14h.</p><p>Discover or discover again the 9th district as you never saw it. It''s also the occasion for kids, teens and parents to share a convivial moment during this bycicle event.</p><p>The path leads you to place Valmy crossing the Auditorium and ending in the great Parc des Berges.  <br /></p>', '2015-11-24 19:08:45', '2015-11-25 22:36:30', '2015-11-24', '../news2.jpg', 2, 0),
('L.I.R (Livre In Room)', 'L.I.R (Book In Room)', '<p>L’installation numérique L.I.R (Livre In Room) est un dispositif conçu pour véritable immersion littéraire. Le livre est bien entendu au cœur de ce système.</p><p>Il permet à la suite de la sélection d’un livre, de déclencher une séquence visuelle et sonore. Chaque visiteur repart alors avec une expérience unique de « lecture augmentée ».</p><p>En accès libre et gratuit pour les amoureux de la lecture au Théâtre Nouvelle génération.  <br /></p>', '<p>The numeric installation L.I.R (Book In Room) is a place made to provide authentic literary immersion. Books are in the heart of this system.</p><p>It permits after a book selection, to start a visual and sonorous sequence. Each visitors leave with a unique experience of « augmented reading ».</p><p>In free access for reading lovers at Théâtre Nouvelle génération.  <br /></p>', '2015-11-18 19:42:07', '2015-11-25 21:47:18', '2015-11-18', '../news2.jpg', 1, 0),
('Acrobates', 'Acrobats', '<p>Acrobates est un spectacle centré sur la vie, l’amitié et la tendresse. Les deux acteurs raconte un long et tumultueux voyage vers l’âge adulte.</p><p>Ce spectacle mêle le deuil, la vie et les paysages oniriques. Ces derniers sont exposés au public grâce à l’interprétation des deux acteurs acrobates et danseurs.</p><p>Stéphane Ricordel et Olivier Meyrou donnerons leurs représentations au Théâtre Nouvelle Génération du vendredi 25 septembre jusqu’au dimanche 27 septembre le soir à 20h.  <br /></p>', '<p>Acrobats is a show focused on the life, the friendship and tenderness. Both actors tells a long and tumultuous trip to the adult age.</p><p>This show mixes death, life and gorgeous landscapes. This public demonstration is possible with the interprétation of two acrobats and dancing actors.</p><p>Stéphane Ricordel and Olivier Meyrou will give their representations at the Théâtre Nouvelle Génération on Friday September 25th until Sunday September 27th at night, after 8:00PM.  <br /></p>', '2015-11-14 19:44:17', '2015-11-25 21:50:10', '2015-11-14', '../news2.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_fr` varchar(20) NOT NULL,
  `name_en` varchar(20) NOT NULL,
  `name_company` varchar(20) NOT NULL,
  `price` int(4) NOT NULL,
  `description_fr` text NOT NULL,
  `description_en` text NOT NULL,
  `img` varchar(25) DEFAULT NULL COMMENT 'name-en.extension',
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modification` timestamp NULL DEFAULT NULL,
  `vat` int(2) NOT NULL COMMENT 'TVA',
  `transportation_price` int(2) NOT NULL COMMENT 'frais de port',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`name_fr`, `name_en`, `name_company`, `price`, `description_fr`, `description_en`, `img`, `date_creation`, `date_modification`, `vat`, `transportation_price`) VALUES
('Clé USB 8Go', 'USB stick 8Go', 'Vaise', 12, '<p>Cette clé USB de 8Go vous aidera à transporter toutes les superbes photos prises à Vaise !</p>', '<p>This USB stick of 8Go will help you to transport all your superb photos took in Vaise !</p>', 'USB-stick-8Go.jpg', '2015-11-19 18:50:22', '2015-11-24 12:52:56', 0, 0),
('Carte de Vaise', 'Map of Vaise', 'Vaise', 6, '<p>Cette carte de Vaise vous permettra de retrouver tous les magasins, restaurants, bars, parcs, activités et bien d''autres, sans avoir le besoin d''utiliser son smartphone !</p><p>Cette carte papier "hors-ligne" peut vous être de grande utilité pour ne plus se perdre dans la jungle de bons plans de Vaise.</p>', '<p>This map of Vaise will permits you to find any shops, restaurants, bars, parks activities and more, and you can do all those things without the need to use your smartphone ! It''s battery life saving !</p><p>This paper made map "offline" might helps you to not loose yourself in all the&nbsp;good plans in Vaise.</p>', 'Map-of-Vaise.jpg', '2015-11-24 19:06:24', '2015-11-25 00:47:29', 0, 0),
('Verre', 'Glass', 'Vaise', 8, '<p>Le verre de Vaise vous permettra de vous sentir <strong>à l''aise</strong> ... partout où vous buvez dans ce verre, il transformera votre eau en Génépi !</p>', '<p>The glass of Vaise will permis you to&nbsp;<strong>feel comfortable</strong>&nbsp;... wherever you will drink in this glass, it will transforms your water into Génépi !\r\n  <br />\r\n</p>', 'Glass.jpg', '2015-11-24 22:18:56', NULL, 0, 0),
('Pin''s', 'Pin''s', 'Vaise', 2, '<p>Les pin''s c''est la vie.</p>', '<p>Pin''s is the life.</p>', 'Pin-s.jpg', '2015-11-25 00:35:11', NULL, 0, 0),
('Porte-clé', 'Keychain', 'Vaise', 4, '<p>Le porte clé portera tes clés !</p>', '<p>The keychain will hold your keys !</p>', 'Keychain.jpg', '2015-11-25 00:46:52', NULL, 0, 0),
('T-shirt', 'T-shirt', 'Vaise', 20, '<p>LE&nbsp;T-shirt de Vaise.</p>', '<p>THE Vaise&nbsp;T-shirt.</p>', 'T-shirt.jpg', '2015-11-25 00:54:46', '2015-11-25 18:30:19', 0, 0);