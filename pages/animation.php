<?php
$titre = "Les animations en CSS";
$pageStyle = "animations.css";
$pageScript = "animations.js";
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
        C'est la seule valeur vraiment <span class="bold">obligatoire</span> pour que l'animation fonctionne.
        L'animation mettra une seconde à s'effectuer
    </li>
    <li>
        <strong>ease-in-out :</strong> correspond à animation-timing-function. Ce qui en terme moins barbare,
        défini la manière dont l'animation va progresser entre chaque étape. Ease-in-out permet de donner un petit
        <span class="bold">effet d'amorti</span>. Mais il y a d'autres possibilités, linear, par exemple, si on ne veut pas d'effet
        <span class="bold">d'accélération</span> et de <span class="bold">décélération</span>.
    </li>
    <li>
        <strong>alternate :</strong> correspond à animation-direction. La propriété alternate permet de
        faire en sorte que l'animation se joue dans les deux sens. En clair, une fois 
        arrivée à 100%, l'animation va s'effectuer en sens inverse pour revenir à son point de 
        départ, ici 0%.
    </li>
    <li>
        <strong>infinite :</strong> C'est l'astuce de la présente animation. Comme son nom 
        l'indique, cette propriété qui correspond au short-hand animation-iteration-count,
        permet de faire en sorte que l'animation <strong>se joue à l'infini</strong>. Il est également possible
        de spécifier un <span class="bold">nombre de fois</span> défini. 
    </li>
</ul>

<h2> Les animations déclenchées en Javascript </h2>
<p>
    Alors voilà, pour ce genre d'animation qui se joue en boucle, faire uniquement du css se révèle suffisant
    Mais vous remarquerez vite que les animations se déclenchent au chargement du DOM. C'est pas super pratique
    si vous voulez jouer une animation ponctuelle au milieu de la page par exemple. Avec du CSS 
    uniquement, l'animation ce sera déclenchée bien avant que l'utilisateur puisse la voire. 
</p>
<p> 
    Pour résoudre ce problème, nous allons devoir utiliser du javascript, qui pourra appliquer les 
    règles css en fonction des événements sur la page. Ainsi il est tout à fait possible de jouer une 
    animation en cliquant sur un bouton par exemple.
</p>
<p> 
    Mais pour quelque chose de plus immerssif, je vous propose de découvrir l'<strong>IntersectionOberver</strong>
    en javascript. Il va nous permettre de déclencher nos animations quand elles seront visibles par 
    l'utilisateur.
</p>
<div class='cadre-gibbon'>
    <div class="branche-gibbon">
        <img src="Images/gibbon-animation.png" alt="Gibbon sur liane">
    </div>
</div>
<p> Voici le KeyFrame que j'ai utilisé, vous devriez avoir l'habitude maintenant :</p>
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
    Cependant, je n'ai pas envie que cette animation démarre avec le chargement du DOM, c'est pourquoi elle 
    ne sera appelée uniquement quand une class "play-animation" sera ajoutée.
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
    On l'ajoutera au div parent, celui avec la jungle en background-image, avec du javascript. 
</p>
<p>
    Pour cela nous avons besoin de l'objet javascript <strong>IntersectionOberver</strong>,
    commençons dejà par l'instancier dans notre script : 
</p>
<pre>
    <code>
        var <span class="color-red">observer</span> = new <span class="color-green">IntersectionObserver</span>(function(<span class="color-blue">entries</span>){
            <span class="color-gray">/* Une fonction de callback */</span>
        },{ <span class="color-gray">/* Des options */</span> })
    </code>
</pre>
<p>
    Maintenant, il s'agirai d'observer un élement de notre DOM. Il faut utiliser la méthode "<strong>observe</strong>"
    de notre IntersectionObserver. On va choisir d'observer le cadre qui contient notre 
    magnifique gibbon : 
</p>
<pre>
    <code>
        var cadre = document.querySelector(".cadre-gibbon")

        <span class="color-red">observer</span>.<span class="span color-blue">observe</span>(cadre)
    </code>
</pre>
<p> 
    Nous allons ajouter un peu de code dans le callback de notre observer. Afin de comprendre un peu 
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
<p> Procédons étapes par étapes : </p>
<ul>
    <li> 
        Les entries, ce sont les événements que l'on observe avec la méthode observe. Je parle bien d'événements, 
        pas d'elements du DOM. Dans notre cas présent, nous n'avons qu'une entrée. Pour parler français,
        nous observons l'événement d'intersection entre le cadre qui contient le gibbon et la partie visible
        de l'écran.
    </li>
    <li> 
        forEach permet de boucler sur toutes les entrées. En l'occurence, nous n'en avons qu'une, mais 
        nous pourrions en rajouter
    </li>
    <li>
        La propriété isIntersecting d'une entry permet de savoir quand l'élément du DOM est dans la 
        partie visible de l'écran. Lorsque c'est le cas, on veut déclancher un petit script 
    </li>
    <li> 
        Comme on travaille sur un événement, on a besoin de la propriété target pour cibler l'élément
        du DOM auquel il se rapporte. Ensuite on affiche l'élément dans la console. 
    </li>
    <li> 
        Dorénavant, à chaque fois que vous le cadre entrera dans le domaine visible de la fenêtre,
        il y aura une entrée dans la console.
    </li>
</ul>
<p> 
    Une fois cela à peu prêt compris, on peu rajouter quelques lignes de code pour déclencher notre 
    animation.
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
    Ainsi, le gibbon prendre son envol gracieux dès que le cadre sera visible. Un fois cela accomplie, plus besoin d'observer notre cadre,
    d'ou la méthode unobserve. 
</p>
<p> 
    Dernier détail : vous aurez certainement remarqué que votre animation se joue dès qu'un pixel du cadre entre dans la zone 
    d'affichage. Ca peut-être embêtant, car votre utilisateur va manquer le début de l'animation, voir totalement passer à côté.
    Heureusement, vous pouvez ajouter des options pour remédier à ce problème à votre IntersectionOberver. 
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
    L'option threshold est particulièrement pratique. 
    Elle permet de définir à partit de quel pourcentage de l'élément visible dans le viewport l'élément sera considéré comme 
    "isIntersecting". En l'espèce, mon gibbon démarera ses acrobaties une fois 80% du cadre visible.
</p>
<h2>Conclusion</h2>
<p>
    Ca y est, vous avez les bases pour créer et déclencher des animations stylées. N'hésitez pas à en ajouter sur vos sites webs
    pour les rendre plus vivants. N'hésitez pas à consulter la documentation disponible en ligne pour avoir plus de précision
    sur les propriétés CSS que je n'ai pas abordées !
</p> 

<?php $content = ob_get_clean() ?>