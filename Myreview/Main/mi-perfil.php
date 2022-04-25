<?php
	include("../Login/partials/ConexionDB.php");
	$Usuario="SELECT * FROM registrotbl";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myreview</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wgth@400;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous" ></script>
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body style="background-color:#0f1218;>


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
  
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br> 
    
    <div class="userinfo">
    	<table style=" background-color:rgb(0, 0, 0);">
    		<tr>
    			<?php $resultado = mysqli_query($Conexion, $Usuario);
							while($row = mysqli_fetch_assoc($resultado)){
								if($_SESSION['email'] == $row["Correo"]){?>
    			<td>
    				<p><img style="width:100%" src=<?php echo $row["rutaimagen"]; ?>  ></p>
    			</td>
    			<td>
    				<table id="table2" 	style=" background-color:rgb(48, 37, 66);" >
    					
    					<tr style="margin: auto;" >
    						<td>Nombre: <?php echo $row["Nombre"]; ?></td>
    					</tr>
    					<tr>
    						<td>Apellido: <?php echo $row["Apellido"]; ?></td>
    					</tr>
    					<tr>
    						<td>Correo: <?php echo $row["Correo"]; ?></td>
    						<?php $correo = $row["Correo"]; ?>
    					</tr>
    					<tr>
    						<td>
    							Pais:<?php echo $row["Pais"];?>
    						</td>
    					</tr>
    					<tr>
       						<td>
    							Usuario:<?php echo $row["Usuario"];?>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							Infografia:<?php echo $row["Infografia"];?>
    						</td>
    					</tr> 
    					<?php	}?>
						<?php	}?>
						
    				</table>
    			</td>
    		</tr>
    	</table>
    </div>


<br><br><br><br><br><br><br><br><br><br>
    <script src="assets/javascript/app.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>