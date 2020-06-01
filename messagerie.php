<style>
<?php include 'Style.css'; ?>
</style>

<?php
session_start();
include("connexion_bdd.php");

$sql1 =" SELECT mail FROM ServiceTechnique WHERE mail !='".$SESSION_['login']."'";
$result1 = mysql_query($sql1) or die("Requête invalide: ". mysql_error()."\n".$sql1);
$sql2 =" SELECT mail FROM Etudiant WHERE mail !='".$SESSION_['login']."'";
$result2 = mysql_query($sql2) or die("Requête invalide: ". mysql_error()."\n".$sql2);
$sql3 =" SELECT mail FROM Enseignant WHERE mail !='".$SESSION_['login']."'";
$result3 = mysql_query($sql3) or die("Requête invalide: ". mysql_error()."\n".$sql3);



echo '<form method="post" action="page_3_post.php">';

echo '<label>Destinataire</label> : <select name="mail">'; #menu deroulant
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
echo'<p><label>Objet</label> : <input type="text" name="objet" /></p>';
echo '<p><label>Corps</label> : <textarea name="corps"></textarea></p>';
echo '<input type="submit" name="envoyer" value="Envoyer" />'; 

echo "</form>";
?>


	 