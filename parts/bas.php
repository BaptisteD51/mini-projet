<?php 
$menuCSS = [
    [
        "file" => "bauhaus",
        "titre" => "Bauhaus"
    ],[
        "file" => "psyche",
        "titre" => "Psychédélique"
    ],[
        "file" => "print",
        "titre" => "Impression"
    ],
];
?>

<footer>
    <?php echoCSS($menuCSS, $url, $page);?>
</footer>