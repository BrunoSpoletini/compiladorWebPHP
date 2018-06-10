<?php
    $dbServername = "localhost";
    $dbUsername = "admin2";
    $dbPassword = "admin123";
    $dbName = "users";
    /*
    Crear tabla:
    CREATE TABLE `users`.`data` ( `id` INT NOT NULL AUTO_INCREMENT , `usuario` VARCHAR(30) NOT NULL , `mail` VARCHAR(50) NOT NULL , `passw` VARCHAR(30) NOT NULL , `nombre` VARCHAR(30) NOT NULL , `apellido` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`usuario`), UNIQUE (`mail`)) ENGINE = InnoDB;
    Crear Usuario de la base:
    CREATE USER 'admin2'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'admin2'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `users`.* TO 'admin2'@'localhost';    
    */
    $cn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
