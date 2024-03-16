<!DOCTYPE html>
<html lang="fr">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="projet PHP/style/style6.css"/>
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

    <img src="./projet PHP/image/logo_velo.jpg" title="Image Vélo" alt="image velo" id="image1"/>

    <h2>Pour vous connecter, veuillez saisir vos identifiants</h2>

    
<form action="utilisateur.php" method="post">

<div id="test">
    <font size=5>
        <font color="red">
            <input type="text" placeholder="Pseudo" name="text1"><br /><br />
        </font>
    </font>

    <font size=5>
        <font color="white">
            <input type="password" placeholder="mot de passe" name="Pass"><br /><br />
        
        <!--<button onclick="">Connecter</button>-->
        <input type="submit" value="Connecter">

        </font>
    </font>
</div>

</form>

    <footer>
        <p id="footer">
            &copy; <a href="mentionslegales.pdf" target="_blank">Mentions légales</a> - <a href="politique.pdf" target="_blank">Politique de confidentialité</a> - <a href="cookies.pdf" target="_blank">Gestion des cookies</a> - <a href="droitimage.pdf" target="_blank">Droit à l'image</a>
        </p>
    </footer>

    
</body>
</html>