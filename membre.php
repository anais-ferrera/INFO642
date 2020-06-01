<?php
session_start();
// on vérifie toujours qu'il s'agit d'un membre qui est connecté


?>

<html>
<head>
<title>Espace membre</title>
</head>

<body>
Bienvenue <?php echo stripslashes(htmlentities(trim($_SESSION['login']))); ?> !<br /><br />
<?php
include("connexion_bdd.php");

$sql1='SELECT id_etu FROM Etudiant WHERE mail = "'.$_SESSION['login'].'"';
$result = mysql_query($sql1) or die("Requête invalide: ". mysql_error()."\n".$sql1);
$row = mysql_fetch_assoc($result);
$id_etu = $row["id_etu"];

// on prépare une requete SQL cherchant tous les titres, les dates ainsi que l'auteur des messages pour le membre connecté
$sql = 'SELECT titre, date, Etudiant.mail as expediteur, messages.id as id_message FROM messages, Etudiant WHERE id_destinataire="'.$id_etu.'"  AND id_expediteur=Etudiant.id_etu ORDER BY date DESC';
//$sql = 'SELECT titre, date, membre.login as expediteur, messages.id as id_message FROM messages, membre WHERE (id_destinataire="'.$_SESSION['id_etu'].'" OR id_destinataire="'.$_SESSION['id_ens'].'"id_destinataire="'.$_SESSION['id_st'].'") AND id_expediteur=membre.id ORDER BY date DESC';
// lancement de la requete SQL
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$nb = mysql_num_rows($req);

if ($nb == 0) {
	echo 'Vous n\'avez aucun message.';
}
else {
	// si on a des messages, on affiche la date, un lien vers la page lire.php ainsi que le titre et l'auteur du message
	while ($data = mysql_fetch_array($req)) {
	echo $data['date'] , ' - <a href="lire.php?id_message=' , $data['id_message'] , '">' , stripslashes(htmlentities(trim($data['titre']))) , '</a> [ Message de ' , stripslashes(htmlentities(trim($data['expediteur']))) , ' ]<br />';
	}
}
mysql_free_result($req);
mysql_close();
?>
<br /><a href="envoyer.php">Envoyer un message</a>
</body>
</html>
