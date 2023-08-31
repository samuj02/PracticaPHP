<?php 
include('conexion.php');

    if(!empty($_POST['nombre']) && !empty($_POST['correo']))
    {
        /*echo "Recibe el nombre: " . $_POST['nombre'] . "<br>";
        echo "Recibe el correo: " . $_POST['correo'] . "<br>";
        echo "Recibe el sexo: " . $_POST['sexo'] . "<br>";
        echo "Recibe la ciudad: ". $_POST['ciudad']. "<br;*/

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $sexo = $_POST['sexo'];
        $ciudad = $_POST['ciudad'];

        $sql = "INSERT INTO usuarios (nombre,correo, sexo, ciudad)
        VALUES ('$nombre', '$correo', '$sexo', '$ciudad')";

        $connection->exec($sql);

        header('Location: index.php');
    }
?>