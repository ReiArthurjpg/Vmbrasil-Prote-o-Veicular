CREATE DATABASE gestor_marketplace;
USE gestor_marketplace;

CREATE TABLE vagas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT,
    requisitos TEXT,
    beneficios TEXT,
    descricao01 VARCHAR(255),
    descricao02 VARCHAR(255),
    descricao03 VARCHAR(255),
    descricao04 VARCHAR(255),
    requisitos01 VARCHAR(255),
    requisitos02 VARCHAR(255),
    requisitos03 VARCHAR(255),
    requisitos04 VARCHAR(255),
    beneficios01 VARCHAR(255),
    beneficios02 VARCHAR(255),
    beneficios03 VARCHAR(255),
    beneficios04 VARCHAR(255)
);
