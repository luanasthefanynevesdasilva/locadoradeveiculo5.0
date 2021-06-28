-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 28-Jun-2021 às 14:39
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id17145766_dados1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `idaluguel` int(11) NOT NULL,
  `datalocacao` date NOT NULL,
  `idfuncionario` int(11) NOT NULL,
  `combustivelatual` text COLLATE utf8mb4_bin NOT NULL,
  `desconto` text COLLATE utf8mb4_bin NOT NULL,
  `troco` text COLLATE utf8mb4_bin NOT NULL,
  `total` text COLLATE utf8mb4_bin NOT NULL,
  `pago` text COLLATE utf8mb4_bin NOT NULL,
  `diaria` text COLLATE utf8mb4_bin NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `aluguel`
--

INSERT INTO `aluguel` (`idaluguel`, `datalocacao`, `idfuncionario`, `combustivelatual`, `desconto`, `troco`, `total`, `pago`, `diaria`, `idusuario`) VALUES
(3, '2021-05-30', 4, '200', '0', '0', '200', '200', '200', 18),
(4, '2021-05-02', 4, '200', '0', '0', '200', '200', '200', 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `devolucao`
--

CREATE TABLE `devolucao` (
  `avaria` text COLLATE utf8mb4_bin NOT NULL,
  `idaluguel` int(11) NOT NULL,
  `datadevolucao` date NOT NULL,
  `combustiveldevolucao` text COLLATE utf8mb4_bin NOT NULL,
  `extra` text COLLATE utf8mb4_bin NOT NULL,
  `iddevolucao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `devolucao`
--

INSERT INTO `devolucao` (`avaria`, `idaluguel`, `datadevolucao`, `combustiveldevolucao`, `extra`, `iddevolucao`) VALUES
('sem dano', 2, '2021-06-14', '200', '0', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `cpf` text COLLATE utf8mb4_bin NOT NULL,
  `nome` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `cpf`, `nome`) VALUES
(4, '123', 'luana'),
(5, '1234', 'joao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemaluguel`
--

CREATE TABLE `itemaluguel` (
  `itemaluguel` int(11) NOT NULL,
  `idaluguel` int(11) NOT NULL,
  `idveiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `itemaluguel`
--

INSERT INTO `itemaluguel` (`itemaluguel`, `idaluguel`, `idveiculo`) VALUES
(4, 4, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguro`
--

CREATE TABLE `seguro` (
  `idseguro` int(11) NOT NULL,
  `valor` text COLLATE utf8mb4_bin NOT NULL,
  `datainicio` date NOT NULL,
  `datafinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `seguro`
--

INSERT INTO `seguro` (`idseguro`, `valor`, `datainicio`, `datafinal`) VALUES
(2, '300', '2021-06-06', '2021-06-06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` text COLLATE utf8mb4_bin NOT NULL,
  `endereco` text COLLATE utf8mb4_bin NOT NULL,
  `email` text COLLATE utf8mb4_bin NOT NULL,
  `telefone` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `endereco`, `email`, `telefone`) VALUES
(18, 'joao', 'lsthefany036@gmail.com', 'rua dos viajantes', '77991700471'),
(19, 'sthefanu', 'luisarebeca@gmail.com', 'rua dos viajantes', '77991700471'),
(20, 'sthefanu', 'luisarebeca@gmail.com', 'rua dos viajantes', '77991700471'),
(21, 'ford', 'lsthefany036@gmail.com', 'rua dos viajantes', '77991700471');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `idveiculo` int(11) NOT NULL,
  `ano` text COLLATE utf8mb4_bin NOT NULL,
  `cor` text COLLATE utf8mb4_bin NOT NULL,
  `modelo` text COLLATE utf8mb4_bin NOT NULL,
  `tipoveiculo` text COLLATE utf8mb4_bin NOT NULL,
  `placa` text COLLATE utf8mb4_bin NOT NULL,
  `idseguro` int(11) NOT NULL,
  `chassin` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`idveiculo`, `ano`, `cor`, `modelo`, `tipoveiculo`, `placa`, `idseguro`, `chassin`) VALUES
(2, '2010', 'rosa', 'ford', 'carro', '3123', 2, 'dasdas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`idaluguel`),
  ADD KEY `idfuncionario` (`idfuncionario`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices para tabela `devolucao`
--
ALTER TABLE `devolucao`
  ADD PRIMARY KEY (`iddevolucao`),
  ADD KEY `idaluguel` (`idaluguel`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Índices para tabela `itemaluguel`
--
ALTER TABLE `itemaluguel`
  ADD PRIMARY KEY (`itemaluguel`),
  ADD KEY `idveiculo` (`idveiculo`),
  ADD KEY `idaluguel` (`idaluguel`);

--
-- Índices para tabela `seguro`
--
ALTER TABLE `seguro`
  ADD PRIMARY KEY (`idseguro`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`idveiculo`),
  ADD KEY `idseguro` (`idseguro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `idaluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `devolucao`
--
ALTER TABLE `devolucao`
  MODIFY `iddevolucao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `itemaluguel`
--
ALTER TABLE `itemaluguel`
  MODIFY `itemaluguel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `seguro`
--
ALTER TABLE `seguro`
  MODIFY `idseguro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `idveiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD CONSTRAINT `aluguel_ibfk_1` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `aluguel_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
