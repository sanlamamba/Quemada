-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 juil. 2021 à 02:19
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quemada`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(64) DEFAULT NULL,
  `pseudo` varchar(64) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `mdp` varchar(64) NOT NULL,
  `token` int(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `pseudo`, `mail`, `mdp`, `token`) VALUES
(1, 'San Lamamba', 'Lamamba', 'sanlamamba05@gmail.com', 'asd123', NULL),
(2, 'test', 'tester', 'text@gmail.com', '1234', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `label` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `label`) VALUES
(1, 'ordinateur'),
(2, 'telephone'),
(3, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(64) NOT NULL,
  `prenom_client` varchar(64) NOT NULL,
  `adresse_client` varchar(56) NOT NULL,
  `mail_client` varchar(64) NOT NULL,
  `mdp_client` varchar(64) NOT NULL,
  `token` varchar(64) DEFAULT NULL,
  `session` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `adresse_client`, `mail_client`, `mdp_client`, `token`, `session`) VALUES
(1, 'San Lamamba ', 'Popoda', 'Dakar, Senegal', 'sanlamamba@gmail.com', 'asd123', NULL, '2021-07-20 16:06:05'),
(4, 'Geraud', 'Alphonse', 'liberte 6 ', 'drax@gmail.com', 'qwe123', NULL, '2021-07-20 16:32:08');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_client_commande` int(11) NOT NULL,
  `date_commande` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_commande` varchar(25) NOT NULL DEFAULT 'attente',
  `cart_id_commande` varchar(25) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_client_commande`, `date_commande`, `status_commande`, `cart_id_commande`, `total`) VALUES
(15, 0, '2021-07-21 11:34:17', 'fini', '<br /><b>Notice</b>:  Und', 800000),
(16, 0, '2021-07-21 11:36:12', 'attente', '5qqnkxA2Z9', 800000),
(17, 0, '2021-07-21 11:37:59', 'attente', 'TAf1BNH6f7', 350000),
(18, 4, '2021-07-21 11:39:47', 'attente', 'yWm1s8T0pS', 250000),
(19, 4, '2021-07-21 11:41:00', 'attente', 'gxlVg4Wowj', 300000),
(20, 4, '2021-07-21 11:45:35', 'attente', 'GpKPShwHsk', 300000),
(21, 4, '2021-07-21 11:48:10', 'attente', 'cymgvra7AU', 600000),
(22, 4, '2021-07-21 11:48:10', 'attente', 'cymgvra7AU', 600000),
(23, 4, '2021-07-24 00:23:34', 'rejeter', 'mOv3PfdA0B', 1400000);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `cart_id` varchar(25) NOT NULL,
  `id_produit_panier` int(11) NOT NULL,
  `quantite_produit_panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `cart_id`, `id_produit_panier`, `quantite_produit_panier`) VALUES
(18, 'm6AiS5iZjD', 5, 2),
(19, '5qqnkxA2Z9', 5, 2),
(20, 'TAf1BNH6f7', 4, 1),
(21, 'yWm1s8T0pS', 1, 1),
(22, 'gxlVg4Wowj', 2, 1),
(23, 'GpKPShwHsk', 2, 1),
(24, 'cymgvra7AU', 2, 1),
(25, 'cymgvra7AU', 2, 1),
(26, '<br /><b>Notice</b>:  Und', 5, 1),
(27, 'mOv3PfdA0B', 6, 1),
(28, 'mOv3PfdA0B', 5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(64) NOT NULL,
  `prix` int(1) NOT NULL,
  `description` text NOT NULL,
  `img_produit` varchar(64) DEFAULT NULL,
  `categorie` int(11) NOT NULL,
  `tag` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `prix`, `description`, `img_produit`, `categorie`, `tag`) VALUES
(2, 'Poco X3 Pro', 300000, 'Le poco phone, tout ce que vous aviez besoins, maintenant disponible dans notre boutique', 'poco-x3-pro.jpg', 2, 'telephone, poco, pro, x3'),
(4, 'Samsung Galaxy S20', 350000, 'le galaxy s20 est le telephone le plus populaire de 2019, avec son design revolutionaire, nous vous promettons le futur entre vos mains', 'samsung-galaxy-s20.jpg', 2, 'telephone, samsung, s20, galaxy'),
(5, 'Dell XPS 15', 400000, 'Le dell xps 15, ordinateur revolutionnaire avec une vitesse extradionnaire et un design minimaliste, l\'ordinateur parfait pour tous et partout !', 'dell-xps-15.jpg', 1, 'ordinateur, dell, xps, 15'),
(6, 'hp Omen 17', 600000, 'L\'Omen 17, l\'ordinateur preferer de tout les gamers dedier, avec une vitesse imcomparable et un design neon, parfait pour des longs seances de gaming intenses ', 'hp-omen-17.png', 1, 'ordinateur, hp, omen, 17'),
(7, 'lenovo carbon x1', 550000, 'Le lenovo carbon x1, super puissant avec une coque en fibre de carbon et batterie qui dure plus de 72h, parfait pour tout vos travaaux de tout les jours ', 'lenovo-carbon-x1.jpg', 1, 'ordinateur, lenovo, carbon, x1');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `title`) VALUES
(1, 'asdasd'),
(2, 'dasdadad');

-- --------------------------------------------------------

--
-- Structure de la table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip_visitor` varchar(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_client_visitor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
