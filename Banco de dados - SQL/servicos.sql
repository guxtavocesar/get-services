-- Nome da base de Dados: servicos

CREATE DATABASE servicos;

CREATE TABLE cliente_servicos 
(
    id INTEGER auto_increment PRIMARY KEY,
    tipo_usuario VARCHAR(11), 
    senha VARCHAR(60), 
    nome VARCHAR(100), 
    email VARCHAR(50) UNIQUE, 
    celular INT(15), 
    cpfcnpj VARCHAR(14), 
    nasc DATE, 
    cidade VARCHAR(100), 
    uf CHAR(2), 
    ddd CHAR(2)
);

CREATE TABLE prestador_servicos 
(
    id INTEGER auto_increment PRIMARY KEY,
    tipo_usuario VARCHAR(11), 
    senha VARCHAR(60), 
    nome VARCHAR(100), 
    nasc DATE, 
    celular INT(15), 
    email VARCHAR(50) UNIQUE, 
    rg VARCHAR(9), 
    cpf VARCHAR(11), 
    profissao VARCHAR(50), 
    carreira VARCHAR(500), 
    cidade VARCHAR(100), 
    uf CHAR(2), 
    ddd CHAR(2)
);

-- Inserção de dados na tabela prestacao_servicos para teste rápido

INSERT INTO prestador_servicos (
    tipo_usuario, 
    senha, 
    nome, 
    nasc, 
    celular, 
    email, 
    rg, 
    cpf, 
    profissao, 
    carreira, 
    cidade, 
    uf, 
    ddd) 

VALUES (
    'prestador',
    123456,
    'João Jorge Pinheiro',
    2000-02-03,
    997869324,
    'joaojorge@gmail.com',
    583214597,
    54154256859,
    'Arquiteto',
    'Arquiteto formado na Fundação Educacional do Município de Assis',
    'Assis',
    'SP',
    18
);

INSERT INTO prestador_servicos (
    tipo_usuario, 
    senha, 
    nome, 
    nasc, 
    celular, 
    email, 
    rg, 
    cpf, 
    profissao, 
    carreira, 
    cidade, 
    uf, 
    ddd) 

VALUES (
    'prestador',
    123456,
    'Edson Correa dos Santos',
    2000-02-03,
    996584523,
    'edson@gmail.com',
    421568951,
    50154741236,
    'Designer',
    'Designer freelancer aberto para projetos',
    'São Paulo',
    'SP',
    11
);

INSERT INTO prestador_servicos (
    tipo_usuario, 
    senha, 
    nome, 
    nasc, 
    celular, 
    email, 
    rg, 
    cpf, 
    profissao, 
    carreira, 
    cidade, 
    uf, 
    ddd) 

VALUES (
    'prestador',
    123456,
    'Carlos Ribeiro',
    2000-02-03,
    998745698,
    'carlos@gmail.com',
    487569632,
    49969871422,
    'Contador',
    'Contador com experiência em mais de 10 empresas de médio porte',
    'Assis',
    'SP',
    18
);

INSERT INTO prestador_servicos (
    tipo_usuario, 
    senha, 
    nome, 
    nasc, 
    celular, 
    email, 
    rg, 
    cpf, 
    profissao, 
    carreira, 
    cidade, 
    uf, 
    ddd) 

VALUES (
    'prestador',
    123456,
    'Steve Rogers',
    1939-07-04,
    997265472,
    'steve@gmail.com',
    603127939,
    50155054856,
    'Soldador',
    'Soldador de caminhões desde antes dos anos 2000',
    'Assis',
    'SP',
    18
);


