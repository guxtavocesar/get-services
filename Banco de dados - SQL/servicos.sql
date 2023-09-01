-- Nome da base de Dados: servicos

CREATE DATABASE servicos;

CREATE TABLE cliente_servicos 
(
    tipo_usuario VARCHAR(11), 
    senha VARCHAR(30), 
    nome VARCHAR(100), 
    email VARCHAR(50), 
    celular INT(15), 
    cpfcnpj VARCHAR(20), 
    nasc DATE, 
    cidade VARCHAR(100), 
    uf CHAR(2), 
    ddd CHAR(2)
);

CREATE TABLE prestador_servicos 
(
    tipo_usuario VARCHAR(11), 
    senha VARCHAR(30), 
    nome VARCHAR(100), 
    nasc DATE, 
    celular INT(15), 
    email VARCHAR(50), 
    rg VARCHAR(15), 
    cpf VARCHAR(20), 
    profissao VARCHAR(50), 
    carreira VARCHAR(500), 
    cidade VARCHAR(100), 
    uf CHAR(2), 
    ddd CHAR(2)
);

