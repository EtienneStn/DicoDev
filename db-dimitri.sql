CREATE DATABASE dicodevdimitri;
USE dicodevdimitri;
CREATE TABLE `fonctions` (
  `id` int(11) NOT NULL,
  `id_propriete` int(11) NOT NULL,
  `css1` varchar(15) NOT NULL,
  `fonction` varchar(250) NOT NULL,
  `css2` varchar(15) NOT NULL,
  `data1` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `fonctions` (`id`, `id_propriete`, `css1`, `fonction`, `css2`, `data1`) VALUES
(3, 5, '1', 'apache_child_terminate()', '2', 'Termine le processus apache après cette requête\n[ Exemples avec apache_child_terminate ]   PHP 4 >= 4.0.5, PHP 5\nbool  apache_child_terminate ( void )\napache_child_terminate va programmer le processus Apache pour qu\'il se termine une fois que la requête PHP courante sera terminée. Cela peut servir à terminer un processus après un script qui aurait consommé beaucoup de mémoire. En effet, la mémoire est généralement libérée de manière interne, mais pas rendue au système.\n\nRetourne TRUE si PHP fonctionne en tant que module sur Apache 1, que la version d\'Apache ne soit pas multi-threadée et que la directive PHP child_terminate est activée (désactivée par défaut). Si ces conditions ne sont pas respectées, FALSE est retourné et une erreur de niveau E_WARNING est générée.'),
(4, 5, '1', 'apache_get_modules()', '2', 'Retourne la liste des modules Apache chargés\r\n[ Exemples avec apache_get_modules ]   PHP 4 >= 4.3.2, PHP 5\r\narray  apache_get_modules ( void )\r\nRetourne la liste des modules Apache chargés.\r\n\r\nUn tableau des modules Apache chargés.\r\n\r\nVersion	Description\r\nCette fonction est devenu disponible lors de l\'utilisation d\'Apache 1 ou de l\'API filtre PHP Apache 2. Avant ce temps, elle n\'était disponible qu\'en utilisant l\'API ressource d\'Apache 2.'),
(5, 5, '1', 'apache_get_version()', '2', 'Récupère la version d\'Apache\r\n[ Exemples avec apache_get_version ]   PHP 4 >= 4.3.2, PHP 5\r\nstring  apache_get_version ( void )\r\nRécupère la version d\'Apache.\r\n\r\nRetourne la version d\'Apache en cas de réussite ou FALSE en cas d\'échec.\r\n\r\nVersion	Description\r\n4.3.4	Devenue disponible avec Apache 1.\r\n5.0.0	Devenue disponible avec l\'API filtre d\'Apache 2.\r\n'),
(6, 7, '1', 'after', '2', 'En CSS, **::after **crée un pseudo-élément qui sera le dernier enfant de l\'élément sélectionné. Il est souvent utilisé pour ajouter du contenu cosmétique à un élément, en utilisant la propriété CSS content. Par défaut, ce contenu est de type « en ligne ».'),
(7, 10, '1', 'SELECT', '2', 'SQL SELECT\r\nL’utilisation la plus courante de SQL consiste à lire des données issues de la base de données. Cela s’effectue grâce à la commande SELECT, qui retourne des enregistrements dans un tableau de résultat. Cette commande peut sélectionner une ou plusieurs colonnes d’une table.\r\n\r\nCommande basique\r\nL’utilisation basique de cette commande s’effectue de la manière suivante:\r\n\r\nSELECT nom_du_champ FROM nom_du_tableau\r\nCette requête SQL va sélectionner (SELECT) le champ “nom_du_champ” provenant (FROM) du tableau appelé “nom_du_tableau”.'),
(8, 9, '1', 'POST', '2', 'POST\r\nLa méthode HTTP POST envoie des données au serveur. Le type du corps de la requête est indiqué par l\'en-tête Content-Type.\r\n\r\nLa différence entre PUT et POST tient au fait que PUT est une méthode idempotente. Une requête PUT, envoyée une ou plusieurs fois avec succès, aura toujours le même effet (il n\'y a pas d\'effet de bord). À l\'inverse, des requêtes POST successives et identiques peuvent avoir des effets additionnels, ce qui peut revenir par exemple à passer plusieurs fois une commande.\r\n\r\nUne requête POST est habituellement envoyée via un formulaire HTML et a pour résultat un changement sur le serveur. Dans ce cas, le type du contenu est sélectionné en mettant la chaîne de caractères adéquate dans l\'attribut* enctype de l\'élément <form> ou dans l\'attribut formenctype de l\'élément <input>, voir celui des éléments <button>* :'),
(9, 9, '1', 'GET', '2', 'La méthode GET demande une représentation de la ressource spécifiée. Les requêtes GET doivent uniquement être utilisées afin de récupérer des données.'),
(10, 8, '1', 'Creer un tableau', '2', 'let fruits = [\'Apple\', \'Banana\'];\r\n\r\nconsole.log(fruits.length);\r\n// 2'),
(11, 8, '1', 'Acceder (via son index) a un element du tableau', '2', 'let first = fruits[0];\r\n// Apple\r\n\r\nlet last = fruits[fruits.length - 1];\r\n// Banana'),
(12, 6, '1', 'apc_add', '2', 'Met en cache une nouvelle variable dans le magasin de données');

CREATE TABLE `langage` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `css1` mediumtext NOT NULL,
  `langage` mediumtext NOT NULL,
  `css2` mediumtext NOT NULL,
  `data1` mediumtext NOT NULL,
  `css3` mediumtext NOT NULL,
  `data2` mediumtext NOT NULL,
  `css4` mediumtext NOT NULL,
  `data3` mediumtext NOT NULL,
  `css5` mediumtext NOT NULL,
  `data4` mediumtext NOT NULL,
  `css6` mediumtext NOT NULL,
  `data5` mediumtext NOT NULL,
  `css7` mediumtext NOT NULL,
  `data6` mediumtext NOT NULL,
  `css8` mediumtext NOT NULL,
  `data7` mediumtext NOT NULL,
  `css9` mediumtext NOT NULL,
  `data8` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `langage` (`id`, `logo`, `css1`, `langage`, `css2`, `data1`, `css3`, `data2`, `css4`, `data3`, `css5`, `data4`, `css6`, `data5`, `css7`, `data6`, `css8`, `data7`, `css9`, `data8`) VALUES
(11, '/formation/projets/dicodev/img/PHP.png', '1', 'PHP', '2', 'qscsvd', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '/formation/projets/dicodev/img/CSS3.png', '1', 'CSS', '2', 'TEXT', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '/formation/projets/dicodev/img/JS.png', '1', 'JavaScript', '2', 'JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les technologies HTML et CSS, JavaScript est parfois considéré comme l\'une des technologies cœur du World Wide Web3. Une grande majorité des sites web l\'utilisent4, et la majorité des navigateurs web disposent d\'un moteur JavaScript5 dédié pour l\'interpréter, indépendamment des considérations de sécurité qui peuvent se poser le cas échéant.\r\n\r\nC\'est un langage orienté objet à prototype : les bases du langage et ses principales interfaces sont fournies par des objets.\r\n\r\nCependant, à la différence d\'un langage orienté objets, les objets de base ne sont pas des instances de classes.\r\n\r\nChaque objet de base (ex : l\'objet document ou windows) possède son propre modèle qui lui permettra d\'instancier des objets fils à l\'aide de constructeurs utilisant ses propriétés. Par exemple, la propriété de prototypage va leur permettre de créer des objets héritiers personnalisés.\r\n\r\nEn outre, les fonctions sont des objets de première classe. Le langage supporte le paradigme objet, impératif et fonctionnel. JavaScript est le langage possédant le plus large écosystème grâce à son gestionnaire de dépendances npm, avec environ 500 000 paquets en août 20176.\r\n\r\nJavaScript a été créé en 1995 par Brendan Eich. Il a été standardisé sous le nom d\'ECMAScript en juin 1997 par Ecma International dans le standard ECMA-262. La version actuellement en vigueur de ce standard, depuis juin 2020, est la 11ème édition.\r\n\r\nJavaScript est une implémentation d\'ECMAScript, celle mise en œuvre par la fondation Mozilla. L\'implémentation d\'ECMAScript par Microsoft (dans Internet Explorer jusqu\'à sa version 9) se nomme JScript, tandis que celle d\'Adobe Systems se nomme ActionScript.\r\n\r\nJavaScript est aussi employé pour les serveurs7 avec l\'utilisation (par exemple) de Node.js8 ou de Deno9.\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '/formation/projets/dicodev/img/HTML5.png', '1', 'HTML', '2', 'HTML signifie « HyperText Markup Language » qu\'on peut traduire par « langage de balises pour l\'hypertexte ». Il est utilisé afin de créer et de représenter le contenu d\'une page web et sa structure. D\'autres technologies sont utilisées avec HTML pour décrire la présentation d\'une page (CSS) et/ou ses fonctionnalités interactives (JavaScript).\r\n\r\nL\'« hypertexte » désigne les liens qui relient les pages web entre elles, que ce soit au sein d\'un même site web ou entre différents sites web. Les liens sont un aspect fondamental du Web. Ce sont eux qui forment cette « toile » (ce mot est traduit par web en anglais). En téléchargeant du contenu sur l\'Internet et en le reliant à des pages créées par d\'autres personnes, vous devenez un participant actif du World Wide Web.', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '/formation/projets/dicodev/img/SQL.png', '1', 'SQL', '2', 'SQL (sigle de Structured Query Language, en français langage de requête structurée) est un langage informatique normalisé servant à exploiter des bases de données relationnelles. La partie langage de manipulation des données de SQL permet de rechercher, d\'ajouter, de modifier ou de supprimer des données dans les bases de données relationnelles.\r\n\r\nOutre le langage de manipulation des données  :\r\n\r\nle langage de définition des données permet de créer et de modifier l\'organisation des données dans la base de données,\r\nle langage de contrôle de transaction permet de commencer et de terminer des transactions,\r\nle langage de contrôle des données permet d\'autoriser ou d\'interdire l\'accès à certaines données à certaines personnes.', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

CREATE TABLE `propriete` (
  `id` int(11) NOT NULL,
  `id_langage` int(11) NOT NULL,
  `css1` varchar(15) CHARACTER SET utf8 NOT NULL,
  `propriete` mediumtext NOT NULL,
  `css2` varchar(15) NOT NULL,
  `data1` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `propriete` (`id`, `id_langage`, `css1`, `propriete`, `css2`, `data1`) VALUES
(5, 11, '1', 'Apache', '2', 'Le logiciel libre Apache HTTP Server (Apache) est un serveur HTTP créé et maintenu au sein de la fondation Apache. Jusqu\'en avril 20193, ce fut le serveur HTTP le plus populaire du World Wide Web. Il est distribué selon les termes de la licence Apache.'),
(6, 11, '1', 'APC', '2', 'Alternative PHP Cache ou APC est une extension PECL (PHP Extension Community Library, voir PEAR) libre et gratuite destinée à améliorer les performances des applications écrites en langage PHP en précompilant le code intermédiaire et en le plaçant dans un cache.\r\n\r\nAPC n\'est plus maintenu depuis 20121, remplacé par APCu (APC User Cache)2.'),
(7, 12, '1', 'Animations  Transitions', '2', 'descriptif Animations & Transitions'),
(8, 13, '1', 'Array', '2', 'Array\r\nL\'objet global Array est utilisé pour créer des tableaux. Les tableaux sont des objets de haut-niveau (en termes de complexité homme-machine) semblables à des listes.\r\n\r\nDescription\r\nLes tableaux sont des objets semblables à des listes dont le prototype possède des méthodes qui permettent de parcourir et de modifier le tableau. Ni la longueur ni le type des éléments d\'un tableau JavaScript sont fixés. Comme la longueur d\'un tableau peut varier à tout moment et que les données peuvent être stockées à des emplacements qui ne sont pas nécessairement contigus, les tableaux JavaScript ne sont pas forcément « pleins » / denses. Généralement, ces particularités sont appréciables mais si elles ne correspondent pas à votre usage, vous pourriez vouloir utiliser les tableaux typés.\r\n\r\nLes tableaux ne peuvent pas utiliser de chaînes de caractères comme indices pour les éléments (à la façon des tableaux associatifs) mais doivent utiliser des entiers. Définir une valeur ou tenter d\'y accéder avec un indice non-entier via la notation entre crochet (ou la notation avec le point) ne définira ou ne récupèrera pas la valeur mais définira ou récupèrera une variable associée aux propriétés de l\'objet formé par le tableau. Les propriétés et les éléments d\'un tableau sont distincts et les opérations de parcours et de modification du tableau ne peuvent pas être appliquées à ces propriétés.'),
(9, 14, '1', 'Méthodes', '2', 'Méthodes de requête HTTP\r\nHTTP définit un ensemble de méthodes de requête qui indiquent l\'action que l\'on souhaite réaliser sur la ressource indiquée. Bien qu\'on rencontre également des noms (en anglais), ces méthodes sont souvent appelées verbes HTTP. Chacun d\'eux implémente une sémantique différente mais certaines fonctionnalités courantes peuvent être partagées par différentes méthodes (e.g. une méthode de requête peut être sûre (safe), idempotente ou être mise en cache (cacheable)).'),
(10, 15, '1', 'SQL SELECT', '2', 'L’utilisation la plus courante de SQL consiste à lire des données issues de la base de données');

ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_propriete` (`id_propriete`);

ALTER TABLE `langage`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `propriete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_langage` (`id_langage`);

ALTER TABLE `fonctions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `langage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `propriete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `fonctions`
  ADD CONSTRAINT `fonctions_ibfk_1` FOREIGN KEY (`id_propriete`) REFERENCES `propriete` (`id`);

ALTER TABLE `propriete`
  ADD CONSTRAINT `propriete_ibfk_1` FOREIGN KEY (`id_langage`) REFERENCES `langage` (`id`);
COMMIT;
