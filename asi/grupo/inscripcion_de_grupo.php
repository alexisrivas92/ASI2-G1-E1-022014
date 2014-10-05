<?php
 require_once 'data/dataBase.php';
 require_once 'clases/cRegistro.php';

$registro   = new Registro();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Inscripcion de Grupo
	</title>

        	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
        	<script type="text/javascript" src="../js/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link type="text/css" href="../css/map.css" rel="stylesheet" media="all" />
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  <script type="text/javascript" src="../js/mapa.js"></script>
</head>
<body>
	
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img id="logo1" src="../img/ases1.jpg" class="img-responsive" alt="Responsive image">
      <a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a> 
      
    </div>
      
      <br>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="indexadmin.html">Inicio</a></li>
        <li><a href="solicitudes_de_miembro.html">Inscripciones</a></li>
        <li><a href="#">Renovacion</a></li>
        <li><a href="#">Grupos Scout</a></li>
        <li><a href="#">Miembros Scout</a></li>
        <img id="logo2" src="../img/logo1.png" class="img-responsive" alt="Responsive image">

      </ul>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<form method="POST">
		
	<div class="row">
		<h2 class="text-center">Inscripcion de Grupo</h2>
		<div class="col-lg-3">
			<label>Nombre de Grupo:</label>
			<input type="text" name="nomGrupo" class="form-control">
			<label>Numero de Grupo:</label>
			<input type="text" name="numGrupo" class="form-control">
			<label>Fecha de Fundacion</label>
			<input type="date" name="fechFundacion" class="form-control">
			<label>Exclusivo:</label>
			<br>
			<label>
			Si	
			<input type="radio" checked="false" name="exclusivo">	
			</label>
			<label>
			No	
			<input type="radio" checked="true" name="exclusivo">	
			</label>
			<br>
			<label>Lugar de Reunion:</label>
			<input type="text" name="lugarReunion" class="form-control">	
			<label>Propietario Lugar:</label>
			<input type="text" name="propLugar" class="form-control">	
			<label>Telefono:</label>
			<input type="text" name="telefono" class="form-control">	
		</div>	
		<div class="col-lg-4"> 
			<label>Departamento:</label><br>
		  <select class="form-control" name="departamento" id="departamento" >
            <option value="">Seleccionar...</option>
              <?php 
      try{
      $blogp = $registro->seleccionar_departamento();
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($blogp!=null)
        {
        foreach($blogp AS $key => $bl)
        {
        $idDep     = $bl['idDep'];
        $nomDep   = $bl['nomDep'];
        ?>
        <option value="<?=$idDep?>"><?=$nomDep?></option>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }
        
        
        ?>	        	
			</select>
			<br>
			<br>
		  <label>Municipio:</label>
				<select class="form-control" name="municipio" id="municipio" onFocus="<?php 
      try{
      $blogp = $registro->seleccionar_municipio();
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($blogp!=null)
        {
        foreach($blogp AS $key => $bl)
        {
        $idMunic     = $bl['idMunic'];
        $nomMunic   = $bl['nomMunic'];
        ?>">
        </br>
			<option value='<?=$idMunic?>'><?=$nomMunic?></option>
       
        <?php
        
        }
        }else{
         echo "No hay datos";
        }
        
        
        ?>	        	
				</select>
			<br>	
			<label>Calle:</label>
			<input type="text" name="calle" class="form-control">
			<br>	
			<label>Numero de Casa:</label>
			<input type="text" name="numCasa" class="form-control">
			<br>
			<label>Colonia:</label>
			<input type="text" name="colonia" class="form-control">
			<br>
			
			<br>
		</div>
		<div class="col-lg-4">
				<div id="map" >
			
				</div>
				<input type="hidden" name="txt_lat" id="txt_lat" class="form-control">
				<input type="hidden" name="txt_lng" id="txt_lng" class="form-control">
				<br>
				<a href="grupos_scout.html" class="btn btn-primary btn-lg" role="button">Cancelar</a>
				<a href="grupos_scout.html" class="btn btn-primary btn-lg" role="button">Guardar</a>
				<br>
				<br>
		</div>
	</div>
	
		


	</form>

</div>

</body>
</html>