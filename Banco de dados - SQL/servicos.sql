-- Nome da base de Dados: servicos

CREATE DATABASE servicos;

create table cliente_servicos 
(
    tipo_usuario varchar(11), 
    senha varchar(30), 
    nome varchar(100), 
    email varchar(50), 
    celular int(15), 
    cpfcnpj varchar(20), 
    nasc date, 
    cidade varchar(100), 
    uf char(2), 
    ddd char(2)
);

create table prestador_servicos 
(
    tipo_usuario varchar(11), 
    senha varchar(30), 
    nome varchar(100), 
    nasc date, 
    celular int(15), 
    email varchar(50), 
    rg varchar(15), 
    cpf varchar(20), 
    profissao varchar(50), 
    carreira varchar(500), 
    cidade varchar(100), 
    uf char(2), 
    ddd char(2)
);

