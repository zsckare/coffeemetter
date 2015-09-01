<?php

class CupController{

    public function indexAction($hola="hola")
    {
        return new View("cup/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }

    public function newAction()
    {
        if (isset($_POST['iduser'])) {
            $fecha = Date::getHoy();
            $hora= Date::getHora();
            $consulta = new CupModel();
            return $consulta->create([          
                "hora"=> $hora,
                "fecha"=>$fecha,
                "iduser"=>$_POST['iduser']         
            ]);
        }
    }

    public function totalAction()
    {   
        $iduser="7";
        $cup = new CupModel();
        $values=$cup->getAllToday($iduser);
        return new View("cup/total", ["title" => "Totales", "layout" => "on", "nameLayout" => "layout","values"=>$values]);        
    }
}
