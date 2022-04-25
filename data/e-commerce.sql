-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 25 avr. 2022 à 16:51
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(4, 'Dresses'),
(5, 'Tops'),
(6, 'Bottoms');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf32 NOT NULL,
  `qte` int(10) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `done_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product` varchar(255) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `qte`, `price`, `total`, `done_at`, `product`) VALUES
(1, 'housni', 2, 200, 302, '2022-04-24 17:53:51', 'rochdds'),
(2, 'ousasasa', 2, 200, 302, '2022-04-24 17:54:38', 'rijfd'),
(3, 'oussama', 1, 117, 117, '2022-04-24 17:55:48', 'Rhodes'),
(4, 'Oussama housni', 1, 117, 117, '2022-04-24 19:31:12', 'Rhodes'),
(5, 'Oussama housni', 1, 117, 117, '2022-04-24 19:32:02', 'Rhodes'),
(6, 'Oussama housni', 1, 113, 113, '2022-04-24 19:32:02', 'Richmond'),
(7, 'hhh', 8, 130, 1040, '2022-04-25 13:29:57', 'j');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `product_id` int(10) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(10) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_desc` text CHARACTER SET latin1 NOT NULL,
  `product_image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_image1` text CHARACTER SET latin1 NOT NULL,
  `product_image2` text CHARACTER SET latin1 NOT NULL,
  `product_image3` text CHARACTER SET latin1 NOT NULL,
  `product_image4` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_desc`, `product_image`, `product_image1`, `product_image2`, `product_image3`, `product_image4`) VALUES
(38, 'Women\'s Fashion Dresses', 5, 150, 10, 'Robe de soirée en dentelle blanche pour femmes, élégante, sans manches, courte, style Boho, tenue de plage, féerique, été', 'f2-1650867768.png', 'f21-1650867768.png', 'f23-1650867768.png', 'f22-1650867768.png', 'f2-1650867768.png'),
(39, 'rosees', 5, 130, 13, 'Robe de soirée en dentelle blanche pour femmes, élégante, sans manches, courte, style Boho, tenue de plage, féerique, été', 'f1-1650867885.png', 'f12-1650867885.png', 'f13-1650867885.png', 'f11-1650867885.png', 'f1-1650867885.png'),
(40, 'j', 5, 130, 10, 'Robe de soirée en dentelle blanche pour femmes, élégante, sans manches, courte, style Boho, tenue de plage, féerique, été', 'f62-1650868279.png', 'f61-1650868279.png', 'f6-1650868279.png', 'f62-1650868279.png', 'f6-1650868279.png'),
(41, 'hpo', 6, 200, 20, 'Robe de soirée en dentelle blanche pour femmes, élégante, sans manches, courte, style Boho, tenue de plage, féerique, été', 'f53-1650868363.png', 'f52-1650868363.png', 'f51-1650868363.png', 'f5-1650868363.png', 'f52-1650868363.png'),
(42, 'Women\'s Fashion Dresses', 5, 150, 30, 'Robe de soirée en dentelle blanche pour femmes, élégante, sans manches, courte, style Boho, tenue de plage, féerique, été', 'f7-1650881890.png', 'f71-1650881890.png', 'f72-1650881890.png', 'f73-1650881890.png', 'f71-1650881890.png'),
(43, 'jhdfjh', 4, 1400, 100, 'HDHDHDH', 'f32-1650897583.png', 'f41-1650897583.png', 'f21-1650897583.png', 'f8-1650897584.png', 'f2-1650897584.png'),
(44, 'j', 6, 1000, 100, 'fggggggggggggf', 'f23-1650897541.png', 'f21-1650897541.png', 'f52-1650897541.png', 'f7-1650897541.png', 'f11-1650897541.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`, `admin`) VALUES
(1, 'Oussama housni', 'kgftyfgygbhkb', 'amine123housni@gmail.com', '$2y$12$odC/QJJKr2r.XWcQ0ikaeuEsKF5xxdGEA/VbJQrPPWTciD.22iYem', 0),
(2, 'admin', 'admin', 'admin@gmail.com', '$2y$12$ZZ5SfhpGP1NAvJO6HN4MMuXYNhPakKtVR9GrUR4qxcr41f/M04W.C', 1),
(3, 'osama', 'sss', 'sss@gmail.com', '$2y$12$n2hZXGnlpB.LGNoGZuesO.4dIBh/lfgPqN16ZuDxvZnDGM.dn0y.m', 0),
(4, 'hhh', 'hhh', 'khsddf@gmail.com', '$2y$12$OuVOpb1CnoYRLVhhooHgWeO8GbaTlJDRbALPNFevR4AjbZyXHhKeC', 0),
(5, 'Oussama housni', 'OUSSAMA123', 'oussala@gmail', '$2y$12$gBQmFR1AtUwCatJtVYTa/uZrkeHrcXDZX4qZ8AbuNDevuX03DBe3e', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
