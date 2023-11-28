CREATE TABLE  `usuarios`(
`id` int(11) NOT NULL AUTO_INCREMENT,   
`nombre` text not null,
`num_cuenta` int(10) not null,
`nombre_usuario` text not null,
`direccion` text not null,
`telefono` varchar (10) not null,
`correo` text not null,
 PRIMARY KEY (`id`))engine=Innodb default charset=utf8;

INSERT INTO `usuarios` (`id`, `nombre`, `num_cuenta`, `nombre_usuario`, `direccion`, `telefono`, `correo`) VALUES (NULL, 'Jesus Osvaldo Manríquez González', '319290956', 'JesusHades', 'Cerrada de Planetas', '5580032687', 'jesusmanriquez56@gmail.com');
