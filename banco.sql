create database componizer;

create table users(
  id int auto_increment,
  nome varchar(50) not null,
  usuario varchar(50) not null,
  senha varchar(50) not null,
  email varchar(50) not null,
  telefone varchar(50) not null,
  tipouser varchar(20) not null,
  PRIMARY KEY (id)
);

create table categorias(
  id int auto_increment,
  nome varchar(50) not null,
  descricao varchar(400),
  PRIMARY KEY (id)
)


create table subcategorias(
  id int auto_increment,
  categoria_id int not null,
  nome varchar(50) not null,
  descricao varchar(400),
  PRIMARY KEY (id)
);

alter table `subcategorias` add constraint `fk_categoria` foreign key (`categoria_id`) references `categorias`(`id`);
