<!DOCTYPE HTML>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
</head>
  


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
Votre mail : <input type='text' name='login'><br />
Votre mot de passe : <input type='password' name='pwd'><br />
<input type='submit' value='Connexion'>
</form>

</body>

</html>";
  

?>



<section id="contact">
                           <h2>Contact</h2>
                           <address>
                           <ul>
                           <li>06 66 66 66 66</li>
                           <li><a href="mailto:lesmagiciens@gmail.com">lesmagiciens@gmail.com</a></li>
                           </ul>
                           </address>
                </section>


  

<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="photo_lac.jpg" alt="lac" style="width:100%;">
        <div class="carousel-caption">
          <h3>Le lac d'Annecy</h3>
        </div>
      </div>

      <div class="item">
        <img src="philippe_bolon.jpg" alt="philippe" style="width:100%;">
        <div class="carousel-caption">
          <h3>Le directeur de Polytech Annecy-Chambéry</h3>
          <p>Philippe Bolon</p>
        </div>
      </div>
    
      <div class="item">
        <img src="escalier_polytech.jpg" alt="escalier" style="width:100%;">
        <div class="carousel-caption">
          <h3>L'établissement Polytech Annecy-Chambéry</h3>
          <p>Campus Annecy-le-Vieux</p>
        </div>
      </div>

      <div class="item">
        <img src="etudiants_ceremonie_rentree.jpg" alt="ceremonie" style="width:100%;">
        <div class="carousel-caption">
          <h3>La cérémonie de rentrée</h3>
          <p>A Annecy-le-Vieux</p>
        </div>
      </div>      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>







    <div id="pied">
      <span>Polytech Annecy-Chambéry - Module Info642- Base de données et Technologies web</span>
      <img src="logo_polytech_annecy_chambery.jpg" alt="logo" style="width:10%;">
    </div>



</html>


