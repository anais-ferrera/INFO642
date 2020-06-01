<?php


include ("connexion_bdd.php");


$sql ="SELECT Demande.id_demande, Demande.description as description, Produit.CodeAPP as code, Produit.fournisseur as fournisseur, Produit.quantiteUtil as qteUtil, Produit.quantiteCommande as qteCommande, Produit.nom as nom, Produit.lien as lien, Produit.description as desc_produit, Produit.puTTC as puTTC, Produit.montantTTC as montantTTC, Produit.id_demande  from Demande, Produit WHERE Demande.etat='En cours' AND Demande.id_demande=Produit.id_demande";
$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
echo '<h2>Demandes en cours <br/></h2>';

//On cree un formulaire avec la methode post
echo '<form method="post" action="modif_2_prof.php">';

echo' 
	<table>
	<tr>
	<th>Demande</th> 
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
        	echo'<td>'.$row["description"].'</td>';
        	echo'<td>'.$row["code"].'</td>';
        	echo'<td>'.$row["fournisseur"].'</td>';
        	echo'<td>'.$row["qteUtil"].'</td>';
        	echo'<td>'.$row["qteCommande"].'</td>';
        	echo'<td>'.$row["nom"].'</td>';
        	echo'<td>'.$row["lien"].'</td>';
        	echo'<td>'.$row["desc_produit"].'</td>';
        	echo'<td>'.$row["puTTC"].'</td>';
        	echo'<td>'.$row["montantTTC"].'</td>';
            echo'<td><input type="submit" name="modifier" value="Modifier" /></td>';
            echo'<td><input type="submit" name="valider" value="Valider" /></td>';
       echo'</tr>';
        }
     
       echo'</table>'; 


?>