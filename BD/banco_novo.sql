-- Criação do banco
-- create database componizer;

-- Tabelas
create table users(
  id int auto_increment not null,
  nome varchar(255) not null,
  matricula varchar(20) not null,
  username varchar(255) not null,
  password varchar(255) not null,
  email varchar(255) not null,
  telefone varchar(255),
  role int not null,
  PRIMARY KEY (id)
);

create table categorias(
  id int auto_increment not null,
  nome varchar(255) not null,
  descricao varchar(500),
  PRIMARY KEY (id)
);


create table subcategorias(
  id int auto_increment not null,
  categoria_id int not null,
  nome varchar(255) not null,
  descricao varchar(500),
  PRIMARY KEY (id)
);

create table componentes(
  id int auto_increment not null,
  nome varchar(50) not null,
  categoria_id int not null,
  subcategoria_id int not null,
  descricao varchar(500) not null,
  linha int not null,
  coluna int not null,
  quantidade int not null,
PRIMARY KEY (id)
);

create table laboratorios(
id int auto_increment not null,
nome varchar(255) not null,
sala int,
PRIMARY KEY (id)
);

create table emprestimos(
id int auto_increment,
horario int not null,
turno varchar(255) not null,
data_aula date not null,
user_id int not null,
laboratorio_id int not null,
observacoes varchar(500),
estado int not null, -- +Adiciona
notificar int not null, -- +Adiciona
PRIMARY KEY (id)
);

create table notifications(
id int auto_increment,
emprestimo_id int not null,
componente_id int not null,
quantidade int not null,
PRIMARY KEY (id)
);

alter table `subcategorias` add constraint `fk_s_categoria` foreign key (`categoria_id`) references `categorias`(`id`);

alter table `componentes` add constraint `fk_c_categoria` foreign key (`categoria_id`) references `categorias`(`id`);

alter table `componentes` add constraint `fk_c_subcategoria` foreign key (`subcategoria_id`) references `subcategorias`(`id`);

alter table `emprestimos` add constraint `fk_e_user` foreign key (`user_id`) references `users`(`id`);

alter table `emprestimos` add constraint `fk_e_laboratorio` foreign key (`laboratorio_id`) references `laboratorios` (`id`);

alter table `notifications` add constraint `fk_n_emprestimo` foreign key (`emprestimo_id`) references `emprestimos` (`id`);

alter table `notifications` add constraint `fk_n_componente` foreign key (`componente_id`) references `componentes` (`id`);