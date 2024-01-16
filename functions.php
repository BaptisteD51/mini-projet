<?php

function echoPages($pages, $url, $css){
    echo "<nav>";
    foreach($pages as $page){
        echo "<p><a href=". $url . "?page=" . $page["page"] . "&css=". $css . ">" . $page["titre"] . "</a></p>";
    }
    echo "</nav>";
}

function echoCSS($cssList, $url, $page){
    echo "<nav>";
    foreach($cssList as $css){
        echo "<p><a href=". $url . "?page=" . $page . "&css=". $css["file"] . ">" . $css["titre"] . "</a></p>";
    }
    echo "</nav>";
}