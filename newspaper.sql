-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 12 déc. 2021 à 17:44
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `newspaper`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `title` text NOT NULL,
  `objet` text NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL,
  `view` int(11) NOT NULL,
  `type` text NOT NULL,
  `dataActu` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `userId`, `title`, `objet`, `content`, `photo`, `view`, `type`, `dataActu`) VALUES
(26, 1, 'Faille', 'Une importante faille de sécurité', 'Des experts en sécurité informatique ont alerté, vendredi 10 novembre, sur une importante vulnérabilité logicielle mettant en danger un grand nombre de serveurs (les ordinateurs qui hébergent des services et sites Web).\r\n\r\nBaptisée « Log4Shell », cette faille de sécurité concerne plusieurs versions d’Apache, l’un des principaux logiciels utilisés pour faire fonctionner les serveurs. Plus précisément, la vulnérabilité découverte vient de Log4j, une librairie utilisée par le langage Java pour enregistrer des informations sur le serveur, comme des rapports d’erreur ou des données de connexion. Plusieurs experts ont découvert qu’il était possible d’envoyer au serveur un lien vers une page Web et de faire lire le contenu de cette page par la librairie. Si cette page contient du code en Java, il peut alors être exécuté sur le serveur.\r\n\r\nLes vulnérabilités qui permettent de faire fonctionner du code informatique à distance sur une machine (remote code execution), comme Log4Shell, sont particulièrement dangereuses, car elles peuvent par exemple permettre à un attaquant de s’introduire sur un serveur.', '61b3a618be84f.jpg', 20, 'economie', '2021-12-10'),
(27, 1, 'Ecologie', 'Bruno Latour : « L’écologie, c’est la nouvelle lutte des classes »', 'EntretienAfin de remédier à l’impuissance politique face au réchauffement climatique et de remobiliser une écologie qui oscille souvent entre la moralisation et l’ennui, le philosophe et sociologue repense la notion de conflit social. Il l’évoque dans un entretien au Monde, à quelques semaines de la sortie d’un « Mémo sur la nouvelle classe écologique », qu’il cosigne.\r\n\r\nSociologue et anthropologue des sciences et des techniques, Bruno Latour est professeur émérite associé au médialab et à l’Ecole des arts politiques de Science Po. Il est également l’un des philosophes français les plus lus, écoutés et traduits dans le monde. Sa pensée du « nouveau régime climatique », notamment développée dans Face à Gaïa (2015), influence toute une nouvelle génération d’intellectuels, d’artistes et d’activistes soucieux de remédier au désastre écologique. Le 6 janvier 2022, avec le sociologue danois Nikolaj Schultz, il publiera, aux éditions de La Découverte, Mémo sur la nouvelle classe écologique. En avant-première, il aborde pour Le Monde les raisons et les ressorts des conflits géosociaux qui se déroulent aujourd’hui, et explique comment une « nouvelle classe écologique » pourrait gagner la bataille des idées.', '61b3a67d3b239.jpg', 54, 'culture', '2021-12-10'),
(29, 1, 'Gaspillage', 'A partir du 1er janvier, les invendus non alimentaires ne pourront plus être détruits', 'Après soldes, ventes flash et autres déstockages, quelque 2 milliards d’euros de marchandises restent invendues. A partir du 1er janvier 2022, ces produits ne pourront plus être détruits par incinération en France.\r\n\r\nCette mesure, issue de la loi antigaspillage, est destinée à « obliger producteurs, importateurs et distributeurs à réemployer, réutiliser ou recycler les produits non alimentaires invendus », pour réduire le gaspillage et les émissions de gaz à effet de serre et créer de nouvelles solidarités, a rappelé le ministère de la transition écologique, vendredi 10 décembre.\r\n\r\nSont concernés par la mesure les produits électriques et électroniques, les piles, textiles, meubles, cartouches d’encre ainsi que les produits d’hygiène et de puériculture, les équipements de conservation et de cuisson des aliments, les produits d’éveil et de loisirs, ainsi que les livres et les fournitures scolaires.', '61b3add75ddc9.jpg', 15, 'economie', '2021-12-10'),
(30, 1, 'Election présidentielle', 'Les meetings politiques menacés', 'Après les élections municipales, au printemps 2020, et celles des régionales et départementales, en juin, le Covid-19 bouleverse d’ores et déjà la campagne de l’élection présidentielle. La cinquième vague contraint les équipes des candidats à s’adapter dans l’organisation des événements et meetings, qui peuvent rassembler plusieurs milliers de personnes, souvent dans des lieux clos.\r\n\r\nEn raison des « conditions sanitaires évidentes », le parti Les Républicains (LR) a ainsi décidé d’annuler le meeting d’investiture de la candidate du parti nouvellement désignée, Valérie Pécresse, prévu samedi 11 décembre. « Je serai une présidente de la République responsable et, donc, je commence par avoir une campagne responsable. Je ne peux pas prendre ce risque avec la santé de nos sympathisants », a fait savoir cette dernière, lundi 6 décembre sur France Inter, précisant qu’il n’y aurait pas dans l’immédiat « d’immenses meetings ». A la place, le parti réunira uniquement ses cadres à la maison de la Mutualité à Paris, samedi 11 décembre.', '61b3ae160e374.jpg', 7, 'politique', '2021-12-10'),
(31, 1, 'Finlande', 'La Finlande achète 64 chasseurs F-35 pour 8,4 milliards d’euros', 'La bonne affaire passe sous le nez de Dassault, et sous celui d’autres avionneurs. Le gouvernement finlandais a annoncé, vendredi 10 décembre, qu’il a retenu l’avion de combat F-35 de l’américain Lockheed Martin pour renouveler sa flotte, dans un contrat de quelque 8,4 milliards d’euros pour 64 appareils. Il s’agit du plus important contrat d’armement de l’histoire de la Finlande.\r\n\r\nLes nouveaux appareils, qui doivent voler jusqu’à l’horizon 2060, vont remplacer une soixantaine d’anciennes versions du F/A-18 de l’Américain Boeing livrées à la fin des années 1990. « Le F-35 a répondu aux exigences en matière de préparation, de coopération industrielle et de coût », a déclaré le ministre de la défense Antti Kaikkonen, lors d’une conférence de presse. « En comparant les capacités militaires, le système global du F-35 était le meilleur pour répondre à nos besoins. Ses capacités de combat, de renseignement et de résilience étaient les meilleures », a-t-il poursuivi.', '61b3ae5f5c4c2.jpg', 129, 'economie', '2021-12-10'),
(25, 1, 'Phécheur', 'Pêche post-Brexit', 'Pas de signe d’apaisement dans la querelle franco-britannique au sujet des licences de pêches post-Brexit. Au contraire : le secrétaire d’Etat aux affaires européennes, Clément Beaune, a confirmé vendredi 10 décembre sur Franceinfo qu’en l’absence de progrès d’ici à la fin de la journée, si les Britanniques « campent sur leur position, nous demanderons à la Commission européenne, dans le week-end, d’annoncer qu’un contentieux est engagé ».\r\n\r\nDepuis plus de onze mois, Français et Britanniques se disputent sur les modalités d’application de l’accord de commerce conclu après le Brexit entre Londres et Bruxelles, qui fixe les conditions d’accès aux eaux britanniques pour les pêcheurs européens. Sous la pression de Paris, la Commission européenne a demandé à la fin de novembre à Londres de régler le litige des licences de pêches avant vendredi 10 décembre. Jeudi soir, le Royaume-Uni a sèchement rejeté cette échéance, tandis que Paris réclame un arbitrage européen, promettant d’aller au contentieux si nécessaire.\r\n\r\n« Il n’y aura pas, je le dis très clairement, toutes les licences auxquelles nous avons droit d’ici ce soir », a regretté M. Beaune. « Si les Britanniques aujourd’hui disent “on donne quelques dizaines de licences supplémentaires” comme geste de bonne volonté, pour montrer que le dialogue porte ses fruits et qu’on a intérêt à le continuer encore, nous en tiendrons compte, nous ferons l’évaluation avec la Commission européenne et peut-être nous continuerons » à dialoguer, a-t-il expliqué.', '61b3a5fdaa774.jpg', 1, 'economie', '2021-12-10'),
(32, 1, 'Election présidentielle 2022', 'Valérie Pécresse s’emploie à mettre LR en ordre de bataille', 'C’est parti. Une semaine après sa désignation par les militants du parti Les Républicains (LR), le 4 décembre, Valérie Pécresse devait s’exprimer samedi 11 décembre devant les cadres et les parlementaires du mouvement, réunis à la Mutualité, à Paris.\r\n\r\nLa candidate, qui a dû renoncer à tenir un grand meeting devant 5 000 personnes, à cause du Covid-19, a maintenu ce premier discours devant une assistance réduite et partisane, afin de mettre la formation « sous tension » et lancer officiellement sa campagne. « Le parti doit [en] être le pivot », affirme le directeur de sa communication, Geoffroy Didier, qui promet un discours de « mobilisation » pour « lancer la machine ».', '61b47bd74ac63.jpg', 11, 'politique', '2021-12-11'),
(33, 1, 'Election présidentielle 2022', 'La fête de trop de Boris Johnson', 'Est-ce le début de la fin pour Boris Johnson ? La question n’est plus seulement posée par les opposants politiques du premier ministre britannique, mais elle est désormais formulée dans son propre camp conservateur. « Il y a une puanteur de fin de régime émanant de Downing Street qu’il n’est désormais plus possible d’ignorer », écrit ainsi Allister Heath, un des rédacteurs en chef du Daily Telegraph, dans les colonnes du quotidien de la droite britannique, jeudi 9 décembre.\r\n\r\nCerné par les affaires, le dirigeant sur qui les scandales glissaient jusqu’alors sans trop de dommages est désormais pressé de s’expliquer. Et les rumeurs galopent sur une éventuelle compétition interne pour le remplacer : « Oui, ces conversations ont bien lieu, les députés m’en parlent », affirmait Lord Gavin Barwell, vendredi, au micro de la BBC Radio 4. Les élus sont « frustrés » par les affaires impliquant Downing Street, ajoutait cet influent tory, et les révélations de presse, quasi quotidiennes, sur l’étendue supposée des scandales « sont incroyablement dommageables » pour le parti.', '61b47dbdb7185.jpg', 24, 'politique', '2021-12-11'),
(34, 3, '« Monde des livres »', 'Les meilleurs livres de 2021 ', 'La fin de l’année qui approche, ce sont les fêtes, mais aussi l’heure du bilan. Chaque journaliste de l’équipe du « Monde des livres » propose une sélection de cinq livres parmi ses préférés parus en 2021.\r\n\r\nLe choix de Jean Birnbaum\r\n\r\n    Mahmoud ou la montée des eaux, d’Antoine Wauters\r\n    Serge, de Yasmina Reza\r\n    Jeunesse, de Pierre Nora\r\n    La Vie derrière soi. Fins de la littérature, d’Antoine Compagnon\r\n    Le Deuxième Pas, de Damien Murith\r\n\r\nLe choix de Florent Georgesco\r\n\r\n    En URSS avec Gide, de Cécile Vargaftig\r\n    Klara et le soleil, de Kazuo Ishiguro\r\n    L’Enfer de la flibuste, édité par Frantz Olivié et Raynald Laprise\r\n    Feu la modernité ?, de Michel Fourcade\r\n    Crimes sexuels et société à la fin de l’Ancien Régime, d’Enora Peronneau Saint-Jalmes\r\n\r\nLe choix de Raphaëlle Leyris\r\n\r\n    Feu, de Maria Pourchet\r\n    L’Eternel Fiancé, d’Agnès Desarthe\r\n    Quatre heures, vingt-deux minutes et dix-huit secondes, de Lionel Shriver', '61b4fb886e86d.jpg', 31, 'culture', '2021-12-11'),
(35, 3, 'En Indre-et-Loire', 'Un loup et beaucoup de flou', 'Un loup gris a été vu sur les hauteurs de Cinq-Mars-la-Pile, un petit village d’Indre-et-Loire. Un Canis lupus, selon les indications de l’Office français de la biodiversité (OFB), qui a confirmé la présence du grand canidé quelques heures après avoir reçu un signalement. Vers 8 h 30, ce vendredi 26 novembre, un agriculteur se rend à son exploitation. Le village est couché aux bords de la Loire, mais les terres agricoles commencent dès la sortie du bourg, juste après la base militaire.\r\n\r\nColza, maïs, blé… A cette époque de l’année, les champs sont vides et offrent une vaste perspective sur les forêts alentour. Quand l’agriculteur aperçoit l’animal prêt à traverser la route à quelques mètres de lui, il stoppe sa voiture et, portable en main, parvient à prendre 14 photos sur lesquelles on voit le loup aller et venir près du véhicule, avant de disparaître dans la forêt.\r\n\r\nUne apparition de presque trente secondes dont les images sont aussitôt envoyées aux professionnels de l’OFB. « Notre rôle est de recueillir les témoignages de ce type et de vérifier soigneusement les faits. Donc, quand je reçois tôt le matin les photos, j’appelle l’agriculteur. Je lui demande d’abord si l’animal portait un collier, puis je déroule le questionnaire type pour en savoir le plus possible : taille des oreilles, de la queue, couleur du poil et surtout comportement de l’animal », raconte Stéphane Loyau, responsable du service départemental.', '61b4fbba1b794.jpg', 4, 'culture', '2021-12-11'),
(36, 3, 'Covid-19', 'Le variant Omicron', 'Omicron, avec sa cinquantaine de mutations, va-t-il mettre en péril la stratégie vaccinale en cours de déploiement face à la pandémie ? Les premières études expérimentales le font craindre : plusieurs d’entre elles montrent un affaiblissement de la protection immunitaire offerte par les vaccins face à ce variant, alors que les cas de réinfections ou d’infections de personnes déjà vaccinées se multiplient.\r\n\r\nC’est ce qui ressort notamment de données rendues publiques mercredi 8 décembre par la société BioNTech, qui a développé avec Pfizer le vaccin à ARN messager le plus répandu. Il s’agit « de données préliminaires », a prévenu Ugur Sahin, le PDG de BioNTech, qui plus est fondées sur la capacité d’un pseudovirus présentant les caractéristiques d’Omicron, mais pas du virus lui-même, à induire ou non une réponse immunitaire chez des vaccinés.\r\nLire aussi Article réservé à nos abonnés Le long chemin vers le succès éclair de l’ARN messager\r\n\r\nLes tests ont été conduits sur du sérum prélevé sur une vingtaine de personnes, soit trois semaines après la deuxième dose, soit un mois après le rappel. Chez les premières, « on observe une réduction majeure dans la quantité d’anticorps neutralisants » face à Omicron, comparé à la défense immunitaire érigée par le vaccin face au virus initial dit « de Wuhan » (25 fois moins) ou par rapport au variant Beta (5 fois moins). La comparaison avec le variant Delta n’a pas été présentée pour les doublement vaccinés.\r\n\r\nEn revanche, chez les personnes triplement vaccinées, la réponse en anticorps n’est que deux fois plus basse que face au SARS-CoV-2 « ancestral ». Elle est même proche de celle observée face au variant Delta, pour lequel on sait que la protection vaccinale vis-à-vis des formes graves du Covid-19 reste élevée. Ugur Sahin a aussi évoqué des données sur la réponse immunitaire cellulaire portée par les lymphocytes, estimant que ceux-ci « seront encore actifs contre Omicron ».', '61b4fc1616b3e.jpg', 21, 'economie', '2021-12-11'),
(37, 4, 'Etats-Unis', 'Tornades meurtrières dans le centre et le sud du pays', 'Des dizaines de disparus, des constructions aplaties à perte de vue, des enchevêtrements de gravats : six Etats américains ont été traversés par « l’une des séries de tornades les pires » de l’histoire du pays, a déploré le président américain, Joe Biden, qualifiant leurs ravages « d’inimaginable tragédie ».Le Kentucky a été le plus endeuillé par ce phénomène météorologique violent, touchant particulièrement les immenses plaines américaines, colonnes noires balayant le sol, illuminées par des éclairs intermittents« Les ravages sont incomparables avec quoi que ce soit que j’ai pu voir dans ma vie, et j’ai du mal à trouver les mots pour les décrire », a déclaré le gouverneur du Kentucky, Andy Beshear.', '61b6043f01def.jpg', 10, 'economie', '2021-12-12');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `content` text NOT NULL,
  `grade` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `articleId` (`articleId`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `userId`, `articleId`, `content`, `grade`, `date`) VALUES
(1, 1, 31, 'srgsfgsfdg', 0, '2021-12-12'),
(2, 1, 31, 'srfgsdfgsdfgsfgsfdg', 0, '2021-12-12'),
(3, 1, 31, 'sdfgsfgsfdgsdfg', 0, '2021-12-12'),
(4, 3, 31, 'aedfazrefa', 0, '2021-12-12'),
(5, 3, 31, 'zretzrt', 0, '2021-12-12'),
(6, 3, 36, 'que deux fois plus basse que face au SARS-CoV-2 « ancestral ». Elle est même proche de celle observée face au variant Delta, pour lequel on sait que la protection vaccinale vis-à-vis des ', 0, '2021-12-12'),
(7, 4, 36, 'Elle est même proche de celle observée face au variant Delta, pour lequel on sait que la protection vaccinale vis-à-vis des formes graves du Covid-19 reste élevée', 0, '2021-12-12'),
(8, 4, 32, 'devant 5 000 personnes, à cause du Covid-19, a maintenu ce premier discours devant une assistance réduite et', 2, '2021-12-12'),
(9, 1, 34, ' choix de Jean Birnbaum Mahmoud ou la montée des eaux, d’Antoine Wauters Serge, de Yasmina Reza Jeunesse, de Pierre Nora La V', 2, '2021-12-12'),
(10, 1, 35, 'oyées aux professionnels de l’OFB. « Notre rôle est de recueillir les témoignages de ce type et de vérifier soigneusement les faits. Donc, quand je reçois tôt le matin les photos, j’appelle l’agriculteur. Je lui demande d’abord si l’animal portait un collier, puis je déroule le questionnaire type pour en savoir le plus possible : taille des oreilles, de la queue, couleur du poil et surtout comportement de l’animal », raco', 2, '2021-12-12'),
(11, 2, 34, 'e Crimes sexuels et société à la fin de l’Ancien Régime, d’Enora Peronneau Saint-Jalmes Le choix de Raphaëlle', 0, '2021-12-12'),
(12, 2, 27, 'vec le sociologue danois Nikolaj Schultz, il publiera, aux éditions de La Découverte, Mémo sur la nouvelle classe écologique. En avant-première, il aborde pour Le Monde les raisons et les ressorts des conflits géosoci', 2, '2021-12-12'),
(13, 2, 37, 'ar ce phénomène météorologique violent, touchant particulièrement les immenses plaines américaines, colonnes noires balayant le sol, illuminées par des éclairs intermittents« Les ravages sont incomparables avec quoi que ce soit que j’ai pu voir dans ma vie, et j’ai du mal à trouver les mots pour les décrire », a ', 0, '2021-12-12'),
(14, 2, 33, 'e, quasi quotidiennes, sur l’étendue supposée des scandales « sont incroyablement dommageables » pour', 1, '2021-12-12');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, `status`) VALUES
(1, 'Quentin', 'q_cozic@hotmail.fr', '$2y$10$v2vXq7Jf/OivZgtKWrWReOtJhD23MIyF4uvHworfXpMJMbaFEVPrK', 3),
(2, 'Max', 'M@outlook.com', '$2y$10$ejppTB6tVMlElt0SFaDI.ecO84zLsWmdC3AdJKzV54Eh0/BSSAmTW', 1),
(3, 'Maxime', 'M@hotmail.com', '$2y$10$Vni.G.o62nf4Hagz7KO1IOO1L6vx4a7wOk/VU0N9R58zbewOvJbAe', 2),
(4, 'Lorelei', 'L@hotmail.com', '$2y$10$ZCQ5/NVR5xdr87Pa.vFTd.M9WhveI0Ya/zTUg.YD5syb7ZVSZIAZe', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
