//Criação do banco
create database componizer;

//Tabelas
create table users(
  id int auto_increment not null,
  nome varchar(50) not null,
  username varchar(50) not null,
  password varchar(50) not null,
  email varchar(50) not null,
  telefone varchar(50) not null,
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
subcategoria_id int,
descricao varchar(400) not null,
PRIMARY KEY (id)
);

/*create table planos(
id int auto_increment,
assunto_aula varchar(50) not null,
data_aula date not null,
hora_aula time not null,
descricao_aula varchar(500) not null,
status varchar(20) not null,
PRIMARY KEY (id)
);*/

alter table `subcategorias` add constraint `fk_categoria` foreign key (`categoria_id`) references `categorias`(`id`);
alter table `componentes` add constraint `fk1_categoria` foreign key (`categoria_id`) references `categorias`(`id`);
alter table `componentes` add constraint `fk2_categoria` foreign key (`subcategoria_id`) references `subcategorias`(`id`);