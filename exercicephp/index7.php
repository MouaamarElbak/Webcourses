<!DOCTYPE html>
<html lang="fr">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="projet PHP/style/style7.css"/>
</head>
<body>
    <!--<?php include("Header.php");?>-->

    <nav>
        <ul>
            <li><a href="index.php"><i class ="fa fa-home"> Accueil</i></a></li>
            <li><a href="index2.php"><i class="fa fa-book"> Qui sommes-nous ?</i></a></li>
            <li><a href="index3.php"><i class="fa fa-book"> Calendrier évènementiel</i></a></li>
            <li><a href="index4.php"><i class="fa fa-book"> Informations Club</i></a></li>
            
            
            <li><a href="index7.php"><i class="fa fa-map-marker"> Contact</i></a></li>
        </ul>
    </nav>

    <br/>

    <div id="Connexion">

        <li class="co"><a href="Connexion.php">Se connecter</a></li>
        <li class="co"><a href="Inscription.php"><i class="fa fa-user"></i></a></li>

    </div>
  
<form id="cookie" action="consentenment_cookie.PHP" method="post">

    <p>
      <h4> Ce site utilise les cookies pour ameliorer votre experience entant qu'utilisateur </h4>
  </p>

  <p>
 
      <label for="Type_consentement" >Type_consentement</label><br />
      <select id="list" name="Type_consentement">
      <option value="E">Explicite</option>
      <option value="I">Implicite</option>
      </select>
      
  </p>

  <p>
      <input type="checkbox" name="Necessaire" value="1" />
      <label for="text1">Nécessaire </label><br />
  </p>

  <p>
      <input type="checkbox" name="Performance" value="1" />
      <label for="text2">Performance </label><br />
  </p>

  <p>
      <input type="checkbox" name="Fonctionnalite" value="1" />
      <label for="text3">Fonctionnalité </label><br />
  </p>

  <p>
      <input type="checkbox" name="Marketing" value="1" />
      <label for="text4">Marketing </label><br />
  </p>

  <p>

      <input type="checkbox" name="Autres" value="1" />
      <label for="text5">Autres </label><br />
  </p>

  <input type="submit" name="submit" value="Valider" />

  <br/><br>
</form>

    <img src="./projet PHP/image/logo_velo.jpg" title="Image Vélo" alt="image velo" id="image1"/>

    <footer>
        <p id="footer">
            &copy; <a href="mentionslegales.pdf" target="_blank">Mentions légales</a> - <a href="politique.pdf" target="_blank">Politique de confidentialité</a> - <a href="cookies.pdf" target="_blank">Gestion des cookies</a> - <a href="droitimage.pdf" target="_blank">Droit à l'image</a>
        </p>
    </footer>

    
</body>
</html>