<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myreview</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wgth@400;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous" ></script>
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" href="assets/css/add_book.css">
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body style="background-color:#0f1218;">


	<?php 
		session_start();
		if (!$_SESSION['auth']) {
			header("Location: ../Login/Login.php");
		} 
 	?>

	
	<nav class="menu">
		<section class="menu_container">


			<h1 class="menu_logo"><a href="index.php">Myreview</a></h1>

			
			  		<form class="container">
				    <div class="input-group">
				    	
				      <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" id="search">
				      <button class="input-group-text" id="basic-addon1"><img src="assets/search.svg" class=""></button>
				  		
				   </div>
				   </form>
			  	
			



			<ul class="menu_links">

				<li class="menu_item">
					<a class="menu_link">Foros</a>
				</li>




				<li class="menu_item menu_item--show">
					<a class="menu_link">Generos<img src="assets/arrow.svg" class="menu_arrow"></a>
					<ul class="menu_nesting">

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">Narrativo</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">Lírico</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">Dramático</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">Didáctico</a>
						</li>

						
					</ul>
				</li>

				

				

			</ul>

			<div class="menu_hamburger">
				
				<img src="assets/menu.svg" class="menu_img">
			</div>

			<div class="navigation">
				<div class="userBx">
					<div class="imgBx">
						<img src="assets/img/cara.jpg">
					</div>
					<p class="username">Matixx25</p>
				</div>
				<div class="menuToggle"></div>
					<ul class="menu2">
						<li><a href="#"><ion-icon name="person-outline"></ion-icon> Mi Perfil</a></li>
						<li><a href="#"><ion-icon name="chatbubbles-outline"></ion-icon> Mensajes</a></li>
						<li><a href="#"><ion-icon name="notifications-outline"></ion-icon> Notificasiones</a></li>
						<li><a href="#"><ion-icon name="settings-outline"></ion-icon> Configuracion</a></li>
						<li><a href="#"><ion-icon name="help-outline"></ion-icon> Ayuda y soporte</a></li>
						<li><a href="partials/logout.php"><ion-icon name="log-out-outline"></ion-icon> Cerrar Sesión</a></li>
					</ul>
			</div>
		</section>
		</nav>



	<div class="navigation2">
		<div class="menuToggle2"></div>
		<ul>
			<li class="list  active" style="--clr:#f44336;">
				<a href="libros.php">
					<span class="icon"><ion-icon name="book-outline"></ion-icon></span>
					<span class="text">Mis libros</span>
				</a>
			</li>

			<li class="list" style="--clr:#ffa117;">
				<a href="#">
					<span class="icon"><ion-icon name="heart-outline"></ion-icon></span>
					<span class="text">Favoritos</span>
				</a>
			</li>
	
			<li class="list" style="--clr:#0fc70f;">
				<a href="#">
					<span class="icon"><ion-icon name="people-outline"></ion-icon></span>
					<span class="text">Amigos</span>
				</a>
			</li>

			<li class="list" style="--clr:#2196f3;">
				<a href="addbook.php">
					<span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
					<span class="text">Publica un libro</span>
				</a>
			</li>
			<li class="list" style="--clr:#b145e9;">
				<a href="#">
					<span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
					<span class="text">Configuracion</span>
				</a>
			</li>
		</ul>
	</div>



      




	<script>
		let menuToggle = document.querySelector('.menuToggle');
		let navigation = document.querySelector('.navigation');
		menuToggle.onclick  = function() {
			navigation.classList.toggle('active')
		}
	</script>




	<script>
		const menuToggle2 = document.querySelector('.menuToggle2');
		const navigation2 = document.querySelector('.navigation2');
		menuToggle2.onclick = function(){
			navigation2.classList.toggle('open')
		}

	</script>



   <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <?php
                	if (isset($_GET['error'])) {
                        if ($_GET['error']==1) {
                        ?>

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                Error, no se pudo agregar el libro
                            </div>
                <?php 
                	}
                }
                ?>





            <form action="../Login/partials/addbookdb.php" method="POST" enctype="multipart/form-data">


                <div class="d-flex flex-wrap book-box">


                	<div class="box-title container col-xl-1 m-5 text-left">


	                	<div class="form-col">
		                	<div class=" xl-1 m-4 text-left">
		                		<input type="text"  class="form-control"  name="link" id="link" placeholder="Link de compra" name="link"  required>
		                	</div>
		                </div>

			            <div class="box-file"> <div id="preview"></div>	</div><br><br>


		                <div class="form-col">
			                    <div >
			                    	
			                        <input class="form-control" type="file" style="width: auto;background-color:#0f1218;border-color:rgb(16, 19, 128);box-shadow: 0px 0px 12px rgb(68, 74, 255);text-shadow: 0px 0px 12px rgb(68, 74, 255);color:rgb(31, 37, 211);border-radius:10px;" name="foto" id="file"  required>				                        
			                    </div>
			                </div>
		            	</div>
			           


		

	                	<div class="book-description container col-xl-6 m-6 mt-4 text-center">

	                	

			                <div class="form-col">
			                    <div class=" xl-8 m-5 text-left">                 	
			                    	<input type="text" class="form-control" name="title" style="border-top: none;"placeholder="Titulo" id="title" required>
			                    </div>
			                </div>

			                <div class="form-col">
			                    <div class=" xl-12 m-5 text-left">                   	
			                    	<input type="text" class="form-control" name="author" placeholder="Autor" id="author" required>
			                    </div>
			                </div>

			               
			                <div class="form-col">
			                	<div class=" xl-8 m-5 text-left">
			                		<textarea  class="form-control" style="" name="resume"  rows="8" cols="50" placeholder="Resumen" id="Resume" required></textarea>
			                	</div>
			                </div>

			                <div class="col-md">
							    <div class="xl-8 m-5 text-left form-floating">
							      <select class="form-select" id="floatingSelectGrid" style="background-color:#0f1218;border-color:rgb(16, 19, 128);box-shadow: 0px 0px 12px rgb(68, 74, 255);text-shadow: 0px 0px 12px rgb(68, 74, 255);color:rgb(31, 37, 211);border-radius:10px;" aria-label="Floating label select example">
							        <option value="narrativo">Narrativo</option>
							        <option value="lirico">Lírico</option>
							        <option value="dramatico">Dramático</option>
							        <option value="didactico">Didáctico</option>
							      </select>
							      <label for="floatingSelectGrid" style="color:#fff;">¡Selecciona un genero literario para tu libro!</label><br><br>
		    					</div>
		    				</div>


		    				<div class="form-group">
	                        	<button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
	                    	</div>
                    </div>
                </div>
	    	</form>
	    		

                    



                    
            </div>
        </div>
    </div>
    <script src="assets/javascript/app.js"></script>


    <script type="text/javascript">
				document.getElementById("file").onchange = function(e) {
			let reader = new FileReader();
		  
		  reader.onload = function(){
		    let preview = document.getElementById('preview'),
		    		image = document.createElement('img');

		    image.src = reader.result;
		    
		    preview.innerHTML = '';
		    preview.append(image);
		  };
		 
		  reader.readAsDataURL(e.target.files[0]);
		}
    </script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
