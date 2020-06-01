<?php

	echo' 


<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="Style.css" />
      	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title>Créer une demande</title>
		
	</head>


	<body>

		
		<div id="contenu">
			<h1>Faire une demande </h1>
			<form action ="demande_etu.php" method="post">
			<!--Zone de desscription de la demande-->
			<p><label>Description de la demande</label> : <input type="textarea" name="des_demande" /></p>
			<input type="submit" value="Faire une demande">
			</form>
		</div>
		


		<div id="footer">
			<p>Polytech Annecy-Chambéry - Module INFO642 - Base de données et Technologies web</p>

		</div>





	</body>


</html>';
?>