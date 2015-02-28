<?php
ini_set('display_errors',1);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('fn_wikipedia.php');
$lorem_wikipedia = new Lorem_Wikipedia();

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Lorem Wikipedia</title>
    </head>
    <body>
        <h1>Lorem Wikipedia : Mieux que le Lorem Ipsum</h1>
        <p>Toi aussi tu n'as pas voulu faire Latin en 5e ? Toi aussi tu as fait Latin en 5e ?<br>
            Dans tous les cas vous ne comprenez rien au Lorem Ipsum qui, certes dépanne bien, mais ne permet pas de jouer avec toutes les finesses de ta langue.<br>
        Pas de caractères spéciaux, des paragraphes tout propre, ... Je me dis que c'est pas mal mais qu'on peut faire mieux.</p>
        <p>Je vous propose donc un outil pour aller piocher de vrai paragraphes dans la langue que tu veux, grâce a Wikipedia.</p>
        
        <h2>Bah ouai mais comment je reconnais du Lorem Wikipedia ?</h2>
        <p>Le Lorem Ipsum se reconnait facilement parce qu'il commence par <i>Lorem Ipsum</i>, et du coup si on prend des vrais contenus d'une encyclopédie, comment repérez facilement ce contenu
        de substitution ? Pour y remédier, je vous propse un bon vieux random(); des familles. Ainsi des vrais mots, des vrais caractères spéciaux, mais aucun sens dès lors qu'on lit plus de 3 mots.</p>
        
        <form action="" method="post">
            <label for="language">Langue :</label> <input type="text" name="language" id="language" /><br>
            <label for="nb_p">Nombre de paragraphes :</label> <input type="text" name="nb_p" id="nb_p" /><br>
            <input type="submit" name="submit" value="Lorem !" />
        </form>
        
        <hr>
        
        <h2>Résultats</h2>
        <?php 
        foreach($lorem_wikipedia->makeLorem('fr', 4) as $value):
            echo $value;
        endforeach;
        ?>        
    </body>
</html>