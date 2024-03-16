<?php

$me_mail = htmlspecialchars(addslashes($_POST['email']));
$me_passe = htmlspecialchars(addslashes($_POST['password1']));

try {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');

    // Configuration de l'attribut d'erreur
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$hached_password = password_hash($me_passe, PASSWORD_DEFAULT);

    // Requête SQL pour récupérer l'enregistrement correspondant à l'adresse email
    $sql = "SELECT * FROM membre WHERE me_mail = :email";

    //$sql = "SELECT * FROM utilisateur WHERE me_passe = :pass";
    //$sql = "INSERT INTO utilisateur  (me_mail, me_passe) VALUES (:email, :mot_de_pass)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':email', $me_mail);
    //$stmt->bindParam(':mot_de_pass', $hached_password);
    $stmt->execute();


    // Vérifier s'il y a un enregistrement correspondant
    if ($stmt->rowCount() > 0) {
        // Récupérer les données de l'enregistrement
        $row = $stmt->fetch();

        // Vérifier si le mot de passe correspond

        if (password_verify($me_passe, $row['me_passe'])) {
            // Redirection vers la page souhaitée
            header('Location: index.php');
            exit;
            
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Pseudo introuvable.";
    }

    // Requête SQL pour récupérer les données
    $query = "SELECT me_mail, me_passe FROM membre";
    $result = $bdd->query($query);

    // Vérifier s'il y a des résultats
    if ($result->rowCount() > 0) {
        // Tableau pour stocker les données
        $data = array();

        // Parcourir les résultats
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            // Utiliser la colonne 'me_Pseudo' comme clé d'array
            $Pseudo = $row['me_mail'];
            $data[$email] = $row;
        }

        // Afficher les données en utilisant les clés d'array
        // foreach ($data as $email => $row) {
        //   echo "E-mail: " . $email . "<br>";
        // echo "Mot de passe: " . $row['ut_mot_de_pass'] . "<br>";
        //echo "<br>";
        //}
    } else {
        echo "Aucun résultat trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

// Fermer la connexion à la base de données
$bdd = null;

