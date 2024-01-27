<?php 
$titre = "Accueil ";
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

<h2 class="accueil">Le Bahaus, quésako?</h2>

<div class="bauhauskesako">
    <p>Ce mouvement fut très court, pourtant, il a aujourd'hui encore une très grande influence sur notre quotidien.</p>
    <p>Mais alors, le Bauhaus, qu'est que c'est? Vous imaginez peut-être les batiments construits en béton, très sobre et très présents en Europe de l'Est. Mais en réalité c'est bien plus que ça!</p>

    <h3>Une histoire allemande</h3>

    <p>À l'origine, le Bauhaus est une école fondée à Weimar en 1919. C'est un véritable laboratoire pour l'art! Toutes les formes d'art sont mélangées. L'art concerne <strong>tous les aspects du quotidien</strong>, et est fait par tout le monde! Le style est avant tout marqué par le minimalisme et le fonctionnalisme.</p>

    <p>Mais en 1933, c'est déjà la fin!</p>
    <p> Avec l'arrivée d'Hitler au pouvoir, le Bauhaus est fortement critiqué et est placé au rang d'art "dégénéré", car étant trop associé au communisme.</p>

    <h3>Une suite internationale</h3>

    <p>Mais fort heureusement, l'affaire ne s'arrête pas là!</p>
    <p>En effet, de nombreux artistes fuient vers l'Amérique, où ils continuent à développer leurs idées. Alors à votre avis, qu'est-ce que le Bauhaus a créé dans notre société actuelle?</p>
    <p>Et bien, beaucoup de choses! Les grattes-ciels par exemple, ou encore la quasi totalité de notre mobilier… Et oui, tout ce que vous trouvez chez Ikea est fortement influencé par le Bauhaus!</p>
</div>

<h2 class="accueil">Le mouvement psychédélique, quésako?</h2>
<div class="psychekesako">
    <p>Vous connaissez certainement le muouvement hippie non? Et bien disons que le psychédélique en est un enfant. Très influencé par la musique rock, le mouvement hippie essaie de s'émanciper des valeurs traditionnelles américaines.</p>
    <p>Ils essaient de s'ouvrir à de nouvelles cultures, comme la culture amérandienne et s'efforce à construire un mode de vie alternatif.</p>
    <p>Leur style est très coloré et décalé, caractéristiques que nous retrouvons dans le psychédélisme.</p>
    
    <h3>Le parfait contraire du minimalisme</h3>
<p>Ce mouvement s'oppose au minimalisme, caractérisé de couleurs, de rondeurs et de profusion. Pour autant, il est tout autant présent dans notre société que le minimalisme!</p>
<p>Il est intéressant de voir à quel point les styles artistiques ont une influence même des années plus tard!</p>
</div>

<?php $content = ob_get_clean() ?>