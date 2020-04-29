<?php

  echo "<h2>Bienvenue sur notre site de gestion des commandes pour projets pédagogiques</h2>\n";
  
  //Formulaire de connexion au site
  echo "<html>
<head>
<title>Formulaire d'identification</title>
</head>

<body>
<h1>Connexion au site</h1>
<form action='login.php' method='post'>
Votre login : <input type='text' name='login'><br />
Votre mot de passe : <input type='password' name='pwd'><br />
<input type='submit' value='Connexion'>
</form>

</body>
</html>\n";
  


?>
