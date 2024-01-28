<?php 
$titre = "Les transformations en CSS";
$pageStyle = "transformation.css";
$pageScript = "transformation.js";
?>

<?php ob_start() ?>

<h1> <?php echo $titre ?> </h1> 
<p>En CSS, on peut faire des transformations ! Avec transform:scale(x%); par exemple. Mais les possibilités sont bien plus grandes.</p>

<h3>Transformation : translate et rotate</h3>

<p id="retour"></p>
<div class="fondBat">
    <p class="premier"> 
        "Ici à gauche, un exemple de transformation : en cliquant sur l'objet le plus à gauche sur l'image, 
        il va se déplacer."
    </p>
    <p id="transformation"></p>
    <p><a class="batiment" href="#transformation"></a></p>
</div>


<p class="text-align-center"><a href="#retour">Annuler l'effet</a></p>

<div class="deuxieme">
   
    <p class="text-align-center"><a class="test" id="bouton" onclick="apparition()">Cliquez ici</a><img src="Images/code_transformation.jpg" id="codesource" onclick="disparition()" alt=""></p>
    <p class="deuxieme">
        Vous voulez savoir comment on fait ? Il suffit d'ajouter cette ligne de code. <br><br>
        La fonction <strong>translate</strong> permet de déplacer l'objet. Ici, nous avons donné comme paramètre 100px. 
        Pour qu'il se déplace lentement, il suffit de donner une <strong>transition </strong> à la propriété transform. 
        <br> <br>
        Quant à la propriété rotate, elle permt à l'objet de pivoter. Ici, il pivote très légèrement de 20 degrès."
    </p> 
</div>

<h3>Transformation : scale </h3>
<div>
    <p>Ici, un exemple emblématique de cette époque, afin d'illustrer la fonction zoom. <br>
        Pour cela, il suffit d'utiliser la fonction "scale" : ici, nous avons choisi 150%. C'est-à-dire que l'image va grandir à 150% par rapport à sa taille initiale. Afin de créer l'effet de zoom, il est nécessaire d'ajouter une transition sur la propriété, comme nous l'avons vu plus haut.
    </p>
</div>

<section>

    <div class="zoom"></div>

</section>

<?php $content = ob_get_clean() ?>
