<html>
<head>
	<meta charset="utf-8">
	 <link href='src/main.css' rel='stylesheet'>
     <link href='https://cdn.jsdelivr.net/flexboxgrid/6.3.0/flexboxgrid.min.css' rel='stylesheet'>
	<title>UAEH</title>
	<script> 
		function comprobarClave(){ 
		   	clave1 = document.formulario.pass1.value 
		   	clave2 = document.formulario.pass.value 

		   	if (clave1 == clave2) {
		      	document.formulario.submit();
		   	}
		   	else 
		      	alert("Las dos claves son distintas...");
		} 

		function comprobarClave2(){ 
		   	clave3 = document.formulari.pas1.value 
		   	clave4 = document.formulari.pas.value 

		   	if (clave3 == clave4) {
		   		alert("Las dos claves son iguales...");
		      	document.formulari.submit();
		   	}
		   	else 
		      	alert("Las dos claves son distintas..."); 
		} 
	</script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#academico").hide();
	    $("#alumno").hide();
	    $("#al").click(function(){
	    	$("#tipo").hide();
	        $("#alumno").show();
	    });
	    $("#aca").click(function(){
	    	$("#tipo").hide();
	        $("#academico").show();
	    });
	});
</script>
</head>
<body>
	<div class="row center-xs">
	    	<div class="col-xs-6">
		        <div class="box">
		            <img class="imgs" src="src/vinculacion.png">
		        </div>
		    </div>
	</div>

	<div id="tipo" class="form">
		<p>Tipo</p>
		<button id="al">Alumno</button>
		<button id="aca">Academico</button>
	</div>

	<div id="academico" class="login-page">
		<div class="form">
			<form class="login-form" action="config2.php" method="post" name="formulario">
			<p>Núm. Cuenta</p>
			<input type="text" name="cuent" value="" required>
			<p>Nombre</p>
			<input type="text" name="nombr" value="" required>
			<p>Telefono</p>
			<input type="text" name="te" value="" required> 
			<p>Correo</p>
			<input type="email" name="corre" value="" required>
			<p>Tutor</p>
			<input type="text" name="tuto" value="" required>
			<p>Contraseña</p>
			<input type="password" name="pass1" value="" required>
			<p>Confirmar contraseña</p>
			<input type="password" name="pass" value="" required></br></br>
			<input type="button" value="Ingresar" onClick="comprobarClave()">
			</form>
		</div>
	</div>

	<div id="alumno" class="login-page">
		<div class="form">
			<form class="login-form" action="config.php" method="post" name="formulari">
			<p>Núm. Cuenta</p>
			<input type="text" name="cuenta" value="" required>
			<p>Nombre</p>
			<input type="text" name="nombre" value="" required>
			<p>Telefono</p>
			<input type="text" name="tel" value="" required>
			<p>Turno</p>
			<input type="text" name="turno" value="" required>
			<p>Correo</p>
			<input type="email" name="correo" value="" required>
			<p>Licenciatura</p>
			<input type="text" name="lic" value="" required>
			<p>Tutor</p>
			<input type="text" name="tutor" value="" required>
			<p>Contraseña</p>
			<input type="password" name="pas1" value="" required>
			<p>Confirmar contraseña</p>
			<input type="password" name="pas" value="" required></br></br>
			<input type="button" value="Ingresar" onClick="comprobarClave2()">
			</form>
		</div>
	</div>
</body>
</html>