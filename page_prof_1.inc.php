<style>
<?php include 'Style.css'; ?>
</style>
<?php


include("connexion_bdd.php");

  $sql1 =" SELECT mail FROM ServiceTechnique";
  $result1 = mysql_query($sql1) or die("Requête invalide: ". mysql_error()."\n".$sql1);
  $sql2 =" SELECT mail FROM Etudiant";
  $result2 = mysql_query($sql2) or die("Requête invalide: ". mysql_error()."\n".$sql2);
  $sql3 =" SELECT mail FROM Enseignant WHERE mail !='".$_SESSION['login']."'";
  $result3 = mysql_query($sql3) or die("Requête invalide: ". mysql_error()."\n".$sql3);

echo'<h1>Messagerie</h1>';

echo '<form method="post" action="page_prof_1.inc.post.php">';


echo '<p><label><b>Destinataire</b></label> : <select name="mail"></p>'; #menu deroulant
while($row1 =mysql_fetch_assoc($result1)) {
            echo '<option value='.$row1["mail"].'>'.$row1["mail"].'</option>';
        }
while($row2 =mysql_fetch_assoc($result2)) {
            echo '<option value='.$row2["mail"].'>'.$row2["mail"].'</option>';
        }
while($row3 =mysql_fetch_assoc($result3)) {
            echo '<option value='.$row3["mail"].'>'.$row3["mail"].'</option>';
        }
        echo '</select>';
echo'<p><label><b>Objet</b></label> : <input type="text" name="objet" /></p>';
echo '<p><label><b>Texte</b></label> : <textarea name="corps"></textarea></p>';
echo '<input type="submit" name="envoyer" value="Envoyer" />'; 

echo "</form>";

echo "<br> </br>";
echo "<br> </br>";

echo "<h2>Boite de reception :</h2>";

$sql =  "SELECT Messages.expediteur as Expediteur, Messages.objet as Objet, Messages.corps as Message
         FROM Messages
         WHERE Messages.destinataire='".$_SESSION['login']."' ";

$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);

    echo "<table>";

    echo "<thead>";
         echo "<tr>";
            echo "<th> Expediteur </th>";
            echo "<th> Objet </th>";
            echo "<th> Message </th>";

        echo"</tr>";
    echo "</thead>";

        while ($row = mysql_fetch_assoc($result)) { 
           echo "<tr>";
               echo "<td>".$row["Expediteur"]."</td>";
               echo "<td>".$row["Objet"]."</td>";
               echo "<td>".$row["Message"]."</td>";
            echo "</tr>";
    echo "</tbody>";    
        }    
    echo "</table>";

echo "<br> </br>";
echo "<br> </br>";


echo "<h2>Messages envoyes :</h2>";

$sql =  "SELECT Messages.destinataire as Destinataire, Messages.objet as Objet, Messages.corps as Message
         FROM Messages
         WHERE Messages.expediteur='".$_SESSION['login']."' ";

$result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);

    echo "<table>";

    echo "<thead>";
         echo "<tr>";
            echo "<th> Destinataire </th>";
            echo "<th> Objet </th>";
            echo "<th> Message </th>";

        echo"</tr>";
    echo "</thead>";

        while ($row = mysql_fetch_assoc($result)) { 
           echo "<tr>";
               echo "<td>".$row["Destinataire"]."</td>";
               echo "<td>".$row["Objet"]."</td>";
               echo "<td>".$row["Message"]."</td>";
            echo "</tr>";
    echo "</tbody>";    
        }    
    echo "</table>";
    


?>