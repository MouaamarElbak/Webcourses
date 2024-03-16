<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="projet PHP/style/style5.css"/>
</head>
<body>

    <!--<?php include("Header.php");?>--> 

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index2.php">Qui sommes-nous ?</a></li>
            <li><a href="index3.php">Calendrier évènementiel</a></li>
            <li><a href="index4.php">Informations Club</a></li>
            <<li><a href="Inscription.php">Nouveau membre</a></li>
            <li><a href="Inscription.php">Déjà inscrit</a></li>
            <li><a href="index7.php">Contact</a></li>
        </ul>
    </nav>

    <img src="./projet PHP/image/logo_velo.jpg" title="Image Vélo" alt="image velo" id="image1"/>

    <h2> Merci de bien vouloir renseigner les informations suivantes :</h2>




<form action="Premiere.php" method="post">

<div  id="test">



    <font size=5>
        <font color="white">
            <input type="text" placeholder="Nom" name="text1"><br /><br />
        </font>
    </font>

    <font size=5>
        <font color="white">
            <input type="text" placeholder="Prenom" name="text2"><br /><br />
        </font>
    </font>

    <font size=5>
        <font color="white">
            <input type="text" placeholder="Pseudo" name="text3"><br /><br />
        </font>
    </font>

    <font size=5>
        <font color="white">
            <input type="text" placeholder="Telephone" name="text7"><br /><br />
            
        </font>

    <font size=5>
        <font color="white">
            <input type="text" placeholder="Adresse" name="text8"><br /><br />
           
        </font>    

    <font size=5>
        <font color="white">
            <input type="text" placeholder="Adresse mail" name="text4"><br /><br />
        </font>
    </font>

    <font size=5>
        <font color="white">
            <input type="password" placeholder="mot de passe" name="text5"><br /><br />
        </font>
    </font>
        
    <font size=5>
        <font color="white">
            <input type="password" placeholder="Confirmation mot de passe" name="text6"><br /><br />
            <!--<button onclick="">Crée un compte</button>-->
        </font>

    </font>   
    <input type="submit" value="Crée un compte">
    
            
</div>

</form>

    <footer>
        <p id="footer">
            &copy; <a href="mentionslegales.pdf" target="_blank">Mentions légales</a> - <a href="politique.pdf" target="_blank">Politique de confidentialité</a> - <a href="Gestion_des_cookies.pdf" target="_blank">Gestion des cookies</a> - <a href="droitimage.pdf" target="_blank">Droit à l'image</a>
        </p>
    </footer>

    
</body>
</html>