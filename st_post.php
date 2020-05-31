<?php
include ("connexion_bdd.php");

$sql="SELECT Produit.id_produit, Produit.CodeAPP as code, Produit.fournisseur as fournisseur, Produit.quantiteUtil as qteUtil, Produit.quantiteCommande as qteCommande, Produit.nom as nom, Produit.lien as lien, Produit.description as desc_produit, Produit.puTTC as puTTC, Produit.montantTTC as montantTTC FROM Produit WHERE  Produit.id_demande='".$_POST['demande']."'";
$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
echo'<h1>Demande </br></h1>';
//On cree un formulaire avec la methode post
echo '<form method="post" action="st_post_2.php">';

echo' 
	<table border="1">
	<tr>
	<th>ID</th>
	<th>CodeAPP</th>
	<th>Fournisseur</th>
	<th>QuantiteUtil</th>
	<th>QuantiteCommande</th>
	<th>Nom</th>
	<th>Lien</th>
	<th>DescriptionProduit</th>
	<th>PrixUnitaireTTC</th>
	<th>MontantTTC</th>
	</tr>';
	
	echo'<tr>';

        while($row =mysql_fetch_assoc($result)) {
        	echo'<td>'.$row["id_produit"].'</td>';
        	echo'<td>'.$row["code"].'</td>';
        	echo'<td>'.$row["fournisseur"].'</td>';
        	echo'<td>'.$row["qteUtil"].'</td>';
        	echo'<td>'.$row["qteCommande"].'</td>';
        	echo'<td>'.$row["nom"].'</td>';
        	echo'<td>'.$row["lien"].'</td>';
        	echo'<td>'.$row["desc_produit"].'</td>';
        	echo'<td>'.$row["puTTC"].'</td>';
        	echo'<td>'.$row["montantTTC"].'</td>';
            
       echo'</tr>';
        }
     
       echo'</table>'; 
     
      echo"<input type='hidden' name='id_demande' value='".$_POST['demande']."''/>";
       echo'<input type="submit" name="valider" value="Valider" />';
       echo'<input type="submit" name="refuser" value="Refuser" />';
       echo'</form>';
?>