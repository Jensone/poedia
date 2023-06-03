DROP SCHEMA IF EXISTS 'viratilo';

CREATE DATABASE IF NOT EXISTS 'viratilo';

USE 'viratilo';

CREATE TABLE IF NOT EXISTS 'viratilo'.'categorie'(
    'id_categorie' INT NOT NULL AUTO_INCREMENT,
    'nom' VARCHAR(50) NOT NULL,
    'description' TEXT NOT NULL,
    PRIMARY KEY ('id_categorie'),
)ENGINE = InnoDB