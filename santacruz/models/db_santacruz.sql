drop database if exists db_santacruz;

create database if not exists db_santacruz;

use db_santacruz;

create table tb_cadastro(
    id int not null auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    senha varchar(100),

    primary key (id)
);

insert into tb_cadastro(nome, email, senha) values("teste", "teste", "teste");