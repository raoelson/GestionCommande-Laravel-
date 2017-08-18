-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 27 Février 2016 à 18:24
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gclaravel`
--
CREATE DATABASE IF NOT EXISTS `gclaravel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gclaravel`;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomclient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nomclient`, `adresse`, `created_at`, `updated_at`) VALUES
(1, 'Nicolas', 'fianarantsoa,tanambao', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'harlin', 'fianarantsoa,andrainjato', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'dani Junior', 'fianarantsoa,tanambao', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qtecommande` int(11) NOT NULL,
  `datecommande` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `produit_id` int(10) unsigned NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `commandes_produit_id_index` (`produit_id`),
  KEY `commandes_client_id_index` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `qtecommande`, `datecommande`, `created_at`, `updated_at`, `produit_id`, `client_id`) VALUES
(1, 2, '2016-02-27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 3),
(2, 23, '2016-02-28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_27_145714_create_commandes_table', 1),
('2016_02_27_145855_create_produits_table', 2),
('2016_02_27_145904_create_clients_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `designproduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `puproduit` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `designproduit`, `puproduit`, `created_at`, `updated_at`) VALUES
(1, 'mais', 1000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Manioc', 15000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'riz', 3000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'haricot', 3000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Lentilles', 4000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Pates', 50000.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fanja', 'fanja@yahoo.fr', '$2y$10$cyQt8APDl9.sTZbx4ekhjuY9uYNRQquZrDah8KctPBppBLr1VwmMW', 'sIgE7711GhzltrLToUC5QKwT4GbOkWMBF4TViF8ffqeyVoD97SUf9VybqyNM', '2016-02-27 14:36:43', '2016-02-27 17:23:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
