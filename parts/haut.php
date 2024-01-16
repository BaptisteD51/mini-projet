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
    <p class="site-title">Site de Baptiste et Esté: <?php echo $titre; ?></p>
    <?php echoPages($menu, $url, $css); ?>
</header>