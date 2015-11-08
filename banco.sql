//Criação do banco
create database componizer;

//Tabelas
create table users(
  id int auto_increment not null,
  nome varchar(50) not null,
  username varchar(50) not null,
  password varchar(50) not null,
  email varchar(50) not null,
  telefone varchar(50),
  role varchar(30) not null,
  PRIMARY KEY (id)
);

create table categorias(
  id int auto_increment not null,
  nome varchar(50) not null,
  descricao varchar(400),
  PRIMARY KEY (id)
);


create table subcategorias(
  id int auto_increment not null,
  categoria_id int not null,
  nome varchar(50) not null,
  descricao varchar(400),
  PRIMARY KEY (id)
);

create table componentes(
id int auto_increment not null,
nome varchar(50) not null,
categoria_id int not null,
subcategoria_id int not null,
descricao varchar(400) not null,
localizacaox int not null,
localizacaoy int not null,
PRIMARY KEY (id)
);

create table laboratorios(
id int auto_increment not null,
nome varchar(100) not null,
PRIMARY KEY (id)
);

create table emprestimos(
id int auto_increment,
data date not null,
hora time not null,
nome_id int not null,
username_id int not null,
objetivo varchar(500) not null,
observacoes varchar(500) not null,
material varchar(5000) not null,
PRIMARY KEY (id)
);

alter table `subcategorias` add constraint `fk_categoria` foreign key (`categoria_id`) references `categorias`(`id`);

alter table `componentes` add constraint `fk1_categoria` foreign key (`categoria_id`) references `categorias`(`id`);

alter table `componentes` add constraint `fk2_categoria` foreign key (`subcategoria_id`) references `subcategorias`(`id`);

alter table `emprestimos` add constraint `fk3_user` foreign key (`username_id`) references `users`(`id`);

alter table `emprestimos` add constraint `fk4_laboratorio` foreign key (`nome_id`) references `laboratorios` (`id`);

