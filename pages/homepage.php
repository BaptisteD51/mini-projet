<?php 
$titre = "Site de Baptiste et Estévène : Accueil ";
$pageStyle = "diaporama.css";
$pageScript = "diaporama.js";
?>

<?php ob_start() ?>

<h1>Accueil</h1>

<?php include "parts/diaporama.php"; ?>

<div>
<p>Bienvenue sur la page d'accueil de notre site WEB</p>
<p>Ce site a vocation dde vous faire découvrir les subtilités de HTML5 et CSS3, grâce à deux artistiques: le Bauhaus et le mouvement psychédélique, ça vous parle?</p>
<p>Non? Alors avant de commencer avec le CSS et l'HTML, un peu d'histoire! </p>
</div>

<h2>Le Bahaus, quésako?</h2>

<div class="bauhaiskesako">
<p>Ce mouvement fut très court, pourtant, il a aujourd'hui encore une très grande influence sur notre quotidien.</p>
<p>Mais alors, le Bauhaus, qu'est que c'est? Vous imaginez peut-être les batiments construits en béton, très sobre et très présents en Europe de l'Est. Mais en réalité c'est bien plus que ça!</p>

<h3>Une histoire allemande</h3>

<p>À l'origine, le Bauhaus est une école fondée à Weimar en 1919. C'est un véritable laboratoire pour l'art! Toutes les formes d'art sont mélangées, il n'existe pas de hiéarchie entre les arts dit "majeurs" (architecture, peinture, sculpture) et les arts "mineurs" (design, mode, graphisme). </p>
<p>L'art est total, donc concerne <strong>tous les aspects du quotidien</strong>, et est fait par tout le monde! Le style est avant tout marqué par le minimalisme et le fonctionnalisme.</p>

<p>Cependant, en 1933, c'est déjà la fin!</p> 
<p> Avec l'arrivée d'Hitler au pouvoir, le Bauhaus est fortement critiqué et est placé au rang d'art "dégénéré", car étant trop associé au communisme.</p>

<h3>Une suite internationale</h3>

<p>Mais fort heureusement, l'affaire ne s'arrête pas là!</p>
<p>En effet, de nombreux artistes fuient vers l'Amérique, où ils continuent à développer leurs idées. Alors à votre avis, qu'est-ce que le Bauhaus a créé dans notre société actuelle?</p>
<p>Et bien, beaucoup de choses! Les grattes-ciels par exemple, ou encore la quasi totalité de notre mobilier… Et oui, tout ce que vous trouvez chez Ikea est fortement influencé par le Bauhaus!</p>
</div>

<?php $content = ob_get_clean() ?>