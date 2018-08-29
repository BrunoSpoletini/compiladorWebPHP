<?php
    include_once 'TMP.php';
?>
<!DOCTYPE html/>
<html>
<head>
<meta charset="UTF-8"><title> Login Info </title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<h1>Logged</h1>
<?php
    if(isset($_POST['submit'])){
        $acc= mysqli_real_escape_string($cn,$_POST['acc']);
        $pass= mysqli_real_escape_string($cn,$_POST['pass']);
        if(empty($acc) || empty($pass)){
            header("Location: ./Login.php?login=empty");
        } else {
            if((substr_count($acc,"@")>0) && (substr_count($acc,".")>0)){
                $sql= "SELECT * FROM data WHERE mail = '".$acc."' AND passw = '".$pass."';";
            } else {
                $sql= "SELECT * FROM data WHERE usuario = '".$acc."' AND passw = '".$pass."';";
            }

            $result = mysqli_query($cn,$sql);
            $resultcheck = mysqli_num_rows($result);

            if ($resultcheck > 0) {
                $row = $result->fetch_assoc();
                echo "<div class=Temp>User: " . $row["usuario"] . "<br> Nombre: " . $row["nombre"]. "<br> Apellido: " . $row["apellido"]. "<br> Mail: " . $row["mail"] . "<br></div><br>";
            } else {
                echo "<div class=Temp>User doesn't exist</div>";
            }
        }
    } else {
        header("Location: ./Login.php?login=failed");
    }
?>
    <div class=Music>
        <audio class="sqs-audio-player" src="resources/Gojira.mp3" controls>
    </div>
</body>
</html>
