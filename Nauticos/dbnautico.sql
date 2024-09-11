drop database dbNautico;

create database dbNautico;

use dbNautico;

create table tbCadastro(
    nome varchar(100) not null,
    email varchar(50) unique not null,
    senha varchar(30) not null,
    repetirSenha varchar(30) not null,
    telefone int(11) not null
);