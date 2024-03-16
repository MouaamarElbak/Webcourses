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
        $bdd = new pdo('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '' );
 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        
           echo ("Connexion reussi");
      
    }
    catch (Exception $e)
    {
        die('Erreur de connexion : '.$e->getMessage());
    }
    

    try
    {
        $me_Nom = htmlspecialchars(addslashes($_POST['text1']));
        $me_Pnom = htmlspecialchars(addslashes($_POST['text2']));
        $me_Pseudo = htmlspecialchars(addslashes($_POST['text3']));
        $me_mail = htmlspecialchars(addslashes($_POST['text4']));
        $me_passe = htmlspecialchars(addslashes($_POST['text5']));
        $me_Confirmation = htmlspecialchars(addslashes($_POST['text6']));
        $person_tel = htmlspecialchars(addslashes($_POST['text7']));
        $person_adresse = htmlspecialchars(addslashes($_POST['text8']));


        $req_id = $bdd->prepare('INSERT INTO personne(person_nom, person_prenom, person_adresse, person_tel) 
            VALUES(:text1, :text2, :person_adresse, :person_tel)');



    $req_id->execute(array(
        'text1' => $me_Nom,
        'text2' => $me_Pnom,
        'person_adresse' => $person_adresse,
        'person_tel' => $person_tel
    ));
   
   /* if ($stmt->rowCount() == 0) {
         Vérification de la confirmation du mot de passe
        if ($me_passe === $me_me_Confirmation) {
            // Hachage du mot de passe
            $hashed_password = password_hash($me_passe, PASSWORD_DEFAULT);*/

    $req_id = $bdd->query('SELECT person_id FROM personne ORDER BY person_id DESC LIMIT 1');
    
    $person_id = $req_id->fetch(PDO::FETCH_ASSOC)['person_id'];

    
   
    // $person_id = $bdd->lastInsertId();

        $req = $bdd->prepare('INSERT INTO membre(me_Nom, me_Pnom, me_Pseudo, me_mail, me_passe, me_Confirmation, person_id)
            VALUES(:text1, :text2, :text3, :text4, :text5, :text6, :person_id)');

        $req->execute(array(
            'text1'=>$me_Nom,
            'text2'=>$me_Pnom,
            'text3'=>$me_Pseudo,
            'text4'=>$me_mail,
            'text5'=>$me_passe,
            'text6'=>$me_Confirmation,
            'person_id' =>$person_id
        ));

        echo(' les nouveaux personnes / membres avec insert requête preparés a bien été enregistré avec les données suivantes '. $_POST['text1'] . '' . $_POST['text2'] . '' . $_POST['text3'] . '' . $_POST['text4'] . '' . $_POST['text5'] . '' . $_POST['text6'] . '' . $_POST['text7'] . '' . $_POST['text8'] . '' . $_POST['person_id']);

        echo('<br />' . '<br />');    
    }
     
    catch (PDOException $e)
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