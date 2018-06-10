<!DOCTYPE html/>
<html>
    <head>
        <meta charset="UTF-8"><title> Login </title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <h1>Login</h1>
        <div class=Log>
            <form action="./userLogged.php" method="POST">
                <label for="acc">User or email</label>                
                <br><input id="acc" type="text" name="acc"><br>
                <label for="pass">Contraseña</label> 
                <br><input id="pass" type="password" name="pass"><br>
                <input type="submit" name="submit" value="Search">
            </form>
        </div>
        <div class=Music>
            <audio class="sqs-audio-player" src="resources/Gojira.mp3" controls>
        </div>
    </body>
</html>