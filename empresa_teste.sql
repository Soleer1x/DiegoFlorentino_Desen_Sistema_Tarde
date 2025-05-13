create database empresa_teste;
use empresa_teste;

create table cliente_teste (
id_cliente int auto_increment primary key,
nome varchar(255) not null,
endereco varchar(255),
telefone varchar(20),
email varchar(255) unique
);

INSERT INTO cliente_teste (nome, endereco, telefone, email) VALUES
  ('Bruna Martins', 'Rua Nova Esperança, 101', '11911112222', 'bruna.martins@email.com'),
  ('Felipe Andrade', 'Av. dos Andradas, 202', '21922223333', 'felipe.andrade@email.com'),
  ('Lucas Almeida', 'Rua do Sol, 303', '31933334444', 'lucas.almeida@email.com'),
  ('Juliana Costa', 'Travessa da Paz, 404', '41944445555', 'juliana.costa@email.com'),
  ('Renato Meireles', 'Rua das Palmeiras, 505', '51955556666', 'renato.meireles@email.com');
