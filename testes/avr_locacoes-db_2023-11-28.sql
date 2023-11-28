-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Nov-2023 às 18:56
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `avr_locacoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_cliente`
--

CREATE TABLE `cadastro_cliente` (
  `CPF_LOGIN` int NOT NULL,
  `NOME_LOGIN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TELEFONE_CLIENTE` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CNH_CLIENTE` int DEFAULT NULL,
  `EMAIL_LOGIN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ENDERECO_LOGIN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SENHA_LOGIN` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro_cliente`
--

INSERT INTO `cadastro_cliente` (`CPF_LOGIN`, `NOME_LOGIN`, `TELEFONE_CLIENTE`, `CNH_CLIENTE`, `EMAIL_LOGIN`, `ENDERECO_LOGIN`, `SENHA_LOGIN`) VALUES
(112233, 'Joao Pedro', '14998370119', 123456, 'rainho@gmail.com', 'AV PRES ROOSEVELT, 139', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(123456, 'Vinicius Rainho', '14998370119', 123456, 'rainho@gmail.com', 'AV PRES ROOSEVELT, 139', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(456789, 'Alex', '789456', 456123, 'rainho@gmail.com', 'AV PRES ROOSEVELT, 139', 'e519d416c8b2623331c17695e7c6ab641e96cd0ce3f636b097b1be68fd793e16'),
(555555, 'raphael__mello', '123456789', 123456, 'raphael@teste.com', 'teste', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `PLACA` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CATEGORIA` int DEFAULT NULL,
  `KM` int DEFAULT NULL,
  `COR` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MARCA_CARRO` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NOME_CARRO` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ANO_CARRO` int DEFAULT NULL,
  `COMBUSTIVEL` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`PLACA`, `CATEGORIA`, `KM`, `COR`, `MARCA_CARRO`, `NOME_CARRO`, `ANO_CARRO`, `COMBUSTIVEL`) VALUES
('ABC-1234', 1, 12040, 'Branco', 'Volkswagen', 'Polo', 2023, 'Gasolina'),
('BCD-2345', 3, 87040, 'Branco', 'Ford', 'Explorer', 2023, 'Diesel-S10'),
('DEF-9012', 1, 40700, 'Branco', 'Ford', 'Fiesta', 2023, 'Etanol'),
('EFG-5678', 5, 57000, 'Branco', 'Audi', 'A6', 2023, 'Gasolina'),
('GHI-3456', 1, 65000, 'Prata', 'Toyota', 'Yaris', 2023, 'Etanol'),
('HIJ-9012', 5, 90000, 'Branco', 'BMW', '5 Series', 2023, 'Etanol'),
('IJK-4567', 5, 97400, 'Prata', 'Lexus', 'LS', 2023, 'Gasolina'),
('JKL-7890', 2, 54080, 'Branco', 'Honda', 'Civic', 2023, 'Etanol'),
('KLM-7890', 5, 10990, 'Preto', 'Mercedes-Benz', 'E-Class', 2023, 'Etanol'),
('MNO-2345', 2, 34580, 'Prata', 'Mazda', '6', 2023, 'Etanol'),
('NOP-3456', 4, 12000, 'Verde Musgo', 'Kia', 'Sedona', 2023, 'Etanol'),
('PQR-6789', 2, 19000, 'Prata', 'Chevrolet', 'Malibu', 2023, 'Gasolina'),
('QRS-8901', 4, 14000, 'Branco', 'Chrysler', 'Pacifica', 2023, 'Etanol'),
('RST-4567', 4, 12500, 'Branco', 'Toyota', 'Sienna', 2023, 'Etanol'),
('STU-0123', 2, 8000, 'Prata', 'Nissan', 'Altima', 2023, 'Etanol'),
('UVW-0123', 4, 74000, 'Prata', 'Honda', 'Odyssey', 2023, 'Etanol'),
('VWX-4567', 3, 12400, 'Azul Perolado', 'Toyota', 'RAV4', 2023, 'Diesel-S10'),
('WXY-6789', 3, 78550, 'Branco', 'Chevrolet', 'Tahoe', 2023, 'Diesel-S10'),
('XYZ-5678', 1, 24030, 'Prata', 'Hyundai', 'i20', 2023, 'Etanol'),
('YZA-8901', 3, 99000, 'Azul', 'Honda', 'CR-V', 2023, 'Diesel-S10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE `cartao` (
  `NUM_CARTAO` int NOT NULL,
  `BANDEIRA` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NOME_IMPRESSO_CARTAO` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `VALIDADE_CARTAO` date DEFAULT NULL,
  `COD_SEGURANCA` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cartao`
--

INSERT INTO `cartao` (`NUM_CARTAO`, `BANDEIRA`, `NOME_IMPRESSO_CARTAO`, `VALIDADE_CARTAO`, `COD_SEGURANCA`) VALUES
(123456, 'MasterCard', 'Vinicius Rainho', '0000-00-00', 123),
(147852, 'MasterCard', 'Vinicius Rainho', '2025-10-22', 123),
(654321, 'MasterCard', 'Vinicius Rainho', NULL, 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `ID_CATEGORIA` int NOT NULL,
  `NOME_CATEGORIA` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `VALOR_CATEGORIA` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`ID_CATEGORIA`, `NOME_CATEGORIA`, `VALOR_CATEGORIA`) VALUES
(1, 'Economico', 85),
(2, 'Intermediario', 103),
(3, 'SUV', 135),
(4, 'Minivan', 158),
(5, 'Executivo', 230);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opcionais`
--

CREATE TABLE `opcionais` (
  `ID_OPCIONAL` int NOT NULL,
  `NOME_OPCIONAL` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `VALOR_DIARIA_OPCIONAL` int DEFAULT NULL,
  `NOME_MOT_ADCIONAL` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CNH_MOT_ADCIONAL` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `ID_RESERVA` int NOT NULL,
  `CATEGORIA_VEICULO` varchar(50) NOT NULL,
  `DATA_RETIRADA` datetime NOT NULL,
  `DATA_DEVOLUCAO` datetime NOT NULL,
  `CNH_CLIENTE` varchar(20) NOT NULL,
  `MOTORISTA_ADICIONAL` tinyint(1) DEFAULT '0',
  `CADEIRA_BEBE` tinyint(1) DEFAULT '0',
  `ASSENTO_ELEVACAO` tinyint(1) DEFAULT '0',
  `GPS` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_cliente`
--
ALTER TABLE `cadastro_cliente`
  ADD PRIMARY KEY (`CPF_LOGIN`);

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`PLACA`),
  ADD KEY `categoria` (`CATEGORIA`);

--
-- Índices para tabela `cartao`
--
ALTER TABLE `cartao`
  ADD PRIMARY KEY (`NUM_CARTAO`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Índices para tabela `opcionais`
--
ALTER TABLE `opcionais`
  ADD PRIMARY KEY (`ID_OPCIONAL`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`ID_RESERVA`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_CATEGORIA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `opcionais`
--
ALTER TABLE `opcionais`
  MODIFY `ID_OPCIONAL` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `ID_RESERVA` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carros`
--
ALTER TABLE `carros`
  ADD CONSTRAINT `carros_ibfk_1` FOREIGN KEY (`CATEGORIA`) REFERENCES `categorias` (`ID_CATEGORIA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
