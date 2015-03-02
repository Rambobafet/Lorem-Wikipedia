<?php
ini_set('display_errors',1);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/

include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="favicon.png" />
        <title>Lorem Wikipedia</title>
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/libs/custom-scrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
		
        <link href='css/normalize.css' rel='stylesheet' type='text/css'>
        <link href='css/jquery.mCustomScrollbar.min.css' rel='stylesheet' type='text/css'>
        <link href='css/styles.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
		<header>
			<img src="images/logo.png" alt=":: Lorem*" />
		</header>
		
		<section>
			<div class="wrapper">
				<form action="" method="post">
					<div class="left">
						<label for="nb_p">Nombre de paragraphes</label> <input type="text" name="nb_p" id="nb_p" value="4" /><br>
					</div>
					
					<div class="left language">
						<label for="language">Langue</label> 
						<div class="select-wrapper">
							<p class="right language custom-select">English</p>
							<input type="hidden" name="language" value="English" class="right language custom-select" />
							<div class="custom-list">
								<div class='list'></div>
							</div>
							<select name="list_language">
								<?php foreach($langues as $key => $value): ?>
								<option value="<?php echo $key; ?>"><?php echo $value['nom']; ?></option>
								<?php endforeach; ?>
							</select>
							<div class="clearfix"></div>
						</div>
					</div>
					
					<div class="right">
						<input type="submit" name="submit" value="" />
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>
		
		<div class="wrapper">
			<article></article>
        </div>
		
		<aside>
			<div class="wrapper">
				<h1>Mieux que le Lorem Ipsum</h1>
				<p>Toi aussi tu n'as pas voulu faire Latin en 5e ? Toi aussi tu as fait Latin en 5e ?<br>
					Dans tous les cas vous ne comprenez rien au Lorem Ipsum qui, certes dépanne bien, mais ne permet pas de jouer avec toutes les finesses de ta langue.<br>
				Pas de caractères spéciaux, des paragraphes tout propre, ... Je me dis que c'est pas mal mais qu'on peut faire mieux.</p>
				<p>Je vous propose donc un outil pour aller piocher de vrai paragraphes dans la langue que tu veux, grâce a Wikipedia.</p>
				
				<h2>Bah ouai mais comment je reconnais du Lorem Wikipedia ?</h2>
				<p>Le Lorem Ipsum se reconnait facilement parce qu'il commence par <i>Lorem Ipsum</i>, et du coup si on prend des vrais contenus d'une encyclopédie, comment repérez facilement ce contenu
				de substitution ? Pour y remédier, je vous propse un bon vieux random(); des familles. Ainsi des vrais mots, des vrais caractères spéciaux, mais aucun sens dès lors qu'on lit plus de 3 mots.</p>
			</div>
		</aside>
        
    </body>
</html>