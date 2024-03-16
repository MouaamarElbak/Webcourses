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



$bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$id_membre = 123; // Exemple d'identifiant d'utilisateur
$req = $bdd->prepare('SELECT * FROM membre WHERE id = :id');
$req->execute(array('id' => $id_membre));
$membre = $req->fetch();

// Affichage des informations de l'utilisateur
echo 'Nom : ' . $membre['Nom'] . '<br>';
echo 'Prénom : ' . $membre['Pnom'] . '<br>';
echo 'Email : ' . $membre['mail'] . '<br>';
// ...
?>






