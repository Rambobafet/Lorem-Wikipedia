<?php
include('../includes/fn_wikipedia.php');
include('../includes/config.php');
$lorem_wikipedia = new Lorem_Wikipedia();

if(isset($_POST['nb_p']) && is_numeric($_POST['nb_p'])):
	foreach($lorem_wikipedia->makeLorem($_POST['language'], $_POST['nb_p']) as $value):
		echo $value;
	endforeach;
endif;