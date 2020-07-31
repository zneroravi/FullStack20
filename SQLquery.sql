
mysql -r root -p;

CREATE DATABASE fs20;

show DATABASES;

use DATABSE fs20;

CREATE TABLE userdata (regno INT(8),name VARCHAR(30),mobile INT(13),email VARCHAR(40));

INSERT INTO userdata (regno, name, mobile, email) VALUES ('101', 'Ravi', '1234567890', 'email@gmail.com');

INSERT INTO userdata (regno, name, mobile, email) VALUES ('102', 'Prem', '1212121212', 'email2@gmail.com');

INSERT INTO userdata (regno, name, mobile, email) VALUES ('103', 'Anmol', '1234512345', 'email3@gmail.com');

SELECT * FROM userdata;

SELECT name FROM userdata;

SELECT name FROM userdata WHERE regno='102';

UPDATE userdata SET name='Ravi Goswami' WHERE regno=101;

DELETE FROM userdata WHERE regno=103;

DROP TABLE userdata;

DROP DATABASE fs20;


