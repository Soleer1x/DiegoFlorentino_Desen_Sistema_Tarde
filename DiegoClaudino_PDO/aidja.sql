create database Empresa;
use Empresa;

create table clientes (
id_cliente int not null auto_increment,
nome varchar(50) not null,
endereco varchar(80) not null,
telefone varchar(20) not null,
email varchar(50) not null,
primary key (id_cliente)
);

INSERT INTO cliente (nome, endereco, telefone, email)
VALUES 
  ('João Silva', 'Rua das Flores, 123', '11999998888', 'joao.silva@email.com'),
  ('Maria Oliveira', 'Av. Brasil, 456', '21988887777', 'maria.oliveira@email.com'),
  ('Carlos Souza', 'Rua do Comércio, 789', '31977776666', 'carlos.souza@email.com'),
  ('Ana Lima', 'Praça Central, 321', '41966665555', 'ana.lima@email.com'),
  ('Pedro Rocha', 'Alameda Santos, 654', '51955554444', 'pedro.rocha@email.com');

create table usuario (
nome varchar(50) default null,
usuario varchar(10) default null,
senha varchar(32) default null,
nivel int default null
);

INSERT INTO usuario (nome, usuario, senha, nivel)
VALUES
  ('Administrador Geral', 'admin', MD5('admin123'), 1),
  ('João Pereira', 'jpereira', MD5('senha123'), 2),
  ('Maria Santos', 'msantos', MD5('senha456'), 2),
  ('Lucas Lima', 'lucasl', MD5('123456'), 3),
  ('Fernanda Costa', 'fcosta', MD5('minhasenha'), 3);
