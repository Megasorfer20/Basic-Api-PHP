<?php

class Conectar{
    protected $db;

    protected function Conexion(){
        try {
            $conectar = $this->db = new PDO("mysql:local=localhost;dbname=estadisticas", "root", "");
            return $conectar;
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
            die();
        }   
    }

    public function set_name(){
        return $this->db->query("SET NAMES 'utf8'");
    }
}

?>