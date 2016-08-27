<?php

class Demo
{
  private $id;
  private $nombre;
  private $pimage;
  function __construct(){
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function getNombre(){
    return $this->nombre;
  }
  
  public function setId($id){
    $this->id = $id;
  }
  
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
    public function setImage($img){
        $this->pimage=$img;
    }
    public function getImage(){
        return $this->pimage;
    }
    
}

?>