<?php

class Service {
    
    private $servicio;
    private $db;

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=examen arguilera', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getServicios() {

        self::setNames();
        $sql = "SELECT id, nombreFonda, calle, numeroExterior, numeroInterior, cp, colonia, municipio, ciudad, estado, pais FROM servicios";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
    }
    
    public function setServicio($nombreFonda, $calle, $numeroExterior, $numeroInterior, $cp, $colonia, $municipio, $ciudad, $estado, $pais) {

        self::setNames();
        $sql = "INSERT INTO servicios(nombreFonda, calle, numeroExterior, numeroInterior, cp, colonia, municipio, ciudad, estado, pais) VALUES ('" . $nombreFonda . "', '" . $calle . "', '" . $numeroExterior . "', '" . $numeroInterior . "', '" . $cp . "', '" . $colonia . "', '" . $municipio . "', '" . $ciudad . "', '" . $estado . "', '" . $pais . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setNewMenu($nombre, $desc, $ingre, $costo, $idFonda) {
        
        self::setNames();
        $sql = "INSERT INTO menus(id_fonda, nombrePlatillo, descripcion, ingredientes, costo) VALUES ('" . $idFonda . "', '" . $nombre . "','" . $desc . "', '" . $ingre . "', '" . $costo . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getMenu($idFonda){
        self::setNames();
        $sql = "SELECT id, id_fonda, nombrePlatillo, descripcion, ingredientes, costo FROM menus WHERE id_fonda='".$idFonda."'";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
    }
}
?>