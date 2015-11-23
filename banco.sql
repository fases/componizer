#Criação do banco
create database componizer;

#Tabelas
create table users(
  id int auto_increment not null,
  nome varchar(255) not null,
  username varchar(255) not null,
  password varchar(255) not null,
  email varchar(255) not null,
  telefone varchar(255),
  role varchar(255) not null,
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
user_id int not null,
laboratorio_id int not null,
objetivo varchar(500) not null,
observacoes varchar(500),
material varchar(5000) not null,
PRIMARY KEY (id)
);

alter table `subcategorias` add constraint `fk_categoria` foreign key (`categoria_id`) references `categorias`(`id`);

alter table `componentes` add constraint `fk1_categoria` foreign key (`categoria_id`) references `categorias`(`id`);

alter table `componentes` add constraint `fk2_categoria` foreign key (`subcategoria_id`) references `subcategorias`(`id`);

alter table `emprestimos` add constraint `fk3_user` foreign key (`user_id`) references `users`(`id`);

alter table `emprestimos` add constraint `fk4_laboratorio` foreign key (`laboratorio_id`) references `laboratorios` (`id`);
