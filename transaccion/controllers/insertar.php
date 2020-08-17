<?php
    require_once('../models/conexion.php');
    require_once('../models/base.php');

    $mensaje = null;
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    if(strlen($correo)>0 && strlen($contrasena)>0 )
    {
        $consulta = new base();
        $mensaje = $consulta->insertarDatos($correo, $contrasena);
        echo "<a href='../index.html'>Regresar</a>";
    }else{
        echo "Por favor, ingrese los datos";
    }
    echo $mensaje;

   
?>