-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.11.2-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para sistemalojaroupabd
CREATE DATABASE IF NOT EXISTS `sistemalojaroupabd` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `sistemalojaroupabd`;

-- Copiando estrutura para tabela sistemalojaroupabd.administradores
CREATE TABLE IF NOT EXISTS `administradores` (
  `ID_Administrador` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `ID_TipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_Administrador`),
  KEY `ID_TipoUsuario` (`ID_TipoUsuario`),
  CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`ID_TipoUsuario`) REFERENCES `tipousuario` (`ID_TipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.administradores: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` (`ID_Administrador`, `Nome`, `Telefone`, `Email`, `Endereco`, `ID_TipoUsuario`) VALUES
	(1, 'Adm1', '+55 911111111', 'adm1@gmail.com', 'Rua Adm', 1);
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.categoriaroupas
CREATE TABLE IF NOT EXISTS `categoriaroupas` (
  `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.categoriaroupas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `categoriaroupas` DISABLE KEYS */;
INSERT INTO `categoriaroupas` (`ID_Categoria`, `Nome`) VALUES
	(1, 'Camisetas'),
	(2, 'Calças'),
	(3, 'Vestidos'),
	(4, 'Casacos'),
	(5, 'Sapatos'),
	(6, 'Acessórios');
/*!40000 ALTER TABLE `categoriaroupas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `ID_TipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_Cliente`),
  KEY `ID_TipoUsuario` (`ID_TipoUsuario`),
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`ID_TipoUsuario`) REFERENCES `tipousuario` (`ID_TipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`ID_Cliente`, `Nome`, `Telefone`, `Email`, `Endereco`, `ID_TipoUsuario`) VALUES
	(1, 'João Silva', '+55 922222222', 'joao.silva@example.com', 'Rua A, 123', 2),
	(2, 'Maria Santos', '+55 933333333', 'maria.santos@example.com', 'Avenida B, 456', 2),
	(3, 'Pedro Alves', '+55 944444444', 'pedro.alves@example.com', 'Rua C, 789', 2),
	(4, 'Ana Pereira', '+55 955555555', 'ana.pereira@example.com', 'Avenida D, 987', 2);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.formaspagamento
CREATE TABLE IF NOT EXISTS `formaspagamento` (
  `ID_FormaPagamento` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_FormaPagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.formaspagamento: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `formaspagamento` DISABLE KEYS */;
INSERT INTO `formaspagamento` (`ID_FormaPagamento`, `Descricao`) VALUES
	(1, 'Pix'),
	(2, 'Cartão (Debito)'),
	(3, 'Cartão (Credito)'),
	(4, 'Dinheiro');
/*!40000 ALTER TABLE `formaspagamento` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.fornecedores
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `ID_Fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.fornecedores: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`ID_Fornecedor`, `Nome`, `Telefone`, `Email`) VALUES
	(1, ' FashionHub Inc.', '+55 1234567890', 'info@fashionhub.com'),
	(2, 'StyleTrends Ltda.', '+55 9876543210', 'sales@styletrends.com'),
	(3, 'ChicCouture Fashion', '+55 5555555555', 'info@chiccouturefashion.com'),
	(4, 'TrendyThreads', '+55 9999999999', ' sales@trendythreads.com');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `ID_Funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `ID_TipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_Funcionario`),
  KEY `ID_TipoUsuario` (`ID_TipoUsuario`),
  CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`ID_TipoUsuario`) REFERENCES `tipousuario` (`ID_TipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.funcionarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` (`ID_Funcionario`, `Nome`, `Telefone`, `Email`, `Endereco`, `ID_TipoUsuario`) VALUES
	(1, 'Jefferson Alves', '+55 966666666', 'jefferson@gmail.com', 'a', 3),
	(2, 'Elisvanilton', '+55 977777777', 'elisvanilton', 'b', 3),
	(3, 'Keverny', '+55 988888888', 'keverny@fifinha.com', 'c', 3);
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `ID_Marca` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Marca`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.marcas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`ID_Marca`, `Nome`) VALUES
	(1, ' Enigma Apparel'),
	(2, 'NovaEra Fashion'),
	(3, 'Radiant Style'),
	(4, 'Elegance Couture');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.publicoalvo
CREATE TABLE IF NOT EXISTS `publicoalvo` (
  `ID_PublicoAlvo` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_PublicoAlvo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.publicoalvo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `publicoalvo` DISABLE KEYS */;
INSERT INTO `publicoalvo` (`ID_PublicoAlvo`, `Nome`) VALUES
	(1, 'Masculino'),
	(2, 'Feminino'),
	(3, 'Infantil');
/*!40000 ALTER TABLE `publicoalvo` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.tamanhoroupas
CREATE TABLE IF NOT EXISTS `tamanhoroupas` (
  `ID_Tamanho` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_Tamanho`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.tamanhoroupas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tamanhoroupas` DISABLE KEYS */;
INSERT INTO `tamanhoroupas` (`ID_Tamanho`, `Nome`) VALUES
	(1, 'P'),
	(2, 'M'),
	(3, 'G'),
	(4, 'GG');
/*!40000 ALTER TABLE `tamanhoroupas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.tipooperacao
CREATE TABLE IF NOT EXISTS `tipooperacao` (
  `ID_TipoOperacao` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_TipoOperacao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.tipooperacao: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipooperacao` DISABLE KEYS */;
INSERT INTO `tipooperacao` (`ID_TipoOperacao`, `Nome`) VALUES
	(1, 'Entrada'),
	(2, 'Saida');
/*!40000 ALTER TABLE `tipooperacao` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.tipousuario
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `ID_TipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_TipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.tipousuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` (`ID_TipoUsuario`, `Nome`) VALUES
	(1, 'Adm'),
	(2, 'Cliente'),
	(3, 'Funcionario');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
