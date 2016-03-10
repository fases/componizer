INSERT INTO `users` (`id`, `nome`, `matricula`, `username`, `password`, `email`, `telefone`, `role`) VALUES
(2, 'Pedro Ivo', '198765167', 'pedroivo', 'da28915db8f26f98ff445de44267740b4fd8c9b0', 'pedro.ivo@ifrn.edu.br', '987657654', 1),
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

INSERT INTO `laboratorios` (`id`, `nome`, `sala`) VALUES
(1, 'LaboratÃ³rio de EletrÃ´nica de PotÃªncia', 56),
(2, 'LaboratÃ³rio de EletrÃ´nica AnalÃ³gica e Digital', 59),
(3, 'LaboratÃ³rio de ManutenÃ§Ã£o de Computadores', 48);

INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
(1, 'Resistor', '');

INSERT INTO `emprestimos` (`id`, `horario`, `turno`, `data_aula`, `user_id`, `laboratorio_id`, `observacoes`, `estado`, `notificar`, `data_emprestimo`) VALUES
(6, 3, 'Matutino', '2016-02-15', 4, 1, '', 0, 1, '2016-02-15'),
(9, 1, 'Matutino', '2016-02-15', 11, 1, '', 0, 3, '2016-02-15'),
(10, 5, 'Matutino', '2016-02-15', 7, 1, '', 1, 0, '2016-02-15'),
(11, 4, 'Vespertino', '2016-02-29', 2, 1, NULL, 1, 0, '2016-02-29'),
(12, 3, 'Noturno', '2016-03-03', 3, 1, NULL, 0, 0, '2016-03-03');

INSERT INTO `pedidos` (`id`, `nome`, `descricao`) VALUES
(1, 'Led multicolo', ''),
(2, 'LED Azul', 'LED com cor azul e tensÃ£o mais baixa');

INSERT INTO `subcategorias` (`id`, `categoria_id`, `nome`, `descricao`) VALUES
(1, 1, 'Termistor', '');

INSERT INTO `componentes` (`id`, `nome`, `categoria_id`, `subcategoria_id`, `descricao`, `linha`, `coluna`, `quantidade`, `datasheet`) VALUES
(3, 'Resistor2K2', 1, 1, '', 9, 8, 872, '/src/files/datasheet/74ls00.pdf'),
(4, 'Ci 7400', 1, 1, '', 9, 8, 8, NULL);

INSERT INTO `notifications` (`id`, `emprestimo_id`, `componente_id`, `quantidade`) VALUES
(8, 10, 3, 7),
(9, 11, 3, 200);