<!DOCTYPE html>
<html lang="fr">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="projet PHP/style/style4.css"/>
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

    <h2 id="Liste">Liste des Club</h2>
    <select id="Liste">
    <option>Html</option>
    <option>CSS</option>
    <option>Xml</option>
    <option>Java script</option>
    <option>C#</option>
    <option>PHP</option>
    <option>Championat regional</option>
    </select>
    
    <select id="Liste">
    <option>Html</option>
    <option>CSS</option>
    <option>Xml</option>
    <option>Java script</option>
    <option>C#</option>
    <option>PHP</option>
    <option>Championat regional</option>
    </select>

    <table class="id">
        <tr>
        <th class="id">Nom</th>
        <th class="id">Prenom</th>
        <th class="id">Classement</th>
        <th class="id">Age</th>
        </tr>
        <tr>
            <td class="id">Patrik</td>
            <td class="id">Porte</td>
            <td class="id">1er</td>
            <td class="id">27</td>
        </tr>
        <tr>
            <td class="id">Bob</td>
            <td class="id">Carting</td>
            <td class="id">2eme</td>
            <td class="id">25</td>
        </tr>
        <tr>
            <td class="id">Tierry</td>
            <td class="id">Fourbe</td>
            <td class="id">3eme</td>
            <td class="id">25</td>
        </tr>
    </table>
        
    <footer>
        <p id="footer">
            &copy; <a href="mentionslegales.pdf" target="_blank">Mentions légales</a> - <a href="politique.pdf" target="_blank">Politique de confidentialité</a> - <a href="cookies.pdf" target="_blank">Gestion des cookies</a> - <a href="droitimage.pdf" target="_blank">Droit à l'image</a>
        </p>
    </footer>

    
</body>
</html>