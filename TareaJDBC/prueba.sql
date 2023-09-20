drop schema if exists `prueba`;

create schema  if not exists `fes_aragon` default  character set utf8 collate  utf8_spanish2_ci;
USE `prueba`; 

CREATE TABLE `alumno` (
  `id` INT NOT NULL,
  `nombre_alumno` VARCHAR(45) NOT NULL,
  `correo_alumno` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));