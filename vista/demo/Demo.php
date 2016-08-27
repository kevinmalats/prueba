<?php
ini_set('display_errors', 1);
require '../../modelo/CollectorDemo.php';

    $colector= new CollectorDemo();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
        <table class="datos">
          <?php
          
            foreach ($colector->readAllDemo() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                      <td> <?php if($datos->getImage()) {
                          ?>
                         <img src="<?php echo $datos->getImage(); ?>" width="100px" alt="<? echo $datos->getNombre();?>" />
                         <?php }?>
                      </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
                         <td><a href="../../modelo/editardemo.php?id=<?php echo $datos->getId();?>"> Update</a>  </td>
                       <td><a href="../../modelo/eliminardemo.php?id=<?php echo $datos->getId();?>"> Delete</a>  </td>
                     </tr>
                   <?php
            }
     
?>
          
          
</table>
         <form Action="../../modelo/Demo2/creardemo.php" method="post">
         <td><button type="submit" name= "crear demo" >crear demo </button></td>
         </form>
</body>


</html>
