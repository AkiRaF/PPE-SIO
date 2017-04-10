-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Mars 2017 à 15:05
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion-stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `cat_nom` varchar(255) NOT NULL
)

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `cat_nom`) VALUES
(1, 'Médicaments à base de plantes'),
(2, 'Médicaments allopathiques'),
(3, 'Médicaments homéopathiques');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_prd` int(11) NOT NULL,
  `prd_nom` varchar(255) NOT NULL,
  `prd_cat` int(11) NOT NULL,
  `stk_dispo` int(11) NOT NULL,
  `stk_min` int(11) NOT NULL,
  `stk_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id_prd`, `prd_nom`, `prd_cat`, `stk_dispo`, `stk_min`, `stk_max`) VALUES
(1, 'ACTIVOX LIERRE 24 pastilles', 1, 10, 20, 200),
(2, 'ACTIVOX SANS SUCRE MENTHE EUCALYPTUS 24 pastilles (édulcorée au sorbitol)', 1, 50, 10, 100),
(3, 'ACTIVOX SANS SUCRE AROME MIEL CITRON 24 pastilles (édulcorée au sorbitol)', 1, 50, 10, 100),
(4, 'ARKOGELULE FUCUS 45 gélules', 1, 50, 10, 100),
(5, 'ARKOGELULE CUPALINE 45 gélules', 1, 50, 10, 100),
(6, 'ARKOGELULE CUPALINE 150 gélules', 1, 50, 10, 100),
(7, 'ARKOGELULES GINSENG 45 Ggélules', 1, 50, 10, 100),
(8, 'ARKOGELULES GINSENG 150 Ggélules', 1, 50, 10, 100),
(9, 'ARNICA MEDIFLOR/gel 50g', 1, 50, 10, 100),
(10, 'ARNICAGEL/gel 25g', 1, 50, 10, 100),
(11, 'ARNICAN 4 POUR CENT/crème 50g', 1, 50, 10, 100),
(12, 'CHOPHYTOL 2x30 comprimés (enrobé)', 1, 50, 10, 100),
(13, 'DOLOSOFT 450mg 45 comprimés (enrobé gastro-résistant)', 1, 50, 10, 100),
(14, 'DOLOSOFT 450mg 90 comprimés (enrobé gastro-résistant)', 1, 50, 10, 100),
(15, 'ELUSANES ARTICHAUT 30 gélules', 1, 50, 10, 100),
(16, 'ELUSANES BARDANE 30 gélules', 1, 50, 10, 100),
(17, 'ELUSANES BOLDO 30 gélules', 1, 50, 10, 100),
(18, 'ELUSANES ESCHSCHOLTZIA 30 gélules', 1, 50, 10, 100),
(19, 'ELUSANES FRAGON 30 gélules', 1, 50, 10, 100),
(20, 'ELUSANES FUMETERRE 30 gélules', 1, 50, 10, 100),
(21, 'ELUSANES HARPAGOPHYTON 30 gélules', 1, 50, 10, 100),
(22, 'ELUSANES HARPAGOPHYTON 60 gélules', 1, 50, 10, 100),
(23, 'ELUSANES MARONNIER 30 gélules', 1, 50, 10, 100),
(24, 'ELUSANES MARONNIER 60 gélules', 1, 50, 10, 100),
(25, 'ELUSANES ORTHOSIPHON 30 gélules', 1, 50, 10, 100),
(26, 'ELUSANES ORTIE 30 gélules', 1, 50, 10, 100),
(27, 'ELUSANES PASSIFLORE 30 gélules', 1, 50, 10, 100),
(28, 'ELUSANES PASSIFLORE 60 gélules', 1, 50, 10, 100),
(29, 'ELUSANES PRELE DES CHAMPS 30 gélules', 1, 50, 10, 100),
(30, 'ELUSANES VALERIANE 30 gélules', 1, 50, 10, 100),
(31, 'ELUSANES VALERIANE 60 gélules', 1, 50, 10, 100),
(32, 'ELUSANES VIGNE ROUGE 30 régules', 1, 50, 10, 100),
(33, 'ELUSANES VIGNE ROUGE 60 gélules', 1, 50, 10, 100),
(34, 'EUPHON MENTHOL 70 pastilles', 1, 50, 10, 100),
(35, 'EUPHON SANS SUCRE 70 pastilles (édulcorée à la saccharine)', 1, 50, 10, 100),
(36, 'EUPHON 70 pastilles', 1, 50, 10, 100),
(37, 'EUPHYTOSE 120 comprimés (comprimés enrobé)', 1, 50, 10, 100),
(38, 'HEPANEPHROL 20 ampoules (solution buvable en)', 1, 50, 10, 100),
(39, 'JOUVENCE de l\'abbé soury 180 comprimés avec pilulier', 1, 50, 10, 100),
(40, 'JOUVENCE de l\'abbé soury 180 comprimés', 1, 50, 10, 100),
(41, 'JOUVENCE de l’abbé soury/gel 100g', 1, 50, 10, 100),
(42, 'JOUVENCE de l’abbé soury/solution 210ml', 1, 50, 10, 100),
(43, 'ODDIBIL 250mg 40 comprimés (enrobé)', 1, 50, 10, 100),
(44, 'PLENESIA NERVOSITE plaquette 20 comprimés (enrobé)', 1, 50, 10, 100),
(45, 'PLENESIA NERVOSITE plaquette 60 comprimés (enrobé)', 1, 50, 10, 100),
(46, 'TEINTURE D\'ARNICA GILBERT 12 sachet (compresse imprégnée', 1, 50, 10, 100),
(47, 'TRANQUITAL 100 comprimés (enrobé)', 1, 50, 10, 100),
(48, 'UROSIPHON 20 ampoule (solution buvable)', 1, 50, 10, 100),
(49, 'ABUFENE 400 mg 30 comprimés\r\nBêta-alanine', 2, 50, 10, 100),
(50, 'ACICLOVIR ARROW CONSEIL 5%/crème 2g \r\nAciclovir', 2, 50, 10, 100),
(51, 'ACICLOVIR BIOGARAN CONSEIL 5%/crème 2g\r\nAciclovir', 2, 50, 10, 100),
(52, 'ACICLOVIR CRISTERS 5%/crème 2g\r\nAciclovir', 2, 50, 10, 100),
(53, 'ACICLOVIR MYLAN PHARMA 5%/crème tube 2g\r\nAciclovir\r\n', 2, 50, 10, 100),
(54, 'ACICLOVIR MYLAN PHARMA 5%/crème flacon 2g\r\nAciclovir', 2, 50, 10, 100),
(55, 'ACICLOVIR RATIOPHARM CONSEIL 5%/crème 2g\r\nAciclovir', 2, 50, 10, 100),
(56, 'ACICLOVIR SANDOZ CONSEIL 5 %/crème 2g\r\nAciclovir', 2, 50, 10, 100),
(57, 'ACICLOVIR TEVA CONSEIL 5%/crème 2g\r\nAciclovir', 2, 50, 10, 100),
(58, 'ACTIFED ALLERGIE CETIRIZINE 10 mg 7 comprimés (pelliculé sécable)\r\nDiclorhydrate de cétirizine', 2, 50, 10, 100),
(59, 'ACTIFED ETATS GRIPPAUX 10 sachets\r\n(poudre pour solution buvable en sachet-dose)\r\nParacétamol/Acide ascorbique/Maléate de Chlorphénamine', 2, 50, 10, 100),
(60, 'ACTIFEDSIGN 20 gélules\r\nParacétamol/Chlorphénamine/Acide ascorbique', 2, 50, 10, 100),
(61, 'ACTIVIR 5 POUR CENT 2g\r\nAciclovir', 2, 50, 10, 100),
(62, 'ADVILCAPS 200 mg 16 capsules(molle)\r\nIbuprofène', 2, 50, 10, 100),
(63, 'ADVILCAPS 400 mg 14 capsules(molle)\r\nIbuprofène', 2, 50, 10, 100),
(64, 'ADVILEFF 200 mg 12 comprimés(effervescent)\r\nIbuprofène', 2, 50, 10, 100),
(65, 'ADVILGEL 5 % 60g (gel)\r\nIbuprofène', 2, 50, 10, 100),
(66, 'ADVIL 200 mg 20 comprimés(enrobé)\r\nIbuprofène', 2, 50, 10, 100);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Fay', 'Fay'),
(3, '123', '123');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `user_nom` varchar(255) NOT NULL,
  `user_prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_mdp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `user_nom`, `user_prenom`, `email`, `user_mdp`) VALUES
(1, 'AMPORNPRAPA', 'Bongkoch', 'lapin_f2003@hotmail.com', '123456');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_prd`),
  ADD KEY `id_cat` (`prd_cat`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_prd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `fk_categorie` FOREIGN KEY (`prd_cat`) REFERENCES `categorie` (`id_cat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
