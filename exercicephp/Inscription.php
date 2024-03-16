<!DOCTYPE html>
<html lang="fr">

<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="projet PHP/style/style42.css" rel="stylesheet">
</head>

<body>
    <!-- Nouveau membre-->
    <section class="home">
        <div class="form form_container">

            <div>
            </div>

            <!--<a href="test 1.php"><i class="uil uil-times form_close"></i></a>-->
            <form method="post" action="Nouveau1.php">
                <h2 id="titre">Inscription</h2>
                <div class="input_box">
                    <input type="text" placeholder="Nom" name="nom" required />

                </div>

                <div class="input_box">
                    <input type="text" placeholder="Prenom" name="prenom" required />

                </div>
                
                <div class="input_box">
                    <input type="text" placeholder="Pseudo" name="pseudo" required />

                </div>

                <div class="input_box">
                    <input type="text" placeholder="Téléphone" name="phone" required />

                </div>

                <div class="input_box">
                    <input type="date" placeholder="Date de naissance" name="daten" required />

                </div>

                <div class="input_box">
                    <input type="text" placeholder="adresse et code postale" name="adresse" required />

                </div>



                <div class="input_box">
                    <input type="text" placeholder="E-mail" name="email" required />
                    <i class="uil uil-envelope-alt email"></i>
                </div>

                <div class="input_box">
                    <input type="password" placeholder="Nouveau mot de pass" name="password1" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>

                <div class="input_box">
                    <input type="password" placeholder="Confirmation mot de pass" name="password2" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>


                <button type="submit" class="button">S'inscrire</button>

                <div class="login_singup">
                    si vous avez un compte<br> <a href="Connexion.php" id="login">Se Connecter</a>
                </div>


            </form>
        </div>
        </div>
</body>

</html>