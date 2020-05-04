<?php
include ("connexion_bdd.php");

if (($_POST['des_demande'])!="")
{
	$sql="INSERT INTO Demande (description) VALUES ('".$_POST['des_demande']."')";
	$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
	$row = mysql_fetch_assoc($result);
	$id_demande = $row["id"];

echo "
<html>

<!--On cree un formulaire où on passe les donnees par la methode post -->
<form method='post' action ='demande_2_etu.php'>

<!--Passage cache de l'id_demande -->
<input type='hidden' name='id' value='$id_demande'>

<!--Zone de saisie du code APP -->
<p><label>Code APP</label> : <input type='text' name='codeAPP'/></p>

<!--Zone de saisie du fournisseur -->
<p><label>Fournisseur</label> : <input type='text' name='fournisseur'/></p>

<!--Zone de saisie de la quantite utile -->
<p><label>Quantite utile</label> : <input type='number' min='1' name='quantiteUtil'/></p>

<!--Zone de saisie de la quantite commande -->
<p><label>Quantite commande</label> : <input type='number' min='1' name='quantiteCommande'/></p>

<!--Zone de saisie du nom -->
<p><label>Nom</label> : <input type='text' name='nom'/></p>

<!--Zone de saisie du lien -->
<p><label>Lien</label> : <input type='url' name='lien'/></p>

<!--Zone de saisie de la description -->
<p><label>Description</label> : <input type='textarea' name='description'/></p>

<!--Zone de saisie du prix unitaire TTC -->
<p><label>Prix unitaire TTC</label> : <input type='number' min='0.01' step='0.01' name='puTTC'/></p>

<!--Zone de saisie du montant TTC -->
<p><label>Montant TTC</label> : <input type='number' min='0.01' step='0.01' name='montantTTC'/></p>

<!--Zone d'ajout du document -->
<p><label>Document</label> : <input type='number' name='document'/></p>

<!--Bouton pour envoyer les donnees-->
<input type='submit' value='Envoyer' />
</form>";
}
else{
	echo"Erreur, veuillez indiquer la description de votre demande.";
}

?>