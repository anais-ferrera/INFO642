<?php
    session_start (); 
?>
<!DOCTYPE HTML>

<html>

	<head>
		<title></title>
		<meta content="info">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="Style.css" />
    </head>
  
	<body>


  
		<div id="fond">
			<div id="banniere1">
				
      	<p>Gestion des commandes</p>
    	</div>
  
  
			<div id="menu">
			    <ul id="lemenu">
					<?php
					$encours = array(" "," "," ");

					if(!isset($_GET["page"])) { 
						$page=0;
					}else{
						$page=$_GET["page"];
					}
					$encours[$page] = "encours";
				   
					echo "<li><a href=\"?page=0\" class=\"btn_menu $encours[0]\">Demande en cours</a></li>\n";
					echo "<li><a href=\"?page=1\" class=\"btn_menu $encours[1]\">Messagerie</a></li>\n";
					echo "<li><a href=\"?page=2\" class=\"btn_menu $encours[2]\">Deconnexion</a></li> \n";   
					?> 
				</ul>
			</div>
			<div id="banniere2">
			</div>
  
			<div id="contenu">
				<?php
					if( file_exists("page_prof_".$page.".inc.php") ){
						include("page_prof_".$page.".inc.php");
					 }
				?>
			</div>
  
			
 
		</div>
		<div id="footer">
				<p>Polytech Annecy-Chambéry - Module IGI642- Base de données et Technologies web</p>
			</div>
  
	</body>
</html>
