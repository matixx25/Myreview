<!DOCTYPE html>
<html>
<head>
<!-- End WOWSlider.com -->
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myreview</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wgth@400;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous" ></script>
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body>
	

	
	<nav class="menu">
		<section class="menu_container">


			<h1 class="menu_logo">Myreview</h1>

			
			  		<form class="container">
				    <div class="input-group">
				    	
				      <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
				      <button class="input-group-text" id="basic-addon1"><img src="assets/search.svg" class=""></button>
				  		
				   </div>
				   </form>
			  	
			



			<ul class="menu_links">

				<li class="menu_item">
					<a class="menu_link">Home</a>
				</li>



				<li class="menu_item menu_item--show">
					<a class="menu_link">Perfil <img src="assets/arrow.svg" class="menu_arrow"></a>
					<ul class="menu_nesting">

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">F</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">T</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">C</a>
						</li>

						<li class="menu_inside">
							<a class="menu_link menu_link--inside">P</a>
						</li>
					</ul>
				</li>


					<li class="menu_item menu_item--show">
						<a class="menu_link">About<img src="assets/arrow.svg" class="menu_arrow"></a>
						<ul class="menu_nesting">

							<li class="menu_inside">
								<a class="menu_link menu_link--inside">About 1</a>
							</li>

							<li class="menu_inside">
								<a class="menu_link menu_link--inside">About 2</a>
							</li>

							<li class="menu_inside">
								<a class="menu_link menu_link--inside">About 3</a>
							</li>

							<li class="menu_inside">
								<a class="menu_link menu_link--inside">About 4</a>
							</li>
						</ul>
					</li>

				<li class="menu_item">
					<a class="menu_link">Contact</a>
				</li>

				<li class="menu_item menu_item--show">
					<img src="assets/img/perfil_default.png" class="menu_item menu_item--show" id="picture_profile">
					<ul class="menu_profile">

						<li class="menu_inside">
							<p class="menu_link menu_link--inside">Cantidad de rese??as</p>
							<img src="assets/img/perfil_default.png" id="picture_profile2" >
						</li>

					</ul>


				</li>

			</ul>

			<div class="menu_hamburger">
				
				<img src="assets/menu.svg" class="menu_img">
			</div>
			<?php 
				session_start();
				if (!$_SESSION['auth']) {
					header("Location: ../Login/Login.php");
				} 
			?>

			<!---
			<?php

				if (isset($_SESSION['auth'])) {
					if ($_SESSION['auth']) {
						print('Hola, '.$_SESSION['name']);
						print('<br><br><br><a href="../Login/Logout.php">Logout</a>');
					} else {
						print('<a href="../Login/Login.php">Login</a> or
						<a href="../Login/Singup.php">Sing up</a>');
					}		
				}
			?>
			--->
		</section>

		

		</nav>
	<script src="assets/javascript/app.js"></script>



	

	
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/fantasa.png" alt="Fantas??a" title="Fantas??a" id="wows1_0"/></li>
		<li><img src="data1/images/futurismo.png" alt="Futurismo" title="Futurismo" id="wows1_1"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/terror.png" alt="slider html" title="Terror" id="wows1_2"/></a></li>
		<li><img src="data1/images/realismo_magico.png" alt="Realismo Magico" title="Realismo Magico" id="wows1_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Fantas??a"><span><img src="data1/tooltips/fantasa.png" alt="Fantas??a"/>1</span></a>
		<a href="#" title="Futurismo"><span><img src="data1/tooltips/futurismo.png" alt="Futurismo"/>2</span></a>
		<a href="#" title="Terror"><span><img src="data1/tooltips/terror.png" alt="Terror"/>3</span></a>
		<a href="#" title="Realismo Magico"><span><img src="data1/tooltips/realismo_magico.png" alt="Realismo Magico"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript photo gallery</a> by WOWSlider.com v9.0</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<a href="addbook.php "><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALpJREFUSEvdldENwjAMRF8nYITCJoxCJ4NRGAU2YAOQJSKlEb3YVisQ+Y3vLj5bl4GNz7AxP0rgCJyBffARN2ACroZTAlY4BslLuWEPPYHnuzpq4wynwF8VUOKrdJASaEFukmYRFjvoCZT7pcUq8/xdgfrlbvvqNe1Z9F8CKkHSQ/bGklvgAey8rE3dvaSwGrLF9SWRqEZ++hTX2XCTTaoOku7MYbVA1nP5X9SXWc/dAqtY0pJEv8PwI16SVTgZvIpLeQAAAABJRU5ErkJggg=="/></a>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p>	hola</p>	

</body>
</html>
	
	
