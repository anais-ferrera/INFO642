<?php
echo "
<html>

//On cree un formulaire où on passe les donnees par la methode post
<form method='post' action ='demande_2_etu.php'>


//Zone de saisie du code APP 
<p><label>Code APP</label> : <input type='text' name='codeAPP'/></p>

//Zone de saisie du fournisseur
<p><label>Fournisseur</label> : <input type='text' name='fournisseur'/></p>

//Zone de saisie de la quantite utile
<p><label>Quantité utile</label> : <input type='number' name='quantiteUtil'/></p>

//Zone de saisie de la quantite commande
<p><label>Quantite commande</label> : <input type='number' name='quantiteCommande'/></p>

//Zone de saisie du nom
<p><label>Nom</label> : <input type='text' name='nom'/></p>

//Zone de saisie du lien
<p><label>Lien</label> : <input type='text' name='lien'/></p>

//Zone de saisie de la description
<p><label>Description</label> : <input type='textarea' name='description'/></p>

//Zone de saisie du prix unitaire TTC
<p><label>Prix unitaire TTC</label> : <input type='number' name='puTTC'/></p>

//Zone de saisie du montant TTC
<p><label>Montant TTC</label> : <input type='number' name='montantTTC'/></p>

//Zone d'ajout du document
<p><label>Document</label> : <input type='number' name='quantiteCommande'/></p>

//Bouton pour envoyer les donnees
<input type='submit' value='Envoyer' />
</form>

";

?>