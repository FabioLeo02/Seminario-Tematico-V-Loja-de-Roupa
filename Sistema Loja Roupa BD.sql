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
DELETE FROM `administradores`;
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
DELETE FROM `categoriaroupas`;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.clientes: ~7 rows (aproximadamente)
DELETE FROM `clientes`;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`ID_Cliente`, `Nome`, `Telefone`, `Email`, `Endereco`, `ID_TipoUsuario`) VALUES
	(1, 'João Silva', '+55 922222222', 'joao.silva@example.com', 'Rua A, 123', 2),
	(2, 'Maria Santos', '+55 933333333', 'maria.santos@example.com', 'Avenida B, 456', 2),
	(3, 'Pedro Alves', '+55 944444444', 'pedro.alves@example.com', 'Rua C, 789', 2),
	(4, 'Ana Pereira', '+55 955555555', 'ana.pereira@example.com', 'Avenida D, 987 ', 2),
	(9, 'Lucas ', '+55 944444444', 'lucas@gmail.com', 'Av. Laranja N° 345', 2),
	(11, 'Fabio ', '+55 9777777777', 'fabio@gmail.com', 'Av. Exemplo', 2),
	(13, 'Jefferson', '98 987133233', 'jefferson@gmail.com', 'Av. Fifinha', 2);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.formaspagamento
CREATE TABLE IF NOT EXISTS `formaspagamento` (
  `ID_FormaPagamento` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_FormaPagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.formaspagamento: ~4 rows (aproximadamente)
DELETE FROM `formaspagamento`;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.fornecedores: ~5 rows (aproximadamente)
DELETE FROM `fornecedores`;
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`ID_Fornecedor`, `Nome`, `Telefone`, `Email`) VALUES
	(1, ' FashionHub Inc.', '+55 1234567890', 'info@fashionhub.com'),
	(2, 'StyleTrends Ltda.', '+55 9876543210', 'sales@styletrends.com'),
	(3, 'ChicCouture Fashion', '+55 5555555555', 'info@chiccouturefashion.com'),
	(4, 'TrendyThreads', '+55 999998888', ' sales@trendythreads.com'),
	(5, 'LáEle Fornecedores', '+55 988888888', 'laele@fornecedores.com');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.funcionarios: ~3 rows (aproximadamente)
DELETE FROM `funcionarios`;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` (`ID_Funcionario`, `Nome`, `Telefone`, `Email`, `Endereco`, `ID_TipoUsuario`) VALUES
	(1, 'Jefferson Alves', '+55 966666666', 'jefferson@gmail.com', 'a', 3),
	(2, 'Elisvanilton', '+55 977777777', 'elisvanilton', 'b', 3),
	(3, 'Keverny', '+55 988888888', 'keverny@fifinha.com', 'c', 3);
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.loginusuario
CREATE TABLE IF NOT EXISTS `loginusuario` (
  `ID_LoginUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `CPF` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_LoginUsuario`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.loginusuario: ~3 rows (aproximadamente)
DELETE FROM `loginusuario`;
/*!40000 ALTER TABLE `loginusuario` DISABLE KEYS */;
INSERT INTO `loginusuario` (`ID_LoginUsuario`, `CPF`, `Nome`, `Email`, `Senha`) VALUES
	(1, 1234567891, 'Admin', 'admin@admin.com', 'admin'),
	(2, 1, 'Fabio', 'fabio@gmail.com', '123'),
	(4, 2, 'Jefferson', 'jeff@fifinha.com', '123');
/*!40000 ALTER TABLE `loginusuario` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `ID_Marca` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Marca`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.marcas: ~5 rows (aproximadamente)
DELETE FROM `marcas`;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`ID_Marca`, `Nome`) VALUES
	(1, ' Enigma Apparel'),
	(2, 'NovaEra Fashion'),
	(3, 'Radiant Style'),
	(4, 'Elegance Couture'),
	(5, 'BluePen Fashion');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.movimentacaoestoque
CREATE TABLE IF NOT EXISTS `movimentacaoestoque` (
  `ID_Movimentacao` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Registro` int(11) NOT NULL,
  `ID_Roupa` int(11) NOT NULL,
  `ID_TipoOperacao` int(11) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `DataMovimentacao` date NOT NULL,
  PRIMARY KEY (`ID_Movimentacao`),
  KEY `ID_Roupa` (`ID_Roupa`),
  KEY `ID_TipoOperacao` (`ID_TipoOperacao`),
  KEY `ID_Registro` (`ID_Registro`),
  CONSTRAINT `movimentacaoestoque_ibfk_2` FOREIGN KEY (`ID_Roupa`) REFERENCES `roupas` (`ID_Roupa`),
  CONSTRAINT `movimentacaoestoque_ibfk_3` FOREIGN KEY (`ID_TipoOperacao`) REFERENCES `tipooperacao` (`ID_TipoOperacao`),
  CONSTRAINT `movimentacaoestoque_ibfk_4` FOREIGN KEY (`ID_Registro`) REFERENCES `vendas` (`ID_Venda`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.movimentacaoestoque: ~4 rows (aproximadamente)
DELETE FROM `movimentacaoestoque`;
/*!40000 ALTER TABLE `movimentacaoestoque` DISABLE KEYS */;
INSERT INTO `movimentacaoestoque` (`ID_Movimentacao`, `ID_Registro`, `ID_Roupa`, `ID_TipoOperacao`, `Quantidade`, `DataMovimentacao`) VALUES
	(4, 21, 1, 2, 2, '2023-06-04'),
	(9, 26, 5, 2, 100, '2023-06-04'),
	(11, 28, 1, 2, 2, '2023-06-04'),
	(12, 29, 1, 2, 2, '2023-06-05');
/*!40000 ALTER TABLE `movimentacaoestoque` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.publicoalvo
CREATE TABLE IF NOT EXISTS `publicoalvo` (
  `ID_PublicoAlvo` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_PublicoAlvo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.publicoalvo: ~3 rows (aproximadamente)
DELETE FROM `publicoalvo`;
/*!40000 ALTER TABLE `publicoalvo` DISABLE KEYS */;
INSERT INTO `publicoalvo` (`ID_PublicoAlvo`, `Nome`) VALUES
	(1, 'Masculino'),
	(2, 'Feminino'),
	(3, 'Infantil');
/*!40000 ALTER TABLE `publicoalvo` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.roupas
CREATE TABLE IF NOT EXISTS `roupas` (
  `ID_Roupa` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `ID_Fornecedor` int(11) NOT NULL,
  `ID_Marca` int(11) NOT NULL,
  `ID_Categoria` int(11) NOT NULL,
  `ID_Tamanho` int(11) NOT NULL,
  `ID_PublicoAlvo` int(11) NOT NULL,
  PRIMARY KEY (`ID_Roupa`),
  KEY `ID_Fornecedor` (`ID_Fornecedor`),
  KEY `ID_Marca` (`ID_Marca`),
  KEY `ID_Categoria` (`ID_Categoria`),
  KEY `ID_Tamanho` (`ID_Tamanho`),
  KEY `ID_PublicoAlvo` (`ID_PublicoAlvo`),
  CONSTRAINT `roupas_ibfk_1` FOREIGN KEY (`ID_Fornecedor`) REFERENCES `fornecedores` (`ID_Fornecedor`),
  CONSTRAINT `roupas_ibfk_2` FOREIGN KEY (`ID_Marca`) REFERENCES `marcas` (`ID_Marca`),
  CONSTRAINT `roupas_ibfk_3` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoriaroupas` (`ID_Categoria`),
  CONSTRAINT `roupas_ibfk_4` FOREIGN KEY (`ID_Tamanho`) REFERENCES `tamanhoroupas` (`ID_Tamanho`),
  CONSTRAINT `roupas_ibfk_5` FOREIGN KEY (`ID_PublicoAlvo`) REFERENCES `publicoalvo` (`ID_PublicoAlvo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.roupas: ~5 rows (aproximadamente)
DELETE FROM `roupas`;
/*!40000 ALTER TABLE `roupas` DISABLE KEYS */;
INSERT INTO `roupas` (`ID_Roupa`, `Nome`, `ID_Fornecedor`, `ID_Marca`, `ID_Categoria`, `ID_Tamanho`, `ID_PublicoAlvo`) VALUES
	(1, 'Camisa Vermelha Masculina', 2, 1, 1, 3, 1),
	(2, 'Camisa Vermelha Feminina', 1, 1, 1, 2, 2),
	(3, 'Calça Jeans Masculina', 2, 2, 2, 2, 1),
	(4, 'Calça Jeans Feminina', 2, 2, 2, 1, 2),
	(5, 'Camiseta Manoel Gomes', 1, 1, 1, 3, 1),
	(7, 'Camisa do Flamengo Gabigol', 5, 4, 1, 3, 1);
/*!40000 ALTER TABLE `roupas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.tamanhoroupas
CREATE TABLE IF NOT EXISTS `tamanhoroupas` (
  `ID_Tamanho` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_Tamanho`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.tamanhoroupas: ~4 rows (aproximadamente)
DELETE FROM `tamanhoroupas`;
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
DELETE FROM `tipooperacao`;
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
DELETE FROM `tipousuario`;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` (`ID_TipoUsuario`, `Nome`) VALUES
	(1, 'Adm'),
	(2, 'Cliente'),
	(3, 'Funcionario');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;

-- Copiando estrutura para tabela sistemalojaroupabd.vendas
CREATE TABLE IF NOT EXISTS `vendas` (
  `ID_Venda` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Cliente` int(11) NOT NULL,
  `ID_Roupa` int(11) NOT NULL,
  `ID_FormaPagamento` int(11) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `ValorUnitario` decimal(10,2) NOT NULL,
  `ValorTotal` decimal(10,2) NOT NULL,
  `DataVenda` date NOT NULL,
  PRIMARY KEY (`ID_Venda`),
  KEY `ID_Cliente` (`ID_Cliente`),
  KEY `ID_Roupa` (`ID_Roupa`),
  KEY `ID_FormaPagamento` (`ID_FormaPagamento`),
  CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`ID_Cliente`) REFERENCES `clientes` (`ID_Cliente`),
  CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`ID_Roupa`) REFERENCES `roupas` (`ID_Roupa`),
  CONSTRAINT `vendas_ibfk_3` FOREIGN KEY (`ID_FormaPagamento`) REFERENCES `formaspagamento` (`ID_FormaPagamento`),
  CONSTRAINT `CHK_Data` CHECK (`DataVenda` between '2023-01-01' and '2099-12-31')
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela sistemalojaroupabd.vendas: ~4 rows (aproximadamente)
DELETE FROM `vendas`;
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` (`ID_Venda`, `ID_Cliente`, `ID_Roupa`, `ID_FormaPagamento`, `Quantidade`, `ValorUnitario`, `ValorTotal`, `DataVenda`) VALUES
	(21, 1, 1, 1, 2, 2.00, 2.00, '2023-06-04'),
	(26, 11, 5, 3, 100, 10.00, 1000.00, '2023-06-04'),
	(28, 3, 1, 2, 2, 10.00, 20.00, '2023-06-04'),
	(29, 3, 1, 1, 2, 20.00, 40.00, '2023-06-05');
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;

-- Copiando estrutura para view sistemalojaroupabd.viewmovimentacao
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `viewmovimentacao` (
	`ID_Movimentacao` INT(11) NOT NULL,
	`NomeRoupa` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`TpOp` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Quantidade` INT(11) NOT NULL,
	`DataMovimentacao` DATE NOT NULL
) ENGINE=MyISAM;

-- Copiando estrutura para view sistemalojaroupabd.viewroupas
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `viewroupas` (
	`ID_Roupa` INT(11) NOT NULL,
	`Nome` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`NomeFornecedor` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`NomeMarca` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`NomeCategoria` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`TamanhoRoupa` VARCHAR(10) NOT NULL COLLATE 'utf8mb4_general_ci',
	`PubAlvo` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view sistemalojaroupabd.viewvendas
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `viewvendas` (
	`ID_Venda` INT(11) NOT NULL,
	`NomeCliente` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`NomeRoupa` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`FormaPagamento` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Quantidade` INT(11) NOT NULL,
	`ValorUnitario` DECIMAL(10,2) NOT NULL,
	`ValorTotal` DECIMAL(10,2) NOT NULL,
	`DataVenda` DATE NOT NULL
) ENGINE=MyISAM;

-- Copiando estrutura para procedure sistemalojaroupabd.SP_VendasPorCliente
DELIMITER //
CREATE PROCEDURE `SP_VendasPorCliente`(
    IN ClienteID INT
)
BEGIN
    SELECT V.ID_Venda, V.DataVenda, R.Nome AS Roupa, V.Quantidade, V.ValorTotal
    FROM Vendas V
    INNER JOIN Roupas R ON V.ID_Roupa = R.ID_Roupa
    WHERE V.ID_Cliente = ClienteID;

    -- Adicione esta linha para exibir o resultado
    SELECT 'Consulta concluída.';
END//
DELIMITER ;

-- Copiando estrutura para view sistemalojaroupabd.viewmovimentacao
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `viewmovimentacao`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `viewmovimentacao` AS SELECT 
	MovimentacaoEstoque.ID_Movimentacao,
	Roupas.Nome AS NomeRoupa,
	TipoOperacao.Nome AS TpOp,
	MovimentacaoEstoque.Quantidade,
	MovimentacaoEstoque.DataMovimentacao
FROM MovimentacaoEstoque
INNER JOIN Roupas ON MovimentacaoEstoque.ID_Roupa = Roupas.ID_Roupa
INNER JOIN TipoOperacao ON MovimentacaoEstoque.ID_TipoOperacao = TipoOperacao.ID_TipoOperacao ;

-- Copiando estrutura para view sistemalojaroupabd.viewroupas
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `viewroupas`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `viewroupas` AS SELECT 
	Roupas.ID_Roupa,
	Roupas.Nome,
	Fornecedores.Nome AS NomeFornecedor,
	Marcas.Nome AS NomeMarca,
	CategoriaRoupas.Nome AS NomeCategoria,
	TamanhoRoupas.Nome AS TamanhoRoupa,
	PublicoAlvo.Nome AS PubAlvo
FROM Roupas
INNER JOIN Fornecedores ON Roupas.ID_Fornecedor = Fornecedores.ID_Fornecedor
INNER JOIN Marcas ON Roupas.ID_Marca = Marcas.ID_Marca
INNER JOIN CategoriaRoupas ON Roupas.ID_Categoria = CategoriaRoupas.ID_Categoria
INNER JOIN TamanhoRoupas ON Roupas.ID_Tamanho = TamanhoRoupas.ID_Tamanho
INNER JOIN PublicoAlvo ON Roupas.ID_PublicoAlvo = PublicoAlvo.ID_PublicoAlvo ;

-- Copiando estrutura para view sistemalojaroupabd.viewvendas
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `viewvendas`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `viewvendas` AS SELECT  
	 Vendas.ID_Venda,
    Clientes.Nome AS NomeCliente,
    Roupas.Nome AS NomeRoupa,
    FormasPagamento.Descricao AS FormaPagamento,
    Vendas.Quantidade,
    Vendas.ValorUnitario,
    Vendas.ValorTotal,
    Vendas.DataVenda 
FROM Vendas 
INNER JOIN Clientes ON Vendas.ID_Cliente = Clientes.ID_Cliente
INNER JOIN Roupas ON Vendas.ID_Roupa = Roupas.ID_Roupa
INNER JOIN FormasPagamento ON Vendas.ID_FormaPagamento = FormasPagamento.ID_FormaPagamento ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
