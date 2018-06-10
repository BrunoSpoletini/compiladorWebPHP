<!DOCTYPE html/>
<html>

<head>
    <meta charset="UTF-8"><title> Register </title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <h1> Registrarse </h1>
    <div class=Reg>
        <form action="./Accreate.php" target="_blank" method="POST">
            <label for="name">Nombre</label>
            <br><input type="text" id="name" name="nombre"><br>
            <label for="ape">Apellido</label>
            <br><input type="text" id="ape" name="apellido"><br>
            <label for="mail">Email</label>
            <br><input type="text" id="mail"  name="mail"><br>
            <label for="user">Usuario</label>
            <br><input type="text" id="user"  name="user"><br>
            <label for="pass">Contraseña</label>
            <br><input type="password" id="pass" name="pass"><br>
            <input type="submit" name="submit" value="Registrarse"><br>
        </form>
    </div>

    <div class=Music>
        <audio class="sqs-audio-player" src="resources/Bleed.mp3" controls>
    </div>
<!--
    CREATE TABLE `usuario`.`data` ( `id` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(30) NOT NULL ,
     `apellido` VARCHAR(30) NOT NULL , `genero` VARCHAR(50) NOT NULL , `usuario` VARCHAR(30) NOT NULL ,
      `contraseña` VARCHAR(30) NOT NULL , `mail` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`usuario`),
       UNIQUE (`mail`)) ENGINE = InnoDB;
-->

</body>
</html>