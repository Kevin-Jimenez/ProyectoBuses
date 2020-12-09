CREATE DATABASE  transporte;
CREATE TABLE ruta
(
id_ruta int not null,
nombre_ruta varchar(15) not null,
PRIMARY KEY (id_ruta)
);

CREATE TABLE usuario
( 
usuario varchar (15) not null,
contrasena varchar (15) not null,
tipo varchar (1) not null
);

CREATE TABLE conductor 
(
documento varchar(10) not null,
nombre_conductor varchar(15) not null,
apellido_conductor varchar(15) not null,
telefono_conductor varchar(15) not null,
PRIMARY KEY (documento)
);

CREATE TABLE contrato 
(
id_contrato int not null,
documento varchar(10) not null,
nombre_conductor varchar(15) not null,
apellido_conductor varchar(15) not null,
telefono_conductor varchar(15) not null,
fecha_inicio date not null,
fecha_fin date not null,
valor varchar(15),
PRIMARY KEY (id_contrato),
FOREIGN KEY (documento) REFERENCES conductor (documento)
);

CREATE TABLE buses
(
placa varchar(6) not null,
documento varchar(10) unique not null,
nombre_conductor varchar(15) not null,
apellido_conductor varchar(15) not null,
id_ruta int not null,
PRIMARY KEY (placa),
FOREIGN KEY (id_ruta) REFERENCES ruta (id_ruta),
FOREIGN KEY (documento) REFERENCES conductor (documento)
);