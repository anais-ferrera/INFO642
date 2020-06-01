<!DOCTYPE HTML>

<html>
  <head>
    <title> Accueil </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
    <link rel="stylesheet" href="Style.css" />
</head>
  
<body>
   <div id="banniere1">
      <p>Gestion des commandes</p>
    </div>
    <div id="menuACCUEIL">
    </div>
    <div id="banniere2">  
    </div> 
    <div id="formulaire">
    <h1>Formulaire d'identification</h1>
<form action='login.php' method='post'>
<h2>Login / email <input type='text' name='login'></h2>
<h2>Mot de passe <input type='password' name='pwd'></h2>
<h3><input type='submit' value='Connexion'></h3>
</form>
  </div>
    <div id="banniere3">  
    </div> 
<div class="container">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->

        <div class="carousel-inner">

          <div class="item active">
            <img src="./images/photo_lac_annecy2.jpg" alt="lac" style="width:100%;">
            <div class="carousel-caption">
              <h3>Le lac d'Annecy</h3>
            </div>
          </div>

          <div class="item">
            <img src="./images/photo_montagnes2.jpg" alt="montagnes" style="width:100%;">
            <div class="carousel-caption">
              <h3>Les montagnes d'Annecy</h3>
            </div>
          </div>

          <div class="item">
            <img src="./images/photo_lac_annecy.jpg" alt="lac" style="width:100%;">
            <div class="carousel-caption">
              <h3>Le lac d'Annecy</h3>
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
    <div id="banniere4">  
    </div> 
<div id="contact">
                           <h2>Un problème de connexion ? </h2>
                           <b>Veuillez prendre contact avec les créatrices de ce site </b>
                           <ul>
                           <li>06 66 66 66 66</li>
                           <li><a href="mailto:lesmagiciennesIDU@gmail.com">lesmagiciennesIDU@gmail.com</a></li>
                           </ul>
</div>
    <div id="banniere2">  
    </div> 

<div id="footer2">
      <img src="./images/logo.jpg" />
      <p>Polytech Annecy-Chambéry - Module INFO642 - Base de données et Technologies web </p>
      
      
</div>
</body>
</html>
