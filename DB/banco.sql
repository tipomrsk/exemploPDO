drop database seubanco;

create database seubanco;

use seubanco;

create table usuario(
    id_usuario int not null auto_increment,
    nome_usuario varchar(100) not null,
    senha_usuario varchar(100) not null,
    primary key(id_usuario)
) ENGINE=InnoDB;

insert into usuario values (1, "osvaldo", "123");