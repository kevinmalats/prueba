<?php
require 'collectordemo.php';

$colector = new CollectorDemo();
$demo;

if(isset($_GET["id"])){
    global $demo;
    $demo= $colector->getDemo($_GET["id"]);
    
    ?>
    <form enctype="multipart/form-data" action="editardemo.php" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $demo->getId(); ?>"/>
        <div>
            <label for="name">Usuario Demo</label>
            <input type="text" name="nombre" value="<?php echo $demo->getNombre();?>"><br>
      </div>
      <div>
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000" />
        Imagen : <input name="userfile" type="file" />
    </div>
        <div class="button">
            <button name= "update" type="submit">Update</button>
        </div>
    </form>

   <?php
}
    if(isset($_POST["nombre"])){
        $demo= $colector->getDemo($_POST["id"]);
        echo $_POST["nombre"];
         $demo->setNombre($_POST["nombre"]);
        $colector->updateDemo($demo);
        
    }
    if(isset($_POST["userfile"])){
         $demo= $colector->getDemo($_POST["id"]);
        $ruta='../../fotos/'.basename($_FILE["userfile"]["name"]);
       
        $demo->setImage($ruta);
       }
    if(isset($_POST["update"]))
    header("location: ../vista/Demo/Demo.php");
