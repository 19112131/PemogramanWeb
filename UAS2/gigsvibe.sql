DROP DATABASE IF EXISTS gigsvibe;
CREATE DATABASE gigsvibe;
USE gigsvibe;

CREATE TABLE user (
id INT NOT NULL AUTO_INCREMENT,
username VARCHAR(30) NOT NULL,
password VARCHAR(20) NOT NULL,
PRIMARY KEY(id)
);

INSERT INTO user (username, password) VALUES 
('salma', 'cobain'),
('caca', 'cacacoba'),
('deni', 'denicoba'),
('Admin', 'admin123');

create table pilih_tiket (
id_tkt int not null auto_increment,
event varchar(30) not null,
cat varchar(10) not null,
primary key(id_tkt)
);