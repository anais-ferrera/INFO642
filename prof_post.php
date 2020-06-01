<?php


include ("connexion_bdd.php");


$sql ="SELECT id_demande,description, etat FROM Demande";
$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);
echo '<h2>Demandes<br/></h2>';

//On cree un formulaire avec la methode post
echo '<form method="post" action="prof_verif.php">';

echo' 
	<table border="1">
	<tr>
    <th>ID</th>
	<th>Demande</th> 
	<th>Etat</th>
	</tr>';
	
    while($row =mysql_fetch_assoc($result)) {
    $id_demande=$row["id_demande"];
    $description=$row["description"];
    $etat=$row["etat"];
    //}
	echo'<tr>';
    
        //while($row =mysql_fetch_assoc($result)) {
            echo"<td>$id_demande</td>";
            //echo"<td><input type='hidden' name='demande' value='".$id_demande."' /></td>";
            echo"<td>$description</td>";
            echo"<td>$etat</td>";
        	//echo'<td>'.$row["description"].'</td>';
            //echo'<td>'.$row["etat"].'</td>';
            
       echo'</tr>';
    }
    echo'</table>';
$sql2 ="SELECT id_demande FROM Demande";
$result2 = mysql_query($sql2) or die("Requête invalide: ". mysql_error()."\n".$sql);
    echo '<label>Selectionner une demande</label> : <select name="demande" size="1">';
    while($row2 =mysql_fetch_assoc($result2)) {
            echo '<option value='.$row2["id_demande"].'>'.$row2["id_demande"].'</option>';
        }
        echo '</select>';

    //Bouton qui permet de selectionner une demande
    echo'<input type="submit" name="selectionner" value="Selectionner" />';

    echo'</form>'; 


?>