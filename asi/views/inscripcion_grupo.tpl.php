
<!DOCTYPE html>
<html>
<head>
	<title>
		Inscripcion de Grupo
	</title>

	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/custom.css">
  	<link type="text/css" href="css/map.css" rel="stylesheet" media="all" />
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  	<script type="text/javascript" src="js/mapa.js"></script>
<meta charset="UTF-8">
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
  	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <a class="navbar-brand tema" href="#">Scout</a>
    
    <a class="navbar-brand tema" href="#">El Salvador</a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <br>
      <img id="logo1" src="img/ases1.jpg" class="img-responsive hidden-xs hidden-sm" alt="Responsive image">	
      

    </div>
    
    <br>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="solicitudes_de_inscripcion.html">Inscripciones</a></li>

        <li><a href="solicitudes_renovacion.html">Renovación</a></li>
        <!--<li><a href="grupos_scout.html">Grupos Scout</a></li> -->
        <li><a href="miembros_scout.html">Miembros Scout</a></li>
        <img id="logo2" src="img/logo1.png" class="img-responsive" alt="Responsive image">

      </ul>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
  </nav>
	

	<div class="container">
		<form method="POST">
			
		<div class="row">
			<h2 class="text-center">Inscripción de Grupo</h2>
			<hr class="line">
			<div class="col-lg-3">
				<label>Nombre de Grupo:</label>
				<input type="text" name="nomGrupo" class="form-control"><br>
				<label>Número de Grupo:</label>
				<input type="text" name="numGrupo" class="form-control"><br>
				<label>Fecha de Fundación:</label>
				<input type="date" name="fechFundacion" class="form-control"><br>
				<label>Exclusivo:</label>
				<br>
				<label>
				Si	
				<input type="radio" checked="false" name="exclusivo">	
				</label>
				<label>
				&nbsp;&nbsp;No	
				<input type="radio" checked="true" name="exclusivo">	
				</label><br><br>
				<label>Lugar de Reunión:</label>
				<input type="text" name="lugarReunion" class="form-control"><br>	
				<label>Propietario Lugar:</label>
				<input type="text" name="propLugar" class="form-control"><br>
				<label>Teléfono:</label>
				<input type="text" name="telefono" class="form-control"><br>	
			</div>	
			<div class="col-lg-4"> 
				<label>Municipio:</label><br>
				<select class="form-control">
					<option>
						San Marcos
					</option>
					<option>
						San Salvador
					</option>
						
				</select>
				<br>
				
				<label>Departamento:</label>
					<select class="form-control"><br>
						<option>San Salvador</option>
						<option>La Libertad</option>
					</select>
				<br>	
				<label>Calle:</label>
				<input type="text" name="calle" class="form-control">
				<br>	
				<label>Colonia:</label>
				<input type="text" name="colonia" class="form-control">
				<br>
				<label>Número de Casa:</label>
				<input type="text" name="numCasa" class="form-control">
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