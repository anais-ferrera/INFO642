<?php
	//Anaïs Ferrera IDU3 

	include("connexion_bdd.php");
	//On se connecte à la base de donnees et on verifie que le login et le motdepasse rentres existent bien
	$sqlE="SELECT Etudiant.mail as login, Etudiant.mdp as mdp from Etudiant where Etudiant.mail = '".$_POST['login']."' and Etudiant.mdp ='".$_POST['pwd']."'"; 
	$sqlP="SELECT Enseignant.mail as loginP, Enseignant.mdp as mdpP from Enseignant where Enseignant.mail = '".$_POST['login']."' and Enseignant.mdp ='".$_POST['pwd']."'";
	$sqlST="SELECT ServiceTechnique.mail as loginST, ServiceTechnique.mdp as mdpST from ServiceTechnique where ServiceTechnique.mail = '".$_POST['login']."' and ServiceTechnique.mdp ='".$_POST['pwd']."'";
	$resultE = mysql_query($sqlE) or die("Requête invalide: ". mysql_error()."\n".$sqlE);
	$resultP = mysql_query($sqlP) or die("Requête invalide: ". mysql_error()."\n".$sqlP);
	$resultST = mysql_query($sqlST) or die("Requête invalide: ". mysql_error()."\n".$sqlST);
	$rowE = mysql_fetch_assoc($resultE);
	$rowP = mysql_fetch_assoc($resultP);
	$rowST = mysql_fetch_assoc($resultST);

	$login_valideE = $rowE['login'];
	$login_valideP = $rowP['loginP'];
	$login_valideST = $rowST['login'];
	$pwd_valideE = $rowE['mdp'];
	$pwd_valideP = $rowP['mdpP'];
	$pwd_valideST = $rowST['mdp'];



	// on teste si nos variables sont définies
	if (isset($_POST['login']) && isset($_POST['pwd'])) {

		// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
		if ($login_valideE == $_POST['login'] && $pwd_valideE == $_POST['pwd']) {
			// dans ce cas, tout est ok, on peut démarrer notre session
			session_start ();
			// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) 
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['pwd'] = $_POST['pwd'];

			// on redirige notre visiteur vers une page de notre section membre 
			header('location: /~ruellee/INFO642/accueilEleve');
		
		}
		elseif ($login_valideP == $_POST['login'] && $pwd_valideP == $_POST['pwd']){
			// dans ce cas, tout est ok, on peut démarrer notre session
			session_start ();
			// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) 
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['pwd'] = $_POST['pwd'];

			// on redirige notre visiteur vers une page de notre section membre 
			header('location: /~ruellee/INFO642/accueilProf');
		}
		elseif ($login_valideST == $_POST['login'] && $pwd_valideST == $_POST['pwd']){
			// dans ce cas, tout est ok, on peut démarrer notre session
			session_start ();
			// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) 
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['pwd'] = $_POST['pwd'];

			// on redirige notre visiteur vers une page de notre section membre 
			header('location: /~ruellee/INFO642/accueilST');
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

