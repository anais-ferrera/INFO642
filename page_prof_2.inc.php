<html>
	<form action ='accueil.php' method='post'>
	<?php
	session_unset();
	session_destroy();
	?>
	<input type='submit' value='Se deconnecter'>
	</form>
</html>
