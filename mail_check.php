<?php
    include_once 'TMP.php';

    if (isset($_POST['mail'])) {
        $mail = mysqli_real_escape_string($cn,$_POST['mail']);
        if (!empty($mail)) {
            if((substr_count($mail,"@")!=1) || (substr_count($mail,".")<1)){
                echo "<h1>That's not an Email Bro</h1>";
                exit;
            }
            $mail_query = mysqli_query($cn,"SELECT *
                                           FROM data
                                           WHERE mail = '$mail'");
             $count=mysqli_num_rows( $mail_query);
             if($count==0)
             {
               echo "<h1>Cuenta de mail aceptada</h1>";
               exit;
             }
            else
            {
              echo "<h1>Ya hay una cuenta con este Mail</h1>";
              exit;
            }
        }
    }