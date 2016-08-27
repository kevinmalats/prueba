<?php

require 'collectorDemo.php';

    $colector = new CollectorDemo();

if(isset($_GET["id"])){

    $obj = $colector->deleteDemo($_GET["id"]);
     
    header("Location: ../vista/Demo/Demo.php");
    exit();
}else{
  echo "Valor no found.";
}