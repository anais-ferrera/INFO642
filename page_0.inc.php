<?php
$login= $_SESSION["login"];
echo'
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="Style.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Demande en cours</title>
  </head>


  <body>


    

    <div id="contenu">
 

      <h1>Demande en cours </h1>

      <br/> 

      <p>Voici les demandes en cours de validation : </p>

      <br/>';

      

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
      echo '</table>
    


    </div>
    

    <div id="footer">
      <p>Polytech Annecy-Chambéry - Module INFO642 - Base de données et Technologies web </p>

    </div>

  </body>


</html>';

