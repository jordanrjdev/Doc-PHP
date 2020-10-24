-- Crear base de datos
CREATE DATABASE autos;
--Creando tabla con sus respectivos campos
CREATE TABLE `inventario` ( `auto_id` int(11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY, `nombre_auto` varchar(50) NOT NULL, `marca_auto` varchar(50) NOT NULL, `modelo` year NOT NULL, `km_auto` int(10) NOT NULL, `descripcion_auto` text(500) NOT NULL ) ENGINE=INNODB DEFAULT CHARSET=utf8

--Modificando la estructura de una tabla de nuestra base de datos
ALTER TABLE `inventario` ADD `precio` INT UNSIGNED NOT NULL AFTER `modelo`

--Insertar una fila o registro en SQL
INSERT INTO `inventario` (`auto_id`, `nombre_auto`,`marca_auto`,`modelo`,`precio`,`km_auto`,`descripcion_auto`) VALUES (NULL, 'Mustang', 'Ford', '2017', 10000,100, 'Excelente auto para el año nuevo')

--Insertando varios datos
INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Camaro', 'Chevrolet', '2016', '1', 'Gran Potencia y Motor', '60000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Serie3', 'BMW', '2015', '10000', 'Gran Auto de lujo', '30000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Clase C', 'Mercedes Benz', '2016', '5000', 'Tecnología alemana a tu alcance', '28000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Corolla', 'Toyota', '2017', '1', 'Estrena este gran automovil', '30000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Altima', 'Nissan', '2014', '30000', 'Gran estado, un dueño', '20000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Beetle', 'VolksWagen', '2016', '3000', 'Gran automovil muy economico', '25000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'A4', 'Audi', '2017', '10000', 'Gran auto como nuevo', '40000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Figo', 'Ford', '2017', '1', 'Nuevo y Economico', '15000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Spark', 'Chevrolet', '2015', '30000', 'Un gran auto a un precio increible', '10000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Aveo', 'Chevrolet', '2017', '1', 'Automovil nuevo a gran precio', '20000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Malibu', 'Chevrolet', '2015', '20000', 'Gran automovil con un gran espacio interior', '50000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, '3', 'Mazda', '2017', '1', 'Automovil nuevo, recién llegado', '20000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'CLS', 'Mercedes Benz', '2017', '1', 'Lujo en todos los niveles', '80000');

INSERT INTO `autos`.`inventario` (`auto_id`, `nombre_auto`, `marca_auto`, `modelo`, `km_auto`, `descripcion_auto`, `precio`)
VALUES (NULL, 'Serie 5', 'BMW', '2017', '1', 'Gran auto a un gran precio', '75000');

-- Obteniendo datos de la base de datos
SELECT * FROM inventario WHERE auto_id = 3;
SELECT * FROM inventario WHERE marca_auto = "Chevrolet";

-- Actualizando datos de nuestra base de datos
UPDATE inventario SET km_auto = 155 WHERE auto_id = 3;
UPDATE inventario SET precio = 20000 WHERE auto_id = 1;
UPDATE inventario SET descripcion_auto = "Este es un muy buen auto para ti. " WHERE auto_id = 3;

--Eliminando un documento o fila desde la base de datos 
DELETE FROM inventario WHERE auto_id = 12;

-- Obteniendo informacion, ordenarlos y limitarlos
SELECT * FROM `inventario` ORDER BY marca_auto ASC; --Ascendente
SELECT * FROM `inventario` ORDER BY marca_auto DESC; --Descendente
SELECT * FROM `inventario` ORDER BY marca_auto ASC LIMIT 6; --Limite de 6