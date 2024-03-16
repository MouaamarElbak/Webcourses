<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="projet PHP/style/style7.css"/>
</head>
<body>


     


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

    

    <p>Bonjour <?php echo($_POST['text3']); ?> </p>
     <p> Pour revenir à la page d'acceuil, <a href="index.php"><p>Cliquez ici </a></p>
     <p> Partie pour se connecter à la base Webcourses </p>


<?php

 try
    {
        // connexion à la base de données 
        $bdd = new pdo('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', 'root' );

            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        
           echo ("Connexion reussi");
     
    }
    catch (Exception $e)
    {
        die('Erreur de connexion : '.$e->getMessage());
    }
    

    try
    {
        $me_Nom = htmlspecialchars($_POST['text1']);
        $me_Pnom = htmlspecialchars($_POST['text2']);
        $me_Pseudo = htmlspecialchars($_POST['text3']);
        $me_mail = htmlspecialchars($_POST['text4']);
        $me_passe = htmlspecialchars($_POST['text5']);
        $me_Confirmation = htmlspecialchars($_POST['text6']);

        $req = $bdd->prepare('INSERT INTO membre(me_Nom, me_Pnom, me_Pseudo, me_mail, me_passe, me_Confirmation)
            VALUES(:text1, :text2, :text3, :text4, :text5, :text6 )');

        

        $req->execute(array(
            'text1'=>$me_Nom,
            'text2'=>$me_Pnom,
            'text3'=>$me_Pseudo,
            'text4'=>$me_mail,
            'text5'=>$me_passe,
            'text6'=>$me_Confirmation

        ));

        echo(' les nouveaux membres avec insert requête preparés a bien été enregistré avec les données suivantes '. $_POST['text1'] . '' . $_POST['text2'] . '' . $_POST['text3'] . '' . $_POST['text4'] . '' . $_POST['text5'] . '' . $_POST['text6']);

        echo('<br />' . '<br />');    
    }

    catch (Exception $e)
    {
        die('Erreur d\ insertion avec les variables ou enregistrement déjà existant' . $e->getMessage());
    }
?>





<footer>
        <p id="footer">
            &copy; <a href="mentionslegales.pdf" target="_blank">Mentions légales</a> - <a href="politique.pdf" target="_blank">Politique de confidentialité</a> - <a href="cookies.pdf" target="_blank">Gestion des cookies</a> - <a href="droitimage.pdf" target="_blank">Droit à l'image</a>
        </p>
    </footer>

    
</body>
</html>