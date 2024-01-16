<?php 
$titre = "Site de Baptiste et Estévène : Accueil "
?>

<?php ob_start() ?>

<h1>Accueil</h1>
<p>Bienvenue sur la page d'accueil de notre site WEB</p>
<p>Ce site a vocation dde vous faire découvrir les subtilités de HTML5 et CSS3</p>

<?php $content = ob_get_clean() ?>