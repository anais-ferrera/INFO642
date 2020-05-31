<!DOCTYPE HTML>

<html>
  <head>
    <title> Accueil </title>
    <meta content="info">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style.css" />
  </head>

 
 <body>

    <div id="banniere1">
      <p>Gestion des commandes</p>
    </div>

    <div id="menu">
    </div>

    <div id="banniere2">  
    </div> 


    <div id="formulaire">

    <h1>Formulaire d'identification</h1>
<?php
  
      //Formulaire de connexion au site
      echo "<html>

    <form action='login.php' method='post'>

    Votre login : <input type='text' name='login'><br />
    Votre mot de passe : <input type='password' name='pwd'><br />

    <input type='submit' value='Connexion'>
    </form>

    </html>" 
?>

</div>

    <div id="banniere2">  
    </div> 
 
<div id="slider">
  <input type="radio" id="show_slide1" name="slider_commands">
  <input type="radio" id="show_slide2" name="slider_commands">
  <input type="radio" id="show_slide3" name="slider_commands">


  <input type="radio" id="play_slider" name="slider_commands">

  <div id="slides">

    <figure id="slide1">
      <img src="./images/lac_annecy.jpg" alt="lac">
      <figcaption>Lac d'Annecy</figcaption>
    </figure>

    <figure id="slide2">
      <img src="./images/etudiants_ceremonie_rentree.jpg" alt="ceremonie">
      <figcaption>Cérémonie de rentrée à Annecy-le-Vieux</figcaption>
    </figure>

    <figure id="slide3">
      <img src="./images/transition.jpg" alt="transition">
    </figure>



  </div>
  <nav>
    <ul class="dots_commands">
      <li><label for="show_slide1">Slide 1</label></li>
      <li><label for="show_slide2">Slide 2</label></li>
      <li><label for="show_slide3">Slide 3</label></li>
    </ul>
    <label for="play_slider" aria-label="Play" id="play" title="Play">Play</label>
  </nav>
</div>

   
    <div id="banniere2">  
    </div> 


<div id="contact">
                           <h2>Un problème de connexion ? </h2>
                           <b>Veuillez prendre contact avec les créatrices de ce site </b>
                           <ul>
                           <li>06 66 66 66 66</li>
                           <li><a href="mailto:lesmagiciennesIDU@gmail.com">lesmagiciennesIDU@gmail.com</a></li>
                           </ul>
</div>




<div id="footer">
      <p>Polytech Annecy-Chambéry - Module INFO642 - Base de données et Technologies web </p>

</div>


</body>

</html>


