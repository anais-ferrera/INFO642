<?php
session_start();
?>
<style>
<?php include 'Style.css'; ?>
</style>

<?php

include("connexion_bdd.php");

echo'<title>Messagerie</title>';
echo'<div id="banniere2"></div>';


if (isset($_POST['mail']) and isset($_POST['objet']) and isset($_POST['corps'])){

	echo"<br><b>Le message a ete envoye<b></br>";
 
 $sql = "insert into Messages(expediteur,destinataire,objet,corps) values('".$_SESSION['login']."','".$_POST['mail']."', '".$_POST['objet']."','".$_POST['corps']."')";

 $result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);

}

else{
	echo"Erreur!";
}

echo "<input type=button onclick=window.location.href='http://tp-epu.univ-savoie.fr/~ferreraa/INFO642/accueilST.php?page=1'; value= Revenir />";

echo "<div id='footer'>";
echo " <p>Polytech Annecy-Chambéry - Module INFO642 - Base de données et Technologies web </p>";
echo "</div>";
?>
