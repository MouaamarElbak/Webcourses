
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

    <!--<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: include(Header.php): Failed to open stream: No such file or directory in C:\wamp64\www\exercicephp\index5.php on line <i>12</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>361472</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\exercicephp\index5.php' bgcolor='#eeeeec'>...\index5.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: include(): Failed opening 'Header.php' for inclusion (include_path='.;C:\php\pear') in C:\wamp64\www\exercicephp\index5.php on line <i>12</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>361472</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\exercicephp\index5.php' bgcolor='#eeeeec'>...\index5.php<b>:</b>0</td></tr>
</table></font>
--> 

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index2.php">Qui sommes-nous ?</a></li>
            <li><a href="index3.php">Calendrier évènementiel</a></li>
            <li><a href="index4.php">Informations Club</a></li>
            <li><a href="index5.php">Nouveau membre</a></li>
            <li><a href="index6.php">Déjà inscrit</a></li>
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