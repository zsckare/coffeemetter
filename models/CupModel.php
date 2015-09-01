<?php

  class CupModel{

    protected $consult;
    public $rows;

    public function __construct()
    {
        $this->consult = new Querys();
    }


    public function get($cellComparate = null, $value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM cup
            WHERE $cellComparate = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }
    public function getAllToday($value=null)
    {   
        $hoy=Date::getHoy();
        $query = $this->consult->getConsultar("
            SELECT *
            FROM cup
            WHERE id_user = '$value' AND fecha = '$hoy'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;
    }
    public function create($values = array())
    {
      extract($values);

      if($this->consult->getConsultar("
              INSERT INTO cup (id_cup, hora, fecha, timestamp,id_user) VALUES (null,'$hora','$fecha',CURRENT_TIMESTAMP,'$iduser')
          "))
      {

      }else{
        
        
      }
    }

    public function update($useractual,$mailactual, $comp, $user, $correo, $values=array())
    {
      if($this->consult->getConsultar("
          UPDATE user
          SET name = '$name'
          WHERE name_user = '$user'
      "))
      {
        $_SESSION['user']=$name;
        Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
        Redirection::go("user");
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("user");
      }   
    }

    public function destroy($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM user
            WHERE id_user = '$id'
        ")){
           Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
           Redirection::go("user");
        }else
        {
           Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
          Redirection::go("user");
        }
    }
  }