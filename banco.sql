create database alunosDB;

use alunosDB;

create table tbAlunos(
    id int primary key auto_increment,
    nome varchar(200) not null,
    email varchar(150) not null,
    telefone varchar(15) not null
);