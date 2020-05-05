<?php
//On inclut le fichier permettant de se connecter à la bdd
include("connexion_bdd.php");


//On verifie que tous les champs ont ete renseignes 
if(($_POST['codeAPP'])!="" and ($_POST['fournisseur'])!="" and ($_POST['quantiteUtil'])!="" and ($_POST['quantiteCommande'])!="" and ($_POST['nom'])!="" and ($_POST['lien'])!="" and ($_POST['description'])!="" and ($_POST['puTTC'])!="" and ($_POST['montantTTC'])!=""){
	
	//On insere dans la table produit le nouveau produit avec les valeurs renseignees par l'etudiant
	$sql="INSERT INTO Produit (CodeAPP,fournisseur,quantiteUtil,quantiteCommande,nom,lien,description,puTTC,montantTTC,id_demande) VALUES ('".$_POST['codeAPP']."','".$_POST['fournisseur']."','".$_POST['quantiteUtil']."','".$_POST['quantiteCommande']."','".$_POST['nom']."','".$_POST['lien']."','".$_POST['description']."','".$_POST['puTTC']."','".$_POST['montantTTC']."','".$_POST['id']."')";
	$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
	
	//si le bouton ajout a ete selectionne alors on le redirige vers la page qui permet cet ajout
	if (isset($_POST['ajout'])){
		header('Status: 301 Moved Permanently', false, 301); 
		header('Location : /~ferreraa/INFO642/demande_2_bis.php');
		exit();
	}

	//si envoi a ete selectionner on envoie les donnees dans la base de donnees
	if (isset($_POST['bouton_envoie'])){
		echo"'".$_POST['id']."'";
		echo'La demande a bien ete envoyee.';
	}

}
//Si tous les champs n'ont pas ete renseignes on indique une erreur
else{
	echo"Erreur, il manque des infos.";
}

?>