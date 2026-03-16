CREATE DATABASE zoo;

USE zoo;

CREATE TABLE animals (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
species VARCHAR(50),
age INT,
enclosure VARCHAR(50)
);

INSERT INTO animals (name,species,age,enclosure) VALUES
('Lion','Carnivore',5,'A1'),
('Elephant','Herbivore',12,'B2'),
('Tiger','Carnivore',6,'A3');
