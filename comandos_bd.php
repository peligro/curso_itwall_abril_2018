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

--agregar llave foránea

alter table productos add constraint tipo_producto_nombre foreign key (tipo_producto_id) references tipo_productos(id);

--setear uso horario PHP para chile

date_default_timezone_set("Chile/Continental");

Create

	insert into tipo_productos
	(id,tipo_productos)
	values
	(null,'Nuevo tipo ñandú');

	insert into productos
	values
	(null,7,'ombre pphpph',87687,now(),1);

Read
	//minería de datos
	select id,tipo_producto_id as tipo,nombre,precio,fecha,estado, concat_ws(' ',nombre,precio) as concatenado from productos

	select year(fecha) as año, month(fecha) as mes,day(fecha) as dia from productos

	select 
	p.id,p.tipo_producto_id,p.nombre,p.fecha,p.estado,t.tipo_productos
	from 
	productos as p 
	join tipo_productos as t on p.tipo_producto_id = t.id
	where 
	estado=1;



Update
	
	update productos 
	set
	nombre = 'nombre nuevo',
	precio = 7897
	where
	id =1;

Delete

	delete from productos  
	where
	id =1;


	truncate table productos;

