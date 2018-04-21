create database itwall character set utf8 collate utf8_spanish_ci;

create table personas
(
	id int auto_increment not null primary key,
	nombre varchar(100),
	rut varchar(20),
	correo varchar(100),
	fecha date,
	estado int
);