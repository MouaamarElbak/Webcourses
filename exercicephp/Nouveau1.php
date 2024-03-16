
<?php
$me_Nom = htmlspecialchars(addslashes($_POST['nom']));
$me_Pnom = htmlspecialchars(addslashes($_POST['prenom']));
$me_Pseudo = htmlspecialchars(addslashes($_POST['pseudo']));
$me_naissance = htmlspecialchars(addslashes($_POST['daten']));
$me_adresse = htmlspecialchars(addslashes($_POST['adresse']));
$me_mail = htmlspecialchars(addslashes($_POST['email']));
$me_passe = htmlspecialchars(addslashes($_POST['password1']));
$me_confirmation = htmlspecialchars(addslashes($_POST['password2']));
$person_tel = htmlspecialchars(addslashes($_POST['phone']));
$person_adresse = htmlspecialchars(addslashes($_POST['adresse']));

/*/ Vérification de l'adresse e-mail
if (!filter_var($me_mail, FILTER_VALIDATE_EMAIL)) {
    echo "Adresse e-mail invalide.";
    exit; // Arrêter l'exécution du script si l'adresse e-mail est invalide
    
    '/^[a-zA-Z]([.-_]?[0-9]?[a-zA-Z]?)+@([a-zA-Z]+[.-_]? (([0-9]?)* (([a-zA-Z)?) +))[.][a-zA-Z] {2,3}$/', $_POST['email']

}*/

// Vérification de l'adresse e-mail
if (preg_match('/^[a-zA-Z]([.-_]?[0-9]?[a-zA-Z]?)+@([a-zA-Z]+[.-_]?([0-9]?)*([a-zA-Z]+))[.][a-zA-Z]{2,3}$/', $_POST['email'])) 
{
    echo "Adresse e-mail valide.";
}
else
{
    echo "Adresse non valide";
    exit; // Arrêter l'exécution du script si l'adresse e-mail est invalide
}

// Verification du Numéro
if (preg_match('/^[+][3]{2}[ .-]?[1-9]([ .-]?[0-9]{2}){4}$/', $_POST['phone'])) {
    
    echo "Le Numero est bien valide";
} 
else 
{
    echo "Le Numéro est invalide";
    exit; // Arrêter l'exécution du script si le telephone est invalide
}
// Fin du test


try {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');

    // Configuration de l'attribut d'erreur
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM membre WHERE me_mail = :email";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':email', $me_mail);
    $stmt->execute();

    // Vérification si l'utilisateur existe déjà dans la table "membre"
    if ($stmt->rowCount() == 0) {
        // Vérification de la confirmation du mot de passe
        if ($me_passe === $me_confirmation) {
            // Hachage du mot de passe
            $hashed_password = password_hash($me_passe, PASSWORD_DEFAULT);

            // Préparation de la requête d'insertion dans la table "person"
            $req_id = $bdd->prepare('INSERT INTO personne(person_nom, person_prenom, person_adresse, person_tel) 
            VALUES(:nom, :prenom, :adresse, :phone)');
            // Exécution de la requête d'insertion dans la table "person"
            $req_id->execute(array(
                'nom' => $me_Nom,
                'prenom' => $me_Pnom,
                'adresse' => $person_adresse,
                'phone' => $person_tel
            ));
            $req_id = $bdd->query('SELECT person_id FROM personne ORDER BY person_id DESC LIMIT 1');
    
            $person_id = $req_id->fetch(PDO::FETCH_ASSOC)['person_id'];
        

            // Préparation de la requête d'insertion dans la table "membre"
            $req_membre = $bdd->prepare("INSERT INTO membre (me_Nom, me_Pnom, me_Pseudo, me_naissance, me_mail, me_passe, me_confirmation, person_id)
            VALUES(:nom, :prenom, :pseudo, :daten, :email, :password1, :password2, :person_id)");

            // Exécution de la requête d'insertion dans la table "membre"
            $req_membre->execute(array(
                'nom' => $me_Nom,
                'prenom' => $me_Pnom,
                'pseudo' => $me_Pseudo,
                'daten' => $me_naissance,
                'email' => $me_mail,
                'password1' => $hashed_password,
                'password2' => $hashed_password,
                'person_id' =>$person_id
            ));


            echo "Le nouvel utilisateur a été enregistré avec succès.";
        } else {
            echo "La confirmation du mot de passe a échoué.";
        }
    } else {
        echo "L'utilisateur existe déjà.";
    }
} catch (Exception $e) {
    die('Erreur d\'insertion ou enregistrement déjà existant : ' . $e->getMessage());
}
?>
