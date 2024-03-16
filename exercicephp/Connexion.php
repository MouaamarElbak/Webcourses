<!DOCTYPE html>
<html lang="fr">

<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="projet PHP/style/style42.css" rel="stylesheet">
    <!--<div>
        <a href="https://www.hutchinson.com/fr">
            <img src="css/hu.png" alt="logo" id="logo"></a>
    </div>-->
</head>

<body>
    <section class="home">

        <div class="form_container">
            <div>
                
            </div>
            <!--<a href="test 1.php"><i class="uil uil-times form_close"></i></a>-->

            <div class="form login_form">
                <form method="post" action="utilisateur.php">
                    <h2 id="titre">Connecter</h2>
                    <div class="input_box">
                        <input type="email" placeholder="E-mail" name="email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Password" name="password1" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">se souvenir de moi</label>
                        </span>
                        <a href="#" class="forgot_pw">Mot de passe oublié ?</a>

                        <button type="submit" class="button">Se connecter</button>

                        <div class="login_singup">
                            si vous n'avez pas de compte<br> <a href="Inscription.php" id="signup">Cliquez ici</a>
                        </div>


    </section>

    <script src="script.js"></script>
</body>


</html>