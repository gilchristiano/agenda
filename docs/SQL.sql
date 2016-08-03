-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Ago-2016 às 02:57
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capacitacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `capacitacao`
--

CREATE TABLE `capacitacao` (
  `idcapacitacao` int(11) NOT NULL,
  `idservidor_setor` int(11) NOT NULL,
  `instrutor` char(8) NOT NULL COMMENT 'INTERNO / EXTERNO',
  `local` char(60) NOT NULL,
  `mes` char(10) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `CH` char(3) NOT NULL COMMENT 'Carga horária',
  `area` varchar(60) NOT NULL,
  `finalidade` varchar(45) NOT NULL,
  `forma` varchar(60) NOT NULL,
  `modalidade` varchar(16) NOT NULL,
  `abrangencia` varchar(22) NOT NULL,
  `valor_inscricao` float NOT NULL,
  `valor_diaria` float DEFAULT NULL,
  `valor_transporte` float DEFAULT NULL,
  `custo` float DEFAULT NULL,
  `processo_numero` varchar(26) DEFAULT NULL,
  `certificado` tinyint(1) NOT NULL COMMENT 'Boolean para apresentou ou não o certificado',
  `estrategico` tinyint(1) NOT NULL,
  `observacoes` varchar(160) DEFAULT NULL,
  `instituicao` varchar(45) NOT NULL,
  `sigla` char(16) NOT NULL,
  `UF` char(2) NOT NULL COMMENT 'Unidade Federal - Estado',
  `pais` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `idApresentacao` int(11) NOT NULL,
  `idServidorSetor` int(11) NOT NULL,
  `sigla` char(16) DEFAULT NULL,
  `promotora` varchar(45) NOT NULL COMMENT 'Instituição promoverá o evento',
  `titulo` varchar(60) NOT NULL,
  `autor` varchar(77) NOT NULL,
  `apresentador` varchar(77) NOT NULL,
  `forma` char(22) NOT NULL COMMENT 'Forma: painel, palestra, seminário',
  `evento` char(30) NOT NULL,
  `mes` char(3) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `local` varchar(60) NOT NULL,
  `UF` char(2) NOT NULL,
  `pais` char(3) NOT NULL COMMENT 'País que sedia o evento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `idhistorico` int(11) NOT NULL,
  `idapresentacao` int(11) NOT NULL,
  `publico_alvo` varchar(45) DEFAULT NULL,
  `quantidade` decimal(10,0) DEFAULT NULL,
  `parceria` varchar(64) DEFAULT NULL,
  `custo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituto`
--

CREATE TABLE `instituto` (
  `idinstituto` int(11) NOT NULL,
  `inome` varchar(64) NOT NULL,
  `isigla` char(16) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date DEFAULT NULL,
  `observacao` varchar(164) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instituto`
--

INSERT INTO `instituto` (`idinstituto`, `inome`, `isigla`, `inicio`, `termino`, `observacao`) VALUES
(1, 'Instituto Federal de Educação, Ciência e Tecnologia Baiano', 'IFBaiano', '2008-12-29', '0000-00-00', 'Lei disponível em http://www.planalto.gov.br/ccivil_03/_ato2007-2010/2008/lei/l11892.htm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servidor`
--

CREATE TABLE `servidor` (
  `idServidor` int(11) NOT NULL,
  `snome` varchar(32) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `siape` decimal(10,0) NOT NULL,
  `lotacao` char(12) NOT NULL,
  `desc_lotacao` char(48) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `datanascimento` date NOT NULL,
  `entrada` date NOT NULL,
  `saida` date NOT NULL,
  `observacoes` varchar(164) DEFAULT NULL,
  `chave` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servidor`
--

INSERT INTO `servidor` (`idServidor`, `snome`, `sobrenome`, `siape`, `lotacao`, `desc_lotacao`, `cargo`, `datanascimento`, `entrada`, `saida`, `observacoes`, `chave`) VALUES
(1, 'Gil Christiano', 'Guedes dos Santos', '1754259', 'TAE', 'Técnico Administrativo (Poder Executivo)', 'Analista de Tecnologia', '1979-04-26', '2010-01-07', '0000-00-00', 'Sem observações', 0),
(2, 'Tomas', 'de Vasconcelos Campos', '123456', 'TAE', 'Técnico Administrativo (Poder Executivo)', 'Técnico de Tecnologia da Informação', '1990-10-10', '2013-01-01', '0000-00-00', 'Observações', 0),
(3, 'Nelson', 'Vieira da Silva Filho', '765432', 'EBTT', 'Docente (Poder Executivo)', 'Docente Ensino Básico, Técnico e Tecnológico', '1975-02-02', '1996-03-01', '0000-00-00', 'Nada consta', 0),
(4, 'Amanda', 'Zilca', '987654', 'TAE', 'Técnico Administrativo (Poder Executivo)', 'Analista de Tecnologia da Informação', '1992-03-22', '2015-10-20', '0000-00-00', 'Não constam', 0),
(5, 'Cláudia', 'de Lima Bocchese', '852471', 'EBTT', 'Docente (Poder Executivo)', 'Docente Ensino Básico, Técnico e Tecnológico', '1978-04-22', '2006-05-15', '0000-00-00', 'Não constam', 0),
(6, 'Ana', 'Clara', '123456789', 'NLIC', 'Núcleo de Licitação', 'Gestora de Contratos', '1990-02-05', '2014-02-02', '0001-01-01', 'Teste', 0),
(7, 'Maria', 'Carmen', '65234879', 'TAE', 'Técnico Administrativo (Poder Executivo)', 'Docente Ensino Básico, Técnico e Tecnológico', '1980-03-21', '2014-03-12', '0001-01-01', 'Nenhuma', 0),
(8, 'Valmir', 'Silva Santos Andrade', '1982223', 'TAE', 'Técnico Administrativo (Poder Executivo)', 'Técnico em áudio Visual', '1975-11-20', '2012-11-22', '0001-01-01', 'Não constam', 0),
(9, 'Aijalon', 'Brito', '8523574', 'TAE', 'Técnico Administrativo (Poder Executivo)', 'Técnico de Tecnologia da Informação', '1988-06-20', '2013-10-02', '0001-01-01', 'Não constam', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servidor_setor`
--

CREATE TABLE `servidor_setor` (
  `idservidor_setor` int(11) NOT NULL,
  `idservidor` int(11) NOT NULL,
  `idsetor` int(11) NOT NULL,
  `entrada` date NOT NULL,
  `saida` date DEFAULT NULL,
  `funcao` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servidor_setor`
--

INSERT INTO `servidor_setor` (`idservidor_setor`, `idservidor`, `idsetor`, `entrada`, `saida`, `funcao`) VALUES
(1, 1, 3, '2013-01-01', '0000-00-00', 'Não possui função'),
(2, 3, 1, '2012-01-01', '0000-00-00', 'Diretor Geral'),
(3, 2, 3, '2013-06-01', '0000-00-00', 'Chefe NGTI'),
(4, 9, 3, '0000-00-00', '0000-00-00', 'Chefe substituto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `idSetor` int(11) NOT NULL COMMENT 'Recebe a sigla do setor defindida  anteriormente',
  `unidade` int(11) NOT NULL,
  `stnome` varchar(45) NOT NULL,
  `stsigla` char(12) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date DEFAULT NULL,
  `hierarquia` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`idSetor`, `unidade`, `stnome`, `stsigla`, `inicio`, `termino`, `hierarquia`) VALUES
(1, 2, 'Direção Geral', 'DG', '2009-01-01', '0000-00-00', '0'),
(3, 2, 'Núcleo de Gestão da Tecnologia da Informação', 'NGTI', '2013-01-01', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE `unidade` (
  `idunidade` int(11) NOT NULL,
  `instituto` int(11) NOT NULL COMMENT 'Chave estrangeira fixa',
  `unome` varchar(45) NOT NULL,
  `CNPJ` char(22) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `CEP` char(16) NOT NULL,
  `UF` char(2) NOT NULL,
  `unidade` varchar(45) NOT NULL,
  `criacao` date NOT NULL,
  `termino` date NOT NULL,
  `observacao` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`idunidade`, `instituto`, `unome`, `CNPJ`, `endereco`, `bairro`, `cidade`, `CEP`, `UF`, `unidade`, `criacao`, `termino`, `observacao`) VALUES
(1, 1, 'IFBaiano', '564321', 'Rua do Rouxinol - Imbuí', 'Imbuí', 'Salvador', '41720-052', 'BA', 'Reitoria', '2008-12-29', '0000-00-00', ''),
(2, 1, 'IFBaiano', '', 'Km 2.5 - BR 420. Rodvia Santa Inês x Ubaíra', 'Zona Rural', 'Santa Inês', '45.320-000', 'BA', 'Campus Santa Inês', '2008-12-29', '0000-00-00', 'Observações');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capacitacao`
--
ALTER TABLE `capacitacao`
  ADD PRIMARY KEY (`idcapacitacao`),
  ADD KEY `idservidor_setor_idx` (`idservidor_setor`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idApresentacao`),
  ADD KEY `idServidorSetor_idx` (`idServidorSetor`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`idhistorico`),
  ADD KEY `idapresentacao_idx` (`idapresentacao`);

--
-- Indexes for table `instituto`
--
ALTER TABLE `instituto`
  ADD PRIMARY KEY (`idinstituto`);

--
-- Indexes for table `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`idServidor`),
  ADD UNIQUE KEY `siape` (`siape`);

--
-- Indexes for table `servidor_setor`
--
ALTER TABLE `servidor_setor`
  ADD PRIMARY KEY (`idservidor_setor`),
  ADD KEY `idservidor_idx` (`idservidor`),
  ADD KEY `idsetor_idx` (`idsetor`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`idSetor`),
  ADD KEY `unidade_idx` (`unidade`);

--
-- Indexes for table `unidade`
--
ALTER TABLE `unidade`
  ADD PRIMARY KEY (`idunidade`),
  ADD KEY `instituto_idx` (`instituto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacitacao`
--
ALTER TABLE `capacitacao`
  MODIFY `idcapacitacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `idApresentacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `idhistorico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instituto`
--
ALTER TABLE `instituto`
  MODIFY `idinstituto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `servidor`
--
ALTER TABLE `servidor`
  MODIFY `idServidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `servidor_setor`
--
ALTER TABLE `servidor_setor`
  MODIFY `idservidor_setor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `setor`
--
ALTER TABLE `setor`
  MODIFY `idSetor` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Recebe a sigla do setor defindida  anteriormente', AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `capacitacao`
--
ALTER TABLE `capacitacao`
  ADD CONSTRAINT `idservidor_setor` FOREIGN KEY (`idservidor_setor`) REFERENCES `servidor_setor` (`idservidor_setor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `idServidorSetor` FOREIGN KEY (`idServidorSetor`) REFERENCES `servidor_setor` (`idservidor_setor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `idapresentacao` FOREIGN KEY (`idapresentacao`) REFERENCES `evento` (`idApresentacao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servidor_setor`
--
ALTER TABLE `servidor_setor`
  ADD CONSTRAINT `idservidor` FOREIGN KEY (`idservidor`) REFERENCES `servidor` (`idServidor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idsetor` FOREIGN KEY (`idsetor`) REFERENCES `setor` (`idSetor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `setor`
--
ALTER TABLE `setor`
  ADD CONSTRAINT `unidade` FOREIGN KEY (`unidade`) REFERENCES `unidade` (`idunidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `unidade`
--
ALTER TABLE `unidade`
  ADD CONSTRAINT `instituto` FOREIGN KEY (`instituto`) REFERENCES `instituto` (`idinstituto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
