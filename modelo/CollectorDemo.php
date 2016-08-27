<?php
ini_set('display_errors', '1');
  require 'Collector.php';
  require 'Demo.php';
  class CollectorDemo extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addDemo($demo)
   {
     
     return self::execQuery("INSERT INTO demo(nombre,pimage) VALUES('".$demo->getNombre()."','".$demo->getImage()."')");
   }

 
      public function getDemo($id)
   {

    $stmt = $this->con->prepare("SELECT * FROM demo WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $demo=$stmt->fetchObject("Demo");
    return $demo;
   }
   public function readAllDemo(){

      return self::read('demo','Demo'); 


  }

   public function updateDemo($demo)
      {
    try
    {
      self::execQuery("UPDATE demo SET id='".$demo->getId()."',nombre='".$demo->getNombre()."',pimage='".$demo->getImage()."' WHERE id=".$demo->getId());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }

   public function deleteDemo($demo)
   {
    try
    {
      self::execQuery("DELETE FROM demo WHERE id=".$demo);

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   } 
}
?>

  
