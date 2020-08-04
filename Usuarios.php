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
								<li><a href="index.html">Volver</a></li>
							
							
							</ul>
						</nav>
					</header>


					<div id="main">


<?php
$Nombre = $_POST['name'];
$Apellido = $_POST['email'];
$Telefono = $_POST['telefono'];
$Email = $_POST['email'];
$Mensaje = $_POST['message'];
 
echo "<h2>Ya fue enviada su solicitud</h2>";
echo "El Nombre recibido es: " . $Nombre . "<br/>";
echo "El Apellido recibido es: " . $Apellido . "<br/>";
echo "El Telefono recibido es: " . $Telefono . "<br/>";
echo "El Email recibido es: " . $Email . "<br/>";
echo "El Mensaje recibido es: " . $Mensaje . "<br/>";
?>



