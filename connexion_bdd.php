<?php
$conn = mysql_pconnect("localhost:/var/run/mysql/mysql_tp.sock", "ruellee", "4as5ricf") or die("Impossible de se connecter : ". mysql_error());

mysql_select_db("ruellee", $conn)or die("Impossible de sélectionner la base: ". mysql_error()); 

mysql_query("SET NAMES UTF8");


?>