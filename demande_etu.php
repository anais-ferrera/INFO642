<?php
session_start (); 


echo'
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="Style.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Demande en cours</title>
  </head>


  <body>


    <div id="banniere1ETU">
      	<p>Gestion des commandes</p>
    	</div>
  
			<div id="titre">
				<span> <H3>Produit de votre demande</H3></span>
			</div>

    <div id="contenu">';


include ("connexion_bdd.php");

//On verifie qu'une description de demande a ete faite
if (($_POST['des_demande'])!="")
{

	//On insere une nouvelle demande dans la base
	$sql="INSERT INTO Demande (description,etat) VALUES ('".$_POST['des_demande']."','enAttenteEnseignant')";
	$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);

	//On recupere l'id_demande de la derniere demande inseree
	$sql ="SELECT id_demande FROM Demande WHERE id_demande=LAST_INSERT_ID()";
	$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
	$row = mysql_fetch_assoc($result);
	$id_demande = $row["id_demande"];

	$sql2="SELECT id_etu FROM Etudiant WHERE mail='".$_SESSION['login']."'";
	$result2 = mysql_query($sql2) or die("Requête invalide: ". mysql_error()."\n".$sql2);
	$row2 = mysql_fetch_assoc($result2);
	$id_etu = $row2["id_etu"];
	
	$sql3="INSERT INTO passe VALUES ($id_etu, $id_demande)";
	$result3 = mysql_query($sql3) or die("Requête invalide: ". mysql_error()."\n".$sql3);

	
echo "
<html>
<!--On cree un formulaire où on passe les donnees par la methode post -->
<form enctype='multipart/form-data' method='post' action ='demande_2_etu.php'>
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
<!--<p><label>Document</label> : <input type='file' name='document'/></p>-->
<!--Bouton pour ajouter un element a la demande-->
<input type='submit' name='ajout' value='Ajouter un autre element' />
<!--Bouton pour envoyer les donnees-->
<input type='submit' name='bouton_envoie' value='Envoyer' />
</form>
</div>
    

    <div id='footer'>
      <p>Polytech Annecy-Chambéry - Module INFO642 - Base de données et Technologies web </p>

    </div>

  </body>


</html>";

}
else{
	header("refresh:3;url=accueilEleve.php");
	echo"Erreur, veuillez indiquer la description de votre demande.";
}

?>