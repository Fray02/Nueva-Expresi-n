<!DOCTYPE HTML>

<html>
	<head>
		<title>Nueva Expresión</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

			<div id="wrapper">

				
					<header id="header">

						<div class="logo">

							<span class="icon fa-">


						<div class="caja"><img src="L.png" style=" margin-left: 2px; margin-top: 5px; " width="75px" height="75px"></center>
								</div> </span> 
						</div>



						<div class="content">
							<div class="inner">
								<font color= blue> <h1>Nueva Expresión</h1> </font>
								<p>Banda Musical </p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="index.html#Talleres">Volver</a></li>
							
							
							</ul>
						</nav>
					</header>


					<div id="main">

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$taller = $_POST['talleres'];

 
echo "<h2>Solicitud enviada</h2>";
echo "El Nombre recibido es: " . $name . "<br/>";
echo "El Email recibido es: " . $email . "<br/>";
echo "El Taller recibido es: " . $taller . "<br/>";
?>


