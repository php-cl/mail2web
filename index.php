<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset ="UTF8">
  <title> Mail2Web | Mandar mail con PHP </title>
  <meta name="viewport" content="width = device-width">
  <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
  <link rel="stylesheet" href="style.css">
</head>
 <body>


 <a class="orange_mar" href="http://www.marlonfalcon.cl/">
   <img alt="marlon" src="../webkode/assets/img/right_orange.png" style="position: fixed; top: 0; right: 0; border: 0;z-index:9999;"  id="marlon" >
 </a>


  <div class="wrapper-header">
  	<div class="container">
      <div class="row"> 
          <div class="col-md-4">
                <a href="index.php"><img src="favicon.png" alt=""></a>
          </div>
          <div class="col-md-8">
                <h1>Mail2Web</h1>
                <h3>La mejor forma de mandar mail a todos tus clientes</h3>
          </div>
      </div> <!-- row -->  	  
  	</div>
  </div>


<div class="main">
  <div class="container">
  	<div class="panel panel-primary">
  	<div class="panel-heading">
  		<h3 class="panel-title">DATOS</h3>
  	</div>
  	<div class="panel-body">
		<form action="index.php" role="form" method="post">
  			<div class="form-group">
  				<label for="">Titulo del mensaje:</label>
  				<input id="exampleInputName1" class="form-control" type="text" name="titulo" placeholder="titulo" value="" required>
  			</div>

        <div class="form-group">
          <label for="">De:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="falconsoft.3d@gmail.com" value="" required name="de">
        </div>

  			<div class="form-group">
  				<label for="">Destinatarios:</label>
  				<textarea class="form-control" value="Clear" name="mail" rows="5" required></textarea>
  			</div>

  			 <div class="form-group">
  			 	<label for="">Mensaje:</label>
  				<textarea class="form-control" value="Clear" name="texto" rows="10" required></textarea>
  			</div>

  			<div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
           </div>	

  		</form>
  	</div>
  </div>
     </div>  
</div> 



<div class="container">

  <?php

    if($_POST)
    {
     $para= $_POST['mail'];
     $titulo = $_POST['titulo'];
     $mensaje   = $_POST['texto'];
     $de   = $_POST['de'];
     $mensaje=stripcslashes($mensaje); 
  

$porciones_mail = explode(",",$para);

foreach ($porciones_mail as $valor) {


    // Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Cabeceras adicionales

$cabeceras .= 'From: Soporte Polygal <'.$de.'>' . "\r\n";


mail($valor, $titulo, $mensaje, $cabeceras);

   }

}



   ?>


</div>

    

<div class="footer-wrapper"> 
    <a href="mailto:falconsoft.3d@gmail.com"><p>By Marlon Falcon Hernandez</p></a>
</div>

 </body>
</html>