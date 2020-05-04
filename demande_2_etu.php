<?php
//On inclut le fichier permettant de se connecter à la bdd
include("connexion_bdd.php");

//On insere une nouvelle demande dans la base
//On verifie que tous les champs ont ete renseignes 
if(($_POST['codeAPP'])!="" and ($_POST['fournisseur'])!="" and ($_POST['quantiteUtil'])!="" and ($_POST['quantiteCommande'])!="" and ($_POST['nom'])!="" and ($_POST['lien'])!="" and ($_POST['description'])!="" and ($_POST['puTTC'])!="" and ($_POST['montantTTC'])!=""){
	//$sql="INSERT INTO Demande(description) VALUES ('".$_POST['des_demande']."')";
	//On insere dans la table capteur le nouveau capteur avec les valeurs renseignees par l'utilisateur
	$sql="INSERT INTO Produit (CodeAPP,fournisseur,quantiteUtil,quantiteCommande,nom,lien,description,puTTC,montantTTC,id_demande) VALUES ('".$_POST['codeAPP']."','".$_POST['fournisseur']."','".$_POST['quantiteUtil']."','".$_POST['quantiteCommande']."','".$_POST['nom']."','".$_POST['lien']."','".$_POST['description']."','".$_POST['puTTC']."','".$_POST['montantTTC']."','".$_POST['id']."')";
	$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
	echo'La demande a bien ete envoyee.';

}
else{
	echo"Erreur, il manque des infos.";
}

?>