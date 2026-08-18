IF NOT EXIST CREATE DATABASE menu_db
USE menu_db

CREATE TABLE cadastros
cadastroId int(20) AUTO_INCREMENT PRIMARY KEY,
cadastroNome varchar(50),
cadastroEmail varchar(50);

CREATE TABLE pratos
pratoId int(20) AUTO_INCREMENT PRIMARY KEY,
pratoNome varchar(50),
pratoValor int(20),
pratoDescrição varchar(150),
pratoCategoria varchar(50),
FOREIGN KEY (cadastroId) REFERENCES cadastros(cadastroId),
FOREIGN KEY (cadastroNome) REFERENCES cadastros(cadastroNome);
