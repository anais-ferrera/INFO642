<?php 
session_start ();
//On inclut le fichier permettant de se connecter à la bdd
include("connexion_bdd.php");
if(isset ($_POST['bouton_modifier'])){
	if(($_POST['code_produit'])!="" and ($_POST['fournisseur_produit'])!="" and ($_POST['qteUtil_produit'])!="" and ($_POST['qteCommande_produit'])!="" and ($_POST['nom_produit'])!="" and ($_POST['lien_produit'])!="" and ($_POST['description_produit'])!="" and ($_POST['puTTC_produit'])!="" and ($_POST['montantTTC_produit'])!=""){
		header("refresh:3;url=accueilEleve.php?page=2");
		$sql="UPDATE Produit SET CodeAPP='".$_POST['code_produit']."',fournisseur='".$_POST['fournisseur_produit']."',quantiteUtil='".$_POST['qteUtil_produit']."',quantiteCommande='".$_POST['qteCommande_produit']."',nom='".$_POST['nom_produit']."',lien='".$_POST['lien_produit']."',description='".$_POST['description_produit']."',puTTC='".$_POST['puTTC_produit']."',montantTTC='".$_POST['montantTTC_produit']."',id_demande='".$_POST['id_demande']."' WHERE id_produit = '".$_POST['id_produit']."'";
		$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
		echo'les modifications ont bien ete prises en compte';
	}
	else{
		header("refresh:3;url=modif_etu.php");
		echo"Erreur, il manque des infos.";
	}
}
else{


	//On verifie que tous les champs ont ete renseignes 
	if(($_POST['codeAPP'])!="" and ($_POST['fournisseur'])!="" and ($_POST['quantiteUtil'])!="" and ($_POST['quantiteCommande'])!="" and ($_POST['nom'])!="" and ($_POST['lien'])!="" and ($_POST['description'])!="" and ($_POST['puTTC'])!="" and ($_POST['montantTTC'])!=""){
		//and isset($_FILES['document'])
		
		//$stock = 'image/';
		//$nom_fichier=$_FILES['document']['name'];
		//echo chmod($_FILES['document']['tmp_name'], 0611);
		//echo $_FILES['document']['tmp_name'];
		//echo substr(sprintf('%o', fileperms($_FILES['document']['tmp_name'])), -4);
		//if (move_uploaded_file($_FILES['document']['tmp_name'], $stock.$_FILES['document']['name'])){

		
		//On insere dans la table produit le nouveau produit avec les valeurs renseignees par l'etudiant
		//,document,,'$nom_fichier'
		$sql="INSERT INTO Produit (CodeAPP,fournisseur,quantiteUtil,quantiteCommande,nom,lien,description,puTTC,montantTTC,id_demande) VALUES ('".$_POST['codeAPP']."','".$_POST['fournisseur']."','".$_POST['quantiteUtil']."','".$_POST['quantiteCommande']."','".$_POST['nom']."','".$_POST['lien']."','".$_POST['description']."','".$_POST['puTTC']."','".$_POST['montantTTC']."','".$_POST['id']."')";
		$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
	//}
		
		//si le bouton ajout a ete selectionne alors on le redirige vers la page qui permet cet ajout
		if (isset($_POST['ajout'])){
			header('location: demande_2_bis.php');
			exit();
		}

		//si envoi a ete selectionner on envoie les donnees dans la base de donnees
		if (isset($_POST['bouton_envoie'])){
			header('Status: 301 Moved Permanently', false, 301);
			header("refresh:3;url=accueilEleve.php?page=1");
			echo'La demande a bien ete envoyee.';
		}
	}
	//Si tous les champs n'ont pas ete renseignes on indique une erreur
	else{
		header("refresh:3;url=accueilEleve.php?page=1");
		echo"Erreur, il manque des infos.";

	}
}

?>
