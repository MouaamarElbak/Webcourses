<!DOCTYPE html>
<html lang="fr">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="projet PHP/style/style3.css"/>
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
    <table class="id">
        <tr>
        <th class="id">Date</th>
        <th class="id">Lieu</th>
        <th class="id">Parcours</th>
        <th class="id">Distance</th>
        <th class="id">Montant de l'inscription</th>
        </tr>
        <tr>
            <td class="id">15/05/2020</td>
            <td class="id">Paris</td>
            <td class="id">Parcours10</td>
            <td class="id">42km</td>
            <td class="id">50 euros</td>
        </tr>
        <tr>
            <td class="id">12/06/2020</td>
            <td class="id">Lyon</td>
            <td class="id">Parcours10</td>
            <td class="id">35km</td>
            <td class="id">47 euros</td>
        </tr>
        <tr>
            <td class="id">22/08/2020</td>
            <td class="id">Marseille</td>
            <td class="id">Parcours10</td>
            <td class="id">50km</td>
            <td class="id">60 euros</td>
        </tr>

    </table>
    <div>
            <select>
                <option>
                    Championnat
                </option>
                <option>
                <?php
                        try {
                            // Connexion à la base de données
                            $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');

                            // Configuration de l'attribut d'erreur
                            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            // Requête SQL pour récupérer les données
                            //$sql = "SELECT * FROM document"; selection sur tout le document 
                            
                            $sql = "SELECT * From Championnat where ch_id=1";
                            $result = $bdd->query($sql);

                            // Vérifier s'il y a des résultats
                            if ($result->rowCount() > 0) {
                                // Affichage des données


                                while ($row = $result->fetch()) {
                                    // Afficher les données de chaque ligne


                                    echo  $row['ch_nom'] . "<br>";
                                                                 
                                    
                                }
                            } else {
                                echo "Aucun résultat trouvé.";
                            }
                        } catch (PDOException $e) {
                            die('Erreur de connexion : ' . $e->getMessage());
                        }
                        ?>
                </option>
                <option>
                <?php
                        try {
                            // Connexion à la base de données
                            $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');

                            // Configuration de l'attribut d'erreur
                            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            // Requête SQL pour récupérer les données
                            //$sql = "SELECT * FROM document"; selection sur tout le document 
                            
                            $sql = "SELECT * From Championnat where ch_id=2";
                            $result = $bdd->query($sql);

                            // Vérifier s'il y a des résultats
                            if ($result->rowCount() > 0) {
                                // Affichage des données


                                while ($row = $result->fetch()) {
                                    // Afficher les données de chaque ligne


                                    echo  $row['ch_nom'] . "<br>";
                                                                 
                                    
                                }
                            } else {
                                echo "Aucun résultat trouvé.";
                            }
                        } catch (PDOException $e) {
                            die('Erreur de connexion : ' . $e->getMessage());
                        }
                        ?>
                </option>
                <option >
                <?php
                        try {
                            // Connexion à la base de données
                            $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');

                            // Configuration de l'attribut d'erreur
                            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            // Requête SQL pour récupérer les données
                            //$sql = "SELECT * FROM document"; selection sur tout le document 
                            
                            $sql = "SELECT * From Championnat where ch_id=3";
                            $result = $bdd->query($sql);

                            // Vérifier s'il y a des résultats
                            if ($result->rowCount() > 0) {
                                // Affichage des données


                                while ($row = $result->fetch()) {
                                    // Afficher les données de chaque ligne


                                    echo  $row['ch_nom'] . "<br>";
                                                                 
                                    
                                }
                            } else {
                                echo "Aucun résultat trouvé.";
                            }
                        } catch (PDOException $e) {
                            die('Erreur de connexion : ' . $e->getMessage());
                        }
                        ?>
                </option>

                

        
                    </select>
                    <button>
                        <a href = https://www.youtube.com/?gl=FR&hl=fr>Epreuve</a>
                    </button>
</div>

<div id='Antony'>
<form method="post" action="connexion3.php">
        <div class="inputs">
          <input type="number" placeholder="num_inscription" name="num_inscription" required="required"/>  
          <select id="taille_maillot" name="taille_maillot" required="required">
            <option value="S">Taille S</option>
            <option value="M">Taille M</option>  
            <option value="XL">Taille XL</option>
            <option value="2XL">Taille 2XL</option>  
          </select> 
          <input type="date" placeholder="date" name="date" required="required"/>
          <select id="certificat_medical" name="certificat_medical" required="required">
            <option value="1">Non</option>
            <option value="2">Oui</option>   
          </select> 
          <input type="number" placeholder="carte_licencier" name="carte_licencier" required="required"/>  
          <input type="number" placeholder="num_dossard" name="num_dossard" required="required"/>
        </div>
        <p><input type="checkbox" name="coche" value="coche" onClick="Valider(this.form)" /> En cochant cette case, j'accepte les conditions générales d'utilisation de Webcourse.</p> 
        <p><input type="submit" name="valider" value="S'inscrire" /></p>
      </form> 

                    </div>



    <a href="index.php"><img src="./projet PHP/image/logo_velo.jpg" title="Image Vélo" alt="image velo" id="image1"/></a>


    <footer>
        <p id="footer">
            &copy; <a href="mentionslegales.pdf" target="_blank">Mentions légales</a> - <a href="politique.pdf" target="_blank">Politique de confidentialité</a> - <a href="cookies.pdf" target="_blank">Gestion des cookies</a> - <a href="droitimage.pdf" target="_blank">Droit à l'image</a>
        </p>
    </footer>

    
</body>
</html>