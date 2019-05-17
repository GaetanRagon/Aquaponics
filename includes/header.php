<?php
$topmenu[] = array(
	'libelle' => 'Accueil',
	'url' => 'index.php');
$topmenu[] = array(
	'libelle' => 'Aquaponie',
	'url' => 'aquaponie.php');
$topmenu[] = array(
	'libelle' => 'Capteurs',
	'url' => 'capteurs.php');
$topmenu[] = array(
	'libelle' => 'Connexion',
	'url' => 'connexion.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aquaponics System ISA</title>
    <link rel="stylesheet" href="CSS.css" media="screen">
  </head>
  <header>
		<section class="background">
			<h1>PCIHPOAZIH</h1>
		</section>
    <nav class="navigation">
<?php
	for ($i = 0; $i < count($topmenu); $i++) {
  	$class = '';
    if ($id == $i + 1) {
    	$class = 'class="active"';
    }
  	print '<a '.$class.' href='.$topmenu[$i]['url'].'>'.$topmenu[$i]['libelle'].'</a>';
  }
?>
    </nav>
  </header>
