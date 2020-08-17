<?php
  require_once('../models/conexion.php');
  require_once('../models/base.php');
 
  $mensaje = null;
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    if(strlen($nombre)>0 && strlen($apellido)>0 && strlen($correo)>0 && strlen($contrasena)>0 )
    {
        $consulta = new base();
        $mensaje = $consulta->insertarLogin($nombre, $apellido, $correo, $contrasena);
        echo "<a href='../index.html'>Regresar</a>";
    }else{
        echo "Por favor, ingrese los datos";
    }
    echo $mensaje;
?>