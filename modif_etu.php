<?php

include ("connexion_bdd.php");

//On selectionne le colonne nom de la table capteur
$sql ="SELECT id_demande, description from Demande WHERE etat='En cours'";
$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
echo '<h2>Modification d\'une demande <br/></h2>';

//On cree un formulaire avec la methode post
echo '<form method="post" action="modif_2_etu.php">';
//Liste deroulante avec les differents noms de capteurs presents dans la bdd
echo '<label>Demandes faites</label> : <select name="demande">';
        
        while($row =mysql_fetch_assoc($result)) {
            echo '<option value='.$row["id_demande"].'>'.$row["description"].'</option>';
        }
        echo '</select>';
//Bouton qui permet de selectionner un capteur
echo'<input type="submit" name="modifier" value="Modifier" />';

echo'</form>';

?>