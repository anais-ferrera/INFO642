<?php
//On inclut le fichier permettant de se connecter à la bdd
include("connexion_bdd.php");

//On insere une nouvelle demande dans la base
//On verifie que tous les champs ont ete renseignes 
if(isset($_POST['codeAPP']) and isset($_POST['fournisseur'])and isset($_POST['quantiteUtil']) and isset($_POST['quantiteCommande']) and isset($_POST['nom']) and isset($_POST['lien']) and isset($_POST['puTTC']) and isset($_POST['montantTTC'])){
	//$sql="INSERT INTO Demande(description) VALUES ('".$_POST['des_demande']."')";
	//On insere dans la table capteur le nouveau capteur avec les valeurs renseignees par l'utilisateur
	$sql="INSERT INTO Produit (CodeAPP,fournisseur,quantiteUtil,quantiteCommande,nom,lien,puTTC,montantTTC,id_demande) VALUES ('".$_POST['codeAPP']."','".$_POST['fournisseur']."','".$_POST['quantiteUtil']."','".$_POST['quantiteCommande']."','".$_POST['nom']."','".$_POST['lien']."','".$_POST['puTTC']."','".$_POST['montantTTC']."','".$_POST['id']."')";
	$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
	echo'La demande a bien ete envoyee.';

}

?>