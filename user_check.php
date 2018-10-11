<?php
    include_once 'TMP.php';

    if (isset($_POST['username'])) {
        $username = mysqli_real_escape_string($cn,$_POST['username']);
        if (!empty($username)) {
            $username_query = mysqli_query($cn,"SELECT *
                                           FROM data
                                           WHERE usuario = '$username'");
             $count=mysqli_num_rows( $username_query);
             if($count==0)
             {
               echo "<h1>Nombre de usuario disponible</h1>";
               exit;
             }
            else
            {
              echo "<h1>El usuario ya existe</h1>";
              exit;
            }
        }
    }