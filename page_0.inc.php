<?php 
  $login= $_SESSION["login"];
  echo "<html>
<head>
<title>Formulaire d'identification</title>
</head>
<body>
<h1>Voici les demandes passées :</h1>
</body>
</html>\n";

    include("connexion_bdd.php");

    $sql =  "SELECT Demande.description as d_description, Demande.etat as d_etat FROM Demande,passe,Etudiant where Demande.id_demande=passe.id_demande and Etudiant.id_etu=passe.id_etu and Etudiant.mail='".$login."' ";


    $result = mysql_query($sql) or die("Requête invalide: ". mysql_error()."\n".$sql);

    echo "<table border='1'>";
         echo "<tr>";
            echo "<td><b>Demandes</td></b>";
			echo "<td><b>Etat</td></b>";
        echo"</tr>";
        while ($row = mysql_fetch_assoc($result)) { 
           echo "<tr>";
               echo "<td>".$row["d_description"]."</td>";
               echo "<td>".$row["d_etat"]."</td>";
            echo "</tr>";
        }
    echo "</table>";

?>
