-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Fev-2016 às 22:54
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `componizer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
(1, 'Resistor', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `componentes`
--

CREATE TABLE IF NOT EXISTS `componentes` (
`id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `linha` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `datasheet` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `componentes`
--

INSERT INTO `componentes` (`id`, `nome`, `categoria_id`, `subcategoria_id`, `descricao`, `linha`, `coluna`, `quantidade`, `datasheet`) VALUES
(1, 'Termistor2W', 1, 1, '', 8, 7, 487, ''),
(2, 'termistor 60', 1, 1, '', 9, 7, 800, NULL),
(3, 'Resistor2K2', 1, 1, '', 9, 8, 887, NULL),
(4, 'Ci 7400', 1, 1, '', 9, 8, 8, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE IF NOT EXISTS `emprestimos` (
`id` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `data_aula` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `laboratorio_id` int(11) NOT NULL,
  `observacoes` varchar(500) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `notificar` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `horario`, `turno`, `data_aula`, `user_id`, `laboratorio_id`, `observacoes`, `estado`, `notificar`, `data_emprestimo`) VALUES
(1, 3, 'Vespertino', '2016-02-15', 1, 1, '', 0, 3, '0000-00-00'),
(2, 3, 'Vespertino', '2016-02-15', 1, 1, '', 0, 0, '0000-00-00'),
(3, 5, 'Matutino', '2016-10-26', 1, 3, '', 0, 0, '2016-02-15'),
(4, 4, 'Matutino', '2016-02-20', 1, 1, '', 0, 0, '2016-02-15'),
(5, 1, 'Matutino', '2016-02-07', 1, 3, '', 0, 0, '2016-02-15'),
(6, 3, 'Matutino', '2016-02-15', 4, 1, '', 0, 0, '2016-02-15'),
(7, 1, 'Matutino', '2016-02-08', 1, 1, '', 0, 0, '2016-02-15'),
(8, 6, 'Matutino', '2016-02-15', 1, 3, 'A tarde', 0, 0, '2016-02-15'),
(9, 1, 'Matutino', '2016-02-15', 11, 1, '', 0, 0, '2016-02-15'),
(10, 5, 'Matutino', '2016-02-15', 7, 1, '', 0, 0, '2016-02-15'),
(11, 5, 'Matutino', '2016-02-15', 1, 1, '', 0, 0, '2016-02-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `laboratorios`
--

CREATE TABLE IF NOT EXISTS `laboratorios` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sala` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `laboratorios`
--

INSERT INTO `laboratorios` (`id`, `nome`, `sala`) VALUES
(1, 'LaboratÃ³rio de EletrÃ´nica de PotÃªncia', 56),
(2, 'LaboratÃ³rio de EletrÃ´nica AnalÃ³gica e Digital', 59),
(3, 'LaboratÃ³rio de ManutenÃ§Ã£o de Computadores', 48);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`id` int(11) NOT NULL,
  `emprestimo_id` int(11) NOT NULL,
  `componente_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `notifications`
--

INSERT INTO `notifications` (`id`, `emprestimo_id`, `componente_id`, `quantidade`) VALUES
(1, 2, 2, 80),
(2, 2, 1, 8),
(3, 2, 3, 80),
(4, 2, 3, 8),
(5, 3, 1, 5),
(6, 8, 3, 8),
(7, 8, 1, 8),
(8, 10, 3, 7),
(9, 10, 1, 7),
(10, 11, 1, 6),
(11, 11, 2, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
`id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `categoria_id`, `nome`, `descricao`) VALUES
(1, 1, 'Termistor', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `matricula`, `username`, `password`, `email`, `telefone`, `role`) VALUES
(1, 'Arthur Pinheiro', '20121044010042', 'arthurpdb', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'arthur.barros@academico.ifrn.edu.br', '987765676', 0),
(2, 'Pedro Ivo', '198765167', 'pedroivo', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'pedro.ivo@ifrn.edu.br', '987657654', 1),
(3, 'Liviane Melo', '897116765', 'liviane', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'liviane.melo@ifrn.edu.br', '987654167', 2),
(4, 'AÃ©cio Dantas', '189765655', 'admin1', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'aecio.dantas@ifrn.edu.br', '987655676', 3),
(5, 'Alana Ribeiro', '201419287166', 'alanar', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'alana.ribeiro@academico.ifrn.edu.br', '988171716', 1),
(6, 'Arthur Salgado', '20121044010042', 'arthursg', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'arthur.salgado@ifrn.edu.br', '988765676', 1),
(7, 'Diego Nascimento', '897655676', 'diegocn', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'diego.costa@ifrn.edu.br', '98877167', 1),
(8, 'SÃ©rgio', '78767876', 'sergio4', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'sergio@ifrn.edu.br', '988716787', 3),
(9, 'Ailton Torres', '198766546', 'ailtontorres', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'ailton.torres@ifrn.edu.br', '981717166', 1),
(10, 'Marcos ', '289876516', 'marcao', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'marcos@ifrn.edu.br', '982817178', 2),
(11, 'Murilo', '104598718', 'murilo', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'murilo@academico.ifrn.edu.br', '988171716', 2),
(12, 'Alexandre', '209182817', 'alexandreifrn', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'alexandre@ifrn.edu.br', '988177161', 2),
(13, 'Claudio JÃºnior', '20131091827878', 'claudiocs', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'claudio.junior@ifrn.edu.br', '987126271', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `componentes`
--
ALTER TABLE `componentes`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_c_categoria` (`categoria_id`), ADD KEY `fk_c_subcategoria` (`subcategoria_id`);

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_e_user` (`user_id`), ADD KEY `fk_e_laboratorio` (`laboratorio_id`);

--
-- Indexes for table `laboratorios`
--
ALTER TABLE `laboratorios`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_n_emprestimo` (`emprestimo_id`), ADD KEY `fk_n_componente` (`componente_id`);

--
-- Indexes for table `subcategorias`
--
ALTER TABLE `subcategorias`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_s_categoria` (`categoria_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `componentes`
--
ALTER TABLE `componentes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `laboratorios`
--
ALTER TABLE `laboratorios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `subcategorias`
--
ALTER TABLE `subcategorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `componentes`
--
ALTER TABLE `componentes`
ADD CONSTRAINT `fk_c_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
ADD CONSTRAINT `fk_c_subcategoria` FOREIGN KEY (`subcategoria_id`) REFERENCES `subcategorias` (`id`);

--
-- Limitadores para a tabela `emprestimos`
--
ALTER TABLE `emprestimos`
ADD CONSTRAINT `fk_e_laboratorio` FOREIGN KEY (`laboratorio_id`) REFERENCES `laboratorios` (`id`),
ADD CONSTRAINT `fk_e_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `notifications`
--
ALTER TABLE `notifications`
ADD CONSTRAINT `fk_n_componente` FOREIGN KEY (`componente_id`) REFERENCES `componentes` (`id`),
ADD CONSTRAINT `fk_n_emprestimo` FOREIGN KEY (`emprestimo_id`) REFERENCES `emprestimos` (`id`);

--
-- Limitadores para a tabela `subcategorias`
--
ALTER TABLE `subcategorias`
ADD CONSTRAINT `fk_s_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
