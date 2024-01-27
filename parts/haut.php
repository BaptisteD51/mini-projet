<?php
$menu = [
    [
        "page" => "homepage",
        "titre" => "Accueil"
    ],[
        "page" => "animation",
        "titre" => "Animations"
    ],[
        "page" => "transformation",
        "titre" => "Transformation"
    ],[
        "page" => "tableau",
        "titre" => "Liens utiles"
    ],
];
?>

<header>
    <div class="site-info">
        <p class="site-logo"><img src="Images/logo-couleur.svg"></p>
        <p class="site-title">Site de Baptiste et Esté : <?php echo $titre; ?></p>
    </div>
    <?php echoPages($menu, $url, $css); ?>
</header>