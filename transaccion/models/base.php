<?php
class base{
    public function insertarDatos($correo, $contrasena)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into Datos(correo, contrasena) values(:correo,:contrasena)";
        $statement = $conexion->prepare($sql);       
        $statement->bindParam(':correo', $correo);
        $statement->bindParam(':contrasena', $contrasena);

        if(!$statement)
        {
            return "Error el registro, está vacío";
        }else{
            $statement->execute();
            return "La carga es un éxito";
        }
    }

    public function insertarLogin($nombre, $apellido, $correo, $contrasena)
    {
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into Login(nombre, apellido, correo, contrasena) values(:nombre,:apellido,:correo,:contrasena)";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':apellido', $apellido);
        $statement->bindParam(':correo', $correo);
        $statement->bindParam(':contrasena', $contrasena);

        if(!$statement)
        {
            return "Error el registro, está vacío";
        }else{
            $statement->execute();
            return "La carga es un éxito";
        }
    }
    
}
?>