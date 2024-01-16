<?php 
$titre = "Les transformations en CSS";
$pageStyle = "transformation.css";
?>

<?php ob_start() ?>

<h1> <?php echo $titre ?> </h1> 
<p>En CSS on peut faire des transformations ! Avec transform:scale(x%); par exemple. Mais les possibilités sont bien plus grandes</p>

<p id="retour"></p>
<div class="fondBat">
    <p class="premier"> Ici à gauche, un exemple de transformation: en cliquant sur le bouton, il va se déplacer. <br>
        (le retour en arrière est en préparation, il nous faut du JS j'attends le cours) </p>
    <p id="transformation"></p>
    <p ><a class="batiment" href="#transformation"></a></p>
</div>


<p class="text-align-center"><a href="#retour">Annuler l'effet</a></p>

<div class="deuxieme">
   
    <p class="text-align-center"><a class="test" id="bouton" onclick="apparition()">Cliquez ici</a><img src="Images/code_transformation.jpg" id="codesource" onclick="disparition()" alt=""></p>
    <p class="deuxieme">Vous voulez savoir comment on fait? Il suffit d'ajouter cette ligne de code.</p> 
</div>

<section>

    <div class="zoom"></div>

</section>
<script>
    
function getId(id) {
    return(document.getElementById(id))
}
    
function apparition(){
    getId('codesource').classList.add("codecible")
    getId('bouton').classList.add("test2")
}
    
function disparition(){
    getId('codesource').classList.remove("codecible")
    getId('bouton').classList.remove("test2")
}
</script>

<?php $content = ob_get_clean() ?>
