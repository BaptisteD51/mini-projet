<!-- Bonjour -->
<?php
$titre = "Les animations en CSS";
$pageStyle = "animations.css";
?>

<?php ob_start() ?>

<h1> <?php echo $titre ?> </h1>
<p>
    Vos pages web manquent parfois d’un peu de dynamisme. Heureusement, les animations CSS existent !
    Alors si vous voulez apprendre à créer des éléments qui bougent dans tous les sens, suivez le guide !
</p>
<h2>
    Voici un premier exemple d’animation :
</h2>
<div class="dots">
    <div></div>
    <div></div>
    <div></div>
</div>
<p>
    Alors, comment ça fonctionne ?
</p>
<h3>Première étape : définir un keyframe</h3>
<p>
    Le keyframe permet de définir le déroulement de l'animation.
    A l'intérieur se trouve des mots clés permettant de spécifier les étapes, pour celà il existe deux syntaxes :
</p>
<ul>
    <li>
        <strong>From / to :</strong> Permet de spécifier l'état de départ avec <span class="bold">From</span>
        et l'état d'arrivée avec <span class="bold">To</span>.
    </li>
    <li>
        <strong> 0% / ... / 100% :</strong> Cette notattion permet de construire des animations plus compliquées avec
        un plus grand nombre d'étapes.
    </li>
</ul>
<p>Avant de nous aventurer plus loin, voici le keyframe que j'ai utilisé pour l'animation :</p>
<pre>
    <code>
        @keyframes <span class="color-red">dotmove</span>{
            <span class='color-blue'>0%</span> {
                transform: translateY(0px);
            }
            <span class='color-blue'>66%</span> {
                transform: translateY(0px);
            }
            <span class='color-blue'>100%</span> {
                transform: translateY(-20px);
            }
        }
    </code>
</pre>
<p>Alors que voit-on ?</p>
<ul>
    <li>
        D'abord, en première ligne nous avons le <span class="bold">nom du keyframes</span>, 
        que nous allons réutiliser juste après.
        Dans notre cas, ce sera "dotmove".
    </li>
    <li>
        Ensuite, nous avons nos <span class="bold">différentes étapes</span>. Autrement dit, à 0% à 66% de l'animation,
        notre point ne bouge pas. A partir de 66% et jusqu'à 100% de l'animation, le point va s'élever progressivement
        de 0 à 20px.  
    </li>
</ul>
<h3>Deuxième étape : assigner le keyframe à un élément, avec les paramètres</h3>
<p>Maintenant que nous avons notre animation, nous allons l'assigner à nos points !</p>
<p> 
    Pour ce faire, nous allons utiliser la propriété short-hand <strong>animation</strong>. Il est également
    possible d'utiliser la propriété long-hand animation-name, mais par soucis de concision, nous la laisserons
    de côté. Pour que tous fonctionne correctement, il faut également passer des paramètres à l'animation 
    (il est également possible de les définir en long-hand avec les propriétés respectives).
</p>
<p> Voilà ce que ca donne : </p>
<pre>
    <code>
        div.dots > div{
            <span class="color-blue">animation:</span> <span class="color-red">dotmove</span> 1s ease-in-out alternate infinite;
        }
    </code>
</pre>
<p> Voici à quoi correspondent les différentes valeurs :</p>
<ul>
    <li> <strong>dotmove : </strong>facile, il s'agit du keyframe que nous avons précédemment défini </li>
    <li> 
        <strong>1s :</strong> correspond à la proprété long-hand animation-duration.
        C'est la seule valeur vraiment obligatoire pour que l'animation fonctionne. 
    </li>
    <li>
        <strong>ease-in-out :</strong> correspond à animation-timing-function. Ce qui en terme moins barbare,
        défini la manière dont l'animation va progresser entre chaue étape. Ease-in-out permet de donner un petit
        effet d'amorti. Mais il y a d'autres possibilités, linear, par exemple, si on ne veut pas d'effet
        d'accélération et de décélération.
    </li>
    <li>
        
    </li>
</ul>

<?php $content = ob_get_clean() ?>