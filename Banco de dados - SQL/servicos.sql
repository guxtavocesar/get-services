-- Nome da base de Dados: servicos

CREATE DATABASE servicos;

create table cliente_servicos 
(
    tipo_usuario varchar(11), 
    senha varchar(30), 
    nome varchar(100), 
    email varchar(50), 
    celular int(9), 
    cpfcnpj varchar(14), 
    nasc date, 
    cidade varchar(50), 
    uf char(2), 
    ddd int(2)
);

create table prestador_servicos 
(
    tipo_usuario varchar(11), 
    senha varchar(30), 
    nome varchar(100), 
    nasc date, 
    celular int(9), 
    email varchar(50), 
    rg varchar(9), 
    cpf varchar(11), 
    profissao varchar(50), 
    carreira varchar(500), 
    cidade varchar(100), 
    uf char(2), 
    ddd int(2)
);

