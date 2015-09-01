<?php

class HomeController{

    public function indexAction($hola="hola")
    {
        return new View("home/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }

    public function newAction()
    {
    	if (isset($_POST['nueva'])) {
        	$fecha =Date::getHoy();
        	$hora=Date::getHora();
        	$consulta = new CupModel();
			return $consulta->create([			
				"hora"=> $hora,
				"fecha"=>$fecha			
			]);
        }
        else{

        }
        return new View("cup/new", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
        
    }
}
