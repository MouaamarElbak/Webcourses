
<?php
$me_nom = htmlspecialchars(addslashes($_POST['nom']));
$me_prenom = htmlspecialchars(addslashes($_POST['prenom']));
$me_date_naissance = htmlspecialchars(addslashes($_POST['daten']));
$me_adresse = htmlspecialchars(addslashes($_POST['adresse']));
$me_email = htmlspecialchars(addslashes($_POST['email']));
$me_mot_de_pass = htmlspecialchars(addslashes($_POST['password1']));
$me_confirmation_mot_de_pass = htmlspecialchars(addslashes($_POST['password2']));
$ut_email = htmlspecialchars(addslashes($_POST['email']));
$ut_mot_de_pass = htmlspecialchars(addslashes($_POST['password1']));

try {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=hutchinson;charset=utf8', 'hutchinson', '');

    // Configuration de l'attribut d'erreur
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM utilisateur WHERE ut_email = :email";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':email', $ut_email);
    $stmt->execute();

    // Vérification si l'utilisateur existe déjà dans la table "utilisateur"
    if ($stmt->rowCount() == 0) {
        // Vérification de la confirmation du mot de passe
        if ($me_mot_de_pass === $me_confirmation_mot_de_pass) {
            // Hachage du mot de passe
            $hashed_password = password_hash($me_mot_de_pass, PASSWORD_DEFAULT);

            // Préparation de la requête d'insertion dans la table "membre"
            $req_membre = $bdd->prepare("INSERT INTO membre (me_nom, me_prenom, me_date_naissance, me_adresse, me_email, me_mot_de_pass, me_confirmation_mot_de_pass)
            VALUES(:nom, :prenom, :daten, :adresse, :email, :password1, :password2)");

            // Exécution de la requête d'insertion dans la table "membre"
            $req_membre->execute(array(
                'nom' => $me_nom,
                'prenom' => $me_prenom,
                'daten' => $me_date_naissance,
                'adresse' => $me_adresse,
                'email' => $me_email,
                'password1' => $hashed_password,
                'password2' => $hashed_password,
            ));

            // Préparation de la requête d'insertion dans la table "utilisateur"
            $req_utilisateur = $bdd->prepare("INSERT INTO utilisateur (ut_email, ut_mot_de_pass)
            VALUES(:email, :password1)");

            // Exécution de la requête d'insertion dans la table "utilisateur"
            $req_utilisateur->execute(array(
                'email' => $ut_email,
                'password1' => $hashed_password
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
