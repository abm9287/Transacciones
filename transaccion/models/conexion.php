<?php
    class conexion
    {
        public function get_conexion()
        {
            $user = "postgres";
            $pass = "1722174057";
            $host = "localhost";
            $db = "transaccion";

            $conexion = new PDO("pgsql:host = $host;dbname = $db;",$user,$pass);
            
            return $conexion;
        }
    }
?>