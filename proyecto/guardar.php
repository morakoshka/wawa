<?php
    include("abre.php");
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $calle = $_POST['calle'];

    $consulta = "INSERT INTO personas(nombre, apellidos, calle) VALUES
    ('$nombre', '$apellidos', '$calle')";

    if ($conexion->query($consulta) === TRUE){
       // header("Location: index.html");
    }else{
        echo "error: " . $consulta . "<br>" . $conexion->error;
    }
    $conexion->close();
?>