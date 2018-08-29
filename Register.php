<!DOCTYPE html/>
<html>

<head>
    <meta charset="UTF-8"><title> Register </title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <h1> Registrarse </h1>
    <div class=Reg>
        <form action="./Accreate.php" target="_blank" method="POST" name="f1" id="Fromu">
            <label for="name">Nombre</label>
            <br><input type="text" id="name" name="nombre"><br>
            <label for="ape">Apellido</label>
            <br><input type="text" id="ape" name="apellido"><br>
            <label for="mail">Email</label>
            <br><input type="text" id="mail"  name="mail"><br>
            <label for="user">Usuario</label>
            <br><input type="text" id="user"  name="user"><br>
            <label for="pass">Contraseña</label>
            <br><input type="password" id="pass" name="pass" onkeyup="muestra_claves_iguales()"><br>
            <label for="passr">Repetir Contraseña</label>
            <br><input type="password" id="passr" name="passr" onkeyup="muestra_claves_iguales()"><br>
            <input class="submit" type="button" value="Registrarse" onClick="Mandar()"><br>
        </form>
    </div>
    <div id="dm" class="aremplazar">&nbsp;</div>
    <script src="JS/all.js" type="text/javascript" charset="utf-8"></script>
    <script>
        function muestra_claves_iguales() {
            if((document.f1.pass.value)==(document.f1.passr.value)){document.getElementById("dm").innerHTML="<h1> ESKEREEEEEE</h1>";}
            else {	document.getElementById("dm").innerHTML="<h1> No </h1>"; }
        }
        function Mandar(){
            if((document.f1.pass.value)==(document.f1.passr.value)){document.getElementById("Fromu").submit();}
            else {alert("Las dos Pass son distintas")}
        }
    </script>
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