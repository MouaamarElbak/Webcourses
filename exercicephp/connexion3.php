<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}

try {
    if (isset($_POST['num_inscription'], $_POST['date'], $_POST['carte_licencier'], $_POST['certificat_medical'], $_POST['taille_maillot'], $_POST['num_dossard'])) {

        // Récupération des valeurs du formulaire
        $ins_num_inscription = htmlspecialchars($_POST['num_inscription']);
        $ins_date = htmlspecialchars($_POST['date']);
        $ins_carte_licencier = htmlspecialchars($_POST['carte_licencier']);
        $ins_certificat_medical = htmlspecialchars($_POST['certificat_medical']);
        $ins_taille_maillot = htmlspecialchars($_POST['taille_maillot']);
        $ins_dossard = htmlspecialchars($_POST['num_dossard']);

        // Récupération des valeurs des ID et incrément de +1
        $query = $bdd->query('SELECT MAX(ep_id) as max_ep_id, MAX(reg_id) as max_reg_id, MAX(co_id) as max_co_id, MAX(cat_id) as max_cat_id FROM inscrire');
        $result = $query->fetch();

        $ep_id = $result['max_ep_id'] + 1;
        $reg_id = $result['max_reg_id'] + 1;
        $co_id = $result['max_co_id'] + 1;
        $cat_id = $result['max_cat_id'] + 1;

        // Insertion dans la table inscrire
        $req1 = $bdd->prepare('INSERT INTO inscrire (ins_num_inscription, ins_date, ins_carte_licencier, ins_certificat_medical, ins_taille_maillot, ins_dossard, ep_id, reg_id, co_id, cat_id)
         VALUES (:num_inscription, :date, :carte_licencier, :certificat_medical, :taille_maillot, :num_dossard, :ep_id, :reg_id, :co_id, :cat_id)');
        $req1->execute(array(
            'num_inscription' => $ins_num_inscription,
            'date' => $ins_date,
            'carte_licencier' => $ins_carte_licencier,
            'certificat_medical' => $ins_certificat_medical,
            'taille_maillot' => $ins_taille_maillot,
            'num_dossard' => $ins_dossard,
            'ep_id' => $ep_id,
            'reg_id' => $reg_id,
            'co_id' => $co_id,
            'cat_id' => $cat_id
        ));

        echo('<p id="new">Inscription réussie : </p>'.'<p id="nouveau">Le numero inscription : '.$_POST['num_inscription'].' <br/>La date : '.$_POST['date'].' 
        <br/>Carte de licencier : '.$_POST['carte_licencier'].'<br/>Certificat medical : '.$_POST['certificat_medical'].'
        <br/>La taille du maillot : '.$_POST['taille_maillot'].'<br/>Le numero du dossard : '.$_POST['num_dossard'].' </p>'); 




    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
} catch (PDOException $e) {
    echo "Erreur d'insertion : " . $e->getMessage();
}
?>