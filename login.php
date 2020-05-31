<?php
//Anaïs Ferrera IDU3 

include("connexion_bdd.php");
//On se connecte à la base de donnees et on verifie que le login et le motdepasse rentre existent bien
$sql="SELECT Etudiant.mail as login, Etudiant.mdp as mdp from Etudiant where Etudiant.mail = '".$_POST['login']."' and Etudiant.mdp ='".$_POST['pwd']."'";
$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
$row = mysql_fetch_assoc($result);

$login_valide = $row['login'];
$pwd_valide = $row['mdp'];



// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
		// dans ce cas, tout est ok, on peut démarrer notre session
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) 
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

		// on redirige notre visiteur vers une page de notre section membre
		header('location: /~ruellee/INFO642/acceuilEleve.php');
		
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=page_0.inc.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas declarees.';
}
?>