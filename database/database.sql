CREATE DATABASE IF NOT EXISTS menu_db;
USE menu_db;

CREATE TABLE cadastros (
    cadastroId INT AUTO_INCREMENT PRIMARY KEY,
    cadastroNome VARCHAR(50) NOT NULL,
    cadastroEmail VARCHAR(50) NOT NULL
);

CREATE TABLE pratos (
    pratoId INT AUTO_INCREMENT PRIMARY KEY,
    pratoNome VARCHAR(50) NOT NULL,
    pratoValor DECIMAL(10,2) NOT NULL,
    pratoDescricao VARCHAR(150),
    pratoCategoria VARCHAR(50),
    cadastroId INT,
    FOREIGN KEY (cadastroId) REFERENCES cadastros(cadastroId) ON DELETE CASCADE
);