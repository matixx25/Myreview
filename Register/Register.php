<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>myreview login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Se importa el boostrap -->
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script><!-- Se importa los scripts del boostrap -->

</head>
<body>
	<h2 style="text-align:center;">Myreview</h2><br><br><br><br>
	<h1 style="text-align:center;">REGISTRESE</h1>
	<form action="Añadir_registro.php" method="post" novalidate> <!--form es para formulario "action: es donde vamos a mandar la informacion" "method:Es como vamos a mandar la informacion"  "novalite:Hace parte del script del final"  -->
		<div class="col-xl-2 m-3"> <div class="form-group"><!--col:cantidad de columnas;xl-4:Tamaño de la caja m-2:>Separacion de la caja  -->
		<label>Nombre*</label>
		<input class="form-control" type="text" name="Nombre" minlenght="5" maxlenght="60"  required><!-- class="form-control":Clase que le da forma a la caja;required:dato obligatorio -->
		<div class="valid-feedback">Agregado</div>
	    <div class="invalid-feedback">valide esta informacion</div>
		</div></div>
		<div class="col-xl-2 m-3"> <div class="form-group">
		<label>Apellido*</label>
		<input class="form-control" type="text" name="Apellido" minlenght="5" maxlenght="60" required>
		<div class="valid-feedback">Agregado</div>
	    <div class="invalid-feedback">valide esta informacion</div>
		</div></div>
		<div class="col-xl-2 m-3"> <div class="form-group">
		<label>Correo*</label>
		<input class="form-control" type="text" name="Correo" minlenght="13" maxlenght="70" required>
		<div class="valid-feedback">Agregado</div>
	    <div class="invalid-feedback">valide esta informacion</div>
		</div></div>
		<div class="col-xl-2 m-3"> <div class="form-group">
		<label>Fecha de Nacimiento*</label>
		<input class="form-control" type="date" name="Fecha_nacimiento" min="1940-1-1" max="2050-12-31" step="10"  required>
		<div class="valid-feedback">Agregado</div>
	    <div class="invalid-feedback">valide esta informacion</div>
		</div></div>
		<div class="col-xl-2 m-3"> <div class="form-group">
		<label>Genero:</label><br> 
	 	<select name="Genero" class="form-select">
		<option value="Hombre">Hombre</option>
	  <option value="Mujer">Mujer</option>
	  <option value="No binario">No binario</option>
	  </select>
	  <div class="valid-feedback">Agregado</div>
	  <div class="invalid-feedback">valide esta informacion</div>
	  </div></div>
	                         
		<div class="col-xl-2 m-3"> <div class="form-group">
		<label>Pais*</label>
		<input class="form-control" type="text" name="Pais" minlenght="5" maxlenght="56" required>
		<div class="valid-feedback">Agregado</div>
	    <div class="invalid-feedback">valide esta informacion</div>
		</div></div>
		<div class="col-xl-2 m-3"> <div class="form-group">
		<label>Usuario*</label>
		<input class="form-control" type="text" name="Usuario" minlenght="3" maxlenght="20" required>
		<div class="valid-feedback">Agregado</div>
	    <div class="invalid-feedback">valide esta informacion</div>
		</div></div>
		<div class="col-xl-2 m-3"> <div class="form-group">
		<label>Contraseña*</label>
		<input class="form-control" type="password" name="Contraseña" minlenght="5" maxlenght="25" required>
		<div class="valid-feedback">Agregado</div>
	    <div class="invalid-feedback">valide esta informacion</div>
		</div></div>
		<div class="col-xl-2 m-3"> <div class="form-group">
		<label>Confirmar Contraseña*</label>
		<input class="form-control" type="password" name="Confirmar_contraseña" minlenght="5" maxlenght="25" required>
		<div class="valid-feedback">Agregado</div>
	    <div class="invalid-feedback">valide esta informacion</div>
		</div></div>

		
		
		
		<div class="col-xl-2 m-3"> <div class="form-group">
		<p><input type="checkbox" name="terminos_condiciones"><a  href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Terminos y condiciones</a> de <b>Myreview</b></p>
		</div></div>
		<div class="col-xl-2 m-3"> <div class="form-group">
		<p><input type="checkbox" name="terminos_condiciones">No soy un robot</p>
		</div></div>
		

		<div class="col-xl-2 m-3"> <div class="form-group">
		<button type="submit" name="Registrarse">Registrarse</button>
		</div></div>
	</form>  


	<script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
    <script>
        // Disable form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>


</body>
</html>