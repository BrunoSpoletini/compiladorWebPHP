<?php
    include_once 'TMP.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = mysqli_real_escape_string($cn,$_POST['nombre']);
        $apellido = mysqli_real_escape_string($cn,$_POST['apellido']);
        $mail = mysqli_real_escape_string($cn,$_POST['mail']);
        $usuario = mysqli_real_escape_string($cn,$_POST['user']);
        $passw = mysqli_real_escape_string($cn,$_POST['pass']);
        if(empty($nombre) || empty($apellido) || empty($mail) || empty($usuario) || empty($passw)){
            header("Location: /form/Register.php?signup=empty");
        } else {
            $sql= "INSERT INTO data (apellido,mail,nombre,passw,usuario) VALUES ('$apellido', '$mail', '$nombre', '$passw', '$usuario');";
            mysqli_query($cn,$sql);
            header("Location: ./Register.php?signup=success");
        }
    } else {
        header("Location: ./Register.php?signup=failed");
    }
