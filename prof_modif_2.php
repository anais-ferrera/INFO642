<?php
//On inclut le fichier permettant de se connecter à la bdd
include("connexion_bdd.php");

if(isset ($_POST['bouton_modifier'])){
	if(($_POST['code_produit'])!="" and ($_POST['fournisseur_produit'])!="" and ($_POST['qteUtil_produit'])!="" and ($_POST['qteCommande_produit'])!="" and ($_POST['nom_produit'])!="" and ($_POST['lien_produit'])!="" and ($_POST['description_produit'])!="" and ($_POST['puTTC_produit'])!="" and ($_POST['montantTTC_produit'])!=""){
		header("refresh:3;url=/~ruellee/INFO642/accueilProf?page=0");
		$sql="UPDATE Produit SET CodeAPP='".$_POST['code_produit']."',fournisseur='".$_POST['fournisseur_produit']."',quantiteUtil='".$_POST['qteUtil_produit']."',quantiteCommande='".$_POST['qteCommande_produit']."',nom='".$_POST['nom_produit']."',lien='".$_POST['lien_produit']."',description='".$_POST['description_produit']."',puTTC='".$_POST['puTTC_produit']."',montantTTC='".$_POST['montantTTC_produit']."',id_demande='".$_POST['id_demande']."' WHERE id_produit = '".$_POST['id_produit']."'";
		$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);

		echo'les modifications ont bien ete prises en compte';
	exit();
	}
	else{
		header("refresh:3;url=/~ruellee/INFO642/accueilProf?page=0");
		echo"Erreur, il manque des infos.";
}
}