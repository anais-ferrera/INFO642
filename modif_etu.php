<?php
session_start();
include ("connexion_bdd.php");

$sql =  "SELECT Demande.id_demande as id_demande, Demande.description as description FROM Demande,passe,Etudiant where Demande.id_demande=passe.id_demande and Etudiant.id_etu=passe.id_etu and Etudiant.mail='".$_SESSION["login"]."' and Demande.etat !='enAttenteDuST' ";

$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
echo '<h2>Modification d\'une demande <br/></h2>';

//On cree un formulaire avec la methode post
echo '<form method="post" action="modif_2_etu.php">';
//Liste deroulante avec les differentes demandes de l'etudiant presents dans la bdd
echo '<label>Demandes faites</label> : <select name="demande">';
        
        while($row =mysql_fetch_assoc($result)) {
            echo '<option value='.$row["id_demande"].'>'.$row["description"].'</option>';
        }
        echo '</select>';
//Bouton qui permet de selectionner une demande
echo'<input type="submit" name="modifier" value="Modifier" />';
echo'</form>';

//Bouton pour retourner en arriere
echo "<form action ='accueilEleve.php?page=2' method='post'>
<input type='submit' value='Retour'>
</form>";

?>