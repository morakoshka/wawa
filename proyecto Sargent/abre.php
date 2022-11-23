<?php

$conexion = new mysqli("localhost", "id19388855_interesados", "7y2mx|Lb#zcwcGu8", "id19388855_mar");
    if($conexion){
        echo "la gestion fue exitosa !!";

    }else{
        echo "Fallo la gestion";
    }
?>