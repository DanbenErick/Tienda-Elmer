    CREATE DATABASE tienda;

    USE tienda;

    /*
      usuarios.permission:
      0 = cliente
      1 = administrador
    */

    CREATE TABLE usuarios(
      id int not null primary key AUTO_INCREMENT,
      nombre varchar(200) not null,
      usuario varchar(200) not null,
      password varchar(200) not null,
      permission int not null
    );

    CREATE TABLE productos(
      id int not null primary key AUTO_INCREMENT,
      nombre varchar(200) not null,
      cantidad int not null,
      precio float not null,
      ruta_imagen text not null
    );
    CREATE TABLE categoria (
      id int not null primary key AUTO_INCREMENT,
      nombre varchar(200) not null 
    );
    CREATE TABLE ventas (
      id int not null primary key AUTO_INCREMENT,
      fecha datetime not null,
      productos text
    );