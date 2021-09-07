CREATE DATABASE IF NOT EXISTS
    cursosProgramacao;
USE cursosProgramacao;

CREATE TABLE IF NOT EXISTS loja (
    id INT (11) AUTO_INCREMENT,
    curso VARCHAR(255),
    tecnologia VARCHAR(255),
    nivel VARCHAR(3),
    professor VARCHAR(255),
    preco DOUBLE(6, 2),
    PRIMARY KEY(id)
);

INSERT INTO loja 
    VALUE(0, 'Front-end', 'HTML5, CSS3 e JavaScript', 'Jr.', 'Marcela Eduarda', 649.97);
   
INSERT INTO loja 
    VALUE(0, 'Docker Avançado', 'Docker', 'Sr.', 'Bruno Alvez', 1459.00); 