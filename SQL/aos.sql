-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 23 Février 2018 à 10:03
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `aos`
--

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE `date` (
  `date_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `friends_id` int(11) NOT NULL,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  `dateUnion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `friends`
--

INSERT INTO `friends` (`friends_id`, `id_user1`, `id_user2`, `dateUnion`) VALUES
(1, 3, 32, '2018-02-22 15:13:22'),
(2, 3, 31, '2018-02-22 15:13:22'),
(4, 31, 3, '2018-02-22 15:27:11'),
(5, 31, 32, '2018-02-22 15:27:11');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`img_id`, `img_link`, `id_user`) VALUES
(2, 'Magnifique_fond_ecran_HD_-_Hiver.jpg', 3),
(4, 'SABRI 17.jpeg', 3),
(5, 'SABRI 27.jpeg', 3),
(6, 'SABRI 37.jpeg', 31),
(7, 'SABRI 47.jpeg', 32),
(8, 'SABRI 57.jpeg', 31),
(9, 'SABRI 67.jpeg', 3),
(11, 'SABRI 17.jpeg', 3),
(12, 'SABRI 27.jpeg', 3),
(13, 'SABRI 37.jpeg', 31),
(14, 'SABRI 47.jpeg', 32),
(15, 'SABRI 57.jpeg', 31),
(16, 'SABRI 67.jpeg', 3),
(23, 'ADIEVE-Logo-NOIR-png.png', 31),
(24, '2.png', 31),
(25, 'sumo.jpg', 31),
(26, 'Magnifique-fond-ecran-HD-Hiver.jpg', 31),
(28, '2017P2.jpeg', 31);

-- --------------------------------------------------------

--
-- Structure de la table `img_comments`
--

CREATE TABLE `img_comments` (
  `comimg_id` int(11) NOT NULL,
  `id_img` int(11) NOT NULL,
  `id_friend` int(11) NOT NULL,
  `comm` text NOT NULL,
  `id_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `label` enum('jpg','png','jpeg','bmp','gif','avi','mp4','mkv') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_nom` varchar(65) NOT NULL,
  `users_prenom` varchar(65) NOT NULL,
  `users_login` varchar(65) NOT NULL,
  `users_mdp` varchar(65) NOT NULL,
  `users_active` tinyint(1) NOT NULL DEFAULT '0',
  `users_role` enum('ADMIN','USER','','') NOT NULL,
  `users_mail` varchar(255) NOT NULL,
  `users_photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`users_id`, `users_nom`, `users_prenom`, `users_login`, `users_mdp`, `users_active`, `users_role`, `users_mail`, `users_photo`) VALUES
(1, 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', 1, 'ADMIN', 'admin.admin@gmail.com', ''),
(2, 'USER', 'USER', 'USER', 'USER', 1, 'USER', 'user.user@hotmail.fr', ''),
(3, 'DOLAIS', 'Alizée', 'Soon', 'Soon', 1, 'ADMIN', '', 'alizee.jpg'),
(31, 'camara', 'magou', 'c', 'c', 1, 'USER', 'c@d.com', 'magouCamara.jpg'),
(32, 'mamma', 'halima', 'm', 'm', 1, 'USER', 'm@m.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `vid_id` int(11) NOT NULL,
  `vid_blob` blob NOT NULL,
  `vid_nom` varchar(65) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vid_comments`
--

CREATE TABLE `vid_comments` (
  `comvid_id` int(11) NOT NULL,
  `id_vid` int(11) NOT NULL,
  `id_friend` int(11) NOT NULL,
  `comm` text NOT NULL,
  `id_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date_id`);

--
-- Index pour la table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friends_id`,`id_user1`,`id_user2`),
  ADD KEY `id-user1` (`id_user1`),
  ADD KEY `id-user2` (`id_user2`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `img_comments`
--
ALTER TABLE `img_comments`
  ADD PRIMARY KEY (`comimg_id`),
  ADD KEY `id_user` (`id_friend`),
  ADD KEY `id_img` (`id_img`),
  ADD KEY `id_date` (`id_date`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vid_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `vid_comments`
--
ALTER TABLE `vid_comments`
  ADD PRIMARY KEY (`comvid_id`),
  ADD KEY `id_user` (`id_friend`),
  ADD KEY `id_vid` (`id_vid`),
  ADD KEY `id_date` (`id_date`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `date`
--
ALTER TABLE `date`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `friends`
--
ALTER TABLE `friends`
  MODIFY `friends_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `img_comments`
--
ALTER TABLE `img_comments`
  MODIFY `comimg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vid_comments`
--
ALTER TABLE `vid_comments`
  MODIFY `comvid_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `id-user1` FOREIGN KEY (`id_user1`) REFERENCES `users` (`users_id`),
  ADD CONSTRAINT `id-user2` FOREIGN KEY (`id_user2`) REFERENCES `users` (`users_id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`users_id`);

--
-- Contraintes pour la table `img_comments`
--
ALTER TABLE `img_comments`
  ADD CONSTRAINT `img_comments_ibfk_1` FOREIGN KEY (`id_friend`) REFERENCES `users` (`users_id`),
  ADD CONSTRAINT `img_comments_ibfk_2` FOREIGN KEY (`id_img`) REFERENCES `images` (`img_id`),
  ADD CONSTRAINT `img_comments_ibfk_3` FOREIGN KEY (`id_date`) REFERENCES `date` (`date_id`);

--
-- Contraintes pour la table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`users_id`);

--
-- Contraintes pour la table `vid_comments`
--
ALTER TABLE `vid_comments`
  ADD CONSTRAINT `vid_comments_ibfk_1` FOREIGN KEY (`id_vid`) REFERENCES `videos` (`vid_id`),
  ADD CONSTRAINT `vid_comments_ibfk_2` FOREIGN KEY (`id_date`) REFERENCES `date` (`date_id`),
  ADD CONSTRAINT `vid_comments_ibfk_3` FOREIGN KEY (`id_friend`) REFERENCES `users` (`users_id`);
