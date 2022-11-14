<?php 

class Conexion {
    public static function conectar() {
        try {
            $con = new PDO("pgpsql:host=localhost;port=5432;dbname=prueba=juandba;password=admin");
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Error ' . $e->getMessage());
            echo 'Linea del error ' . $e->getLine();
        }
        return $con;
    }
}

?>