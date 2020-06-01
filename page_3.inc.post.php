<?php
session_start();
?>
<style>
<?php include 'Style.css'; ?>
</style>

<?php

include("connexion_bdd.php");

if (isset($_POST['mail']) and isset($_POST['objet']) and isset($_POST['corps'])){

	echo"Tous les champs sont remplis";
	echo"Le message a bien ete envoye";
 
 $sql = "insert into Messages(expediteur,destinataire,objet,corps) values('".$_SESSION['login']."','".$_POST['mail']."', '".$_POST['objet']."','".$_POST['corps']."')";

 $result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);

}

else{
	echo"Attention certains champs ne sont pas remplis ! ";
}

echo "<input type=button onclick=window.location.href='http://tp-epu.univ-savoie.fr/~ferreraa/INFO642/accueilEleve.php?page=3'; value= Revenir />";
?>
