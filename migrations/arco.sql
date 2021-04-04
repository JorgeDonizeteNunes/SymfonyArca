-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela arco.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela arco.categoria: ~7 rows (aproximadamente)
DELETE FROM `categoria`;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`, `categoria`) VALUES
	(1, 'Auto'),
	(2, 'Beauty and Fitness'),
	(3, 'Entertainment'),
	(4, 'Food and Dining'),
	(5, 'Health'),
	(6, 'Sports'),
	(7, 'Travel');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando estrutura para tabela arco.doctrine_migration_versions
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela arco.doctrine_migration_versions: ~1 rows (aproximadamente)
DELETE FROM `doctrine_migration_versions`;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20210404154531', '2021-04-04 17:45:40', 247);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;

-- Copiando estrutura para tabela arco.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B8D75A503397707A` (`categoria_id`),
  CONSTRAINT `FK_B8D75A503397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela arco.empresa: ~12 rows (aproximadamente)
DELETE FROM `empresa`;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id`, `categoria_id`, `title`, `phone`, `address`, `zipcode`, `city`, `state`, `description`) VALUES
	(1, 4, 'Habibs', '(14) 3234-5591', 'Av. Comendador José da Silva Martha, 1-11', '17016-210', 'Bauru', 'SP', 'Habib\'s é uma rede brasileira de restaurantes de comida rápida, especializada em culinária árabe. A rede vende mais de 600 milhões de esfirras por ano, empregando 22 mil colaboradores em seus 421 restaurantes, distribuídos em mais de cem municípios em 20 unidades federativas.'),
	(2, 1, 'Rogério Auto Móveis', '(14) 3233-1232', 'Av. Castelo Branco, 5', '17052-000', 'Bauru', 'SP', 'Venda e Locação de Carros'),
	(3, 4, 'Ragazzo', '(14) 3214-3777', 'Av. Comendador José da Silva Martha, 1-11', '17011-105', 'Bauru', 'SP', 'Rede de cantinas italianas, de ambiente descontraído e menu variado de massas, pizzas, lanches e sorvetes.'),
	(4, 1, 'Milazzo Fiat', '(14) 3233-1232', 'Av. Nações Unidas, 32-51', '17012-202', 'Bauru', 'SP', 'FIAT é uma das marcas da Stellantis, um dos maiores fabricantes de automóveis do mundo, com sede mundial na cidade de Turim, norte da Itália.'),
	(5, 7, 'CVC', '(14) 9649-4208', 'Rua Rio Branco, Quadra 20, 40', '17014-037', 'Bauru', 'SP', 'A CVC tem as melhores ofertas de pacotes de viagem, hospedagem, passagens aéreas, ingressos e aluguel de carro!'),
	(6, 7, 'Turisme', '(14) 3241-3700', 'R. Araújo Leite, 16-30', '17015-341', 'Bauru', 'SP', 'Nosso maior compromisso é o desenvolvimento do destino! Sempre empenhados na criação e implementação de metodologias inovadoras que abrangem desde a concepção até a implementação e acompanhamento dos trabalhos.'),
	(7, 3, 'Bauru Shopping', '(14) 3241-3700', ' R. Henrique Savi, 15- 55', '17011-900', 'Bauru', 'SP', 'Shopping espaçoso de vários andares com lojas variadas, restaurantes e cinema.'),
	(8, 3, 'Boulevard Shopping', '(14) 3500-8951', 'R. Marcondes Salgado, 11-39', '17013-113', 'Bauru', 'SP', 'Shopping de vários andares com mais de 175 lojas, cinema, praça de alimentação e lanchonetes.'),
	(9, 2, 'Studio Core - Personal Trainer, Funcional & Pilates', '(14) 8185-4293', 'R. Dr. José Maria Rodrigues Costa, 376', '17017-331', 'Bauru', 'SP', 'Necessário fazer agendamento · É obrigatório usar máscara de proteção · A equipe usa máscaras de proteção'),
	(10, 2, 'Vida Academia', '(14) 3227-7330', 'Rua Wenceslau Braz, 2-70', '17051-120', 'Bauru', 'SP', 'Acreditamos que somos partes integrantes de um mundo que pode ser ainda mais feliz, por isso, também queremos fazer nossa contribuição através do trabalho que desenvolvemos.'),
	(11, 2, 'Globo Sports', '(14) 3366-5555', 'R. Azarias Leite, 8-15', '17010-250', 'Bauru', 'SP', 'Viver bem não custa caro.'),
	(12, 2, 'Lider Sports', '(14) 3222-6712', ' R. Batista de Carvalho, 2-80', '17010-001', 'Bauru', 'SP', 'Roupas e vestuário em Bauru');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Copiando estrutura para tabela arco.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela arco.user: ~0 rows (aproximadamente)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `usuario`, `senha`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
