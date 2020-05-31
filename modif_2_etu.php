<?php
session_start();
//On inclut le fichier permettant de se connecter à la bdd
include("connexion_bdd.php");

//on recupere les differentes infos presentes dans la bdd correspondantes au capteur selectionne
$sql ="SELECT Produit.id_produit as id, Produit.CodeAPP as code, Produit.fournisseur as fournisseur, Produit.quantiteUtil as qteUtil, Produit.quantiteCommande as qteCommande, Produit.nom as nom, Produit.lien as lien, Produit.description as description, Produit.puTTC as puTTC, Produit.montantTTC as montantTTC, Produit.document as doc FROM Produit WHERE Produit.id_demande ='".$_POST['demande']."'";
$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
$row = mysql_fetch_assoc($result);

$id_produit=$row["id"];
$code=$row["code"];
$fournisseur = $row["fournisseur"];
$qteUtil = $row["qteUtil"];
$qteCommande = $row["qteCommande"];
$nom=$row["nom"];
$lien=$row["lien"];
$description = $row["description"];
$puTTC = $row["puTTC"];
$montantTTC = $row["montantTTC"];
$doc=$row["doc"];
$id_demande=$_POST['demande'];

//On cree un formulaire où on passe les donnees par la methode post
echo '<form method="post" action ="demande_2_etu.php">';
//Passage cache de l'id du produit
echo"<input type='hidden' name='id_produit' value='$id_produit'>";
echo"<input type='hidden' name='id_demande' value='$id_demande'>";
echo"<input type='hidden' name='bouton_modifier' value='".$_POST['modifier']."'>";

//Affichage du codeAPP du produit
echo"<p><label>CodeAPP</label> : <input type='text' name='code_produit' value='$code'/></p>";
//Zone ou est affiche le nom du fournisseur
echo"<p><label>Fournisseur</label> : <input type='text' name='fournisseur_produit' value='$fournisseur'/></p>";
//Zone ou est affiche la quantite utile
echo"<p><label>Quantite Util</label> : <input type='number' name='qteUtil_produit' value='$qteUtil'/></p>";
//Zone ou est affiche la quantite commande
echo"<p><label>Quantite Commande</label> : <input type='number' name='qteCommande_produit' value='$qteCommande'/></p>";
//Zone ou est affiche le nom
echo"<p><label>Nom</label> : <input type='text' name='nom_produit' value='$nom'/></p>";
//Zone ou on affiche le lien
echo"<p><label>Lien</label> : <input type='url' name='lien_produit' value='$lien'/></p>";
//Zone ou on affiche la description
echo"<p><label>Description</label> : <input type='textarea' name='description_produit' value='$description'/></p>";
//Zone ou on affiche le prix unitaire TTC
echo"<p><label>Prix unitaire TTC</label> : <input type='number' min='0.01' step='0.01' name='puTTC_produit' value='$puTTC'/></p>";
//Zone ou on affiche le montant TTC
echo"<p><label>Montant TTC</label> : <input type='number' min='0.01' step='0.01' name='montantTTC_produit' value='$montantTTC'/></p>";
//Bouton pour envoyer les donnees
echo'<input type="submit" value="Modifier" />';
echo '</form>';

//Bouton pour retourner en arriere
echo"<form action ='modif_etu.php' method='post'>
<input type='submit' value='Retour'>
</form>";












?>