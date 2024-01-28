<?php
$titre = "Les animations en CSS";
$pageStyle = "animations.css";
$pageScript = "animations.js";
?>

<?php ob_start() ?>

<h1> <?php echo $titre ?> </h1>
<p>
    Vos pages web manquent parfois d’un peu de dynamisme. Heureusement, les <strong>animations CSS</strong>
    existent !
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
    À l'intérieur se trouve des mots-clés permettant de spécifier les étapes, pour celà il existe deux syntaxes :
</p>
<ul>
    <li>
        <strong>From / to :</strong> permet de spécifier l'état de départ avec <span class="bold">From</span>
        et l'état d'arrivée avec <span class="bold">To</span>.
    </li>
    <li>
        <strong> 0% / ... / 100% :</strong> cette notation permet de construire des animations <span class="bold">plus complexes</span> avec
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
<p>Que voit-on ?</p>
<ul>
    <li>
        D'abord, en première ligne nous avons le <span class="bold">nom du keyframes</span>. 
        Nous allons l'appeler juste après dans nos règles CSS.
        Dans le cas présent, ce sera "dotmove".
    </li>
    <li>
        Ensuite, nous avons nos <span class="bold">différentes étapes</span>. Autrement dit, de 0% à 66% de l'animation,
        notre point ne bouge pas. À partir de 66% et jusqu'à 100% de l'animation, le point va s'élever progressivement
        de 0 à 20px.  
    </li>
</ul>
<h3>Deuxième étape : assigner le keyframe à un élément, avec les paramètres</h3>
<p>Maintenant que nous avons notre keyframe, nous allons l'assigner à nos points !</p>
<p> 
    Pour ce faire, nous allons utiliser la <span class="bold">propriété short-hand</span> <strong>animation</strong>. Il est également
    possible d'utiliser la <span class="bold">propriété long-hand animation-name,</span> mais par soucis de concision, nous la laisserons
    de côté. Afin que tout fonctionne correctement, il faut également passer des <span class="bold">paramètres</span> à l'animation 
    (il est également possible de les définir en long-hand avec les propriétés respectives).
</p>
<p> Voilà ce que ça donne : </p>
<pre>
    <code>
        div.dots > div{
            <span class="color-blue">animation:</span> <span class="color-red">dotmove</span> 1s ease-in-out alternate infinite;
        }
    </code>
</pre>
<p> Vous êtes perdu ? Ne vous inquiétez pas, voici à quoi correspondent les différentes valeurs :</p>
<ul>
    <li> <strong class="underline">dotmove :</strong> facile, il s'agit du keyframe que nous avons précédemment défini.</li>
    <li> 
        <strong class="underline">1s :</strong> correspond à la propriété <strong>animation-duration</strong>.
        C'est la seule valeur vraiment <span class="bold">obligatoire</span> pour que l'animation fonctionne.
        L'animation mettra une seconde à s'effectuer.
    </li>
    <li>
        <strong class="underline">ease-in-out :</strong> correspond à <strong>animation-timing-function</strong>. En terme moins barbare,
        cela permet de définir la manière dont l'animation va progresser entre chaque étape. <span class="bold">Ease-in-out</span> permet de donner un petit
        <span class="bold">effet d'amorti</span>. Mais il y a d'autres possibilités, <span class="bold">linear</span>, par exemple, si on ne veut pas d'effet
        <span class="bold">d'accélération</span> et de <span class="bold">décélération</span>.
    </li>
    <li>
        <strong class="underline">alternate :</strong> correspond à <strong>animation-direction</strong>. 
        La propriété alternate permet de
        faire en sorte que l'animation se joue dans les deux sens. En clair, une fois 
        arrivée à 100%, l'animation va s'effectuer en sens inverse pour revenir à son point de 
        départ, ici 0%.
    </li>
    <li>
        <strong class="underline">infinite :</strong> C'est l'astuce de la présente animation. Comme son nom 
        l'indique, cette valeur d'<strong>animation-iteration-count</strong>
        permet de faire en sorte que l'animation <strong>se joue à l'infini</strong>. Il est également possible
        de spécifier un <span class="bold">nombre de fois</span> entier. 
    </li>
</ul>

<h2> Une animation déclenchée à l'aide de JavaScript </h2>
<p>
    Alors voilà, pour ce genre d'animation qui se joue en boucle, faire uniquement du CSS se révèle suffisant.
    Mais vous remarquerez vite les animations se déclenchent <span class="bold">au chargement du DOM</span>. 
    Ce qui n'est pas super pratique
    si vous voulez jouer une animation ponctuelle, en milieu de page par exemple. En effet, avec du CSS 
    uniquement, l'animation se sera déclenchée bien <span class="bold">avant que l'utilisateur ne puisse la voir</span>. 
</p>
<p> 
    Pour résoudre ce problème, nous allons devoir utiliser du <span class="bold">JavaScript</span>. Ainsi,
    nous pourrons appliquer les 
    règles css <strong>en fonction des événements</strong> sur la page. 
    De cette manière, il est tout à fait possible de jouer une 
    animation en cliquant sur un bouton, par exemple.
</p>
<p> 
    Mais pour quelque chose de plus immersif, nous allons découvrir l'<strong>IntersectionOberver</strong>. 
    Cet objet JavaScript va nous permettre de déclencher nos animations quand elles seront <span class="bold">visibles par 
    l'utilisateur</span>.
</p>
<p>
    Sans plus attendre :
</p>
<div class='cadre-gibbon'>
    <div class="branche-gibbon">
        <img src="Images/gibbon-animation.png" alt="Gibbon sur liane">
    </div>
</div>
<p> Voici le <span class="bold">KeyFrame</span> utilisé, vous devriez avoir l'habitude maintenant :</p>
<pre>
    <code>
        @keyframes <span class="color-red">gibbon-move</span>{
            <span class="color-blue">0%</span>{
                transform: rotateZ(90deg);
            }
            <span class="color-blue">36%</span>{
                transform: rotateZ(-90deg);
            }
            <span class="color-blue">40%</span>{
                transform: rotateZ(-90deg) rotateY(180deg);
            }
            <span class="color-blue">76%</span>{
                transform: rotateZ(90deg) rotateY(180deg);
            }
            <span class="color-blue">80%</span>{
                transform: rotateZ(90deg) rotateY(0deg);
            }
            <span class="color-blue">100%</span>{
                transform: rotateZ(0deg);
            }
        }
    </code>
</pre>
<p>
    Cependant, nous n'avons pas envie que cette animation démarre au chargement du DOM. C'est pourquoi nous 
    l'appellerons uniquement quand une class <span class="bold">"play-animation"</span> sera <strong>ajoutée dynamiquement</strong>
    .
</p>
<pre>
    <code>
        <span class="color-green bold">.play-animation</span> .branche-gibbon{
            visibility: visible;
            <span class="color-blue">animation:</span> <span class="color-red">gibbon-move</span> 5s;
        }
    </code>
</pre>
<p>
    Nous ajouterons cette class à notre div parent tropical à l'aide de JS. 
</p>
<p>
    La méthode adéquate consiste à utiliser l'objet JavaScript <strong>IntersectionOberver</strong>.
    Commençons déjà par l'instancier dans notre code : 
</p>
<pre>
    <code>
        var <span class="color-red">observer</span> = new <span class="color-green">IntersectionObserver</span>(function(<span class="color-blue">entries</span>){
            <span class="color-gray">/* Une fonction de callback */</span>
        },{ <span class="color-gray">/* Des options */</span> })
    </code>
</pre>
<p>
    Maintenant, il s'agirait d'observer quelque chose. Nous allons utiliser la méthode "<strong>observe</strong>"
    de notre IntersectionObserver <span class="bold">sur un élément du DOM</span>. En l'occurence, le cadre de verdure 
    qui contient notre 
    magnifique gibbon : 
</p>
<pre>
    <code>
        var cadre = document.querySelector(".cadre-gibbon")

        <span class="color-red">observer</span>.<span class="span color-blue">observe</span>(cadre)
    </code>
</pre>
<p> 
    Nous allons ajouter un peu de code dans le <span class="bold">callback de notre observer</span>, afin de comprendre un peu 
    mieux ce qu'il se passe :
</p>
<pre>
    <code>
        var <span class="color-red">observer</span> = new <span class="color-green">IntersectionObserver</span>(function(<span class="color-blue">entries</span>){
            <span class="color-blue">entries</span>.forEach(function(<span class="color-cyan">entry</span>){
                if(<span class="color-cyan">entry</span>.isIntersecting){
                    var <span class="color-orange">elmt</span> = <span class="color-cyan">entry</span>.target
                    console.log(<span class="color-orange">elmt</span>)
                }
            })
        },{
            <span class="color-gray">/* Des options */</span>
        })
    </code>
</pre>
<p> Pas de panique, procédons étape par étape : </p>
<ul>
    <li> 
        Les <span class="bold">entries</span> correspondent aux événements que l'on observe avec la méthode observe. Je parle bien d'<strong>événements</strong>, 
        pas d'éléments du DOM, c'est important pour la suite. Dans le cas présent, nous n'avons qu'une entrée.
        En bon français, nous observons l'événement d'<span class="bold">intersection entre le cadre</span> 
        qui contient le gibbon et la <span class="bold">zone d'affichage de l'écran</span>.
    </li>
    <li> 
        <span class="bold">forEach</span> permet de boucler sur toutes les entrées. En l'occurence, nous n'en avons qu'une, mais 
        nous pourrions en rajouter.
    </li>
    <li>
        La propriété <strong>isIntersecting</strong> d'une entry permet de savoir quand l'élément du DOM se trouve dans la 
        partie visible de l'écran. Lorsque c'est le cas, on veut déclencher un petit script.
    </li>
    <li> 
        Comme on travaille sur un événement, nous avons besoin de la propriété <strong>target</strong> pour cibler l'élément
        du DOM auquel il se rapporte. Ensuite, on affiche l'élément dans la console, pour s'assurer que tout fonctionne bien.
    </li>
    <li> 
        Dorénavant, à chaque fois que le cadre boisé entrera dans le domaine visible de la fenêtre de navigateur,
        il y aura un log dans la console.
    </li>
</ul>
<p> 
    Maintenant que vous avez compris, on peut rajouter quelques lignes de code pour <span class="bold">déclencher notre 
    animation.</span>
</p>
<pre>
    <code>
        var <span class="color-red">observer</span> = new <span class="color-green">IntersectionObserver</span>(function(<span class="color-blue">entries</span>){
            <span class="color-blue">entries</span>.forEach(function(<span class="color-cyan">entry</span>){
                if(<span class="color-cyan">entry</span>.isIntersecting){
                    var <span class="color-orange">elmt</span> = <span class="color-cyan">entry</span>.target
                    <span class="color-orange">elmt</span>.classList.add("<span class="color-green bold">play-animation</span>")
                    <span class="color-red">observer</span>.<span class="span color-blue">unobserve</span>(<span class="color-orange">elmt</span>)
                }
            })
        },{
            <span class="color-gray">/* Des options */</span>
        })
    </code>
</pre>
<p>
    Ainsi, le gibbon prend son envol gracieux dès que le cadre apparaît à l'écran. Une fois l'animation accomplie, plus besoin d'observer,
    d'où la méthode <strong>unobserve</strong>. 
</p>
<p> 
    Dernier détail : vous aurez remarqué que notre animation se joue <span class="bold">au premier pixel</span> qui entre dans le viewport. 
    C'est plutôt embêtant, car votre utilisateur va <span class="bold">manquer le début de l'animation</span>, voir totalement 
    <span class="bold">passer à côté.</span>
    Heureusement, nous pouvons ajouter des <strong>paramètres</strong> à notre IntersectionOberver pour remédier à ce problème. 
</p>
<pre>
    <code>
        var <span class="color-red">observer</span> = new <span class="color-green">IntersectionObserver</span>(function(<span class="color-blue">entries</span>){
            <span class="color-blue">entries</span>.forEach(function(<span class="color-cyan">entry</span>){
                if(<span class="color-cyan">entry</span>.isIntersecting){
                    var <span class="color-orange">elmt</span> = <span class="color-cyan">entry</span>.target
                    <span class="color-orange">elmt</span>.classList.add("<span class="color-green bold">play-animation</span>")
                    <span class="color-red">observer</span>.<span class="span color-blue">unobserve</span>(<span class="color-orange">elmt</span>)
                }
            })
        },{
            <span class="color-blue">threshold:</span><span class="color-orange">0.8</span>
        })
    </code>
</pre>
<p>
    Le paramètre <strong>threshold</strong> est particulièrement pratique. 
    Il permet de définir à partir de quelle <span class="bold">proportion visible dans le viewport</span> l'élément sera considéré comme 
    <span class="bold">"isIntersecting"</span>. En l'espèce, notre gibbon démarrera ses acrobaties une fois 80% du cadre visible.
</p>
<h2>Conclusion</h2>
<p>
    Ça y est, vous avez les bases pour <span class="bold">créer et déclencher</span> des animations stylées. N'hésitez pas à en ajouter 
    sur vos sites webs
    pour les rendre plus vivants. Consultez les différentes <span class="bold">documentations disponible en ligne</span> pour avoir 
    plus de précision
    sur les propriétés CSS animation que je n'ai pas abordées !
</p> 

<?php $content = ob_get_clean() ?>