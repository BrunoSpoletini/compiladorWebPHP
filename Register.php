<!DOCTYPE html/>
<html>

<head>
    <meta charset="UTF-8"><title> Register </title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <script src="JS/jquery.min.js"></script>
    <h1> Registrarse </h1>
    <div class=Reg>
        <form action="./Accreate.php" target="_blank" method="POST" name="f1" id="Fromu">
            <label for="name">Nombre</label>
            <br><input type="text" id="nombre" name="nombre"><br>
            <label for="ape">Apellido</label>
            <br><input type="text" id="apellido" name="apellido"><br>
            <label for="mail">Email</label>
            <br><input type="text" id="mail"  name="mail"><br>
            <label for="user">Usuario</label>
            <br><input type="text" id="user"  name="user"><br>
            <label for="pass">Contraseña</label>
            <br><input type="password" id="pass" name="pass" onkeyup="muestra_claves_iguales()"><br>
            <label for="passr">Repetir Contraseña</label>
            <br><input type="password" id="passr" name="passr" onkeyup="muestra_claves_iguales()"><br>
            <input class="Create" type="button" id="button" name="button" value="Registrarse" onClick="Mandar()"><br>
        </form>
    </div>
    <div id="mail_status" class="aremplazar3">&nbsp;</div>
    <div id="username_status" class="aremplazar2">&nbsp;</div>
    <div id="dm" class="aremplazar">&nbsp;</div>
    <script src="JS/all.js" type="text/javascript" charset="utf-8"></script>
    <script>
        function muestra_claves_iguales() {
            if(((document.f1.pass.value).length)<8){document.getElementById("dm").innerHTML="<h1> Minimo 8 Caracteres </h1>";}
            else {
                if((document.f1.pass.value)==(document.f1.passr.value)){document.getElementById("dm").innerHTML="<h1> ESKEREEEEEE </h1>";}
                else {	document.getElementById("dm").innerHTML="<h1> NO COINCIDEN </h1>"; }
            }
        }

        function Mandar(){
            if((document.f1.pass.value=="") || (document.f1.passr.value=="") || (document.f1.nombre.value=="") || (document.f1.apellido.value=="") || (document.f1.mail.value=="") || (document.f1.user.value=="")){
                alert("Complete todos los campos");
            }
            else{
                if(((document.f1.mail.value.match(/@/g) || []).length)!=1){
                    alert("Ese mail no es valido");
                }
                else{
                    if(((document.f1.pass.value).length)<8){alert("La Contraseña tiene que tener minimo 8 caracteres");}
                    else {
                        if((document.f1.pass.value)==(document.f1.passr.value)){document.getElementById("Fromu").submit();}
                        else {alert("Las dos Pass son distintas");}
                    }
                }
            }
        }

        $(window).ready(function() {
            $.ajaxSetup({
            type: 'POST',
            timeout: 5000,
            error: function(xhr) {}
            });

            $("#mail").keyup(function() {
                var mail = $(this).val();

                 if(mail != '') {
                    $.post( "mail_check.php", { mail: mail }, function( data ) {
                        $("#mail_status").html(data);
                    });
                }
                else {
                    $('#mail_status').html('');
                }
            });
            
            $("#user").keyup(function() {
                var username = $(this).val();

                 if(username != '') {
                    $.post( "user_check.php", { username: username }, function( data ) {
                        $("#username_status").html(data);
                    });
                }
                else {
                    $('#username_status').html('');
                }
            });
            
            }); 
    </script>
        <audio class="sqs-audio-player" src="resources/Bleed.mp3" autoplay>
<!--
    CREATE TABLE `usuario`.`data` ( `id` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(30) NOT NULL ,
     `apellido` VARCHAR(30) NOT NULL , `genero` VARCHAR(50) NOT NULL , `usuario` VARCHAR(30) NOT NULL ,
      `contraseña` VARCHAR(30) NOT NULL , `mail` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`usuario`),
       UNIQUE (`mail`)) ENGINE = InnoDB;
-->

</body>
</html>