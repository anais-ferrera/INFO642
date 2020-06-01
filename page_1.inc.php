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

		<div id="banniere1ETU">
			<p>Gestion des commandes</p>
		</div>

		<div id="menuETU">
			<ul>
				<li><a href="page_0.inc.php">Demande en cours</a></li>	<!-- sinon on voit plus "acceuil" ds le menu qd on est dans acceuil -->					
				<li><a href="page_1.inc.php">Creer une demande</a></li>
				<li><a href="page_2.inc.php">Modifier</a></li>
				<li><a href="page_3.inc.php">Messagerie</a></li>
				<li><a href="page_4.inc.php">Deconnexion</a>

				</li>
				
			</ul>
		</div>

		<div id="banniere2ETU">	
		</div>
		

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