<?php
session_start ();
echo" 
</<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>Faire une demande </h1>
<form action ='demande_etu.php' method='post'>
<!--Zone de desscription de la demande-->
<p><label>Description de la demande</label> : <input type='textarea' name='des_demande' /></p>
<input type='submit' value='Faire une demande'>
</form>

<h1>Modifier une demande </h1>
<form action ='modif_etu.php' method='post'>
<input type='submit' value='Modifier une demande'>
</form>
<a href='membre.php'>Messagerie</a>


</body>
</html>";
echo "'".$_SESSION['login']."'";

?>