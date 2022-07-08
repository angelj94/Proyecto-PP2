<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="estilo.css" rel="stylesheet" type="text/css" />  
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  </head>
  <body id="body" class="m=0 row justify-content-center text-center">


<!-- Barra de navegador boostrap-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
 <div class="container-fluid">
  <a class="navbar-brand" href="#"> Speed Data</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="produ.html">Produccion</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="stock.html">stock</a>
      </li>
      <li class="nav-item ">
          <a class="nav-link" href="imp_etiq.html">Etiquetas</a>  
      <li class="nav-item">
          <a class="nav-link" href="recetas.html">Recetas</a>
      </li>
    </ul>
    
  </div>
</nav>




<!-- Formulario de ejemplo-->

		<h1>MODIFICACION Y CONSULTA DE STOCK</h1>

        <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <select class="form-select" id="tipoDeMaterial" aria-label="Tipo de material">
                <option value="Arena">Arena</option>
                <option value="cal">cal</option>
                <option value="cemento">cemento</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <label for="tipoDeMaterial">Tipo de material</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="codigoSap" type="text" placeholder="Codigo Sap" data-sb-validations="required" />
            <label for="codigoSap">Codigo Sap</label>
            <div class="invalid-feedback" data-sb-feedback="codigoSap:required">Codigo Sap is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="lote" type="text" placeholder="Lote" data-sb-validations="required" />
            <label for="lote">Lote</label>
            <div class="invalid-feedback" data-sb-feedback="lote:required">Lote is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="proveedor" aria-label="Proveedor">
                <option value="Proveedor1">Proveedor1</option>
                <option value="Proveedor2">Proveedor2</option>
                <option value="3Proveedor">3Proveedor</option>
                <option value="4Proveedor">4Proveedor</option>
                <option value="5Proveedor">5Proveedor</option>
            </select>
            <label for="proveedor">Proveedor</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="peso" type="text" placeholder="Peso" data-sb-validations="required" />
            <label for="peso">Peso</label>
            <div class="invalid-feedback" data-sb-feedback="peso:required">Peso is required.</div>
        </div>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input" id="aprobado" type="checkbox" name="aprobado" />
                <label class="form-check-label" for="aprobado">Aprobado</label>
            </div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


<!-- Footer acomodor logo falta -->
<footer>
     &copy; 2022
     <img src="img/logo.png" width="100"
       height="80">

 </footer>
  </body>
</html>