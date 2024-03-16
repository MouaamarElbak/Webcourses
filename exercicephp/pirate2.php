<?php

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{ 
    $_GET['repeter'] = (int) $_GET['repeter']; //transtypage
    if ($_GET['repeter'] ==0)
    {
        echo 'la variable repeter vaut ' . $_get['repeter'] . 'car elle contenait du texte';
        echo '<br />';
    }
    else
{
    if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <=12)
{
    for ($i=0; $i < $_GET['repeter']; $i++)
{
    echo 'Bonjour a vous en ce beau matin ' . $i . ' ' . $_GET['prenom'] . ' ' . 
    $_GET['nom'] . '!';
    echo '<br/>';
}  
}
    else
    {
        echo 'Le nombre de répétition demandé de ' . $_GET['repeter'] . ' est trop élevé';
    }
}
}

else
{
    echo 'Version 3 Les paramétre prenom et nom sont absents';
}


?>