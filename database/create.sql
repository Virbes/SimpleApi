DROP DATABASE IF EXISTS api_rest;
CREATE DATABASE IF NOT EXISTS api_rest;

USE api_rest;

show tables;


SELECT * FROM categorias;
SELECT * FROM productos;

INSERT INTO categorias VALUES(0, 'LAPTOPS', 'EJEMPLO LAPTOS', null, null);
INSERT INTO categorias VALUES(0, 'MONITORES', 'EJEMPLO MONITORES', null, null);
INSERT INTO categorias VALUES(0, 'MOUSE', 'EJEMPLO MOUSE', null, null);