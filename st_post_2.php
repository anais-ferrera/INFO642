<?php

//On inclut le fichier permettant de se connecter à la bdd
include("connexion_bdd.php");

if(isset($_POST['valider'])){
header('Status: 301 Moved Permanently', false, 301); 
header('location: /~ruellee/INFO642/accueilST');
$sql="UPDATE Demande SET etat='Valide' WHERE id_demande='".$_POST['id_demande']."'";
$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);


}

if(isset($_POST['refuser'])){
header('Status: 301 Moved Permanently', false, 301); 
header('location: /~ruellee/INFO642/accueilST');
$sql="UPDATE Demande SET etat='Refuse' WHERE id_demande='".$_POST['id_demande']."'";
$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);


}