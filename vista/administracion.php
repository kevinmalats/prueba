<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php

 if(isset($_POST["enviar"])){
   if($_POST["usuario"]=='admin' and $_POST["password"]){
    
       session_start();
       $_SESSION["usuario"]='admin';
     


?>


  
   <div>
   <ul>
     <li><a href="demo/Demo.php">demo</a></li>
     <li><a href="usuario.php">usuario</a></li>
     <li><a href="ciudad.php">ciudad</a></li>
     <li><a href="pais.php">pais</a></li>
   </ul> 

  </div>



<?php
}
     else
        echo "usuario invalido";

}

?>
</body>
</html>
