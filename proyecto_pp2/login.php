<!DOCTYPE html>
<html>
<head>
   
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<meta charset="utf-8">
    <!-- Estilos en css -->

	<link rel="stylesheet" type="text/css" href="estilo.css">
    <h1>Ingreso a Speed data System</h1>
</head>
<body id="body" class="m=0 row justify-content-center text-center">

<!-- Formulario login de ejemplo -->
<div class="container px-5 my-5">

    <form id="contactForm" data-sb-form-api-token="API_TOKEN">

        <div class="form-floating mb-3">
            <input class="form-control" id="usuario" type="text" placeholder="Usuario" data-sb-validations="required" />
            <label for="usuario">Usuario</label>
            <div class="invalid-feedback" data-sb-feedback="usuario:required">Usuario is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="clave" type="text" placeholder="Clave" data-sb-validations="required" />
            <label for="clave">Clave</label>
            <div class="invalid-feedback" data-sb-feedback="clave:required">Clave is required.</div>
        </div>
        <div class="btn-group-vertical " >                                   <!--Color borde|tipo de boton|alineacion|tamaño -->
       <a href="index.php " button type="button" style="margin: 5px"   class="border-dark rounded btn btn-outline-primary btn-block  btn-lg "><h2>Ingresar</h2></button></a>
        
        </div>
    </form>
    
</div>

<!-- Footer acomodor logo falta -->
 <footer>
     &copy; 2022
     <img src="img/logo.png" width="100"
       height="80">

 </footer>
</body>

</html>