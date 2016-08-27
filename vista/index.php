<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  
    <link rel="stylesheet" href="../css/login.css">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar-fixed-top">
             
               <a class="navbar-brand page-scroll" >+ACCESO</a>
        
           </nav>

    
              	<form class="form-horizontal" role="form" method="post" action="administracion.php">
				  <div class="form-group">
					<label  class="control-label col-sm-2" for="Apellidos">Usuario:</label>
					<div class="col-sm-10">
					  <input name="usuario" class="form-control" id="email" placeholder="Usuario">
					</div>
				  </div>
				  <div class="form-group">
					<label id="etiquetas" class="control-label col-sm-2" for="pwd">Contrase&ntilde;a:</label>
					<div class="col-sm-10"> 
					  <input name="password" type="password" class="form-control" id="pwd" placeholder="Ingrese Contrase&ntilde;a">
					</div>
				  </div>
				  <div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" name="enviar" class="btn btn-default">Login</button>
					</div>
				  </div>
				  <label  class="control-label col-sm-2" for="Apellidos">No estas registrado, <ins href="index.html">Registrate aqui</ins></label>
				  </form>
				
           
</body>

</html>
