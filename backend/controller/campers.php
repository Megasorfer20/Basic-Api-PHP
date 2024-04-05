<?php
header('Content-Type: application/json');
require_once('../config/conectar.php');
require_once("../models/camper.php");

$camper = new Camper();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET['option']) {
    case 'GetAlle':
        $datos = $camper->get_camper();
        echo json_encode($datos);
        break;

    case 'GetId':
        $datos = $camper->get_camper_id($body["id"]);
        echo json_encode($datos);
        break;
    
    case "insert":

        $datos=$camper->insert_camper($body["id"], $body["imagen"], $body["nombre"], $body["edad"], $body["promedio"], $body["nivelCAmpus"], $body["nivelIngles"], $body["especialidad"],$body["direccion"], $body["celular"], $body["Ingles"], $body["Ser"], $body["Review"], $body["Skills"],$body["Asitencia"]);
        echo json_encode("insertado correctamente");

    break;
}

?>