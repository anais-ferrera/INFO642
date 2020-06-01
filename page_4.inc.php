<html>
	<form action ='accueil.php' method='post'>
	<?php
	session_unset();
	session_destroy();
	?>
	<div id="deco">
	<p>Etes-vous sur de vous deconnecter ?
	<h1><input type='submit' value='Se deconnecter'></h1>
</p>
   </div>
	</form>
</html>
